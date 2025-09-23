<?php

namespace Database\Seeders;

use App\Models\College;
use Illuminate\Database\Seeder;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->colleges() as $key => $collegeData) {
            $college = new College();
            $college->id = $key + 1;
            $college->name = $collegeData['name'];
            $college->district = $collegeData['district']; // Set district data
            $college->openMeritSeats = $collegeData['openMeritSeats'];
            $college->overSeasSeats = $collegeData['overSeasSeats'];
            $college->disabilitySeats = $collegeData['disabilitySeats'];
            $college->cholistanSeats = $collegeData['cholistanSeats'];
            $college->isReciprocal = $collegeData['isReciprocal'];
            $college->isBds = $collegeData['isBds'];
            $college->isFemale = $collegeData['isFemale'];
            $college->underdevelopedAreas = $collegeData['underdevelopedAreas'];
            $college->save();
        }
    }

    /**
     * @return string[]
     */

    public function colleges(): array
    {
        return
            [
              
                
                //Dental colleges
                [
                    'name' => "Islam Dental College, Sialkot",
                    'district' => " Sialkot",
                    'openMeritSeats' => 50,
                    'overSeasSeats' => 0,
                    'underdevelopedAreas' => 0,
                    'disabilitySeats' => 0,
                    'cholistanSeats' => 0,
                    'isReciprocal' => 0,
                    'isBds' => 1,
                    'isFemale' => 0,
                ],

                [
                    'name' => "Avicenna Dental College, Lahore",
                    'district' => " Lahore",
                    'openMeritSeats' => 50,
                    'overSeasSeats' => 0,
                    'underdevelopedAreas' => 0,
                    'disabilitySeats' => 0,
                    'cholistanSeats' => 0,
                    'isReciprocal' => 0,
                    'isBds' => 1,
                    'isFemale' => 0,
                ],
                
                [
                    'name' => "Watim Dental College, Rawalpindi",
                    'district' => "Rawalpindi",
                    'openMeritSeats' => 50,
                    'overSeasSeats' => 0,
                    'underdevelopedAreas' => 0,
                    'disabilitySeats' => 0,
                    'cholistanSeats' => 0,
                    'isReciprocal' => 0,
                    'isBds' => 1,
                    'isFemale' => 0,
                ],
                [
                    'name' => "Faryal Dental College, Sheikhupura",
                    'district' => " Sheikhupura",
                    'openMeritSeats' => 50,
                    'overSeasSeats' => 0,
                    'underdevelopedAreas' => 0,
                    'disabilitySeats' => 0,
                    'cholistanSeats' => 0,
                    'isReciprocal' => 0,
                    'isBds' => 1,
                    'isFemale' => 0,
                ],

                [
                    'name' => "Dental Section, Multan Medical & Dental College, Multan",
                    'district' => " Multan",
                    'openMeritSeats' => 50,
                    'overSeasSeats' => 0,
                    'underdevelopedAreas' => 0,
                    'disabilitySeats' => 0,
                    'cholistanSeats' => 0,
                    'isReciprocal' => 0,
                    'isBds' => 1,
                    'isFemale' => 0,
                ],
                [
                    'name' => "Dental College, Niazi Medical & Dental College, Sargodha",
                    'district' => " Sargodha",
                    'openMeritSeats' => 50,
                    'overSeasSeats' => 0,
                    'underdevelopedAreas' => 0,
                    'disabilitySeats' => 0,
                    'cholistanSeats' => 0,
                    'isReciprocal' => 0,
                    'isBds' => 1,
                    'isFemale' => 0,
                ],
                [
                    
                    'name' => "Dental Section, FMH College of Medicine & Dentistry, Lahore",
                    'district' => " Lahore",
                    'openMeritSeats' => 75,
                    'overSeasSeats' => 0,
                    'underdevelopedAreas' => 0,
                    'disabilitySeats' => 0,
                    'cholistanSeats' => 0,
                    'isReciprocal' => 0,
                    'isBds' => 1,
                    'isFemale' => 0,
                ],
                [
                    'name' => "Dental Section, University Medical & Dental College, Faisalabad (Female Only)",
                    'district' => " Faisalabad",
                    'openMeritSeats' => 50,
                    'overSeasSeats' => 0,
                    'underdevelopedAreas' => 0,
                    'disabilitySeats' => 0,
                    'cholistanSeats' => 0,
                    'isReciprocal' => 0,
                    'isBds' => 1,
                    'isFemale' => 1,
                ],
                [
                    'name' => "Dental College, University College of Medicine & Dentistry, Lahore",
                    'district' => " Lahore",
                    'openMeritSeats' => 75,
                    'overSeasSeats' => 0,
                    'underdevelopedAreas' => 0,
                    'disabilitySeats' => 0,
                    'cholistanSeats' => 0,
                    'isReciprocal' => 0,
                    'isBds' => 1,
                    'isFemale' => 0,
                ],
                [
                    'name' => "Dental Section, Lahore Medical & Dental College, Lahore",
                    'district' => " Lahore",
                    'openMeritSeats' => 75,
                    'overSeasSeats' => 0,
                    'underdevelopedAreas' => 0,
                    'disabilitySeats' => 0,
                    'cholistanSeats' => 0,
                    'isReciprocal' => 0,
                    'isBds' => 1,
                    'isFemale' => 0,
                ],
                [
                    'name' => "Dental Section, Akhtar Saeed Medical & Dental College, Lahore",
                    'district' => " Lahore",
                    'openMeritSeats' => 50,
                    'overSeasSeats' => 0,
                    'underdevelopedAreas' => 0,
                    'disabilitySeats' => 0,
                    'cholistanSeats' => 0,
                    'isReciprocal' => 0,
                    'isBds' => 1,
                    'isFemale' => 0,
                ],
                [
                    'name' => "Rashid Latif Dental College, Lahore",
                    'district' => " Lahore",
                    'openMeritSeats' => 75,
                    'overSeasSeats' => 0,
                    'underdevelopedAreas' => 0,
                    'disabilitySeats' => 0,
                    'cholistanSeats' => 0,
                    'isReciprocal' => 0,
                    'isBds' => 1,
                    'isFemale' => 0,
                ],
                [
                    'name' => "Margalla Institute of Health Sciences, Rawalpindi ",
                    'district' => "Rawalpindi",
                    'openMeritSeats' => 75,
                    'overSeasSeats' => 0,
                    'underdevelopedAreas' => 0,
                    'disabilitySeats' => 0,
                    'cholistanSeats' => 0,
                    'isReciprocal' => 0,
                    'isBds' => 1,
                    'isFemale' => 0,
                ],
                [
                    'name' => "Dental College, Bakhtawar Amin Medical & Dental College, Multan",
                    'district' => " Multan",
                    'openMeritSeats' => 75,
                    'overSeasSeats' => 0,
                    'underdevelopedAreas' => 0,
                    'disabilitySeats' => 0,
                    'cholistanSeats' => 0,
                    'isReciprocal' => 0,
                    'isBds' => 1,
                    'isFemale' => 0,
                ],
                
                [
                    'name' => "Azra Naheed Dental College, Lahore",
                    'district' => " Lahore",
                    'openMeritSeats' => 50,
                    'overSeasSeats' => 0,
                    'underdevelopedAreas' => 0,
                    'disabilitySeats' => 0,
                    'cholistanSeats' => 0,
                    'isReciprocal' => 0,
                    'isBds' => 1,
                    'isFemale' => 0,
                ],
                [
                    'name' => "Shahida Islam Dental College, Lodhran",
                    'district' => " Lodhran",
                    'openMeritSeats' => 75,
                    'overSeasSeats' => 0,
                    'underdevelopedAreas' => 0,
                    'disabilitySeats' => 0,
                    'cholistanSeats' => 0,
                    'isReciprocal' => 0,
                    'isBds' => 1,
                    'isFemale' => 0,
                ],
                [
                    'name' => "Dental Section, Sharif Medical & Dental College, Lahore",
                    'district' => " Lahore",
                    'openMeritSeats' => 50,
                    'overSeasSeats' => 0,
                    'underdevelopedAreas' => 0,
                    'disabilitySeats' => 0,
                    'cholistanSeats' => 0,
                    'isReciprocal' => 0,
                    'isBds' => 1,
                    'isFemale' => 0,
                ],
                [
                    'name' => "Rahbar College of Dentistry, Lahore",
                    'district' => " Lahore",
                    'openMeritSeats' => 50,
                    'overSeasSeats' => 0,
                    'underdevelopedAreas' => 0,
                    'disabilitySeats' => 0,
                    'cholistanSeats' => 0,
                    'isReciprocal' => 0,
                    'isBds' => 1,
                    'isFemale' => 0,
                ],



            ];
    }
}
