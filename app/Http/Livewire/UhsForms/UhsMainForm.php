<?php

namespace App\Http\Livewire\UhsForms;

use Livewire\Component;

class UhsMainForm extends Component
{
    public $step = 1;

    public $step1Active = true;
    public $step1Completed = false;

    public $step2Active = false;
    public $step2Completed = false;

    public $step3Active = false;
    public $step3Completed = false;

    public $step4Active = false;
    public $step4Completed = false;

    public $step5Active = false;
    public $step5Completed = false;

    public $step6Active = false;
    public $step6Completed = false;

    /**
     * @return string[]
     */
    protected function getListeners(): array
    {
        return [
            'goToStep',
            'completeStep',
        ];
    }

    /**
     * @param $step
     * @return void
     */
    public function goToStep($step): void
    {
        if ($step == 1) {
            $this->setStepOne();
        } elseif ($step == 2) {
            $this->setStepTwo();
        } elseif ($step == 3) {
            $this->setStepThree();
        } elseif ($step == 4) {
            $this->setStepFour();
        } elseif ($step == 5) {
            $this->setStepFive();
        } elseif ($step == 6) {
            $this->setStepSix();
        }

        $this->step = $step;
    }

    /**
     * @param $step
     * @return void
     */
    public function completeStep($step): void
    {
        $this->$step = true;
    }

    public function mount()
    {
        $user = auth()->user();

        if ($user->submitted_at && isset($user->otps->is_verified) && $user->otps->is_verified == 1) {
            $this->completeStep('step1Completed');
        } else {
            if ($user->program_priority) {
                $this->completeStep('step1Completed');
                $this->goToStep(2);
            }

            if ($user->personalDetails) {
                $this->completeStep('step2Completed');
                $this->goToStep(3);
            }

            if ($user->qualifications) {
                $this->completeStep('step3Completed');
                $this->goToStep(4);
            }

            if (! blank($user->mbbsCollegePreferences) || ! blank($user->bdsCollegePreferences)) {
                $this->completeStep('step4Completed');
                $this->goToStep(5);
            }

            if ($user->userCnic) {
                $this->completeStep('step5Completed');
                $this->goToStep(6);
            }
        }
    }

    private function setStepOne(): void
    {
        $this->step1Active = true;
        $this->step2Active = false;
        $this->step3Active = false;
        $this->step4Active = false;
        $this->step5Active = false;
        $this->step6Active = false;
    }

    private function setStepTwo(): void
    {
        $this->step1Active = false;
        $this->step2Active = true;
        $this->step3Active = false;
        $this->step4Active = false;
        $this->step5Active = false;
        $this->step6Active = false;
    }

    private function setStepThree(): void
    {
        $this->step1Active = false;
        $this->step2Active = false;
        $this->step3Active = true;
        $this->step4Active = false;
        $this->step5Active = false;
        $this->step6Active = false;
    }

    private function setStepFour()
    {
        $this->step1Active = false;
        $this->step2Active = false;
        $this->step3Active = false;
        $this->step4Active = true;
        $this->step5Active = false;
        $this->step6Active = false;
    }

    private function setStepFive()
    {
        $this->step1Active = false;
        $this->step2Active = false;
        $this->step3Active = false;
        $this->step4Active = false;
        $this->step5Active = true;
        $this->step6Active = false;
    }

    private function setStepSix()
    {
        $this->step1Active = false;
        $this->step2Active = false;
        $this->step3Active = false;
        $this->step4Active = false;
        $this->step5Active = false;
        $this->step6Active = true;
    }

    public function render()
    {
        return view('livewire.uhs-forms.uhs-main-form')
            ->extends('layouts.uhs-form')
            ->section('content');
    }
}
