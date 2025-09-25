<?php

namespace Database\Seeders;

use App\Models\College;
use Illuminate\Database\Seeder;

class CollegeSeeder extends Seeder
{
    public function run()
    {
        foreach ($this->colleges() as $key => $collegeData) {
            $college = new College();
            $college->id = $key + 1;
            $college->name = $collegeData['name'];
            
            // Force sabka district Lahore
            $college->district = 'Lahore';

            // Defaults for seats and flags
            $college->openMeritSeats      = $collegeData['openMeritSeats']      ?? 0;
            $college->overSeasSeats       = $collegeData['overSeasSeats']       ?? 0;
            $college->disabilitySeats     = $collegeData['disabilitySeats']     ?? 0;
            $college->cholistanSeats      = $collegeData['cholistanSeats']      ?? 0;
            $college->underdevelopedAreas = $collegeData['underdevelopedAreas'] ?? 0;

            $college->isReciprocal = $collegeData['isReciprocal'] ?? 0;
            $college->isBds        = $collegeData['isBds'] ?? 0;
            $college->isFemale     = $collegeData['isFemale'] ?? 0;

            $college->save();
        }
    }

    public function colleges(): array
    {
        return [
            ['name' => 'College of Nursing, KEMU/Mayo Hospital, Lahore'],
            ['name' => 'College of Nursing, FJMU/Sir Ganga Ram Hospital, Lahore'],
            ['name' => 'College of Nursing, Ameer-ud-Din Medical College/ Lahore General Hospital, Lahore'],
            ['name' => 'College of Nursing, Allama Iqbal Medical College/ Jinnah Hospital, Lahore'],
            ['name' => 'College of Nursing, RMU / Holy Family Hospital, Rawalpindi'],
            ['name' => 'College of Nursing, Benazir Bhutto Shaheed Hospital, Rawalpindi'],
            ['name' => 'College of Nursing, Allied Hospital, Faisalabad'],
            ['name' => 'College of Nursing, Nishtar Hospital, Multan'],
            ['name' => 'College of Nursing, Bahawalpur Victoria Hospital, Bahawalpur'],
            ['name' => 'College of Nursing, Service Hospital, Lahore'],
            ['name' => 'College of Nursing, UCHS / Children’s Hospital, Lahore'],
            ['name' => 'College of Nursing, Allama Iqbal Memorial Teaching Hospital, Sialkot'],
            ['name' => 'College of Nursing, DHQ Hospital, Dera Ghazi Kahn'],
            ['name' => 'College of Nursing, DHQ Hospital, Muzaffargarh'],
            ['name' => 'College of Nursing, Sheikh Zayed Hospital, Rahim Yar Khan'],
            ['name' => 'College of Nursing, Shahdrah Hospital, Lahore (male candidates only)', 'isFemale' => 0],
            ['name' => 'College of Nursing, DHQ Hospital, Attock'],
            ['name' => 'College of Nursing, DHQ Hospital, Bahawalnagar'],
            ['name' => 'College of Nursing, DHQ Hospital, Bhakkar'],
            ['name' => 'College of Nursing, DHQ Hospital, Chakwal'],
            ['name' => 'College of Nursing, DHQ Hospital, Faisalabad'],
            ['name' => 'College of Nursing, Eye cum General (THQ) Hospital, Gojra'],
            ['name' => 'College of Nursing, DHQ Hospital, Gujranwala'],
            ['name' => 'College of Nursing, Aziz Bhatti Shaheed Teaching Hospital, Gujrat'],
            ['name' => 'College of Nursing, DHQ Hospital, Hafizabad'],
            ['name' => 'College of Nursing, DHQ Hospital, Jhang'],
            ['name' => 'College of Nursing, DHQ Hospital, Jhelum'],
            ['name' => 'College of Nursing, DHQ Hospital, Kasur'],
            ['name' => 'College of Nursing, DHQ Hospital, Khanewal'],
            ['name' => 'College of Nursing, DHQ Hospital, Khushab'],
            ['name' => 'College of Nursing, DHQ Hospital, Layyah'],
            ['name' => 'College of Nursing, DHQ Hospital, Lodhran'],
            ['name' => 'College of Nursing, DHQ Hospital, Mandi Bahaudin'],
            ['name' => 'College of Nursing, DHQ Hospital, Mianwali'],
            ['name' => 'College of Nursing, DHQ Hospital, Narowal'],
            ['name' => 'College of Nursing, DHQ Hospital, Okara'],
            ['name' => 'College of Nursing, DHQ Hospital, Pakpattan'],
            ['name' => 'College of Nursing, DHQ Hospital, Rajanpur'],
            ['name' => 'College of Nursing, DHQ Hospital, Rawalpindi'],
            ['name' => 'College of Nursing, DHQ Hospital, Sahiwal'],
            ['name' => 'College of Nursing, DHQ Hospital, Sargodha'],
            ['name' => 'College of Nursing, DHQ Hospital, Sheikhupura'],
            ['name' => 'College of Nursing, DHQ Hospital, Toba Tek Singh'],
            ['name' => 'College of Nursing, DHQ Hospital, Vehari'],
        ];
    }
}
