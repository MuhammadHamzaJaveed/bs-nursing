<?php

namespace App\Http\Livewire\UhsForms\Steps;

use App\Services\UserServices\UserServices;
use Livewire\Component;

class CollegesList extends Component
{
    protected $userServices;

    public  $selectedMbbsList = [];

    public $selectedMbbsListForeignerAsOpenMerit = [];

    public $selectedBdsListForeignerAsOpenMerit = [];

    public $selectedBdsList = [];

    public $mbbsTabSelected = true;

    public $message;

    public $agreed;

    /**
     * @return array
     */
    protected function rules(): array
    {
        $user = auth()->user();
        $rules = [
            'selectedMbbsList'    => 'required_without:selectedBdsList|array',
            'selectedBdsList'    => 'required_without:selectedMbbsList|array',
            'agreed'             => 'required | accepted',
        ];
        if (boolval($user->foreigner) && boolval($user->is_open_merit))
        {
            $rules += [
                'selectedMbbsListForeignerAsOpenMerit'
                => 'required_with:selectedMBBSList|required_without:selectedBdsList,selectedBdsListForeignerAsOpenMerit|array',

                'selectedBdsListForeignerAsOpenMerit'
                => 'required_with:selectedBdsList|required_without:selectedMbbsList,selectedMbbsListForeignerAsOpenMerit|array',
            ];
        }

        return $rules;

//        return [
//            'selectedMbbsList'    => 'required_without:selectedBdsList|array',
//            'selectedBdsList'    => 'required_without:selectedMbbsList|array',
//            /*'selectedMbbsList'    => 'required_without:selectedBdsList|array|min:7',
//            'selectedBdsList'    => 'required_without:selectedMbbsList|array|min:5',*/
//            'agreed'             => 'required | accepted',
//        ];

    }

    public function boot(UserServices $userServices)
    {
        $this->userServices = $userServices;
    }

    public function mount()
    {
        $user = auth()->user();
        /*if (boolval($user->foreigner) && !boolval($user->is_open_merit))
        {
                $user->mbbsCollegePreferences->first()?->delete();
                $user->mbbsCollegeForeignerAsOpenMeritPreferences->first()?->delete();
        }*/
        $mbbsCollegePreferences = $user->mbbsCollegePreferences->pluck('college_pref')->toArray();
        $mbbsCollegeForeignerAsOpenMeritPreferences = $user->mbbsCollegeForeignerAsOpenMeritPreferences->pluck('college_pref')->toArray();
        $bdsCollegeForeignerAsOpenMeritPreferences = $user->bdsCollegeForeignerAsOpenMeritPreferences->pluck('college_pref')->toArray();
        $bdsCollegePreferences = $user->bdsCollegePreferences->pluck('college_pref')->toArray();

        if ($mbbsCollegePreferences) {
            $data = json_decode($mbbsCollegePreferences[0],true);

            foreach($data as $college){
                $this->selectedMbbsList[] = (string)$college['name'];
            }
        }

        if ($mbbsCollegeForeignerAsOpenMeritPreferences) {
            $data = json_decode($mbbsCollegeForeignerAsOpenMeritPreferences[0],true);

            foreach($data as $college){
                $this->selectedMbbsListForeignerAsOpenMerit[] = (string)$college['name'];
            }
        }


        if ($bdsCollegePreferences) {
            $data = json_decode($bdsCollegePreferences[0],true);

            foreach($data as $college){
                $this->selectedBdsList[] = (string)$college['name'];
            }
        }

        if ($bdsCollegeForeignerAsOpenMeritPreferences) {
            $data = json_decode($bdsCollegeForeignerAsOpenMeritPreferences[0],true);

            foreach($data as $college){
                $this->selectedBdsListForeignerAsOpenMerit[] = (string)$college['name'];
            }
        }

    }
    protected $messages = [
        'selectedMbbsList.min' => "You must select at least 7 from the Mbbs List ",
        'selectedBdsList.min' => "You must select at least 5 from the Bds List ",
    ];

    /*public function updatedSelectedMbbsList()
    {

    }*/

