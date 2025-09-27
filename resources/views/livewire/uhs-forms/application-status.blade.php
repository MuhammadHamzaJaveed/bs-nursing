<div>
    <div class="mt-7 mb-10 flex flex-col md:flex-row gap-5 justify-between">
        <x-button blue lg style="background-color: #3c1fff" href="{{ route('uhs-form-dashboard') }}">
            <x-heroicon-s-arrow-left class="w-6 text-white h-7" />

            <span class="text-lg font-semibold text-white">Go To Dashboard</span>

        </x-button>
        <x-button blue lg style="background-color: #3c1fff" wire:click="downloadMyApllicationPdf">
            <span class="text-white text-lg font-semibold">Download PDF</span>
            <span wire:loading wire:target="downloadMyApllicationPdf"><x-loader /></span>
        </x-button>

    </div>
    <!-- <div class="grid grid-cols-1 md:grid-cols-2 gap-5"> -->
    @if (auth()->user()->challan_id !== null)
        <div class="mt-7 mb-7 bg-white rounded-lg "
            style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.03);">
            <div class="p-5 md:p-10">
                <div>
                    <div class="flex flex-col justify-center items-center">
                        <label class="text-[#000000] text-lg font-bold">Challan ID: <span
                                class="text-red-600 font-bold">{{ auth()->user()->challan_id }}</span></label>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- @if (auth()->user()->aggregate !== null)
        <div class="mt-7 mb-7 bg-white rounded-lg "
            style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.03);">
            <div class="p-5 md:p-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    @if (auth()->user()->foreigner == 0)
                        <div class="flex flex-col justify-center items-center">
                            <label class="text-[#000000] text-lg font-semibold">Total Aggregate (MDCAT): <span
                                    class="text-red-600 font-bold">{{ auth()->user()->aggregate }}</span></label>
                        </div>
                    @endif
                    @if (auth()->user()->foreigner == 1)
                        <div class="flex flex-col justify-center items-center">
                            <label class="text-[#000000] text-lg font-semibold">Total Aggregate (Overseas
                                Pakistani/Foreigner): <span
                                    class="text-red-600 font-bold">{{ auth()->user()->aggregate_overseas }}</span></label>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endif --}}

    
 <div class="mt-7 mb-7 bg-white rounded-lg"
 style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.03);">
 <div>
     <p class="px-5 md:px-10 py-4 text-2xl font-medium text-[#333333] tracking-[0.29px] font-sans">Program
         Selected</p>
     <hr class="border-t-2 w-full border-[#DAE4EA]">
 </div>
 <div class="p-5 md:p-10">
     @if (auth()->user()->program_id == 1)
         <div
             class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-3 text-xl font-semibold text-black">
             <p class="text-xl font-semibold text-black">MBBS Private</p>
         </div>
     @endif
     @if (auth()->user()->program_id == 2)
         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-3 mt-5">
             <p class="text-xl font-semibold text-black">BDS Private</p>
         </div>
     @endif
     @if (auth()->user()->program_id == 3)
         @if (auth()->user()->program_priority == 2)
             <div class="grid grid-cols-2 lg:grid-cols-3 gap-5 md:gap-3 mt-5">
                 <p class="text-xl font-semibold text-black">1st Priority: BDS</p>
                 <p class="text-xl font-semibold text-black">2nd Priority: MBBS</p>
             </div>
         @endif
         @if (auth()->user()->program_priority == 1)
             <div class="grid grid-cols-2 lg:grid-cols-3 gap-5 md:gap-3 mt-5">
                 <p class="text-xl font-semibold text-black">1st Priority: MBBS</p>
                 <p class="text-xl font-semibold text-black">2nd Priority: BDS</p>
             </div>
         @endif
     @endif

         <p class=" pt-10 pb-5 text-2xl font-medium text-[#333333] tracking-[0.29px] font-sans">
             Apply On Following Quota
             </p>

         <div>
             <ol class="list-decimal ml-12">
                 @if((boolval($foreigner) && boolval(auth()?->user()?->is_open_merit) || boolval(!$foreigner)))
                     <li>Open Merit</li>
                 @endif
                 @if(boolval($foreigner))
                     <li>Overseas</li>
                 @endif

             </ol>
         </div>
     
 </div>