    public function resetMbbsListScreen()
    {
        // Reset the selected colleges and any related variables
        $this->selectedMbbsList = [];
    }
    public function resetMbbsListForeignerAsOpenMeritScreen()
    {
        // Reset the selected colleges and any related variables
        $this->selectedMbbsListForeignerAsOpenMerit = [];
    }

    public function resetBdsScreen()
    {
        // Reset the selected colleges and any related variables
        $this->selectedBdsList = [];
    }
    public function resetBdsListForeignerAsOpenMeritScreen()
    {
        // Reset the selected colleges and any related variables
        $this->selectedBdsListForeignerAsOpenMerit = [];
    }
    public function getMbbsCollegesProperty()
    {
        return $this->userServices->getMbbsColleges();
    }

    public function getBdsCollegesProperty()
    {
        return $this->userServices->getBdsColleges();
    }

    public function reorderMbbsList($fromIndex, $toIndex)
    {
        $fromValue = $this->selectedMbbsList[$fromIndex];
        $toValue = $this->selectedMbbsList[$toIndex];


        $this->selectedMbbsList[$fromIndex] = $toValue;
        $this->selectedMbbsList[$toIndex] = $fromValue;
        
    }

    public function reorderMbbsListForeignerAsOpenMerit($fromIndex, $toIndex)
    {
        $fromValue = $this->selectedMbbsListForeignerAsOpenMerit[$fromIndex];
        $toValue = $this->selectedMbbsListForeignerAsOpenMerit[$toIndex];


        $this->selectedMbbsListForeignerAsOpenMerit[$fromIndex] = $toValue;
        $this->selectedMbbsListForeignerAsOpenMerit[$toIndex] = $fromValue;

    }

    public function reorderBdsList($fromIndex, $toIndex)
    {
        $fromValue = $this->selectedBdsList[$fromIndex];
        $toValue = $this->selectedBdsList[$toIndex];

        $this->selectedBdsList[$fromIndex] = $toValue;
        $this->selectedBdsList[$toIndex] = $fromValue;
    }

    public function reorderBdsListForeignerAsOpenMerit($fromIndex, $toIndex)
    {
        $fromValue = $this->selectedBdsListForeignerAsOpenMerit[$fromIndex];
        $toValue = $this->selectedBdsListForeignerAsOpenMerit[$toIndex];


        $this->selectedBdsListForeignerAsOpenMerit[$fromIndex] = $toValue;
        $this->selectedBdsListForeignerAsOpenMerit[$toIndex] = $fromValue;

    }

    private function calculateAggregate()
    {
        $qualifications = auth()->user()->qualifications;
        $admissionTest = auth()->user()->admissionTest;

        $sscObtainedMarks = $qualifications->ssc_marks_obtained;
        $hsscObtainedMarks = $qualifications->hssc_marks_obtained;

        $mdCatObtainedMarks = $admissionTest->md_cat_obtained_marks;

        $programId = auth()->user()->program_id;

        if (
            ($sscObtainedMarks && $hsscObtainedMarks) &&
            ($mdCatObtainedMarks)
        ) {
            $averageTotal = 1100;

            $ssc =  $sscObtainedMarks / $qualifications->ssc_total_marks * $averageTotal * 0.10;
            if($qualifications?->hssc_passing_year && $qualifications->hssc_passing_year == '2021'){
                $hssc = $hsscObtainedMarks / $qualifications->hssc_total_marks * $averageTotal * 0.40;
            } else {
                $hssc = $hsscObtainedMarks / $qualifications->hssc_total_marks * $averageTotal * 0.40;
            }

            $aggregation = [];

            $mdCatPercentile = $mdCatObtainedMarks / 200 * 100;

            if ((
                    ($programId == 1 || $programId == 3) && $mdCatPercentile > 55) ||
                ($programId == 2 && $mdCatPercentile > 45)
            ) {
                if ($mdCatObtainedMarks) {
                    $mdCat = $mdCatObtainedMarks / 200 * $averageTotal * 0.50;

                    $aggregation['mdCat'] = ($ssc + $hssc + $mdCat) / $averageTotal * 100;
                }
            } else {
                $aggregation['mdCat'] = 0;
            }

            $maxAggregate = max($aggregation);


            return $maxAggregate;
        } else {
            return 0;
        }
    }


    private function calculateOverseasAggregate()
    {


        $qualifications = auth()->user()->qualifications;
        $admissionTest = auth()->user()->admissionTest;

        $sscObtainedMarks = $qualifications->ssc_marks_obtained;
        $hsscObtainedMarks = $qualifications->hssc_marks_obtained;

        $mCatObtainedMarks = $admissionTest->mcat_obtained_marks;
        $mdCatObtainedMarks = $admissionTest->md_cat_obtained_marks;
        $uCatObtainedMarks = $admissionTest->ucat_obtained_marks;
        $satObtainedMarks = ($admissionTest->sat_biology_obtained_marks * 0.40) +
            ($admissionTest->sat_chemistry_obtained_marks * 0.35) +
            ($admissionTest->sat_phy_math_obtained_marks * 0.25);

        $programId = auth()->user()->program_id;

        if (
            ($sscObtainedMarks && $hsscObtainedMarks) &&
            ($mdCatObtainedMarks || $uCatObtainedMarks || $satObtainedMarks || $mCatObtainedMarks)
        ) {
            $averageTotal = 1100;

            $ssc =  $sscObtainedMarks / $qualifications->ssc_total_marks * $averageTotal * 0.10;
            if($qualifications?->hssc_passing_year && $qualifications->hssc_passing_year == '2021'){
                $hssc = $hsscObtainedMarks / $qualifications->hssc_total_marks * $averageTotal * 0.40;
            } else {
                $hssc = $hsscObtainedMarks / $qualifications->hssc_total_marks * $averageTotal * 0.40;
            }

            $aggregation = [];

            $mdCatPercentile = $mdCatObtainedMarks / 200 * 100;

            if ((
                    ($programId == 1 || $programId == 3) && $mdCatPercentile >= 55) ||
                ($programId == 2 && $mdCatPercentile >= 50))
            {
                if ($mdCatObtainedMarks) {
                    $mdCat = $mdCatObtainedMarks / 200 * $averageTotal * 0.50;

                    $aggregation['mdCat'] = ($ssc + $hssc + $mdCat) / $averageTotal * 100 ;
                }
            } else {
                $aggregation['mdCat'] = 0;
            }

            if ($uCatObtainedMarks) {
                $uCat = $uCatObtainedMarks / 3600 * $averageTotal * 0.50;

                $aggregation['uCat'] = ($ssc + $hssc + $uCat) / $averageTotal * 100 ;
            }

            if ($satObtainedMarks) {
                $sat2 = $satObtainedMarks / 800 * $averageTotal * 0.50;

                $aggregation['sat2'] = ($ssc + $hssc + $sat2) / $averageTotal * 100 ;
            }

            if ($mCatObtainedMarks) {
                $mCat = $mCatObtainedMarks / 528 * $averageTotal * 0.50;

                $aggregation['mCat'] = ($ssc + $hssc + $mCat) / $averageTotal * 100;
            }

            $maxAggregate = max($aggregation);


            return $maxAggregate;
        } else {
            return 0;
        }
    }


    public function submit()
    {
        $this->saveMbbsList();
        $this->saveMbbsListForeignAsOpenMerit();
        $this->saveBdsList();
        $this->saveBdsListForeignAsOpenMerit();

            // $this->userServices->updateUser([
            //     'aggregate' => $this->calculateAggregate(),
            //     'aggregate_overseas' => $this->calculateOverseasAggregate(),

            // ], auth()->user()->id);

        $this->emit('completeStep', 'step5Completed');
        $this->emit('goToStep', 6);
    }

    private function saveMbbsList(){

        $this->validateOnly('selectedMbbsList');
        if(! empty($this->selectedMbbsList))
        {
            foreach($this->selectedMbbsList as $key => $college){
                $data[] = ['id' => $key + 1, 'name' => $college];
            }

            $this->userServices->updateOrCreateCollegePreference([
                'id' => ! blank(auth()->user()->mbbsCollegePreferences) ? auth()->user()->mbbsCollegePreferences[0]->id : null
            ],
                [
                'college_pref' => json_encode($data),
                'user_id' => auth()->user()->id,
                'is_mbbs' => true,
                'is_foreigner' => boolval(auth()->user()->foreigner),
            ]);
        }
    }