</div>


    {{-- personal details section --}}
    <div class="mt-7 mb-7 bg-white rounded-lg"
        style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.03);">
        <div>
            <p class="px-5 md:px-10 py-4 text-2xl font-medium text-[#333333] tracking-[0.29px] font-sans">Personal
                Information</p>
            <hr class="border-t-2 w-full border-[#DAE4EA]">
        </div>
        <div class="p-5 md:p-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-3">
                <div class="flex flex-col">
                    <label class="text-[#8B939B] text-lg font-medium ">Name</label>
                    <p class="text-black text-xl font-semibold">{{ auth()->user()->name }}</p>
                </div>

                <div class="flex flex-col">
                    <label class="text-[#8B939B] text-lg font-medium ">Father/Guardian Name</label>
                    <p class="text-black text-xl font-semibold"> {{ auth()->user()->father_name }} </p>
                </div>

                <div class="flex flex-col">
                    <label class="text-[#8B939B] text-lg font-medium ">Student Contact No.</label>
                    <p class="text-black text-xl font-semibold"> {{ $personalDetails->mobile_number }} </p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-3 mt-5">
                <div class="flex flex-col">
                    <label class="text-[#8B939B] text-lg font-medium ">Guardian Relation</label>
                    <p class="text-black text-xl font-semibold">Father</p>
                </div>

                <div class="flex flex-col">
                    <label class="text-[#8B939B] text-lg font-medium ">CNIC/B-Form/Citizenship No.</label>
                    <p class="text-black text-xl font-semibold"> {{ $personalDetails->cnic_passport }} </p>
                </div>

                <div class="flex flex-col">
                    <label class="text-[#8B939B] text-lg font-medium ">Student Gender</label>
                    <p class="text-black text-xl font-semibold"> {{ $personalDetails->gender->name }} </p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-3 mt-5">
                <div class="flex flex-col">
                    <label class="text-[#8B939B] text-lg font-medium ">Date of Birth</label>
                    <p class="text-black text-xl font-semibold">
                        @php
                             $formattedDate = date("d-m-Y", strtotime($personalDetails->date_of_birth));
                        echo $formattedDate;
                        @endphp
                    </p>
                </div>

                <div class="flex flex-col">
                    <label class="text-[#8B939B] text-lg font-medium ">Student Email</label>
                    <p class="text-black text-xl font-semibold">{{ auth()->user()->email }}</p>
                </div>
                @if (auth()->user()->foreigner == 1)
                    <div class="flex flex-col">
                        <label class="text-[#8B939B] text-lg font-medium "> Nationality</label>
                        <p class="text-black text-xl font-semibold">{{ $personalDetails->nationality->name }}</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Postal Address Section --}}

    <div class="mt-7 mb-7 bg-white rounded-lg"
        style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.03);">
        <div>
            <p class=" px-5 md:px-10 py-4 text-2xl font-medium text-[#333333] tracking-[0.29px] font-sans">Postal
                Address</p>
            <hr class="border-t-2 w-full border-[#DAE4EA]">
        </div>
        <div class="p-5 md:p-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-3">
                @if (auth()->user()->foreigner == 0)
                    <div class="flex flex-col">
                        <label class="text-[#8B939B] text-lg font-medium ">District</label>
                        <p class="text-black text-xl font-semibold"> {{ $personalDetails?->district?->name }} </p>
                    </div>
                @endif

                <div class="flex flex-col">
                    <label class="text-[#8B939B] text-lg font-medium ">Address</label>
                    <p class="text-black text-xl font-semibold">{{ $personalDetails?->address }}</p>
                </div>

                <div class="flex flex-col">
                    <label class="text-[#8B939B] text-lg font-medium ">City</label>
                    <p class="text-black text-xl font-semibold">{{ $personalDetails->city }}</p>
                </div>

                <div class="flex flex-col">
                    <label class="text-[#8B939B] text-lg font-medium ">Country</label>
                    <p class="text-black text-xl font-semibold">{{ $personalDetails->country }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- education --}}

    <div class="mt-7 mb-7 bg-white rounded-lg"
        style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.03);">
        <div>
            <p class=" px-5 md:px-10 py-4 text-2xl font-medium text-[#333333] tracking-[0.29px] font-sans">Education
                Details</p>
            <hr class="border-t-2 w-full border-[#DAE4EA]">
        </div>
        <div class="p-5 md:p-10">

            <div class="pl-[9px]">
                <div class="border-l-2 border-gray-300">
                    <div class="flex flex-row justify-between items-center pl-5 pt-3">
                        <p class="text-[#8B939B] text-base font-medium"> {{ $qualifications->ssc_passing_year }} </p>

                    </div>

                    <div class=" pl-5">
                        <p class="text-gray-600 text-lg font-semibold">Secondary School Certificate / Matriculation /
                            O-Level</p>
                    </div>
                    <div class="flex flex-row justify-end items-center pl-5">
                    </div>

                    {{--<div class=" pl-5">
                        <p class="text-[#8B939B] text-base font-medium"> {{ $qualifications->ssc_institution_type }}
                        </p>
                    </div>
                    <div class=" pl-5 pb-3">
                        <p class="text-[#8B939B] text-base font-medium">Grade/CGPA/Marks:
                            {{ $qualifications->ssc_marks_obtained }}
                        </p>
                    </div>
                    <div class=" pl-5 pb-0">
                        <p class="text-[#8B939B] text-base font-medium">
                            <b>Roll No:</b> {{ $qualifications->ssc_roll_no }}
                        </p>
                    </div>--}}

                    <div class=" pl-5">
                        <p class="text-[#8B939B] text-base font-medium"> {{ $qualifications->ssc_institution_type }}
                        </p>
                    </div>
                    <div class=" pl-5 pb-0">
                        <p class="text-[#8B939B] text-base font-medium">Grade/CGPA/Marks:
                            {{ $qualifications->ssc_marks_obtained }}
                        </p>
                    </div>
                    <div class=" pl-5 pb-0">
                        <p class="text-[#8B939B] text-base font-medium">
                            <b>Roll No:</b> {{ $qualifications->ssc_roll_no }}
                        </p>
                    </div>

                </div>
            </div>

            <div class="border-2 border-gray-500 rounded-full w-2 p-2"></div>

            <div class="pl-[9px]">
                <div class="border-l-2 border-gray-300">
                    <div class="flex flex-row justify-between items-center pl-5 pt-3">
                        <p class="text-[#8B939B] text-base font-medium">{{ $qualifications->hssc_passing_year }}</p>

                    </div>
                    <div class=" pl-5">
                        <p class="text-gray-600 text-lg font-semibold">Higher Secondary School Certificate /
                            Intermediate /
                            A-Level</p>
                    </div>
                    <div class="flex flex-row justify-end items-center pl-5">
                    </div>
                    {{--<div class=" pl-5">
                        <p class="text-[#8B939B] text-base font-medium">{{ $qualifications->hssc_institution_type }}
                        </p>
                    </div>
                    <div class=" pl-5 pb-3">
                        <p class="text-[#8B939B] text-base font-medium">Grade/CGPA/Marks:
                            {{ $qualifications->hssc_marks_obtained }}
                        </p>
                    </div>
                    <div class=" pl-5 pb-0">
                        <p class="text-[#8B939B] text-base font-medium">
                            <b>Roll No:</b> {{ $qualifications->ssc_roll_no }}
                        </p>
                    </div>--}}
                    <div class=" pl-5">
                        <p class="text-[#8B939B] text-base font-medium">{{ $qualifications->hssc_institution_type }}
                        </p>
                    </div>
                    <div class=" pl-5 pb-0">
                        <p class="text-[#8B939B] text-base font-medium">Grade/CGPA/Marks:
                            {{ $qualifications->hssc_marks_obtained }}
                        </p>
                    </div>
                    <div class=" pl-5 pb-0">
                        <p class="text-[#8B939B] text-base font-medium">
                            <b>Roll No:</b> {{ $qualifications?->hssc_roll_no }}
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>


    {{-- Admission Test Section --}}
    {{-- <div class="mt-7 mb-7 bg-white rounded-lg"
        style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.03);">
        <div>
            <p class=" px-5 md:px-10 py-4 text-2xl font-medium text-[#333333] tracking-[0.29px] font-sans">Admission
                Test</p>
            <hr class="border-t-2 w-full border-[#DAE4EA]">
        </div> --}}

        {{-- MDCAT Test Information --}}
        {{-- @if (auth()->user()->foreigner == 0)
            @if ($admissionTest->md_cat_cnic !== null)
                <div class="p-5 md:p-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-3">
                        <div class="flex flex-col">
                            <label class="text-[#8B939B] text-lg font-medium ">MDCAT Roll No </label>
                            <p class="text-black text-xl font-semibold"> {{ $admissionTest->md_cat_cnic }} </p>
                        </div>

                        <div class="flex flex-col">
                            <label class="text-[#8B939B] text-lg font-medium ">MDCAT Center</label>
                            <p class="text-black text-xl font-semibold">{{ $admissionTest->mdcatCenter->name }}</p>
                        </div>

                        <div class="flex flex-col">
                            <label class="text-[#8B939B] text-lg font-medium ">Marks Obtained (Out of 200)</label>
                            <p class="text-black text-xl font-semibold">{{ $admissionTest->md_cat_obtained_marks }}
                            </p>
                        </div>
                        <div class="flex flex-col">
                            <label class="text-[#8B939B] text-lg font-medium ">Applicant Cnic / Passport Number</label>
                            <p class="text-black text-xl font-semibold">{{ $personalDetails->cnic_passport }}</p>
                        </div>
                        <div class="flex flex-col">
                            <label class="text-[#8B939B] text-lg font-medium ">Passing Year</label>
                            <p class="text-black text-xl font-semibold">{{ $admissionTest?->mdcatPassingYear?->name }}</p>
                        </div>
                    </div>
                </div>
            @endif
        @endif --}}


        {{-- SAT Test Information --}}
        {{-- @if (auth()->user()->foreigner == 1)
        @if ($admissionTest->md_cat_cnic !== null)
        <div class="p-5 md:p-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-3">
                <div class="flex flex-col">
                    <label class="text-[#8B939B] text-lg font-medium ">MDCAT Cnic </label>
                    <p class="text-black text-xl font-semibold"> {{ $admissionTest->md_cat_cnic }} </p>
                </div>

                <div class="flex flex-col">
                    <label class="text-[#8B939B] text-lg font-medium ">MDCAT Center</label>
                    <p class="text-black text-xl font-semibold">{{ $admissionTest->mdcatCenter->name }}</p>
                </div>

                <div class="flex flex-col">
                    <label class="text-[#8B939B] text-lg font-medium ">Marks Obtained (Out of 200)</label>
                    <p class="text-black text-xl font-semibold">{{ $admissionTest->md_cat_obtained_marks }}
                    </p>
                </div>

                <div class="flex flex-col">
                    <label class="text-[#8B939B] text-lg font-medium ">Applicant Cnic / Passport Number</label>
                    <p class="text-black text-xl font-semibold">{{ $personalDetails->cnic_passport }}</p>
                </div>
                <div class="flex flex-col">
                    <label class="text-[#8B939B] text-lg font-medium ">Passing Year</label>
                    <p class="text-black text-xl font-semibold">{{ $admissionTest?->mdcatPassingYear?->name }}</p>
                </div>
            </div>
        </div>
    @endif
            @if ($admissionTest->sat_test_date !== null)
                <div class="p-5 md:p-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-3">
                        <div class="flex flex-col">
                            <label class="text-[#8B939B] text-lg font-medium ">SAT(II) Test Date </label>
                            <p class="text-black text-xl font-semibold"> {{ $admissionTest->sat_test_date }} </p>
                        </div>

                        <div class="flex flex-col">
                            <label class="text-[#8B939B] text-lg font-medium ">Biology Marks</label>
                            <p class="text-black text-xl font-semibold">
                                {{ $admissionTest->sat_biology_obtained_marks }}
                            </p>
                        </div>

                        <div class="flex flex-col">
                            <label class="text-[#8B939B] text-lg font-medium ">Chemistry Marks</label>
                            <p class="text-black text-xl font-semibold">
                                {{ $admissionTest->sat_chemistry_obtained_marks }}
                            </p>
                        </div>


                        <div class="flex flex-col">
                            <label class="text-[#8B939B] text-lg font-medium ">Physics Maths Marks</label>
                            <p class="text-black text-xl font-semibold">
                                {{ $admissionTest->sat_phy_math_obtained_marks }}
                            </p>
                        </div>

                        <div class="flex flex-col">
                            <label class="text-[#8B939B] text-lg font-medium ">SAT(II) Username</label>
                            <p class="text-black text-xl font-semibold">{{ $admissionTest->sat_username }}</p>
                        </div>

                        <div class="flex flex-col">
                            <label class="text-[#8B939B] text-lg font-medium ">SAT(II) Password</label>
                            <p class="text-black text-xl font-semibold">{{ $admissionTest->sat_password }}</p>
                        </div>
                    </div>
                </div>
            @endif --}}

            {{-- UCAT Test Information --}}

            {{-- @if ($admissionTest->ucat_test_date !== null)
                <div class="p-5 md:p-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-3">
                        <div class="flex flex-col">
                            <label class="text-[#8B939B] text-lg font-medium ">UCAT Test Date </label>
                            <p class="text-black text-xl font-semibold"> {{ $admissionTest->ucat_test_date }} </p>
                        </div>

                        <div class="flex flex-col">
                            <label class="text-[#8B939B] text-lg font-medium ">UCAT Score Obtained</label>
                            <p class="text-black text-xl font-semibold">{{ $admissionTest->ucat_obtained_marks }}</p>
                        </div>

                        <div class="flex flex-col">
                            <label class="text-[#8B939B] text-lg font-medium ">UCAT Band Score</label>
                            <p class="text-black text-xl font-semibold">{{ $admissionTest->ucat_band }}</p>
                        </div>

                        <div class="flex flex-col">
                            <label class="text-[#8B939B] text-lg font-medium ">UCAT Candidate ID / UCAS PID</label>
                            <p class="text-black text-xl font-semibold">{{ $admissionTest->ucat_candidate_id }}</p>
                        </div>

                    </div>
                </div>
            @endif --}}

            {{-- MCAT Test Information --}}

            {{-- @if ($admissionTest->mcat_test_date !== null)
                <div class="p-5 md:p-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-3">
                        <div class="flex flex-col">
                            <label class="text-[#8B939B] text-lg font-medium ">MCAT Test Date </label>
                            <p class="text-black text-xl font-semibold"> {{ $admissionTest->mcat_test_date }} </p>
                        </div>

                        <div class="flex flex-col">
                            <label class="text-[#8B939B] text-lg font-medium ">MCAT Obtained Marks</label>
                            <p class="text-black text-xl font-semibold">{{ $admissionTest->mcat_obtained_marks }}</p>
                        </div>

                        <div class="flex flex-col">
                            <label class="text-[#8B939B] text-lg font-medium ">MCAT Username</label>
                            <p class="text-black text-xl font-semibold">{{ $admissionTest->mcat_username }}</p>
                        </div>

                        <div class="flex flex-col">
                            <label class="text-[#8B939B] text-lg font-medium ">MCAT Password</label>
                            <p class="text-black text-xl font-semibold">{{ $admissionTest->mcat_password }}</p>
                        </div>

                    </div>
                </div>
            @endif
        @endif --}}
    </div>

    <div class="mt-7 mb-7 pb-10 bg-white rounded-lg"
        style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.03);">
        <div>
            <p class=" px-5 md:px-10 py-4 text-2xl font-medium text-[#333333] tracking-[0.29px] font-sans">College
                Preferences</p>
            <hr class="border-t-2 w-full border-[#DAE4EA]">
        </div>
        <div>
            @if (auth()->user()->program_id == 1)
                @if (!is_null($mbbsPreference))
                    <div class="px-5 md:px-10 text-xl py-4 font-bold" style="margin-top: 20px;">MBBS Preferences</div>
                    @foreach ($mbbsPreference as $index => $preference)
                        <div class="flex flex-col">
                            <p class="px-5 md:px-10 py-4 text-black text-xl font-normal font-sans">
                                {{ $index + 1 }}. {{ $preference['name'] }} </p>
                        </div>
                    @endforeach
                @else
                    <p>No MBBS Preferences found.</p>
                @endif
            @endif
        </div>
        <div>
            @if (auth()->user()->program_id === 1 && auth()->user()->foreigner === 1 && auth()->user()->is_open_merit === 1)
                @if (!is_null($mbbsForeignAsOpenMeritPreference))
                    <div class="px-5 md:px-10 text-xl py-4 font-bold" style="margin-top: 20px;">MBBS Preferences on Open Merit Seat</div>
                    @foreach ($mbbsForeignAsOpenMeritPreference as $index => $preference)
                        <div class="flex flex-col">
                            <p class="px-5 md:px-10 py-4 text-black text-xl font-normal font-sans">
                                {{ $index + 1 }}. {{ $preference['name'] }} </p>
                        </div>
                    @endforeach
                @else
                    <p>No MBBS Preferences on Open Merit Seat found.</p>
                @endif
            @endif
        </div>

        <div>
            @if (auth()->user()->program_id == 2)
                @if (!is_null($bdsPreference))
                    <div class="px-5 md:px-10 text-xl py-4 font-bold" style="margin-top: 20px;">BDS Preferences</div>
                    @foreach ($bdsPreference as $index => $preference)
                        <div class="flex flex-col">
                            <p class="px-5 md:px-10 py-4 text-black text-xl font-normal font-sans">
                                {{ $index + 1 }}. {{ $preference['name'] }} </p>
                        </div>
                    @endforeach
                @else
                    <p>No BDS Preferences found.</p>
                @endif
            @endif
        </div>
        <div>
            @if (auth()->user()->program_id === 2 && auth()->user()->seat_id == 3)
                @if (!is_null($bdsForeignAsOpenMeritPreference))
                    <div class="px-5 md:px-10 text-xl py-4 font-bold" style="margin-top: 20px;">
                        BDS Preferences on Overseas Seat
                    </div>
                    @foreach ($bdsForeignAsOpenMeritPreference as $index => $preference)
                        <div class="flex flex-col">
                            <p class="px-5 md:px-10 py-4 text-black text-xl font-normal font-sans">
                                {{ $index + 1 }}. {{ $preference['name'] }} </p>
                        </div>
                    @endforeach
                @else
                    <p>No BDS Preferences on Open Merit Seat found.</p>
                @endif
            @endif
        </div>

        @if (auth()->user()->program_id == 3)
            <div>

                @if (!is_null($mbbsPreference))
                    <div class="px-5 md:px-10 text-xl py-4 font-bold" style="margin-top: 20px;">MBBS Preferences</div>
                    @foreach ($mbbsPreference as $index => $preference)
                        <div class="flex flex-col">
                            <p class="px-5 md:px-10 py-4 text-black text-xl font-normal font-sans">
                                {{ $index + 1 }}. {{ $preference['name'] }} </p>
                        </div>
                    @endforeach
                @else
                    <p>No MBBS Preferences found.</p>
                @endif
            </div>

            <div>

                @if (!is_null($bdsPreference))
                    <div class="px-5 md:px-10 text-xl py-4 font-bold" style="margin-top: 20px;">BDS Preferences</div>
                    @foreach ($bdsPreference as $index => $preference)
                        <div class="flex flex-col">
                            <p class="px-5 md:px-10 py-4 text-black text-xl font-normal font-sans">
                                {{ $index + 1 }}.
                                {{ $preference['name'] }} </p>
                        </div>
                    @endforeach
                @else
                    <p>No BDS Preferences found.</p>
                @endif

            </div>
        @endif
    </div>

    <div class="mt-7 mb-7 pb-10 bg-white rounded-lg"
        style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.03);">
        <div>
            <p class=" px-5 md:px-10 py-4 text-2xl font-medium text-[#333333] tracking-[0.29px] font-sans">Uploaded
                Documents</p>
            <hr class="border-t-2 w-full border-[#DAE4EA]">
        </div>

        <div class="p-10 grid grid-cols-3 gap-5 mt-4">
            @if(!empty($cnic))
            <!-- CNIC Image -->
            <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">
                <span
                    class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                    CNIC Image
                </span>
                <img src="{{ $cnic }}" alt="CNIC Image" onclick="openModal('{{ $cnic }}')"
                    class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
            </div>
            @endif

            @if(!empty($cnicBackSide))
            <!-- cnicBackSide Image -->
            <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">
                <span
                    class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                    CNIC (Back Side) Image
                </span>
                <img src="{{ $cnicBackSide }}" alt="cnicBackSide Image" onclick="openModal('{{ $cnicBackSide }}')"
                    class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
            </div>
            @endif

            @if(!empty($fatherCnic))
            <!-- Father's CNIC Image -->
            <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">

                <span
                    class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                    Father's CNIC Image
                </span>
                <img src="{{ $fatherCnic }}" alt="Father's CNIC Image" onclick="openModal('{{ $fatherCnic }}')"
                    class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
            </div>
            @endif

            @if(!empty($fatherCnicBackSide))
            <!-- fatherCnicBackSide Image -->
            <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">
                <span
                    class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                    Father's CNIC (Back Side) Image
                </span>
                <img src="{{ $fatherCnicBackSide }}" alt="fatherCnicBackSide Image"
                    onclick="openModal('{{ $fatherCnicBackSide }}')"
                    class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
            </div>
            @endif
            @if(!empty($intermediateTranscript))
            <!-- Intermediate Transcript Image -->
            <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">

                <span
                    class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                    Intermediate Transcript (Front Side) Image
                </span>
                <img src="{{ $intermediateTranscript }}" alt="Intermediate Transcript Image"
                    onclick="openModal('{{ $intermediateTranscript }}')"
                    class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
            </div>
            @endif

            @if(!empty($intermediateTranscriptBackSide))

            <!-- intermediateTranscriptBackSide Image -->
            <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">
                <span
                    class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                    Intermediate Transcript (Back Side) Image
                </span>
                <img src="{{ $intermediateTranscriptBackSide }}" alt="intermediateTranscriptBackSide Image"
                    onclick="openModal('{{ $intermediateTranscriptBackSide }}')"
                    class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
            </div>
            @endif
            @if(!empty($matricTranscript))
            <!-- Matric Transcript Image -->
            <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">

                <span
                    class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                    Matric Transcript Image
                </span>
                <img src="{{ $matricTranscript }}" alt="Matric Transcript Image"
                    onclick="openModal('{{ $matricTranscript }}')"
                    class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
            </div>
            @endif
            @if(!empty($matricTranscriptBackSide))
            <!-- matricTranscriptBackSide Image -->
            <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">
                <span
                    class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                    Matric Transcript (Back Side) Image
                </span>
                <img src="{{ $matricTranscriptBackSide }}" alt="matricTranscriptBackSide Image"
                    onclick="openModal('{{ $matricTranscriptBackSide }}')"
                    class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
            </div>
            @endif
            @if (auth()->user()->qualifications->ssc_exam_passeds_id == 2 && false)
                <!-- equivalenceCertificateSsc Image -->
                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">
                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Equivalence Certificate SSC Image
                    </span>
                    <img src="{{ $equivalenceCertificateSsc }}" alt="equivalenceCertificateSsc Image"
                        onclick="openModal('{{ $equivalenceCertificateSsc }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>
            @endif
            @if (auth()->user()->qualifications->hssc_exam_passeds_id == 2 && false)
                <!-- equivalenceCertificateSsc Image -->
                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">
                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Equivalence Certificate HSSC Image
                    </span>
                    <img src="{{ $equivalenceCertificateHssc }}" alt="equivalenceCertificateHssc Image"
                        onclick="openModal('{{ $equivalenceCertificateHssc }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>
            @endif




            <!-- Signature Image -->
            @if(!empty($signature))
            <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">

                <span
                    class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                    Signature Image
                </span>
                <img src="{{ $signature }}" alt="Signature Image" onclick="openModal('{{ $signature }}')"
                    class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
            </div>
            @endif
            @if(!empty($photo))
            <!-- Color Photo Image -->
            <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">

                <span
                    class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                    Recent Color Photograph
                </span>
                <img src="{{ $photo }}" alt="Color Photo Image" onclick="openModal('{{ $photo }}')"
                    class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
            </div>
            @endif

            <!-- Disability Photo Image -->
            @if (in_array(2, $seatCategories))
                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">

                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Disability First Image
                    </span>
                    <img src="{{ $disability }}" alt="Disability Photo Image"
                        onclick="openModal('{{ $disability }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>

                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">

                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Disability Second Image
                    </span>
                    <img src="{{ $disabilitySecond }}" alt="disabilitySecond Photo Image"
                        onclick="openModal('{{ $disabilitySecond }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>
            @endif



            <!-- Cholistan Certificate Image -->
            @if (in_array(4, $seatCategories))
                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">

                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Cholistan Certificate First Image
                    </span>
                    <img src="{{ $cholistanCertificate }}" alt="Cholistan Certificate Image"
                        onclick="openModal('{{ $cholistanCertificate }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>
                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">

                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Cholistan Certificate Second Image
                    </span>
                    <img src="{{ $cholistanCertificateSecond }}" alt="cholistanCertificateSecond Certificate Image"
                        onclick="openModal('{{ $cholistanCertificateSecond }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>
            @endif

            <!-- Stay Card Image -->
            @if (auth()->user()->foreigner == 1 && false)
                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">

                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Foreign HSSC Certificate Image
                    </span>
                    <img src="{{ $foreignHsscCertificate }}" alt="foreignHsscCertificate Card Image"
                        onclick="openModal('{{ $stayCard }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>

                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">

                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Stay Card Image
                    </span>
                    <img src="{{ $stayCard }}" alt="Stay Card Image" onclick="openModal('{{ $stayCard }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>
            @endif



            <!-- Verified by CEO Image -->
            @if (in_array(3, $seatCategories))
                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">

                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Under-Developed Districts First Page
                    </span>
                    <img src="{{ $verifiedByCeo }}" alt="Verified by CEO Image"
                        onclick="openModal('{{ $verifiedByCeo }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>

                <!-- School Leaving Certificate Image -->
                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">

                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Under-Developed Districts Second Page
                    </span>
                    <img src="{{ $schoolLeaving }}" alt="School Leaving Certificate Image"
                        onclick="openModal('{{ $schoolLeaving }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>

                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">

                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Under-Developed Districts Third Page
                    </span>
                    <img src="{{ $provisionalCertificate }}" alt="School Leaving Certificate Image"
                        onclick="openModal('{{ $provisionalCertificate }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>
                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">

                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Under-Developed Districts Fourth Page
                    </span>
                    <img src="{{ $underDevelopedExtra1 }}" alt="underDevelopedExtra1 Leaving Certificate Image"
                        onclick="openModal('{{ $underDevelopedExtra1 }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>

                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">

                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Under-Developed Districts Fifth Page
                    </span>
                    <img src="{{ $underDevelopedExtra2 }}" alt="underDevelopedExtra2 Leaving Certificate Image"
                        onclick="openModal('{{ $underDevelopedExtra2 }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>
                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">

                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Under-Developed Districts Sixth Page
                    </span>
                    <img src="{{ $underDevelopedExtra3 }}" alt="underDevelopedExtra3 Leaving Certificate Image"
                        onclick="openModal('{{ $underDevelopedExtra3 }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>
            @endif
            @if (auth()->user()->foreigner == 0)
                <!-- Domicile Certificate Image -->
                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">

                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Domicile Certificate Image
                    </span>
                    <img src="{{ $domicileCertificate }}" alt="Domicile Certificate Image"
                        onclick="openModal('{{ $domicileCertificate }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>
            @endif

            <!-- MDCAT Result Card Image -->
            {{-- <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">

                <span
                    class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                    MDCAT Result Card Image
                </span>
                <img src="{{ $mdcatResultCard }}" alt="MDCAT Result Card Image"
                    onclick="openModal('{{ $mdcatResultCard }}')"
                    class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
            </div> --}}



            @if ($extraDocRequire1 !== null)
                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">
                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Extra Document Require 1 Image
                    </span>
                    <img src="{{ $extraDocRequire1 }}" alt="CNIC Image"
                        onclick="openModal('{{ $extraDocRequire1 }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>
            @endif

            @if ($extraDocRequire2 !== null)
                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">
                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Extra Document Require 2 Image
                    </span>
                    <img src="{{ $extraDocRequire2 }}" alt="extraDocRequire2 Image"
                        onclick="openModal('{{ $extraDocRequire2 }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>
            @endif

            @if ($extraDocRequire3 !== null)
                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">
                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Extra Document Require 3 Image
                    </span>
                    <img src="{{ $extraDocRequire3 }}" alt="extraDocRequire3 Image"
                        onclick="openModal('{{ $extraDocRequire3 }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>
            @endif

            @if ($extraDocRequire4 !== null)
                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">
                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Extra Document Require 4 Image
                    </span>
                    <img src="{{ $extraDocRequire4 }}" alt="extraDocRequire4 Image"
                        onclick="openModal('{{ $extraDocRequire4 }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>
            @endif

            @if ($extraDocRequire5 !== null)
                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">
                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Extra Document Require 5 Image
                    </span>
                    <img src="{{ $extraDocRequire5 }}" alt="extraDocRequire5 Image"
                        onclick="openModal('{{ $extraDocRequire5 }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>
            @endif

            @if ($extraDocRequire6 !== null)
                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">
                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Extra Document Require 6 Image
                    </span>
                    <img src="{{ $extraDocRequire6 }}" alt="extraDocRequire6 Image"
                        onclick="openModal('{{ $extraDocRequire6 }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>
            @endif

            @if ($extraDocRequire7 !== null)
                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">
                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Extra Document Require 7 Image
                    </span>
                    <img src="{{ $extraDocRequire7 }}" alt="extraDocRequire7 Image"
                        onclick="openModal('{{ $extraDocRequire7 }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>
            @endif

            @if ($extraDocRequire8 !== null)
                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">
                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Extra Document Require 8 Image
                    </span>
                    <img src="{{ $extraDocRequire8 }}" alt="extraDocRequire8 Image"
                        onclick="openModal('{{ $extraDocRequire8 }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>
            @endif

            @if ($extraDocRequire9 !== null)
                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">
                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Extra Document Require 9 Image
                    </span>
                    <img src="{{ $extraDocRequire9 }}" alt="extraDocRequire9 Image"
                        onclick="openModal('{{ $extraDocRequire9 }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>
            @endif
            @if ($extraDocRequire10 !== null)
                <div class="mt-5 border-2 border-[#DAE4EA] p-5 rounded-lg flex flex-col justify-center items-center transition-transform hover:transform hover:-translate-y-2"
                    style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.10);">
                    <span
                        class="text-lg md:text-xl text-start md:text-center font-medium ml-2 -mt-1 md:-mt-3 md:leading-10 text-[#3c1fff]">
                        Extra Document Require 10 Image
                    </span>
                    <img src="{{ $extraDocRequire10 }}" alt="extraDocRequire10 Image"
                        onclick="openModal('{{ $extraDocRequire10 }}')"
                        class="border border-[#DAE4EA] rounded-lg justify-center object-cover object-center w-72 h-72 cursor-pointer">
                </div>
            @endif
        </div>

    </div>

    <div id="imageModal" class="fixed inset-0 items-center justify-center hidden">
        <div class="absolute inset-0 bg-black opacity-75"></div>
        <div class="bg-white p-4 flex items-center justify-center rounded-lg shadow-lg"
            style="width: 550px; height:800px; z-index: 9999;">
            <span class="absolute top-0 right-0 m-2 text-white cursor-pointer text-3xl"
                onclick="closeModal()">&times;</span>
            <div>
                <img id="modalImage" class="w-auto object-cover object-center h-auto" src=""
                    alt="Modal Image">
            </div>
        </div>
    </div>


    <script>
        function openModal(imageSrc) {
            var modal = document.getElementById('imageModal');
            var modalImage = document.getElementById('modalImage');
            modal.style.display = 'flex';
            modalImage.src = imageSrc;
        }

        function closeModal() {
            var modal = document.getElementById('imageModal');
            modal.style.display = 'none';
        }
    </script>
</div>