    private function saveMbbsListForeignAsOpenMerit(){


        $this->validateOnly('selectedMbbsListForeignerAsOpenMerit');
        if(! empty($this->selectedMbbsListForeignerAsOpenMerit))
        {
            foreach($this->selectedMbbsListForeignerAsOpenMerit as $key => $college){
                $data[] = ['id' => $key + 1, 'name' => $college];
            }

            $this->userServices->updateOrCreateCollegePreference([
                'id' => ! blank(auth()->user()->mbbsCollegeForeignerAsOpenMeritPreferences) ? auth()->user()->mbbsCollegeForeignerAsOpenMeritPreferences[0]->id : null
            ],
                [
                    'college_pref' => json_encode($data),
                    'user_id' => auth()->user()->id,
                    'is_mbbs' => true,
                    'is_open_merit_seat' => boolval(auth()->user()->is_open_merit),
                    'is_foreigner' => boolval(auth()->user()->foreigner),
                ]);
        }
    }

    private function saveBdsList(){
        $this->validateOnly('selectedBdsList');
        if(! empty($this->selectedBdsList))
        {
            foreach($this->selectedBdsList as $key => $college){
                $data[] = ['id' => $key + 1, 'name' => $college];
            }

            $this->userServices->updateOrCreateCollegePreference([
                'id' => ! blank(auth()->user()->bdsCollegePreferences) ? auth()->user()->bdsCollegePreferences[0]->id : null
            ],
                [
                    'college_pref' => json_encode($data),
                    'user_id' => auth()->user()->id,
                    'is_foreigner' => boolval(auth()->user()->foreigner),
                ]);
        }
    }

    private function saveBdsListForeignAsOpenMerit(){


        $this->validateOnly('selectedBdsListForeignerAsOpenMerit');
        if(! empty($this->selectedBdsListForeignerAsOpenMerit))
        {
            foreach($this->selectedBdsListForeignerAsOpenMerit as $key => $college){
                $data[] = ['id' => $key + 1, 'name' => $college];
            }

            $this->userServices->updateOrCreateCollegePreference([
                'id' => ! blank(auth()->user()->bdsCollegeForeignerAsOpenMeritPreferences) ? auth()->user()->bdsCollegeForeignerAsOpenMeritPreferences[0]->id : null
            ],
                [
                    'college_pref' => json_encode($data),
                    'user_id' => auth()->user()->id,
                    'is_open_merit_seat' => boolval(auth()->user()->is_open_merit),
                    'is_foreigner' => boolval(auth()->user()->foreigner),
                ]);
        }
    }

    public function removeMbbsCollege($index){
        if (isset($this->selectedMbbsList[$index])) {
            unset($this->selectedMbbsList[$index]);
        }
        $this->selectedMbbsList = array_values($this->selectedMbbsList);
        $this->emit('refresh');
    }

    public function removeMbbsForeignerAsOpenMeritCollege($index){
        if (isset($this->selectedMbbsListForeignerAsOpenMerit[$index])) {
            unset($this->selectedMbbsListForeignerAsOpenMerit[$index]);
        }
        $this->selectedMbbsListForeignerAsOpenMerit = array_values($this->selectedMbbsListForeignerAsOpenMerit);
        $this->emit('refresh');
    }

    public function removeBdsCollege($index){
        if (isset($this->selectedBdsList[$index])) {
            unset($this->selectedBdsList[$index]);
        }
        $this->selectedBdsList = array_values($this->selectedBdsList);
        $this->emit('refresh');
    }

    public function removeBdsForeignerAsOpenMeritCollege($index){
        if (isset($this->selectedBdsListForeignerAsOpenMerit[$index])) {
            unset($this->selectedBdsListForeignerAsOpenMerit[$index]);
        }
        $this->selectedBdsListForeignerAsOpenMerit = array_values($this->selectedBdsListForeignerAsOpenMerit);
        $this->emit('refresh');
    }

    public function render()
    {
        return view('livewire.uhs-forms.steps.colleges-list');
    }
}
