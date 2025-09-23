<div style="padding: 1cm; font-family: sans-serif; ">
    <div style="text-align: center; font-size: larger; font-weight: bold;color:red;">{{ now()->format('Y-m-d h:i A') }}
    </div>
    <div style="border: 2px solid #000;  text-align: center; font-size: larger; font-weight: bold; margin-bottom: 10px;">
        Final Copy</div>

    <div style="margin-top: 10px;text-align: center;padding: 10px;  font-size: large; font-weight: bold;">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="text-align: center;">
                    <img style="width: 50px; height: 50px" class="profile" src="images/login.png" alt="placeholder image">
                </td>
            </tr>
            <tr>
                <td style="text-align: center; font-weight: 500;">{{ config('envdata.pdf_title')}}
                </td>
            </tr>
        </table>

        <div style="text-align: center; font-weight: 200; font-size: medium; margin-top: 10px;">Admission Form</div>
        <div style="margin-top: 2px; text-align: center; font-weight: 200; font-size: medium;">For Admission to First
            Year {{ config('envdata.pdf_program') }} Programme</div>
        <div style="margin-top: 2px; text-align: center; font-size: medium;">SESSION {{ config('envdata.pdf_session')}}</div>
        @if($foreigner == 0)
            <div style="margin-top: 10px; text-align: center; font-size: medium;">Your %aggregate of (MDCAT): <span
                        style="color:red;">{{ $aggregate }}</span></div>
        @endif
        @if($foreigner == 1)
            @if ($aggregate_overseas !== null && $aggregate_overseas !== '0.0000')
                <div style="margin-top: 10px; text-align: center; font-size: medium;">Your %aggregate (Overseas
                    Pakistani/Foreigner): <span style="color:red;">{{ $aggregate_overseas }}</span></div>
            @endif
        @endif

        <div style="margin-top: 10px; text-align: center; font-size: medium;">Challan ID: <span
                    style="color:green;">{{ $challanId }}</span></div>
        <div style="margin-top: 10px; text-align: center; font-size: medium;">Application ID: <span
                    style="color:green;">{{ $applicationId }}</span></div>
        <hr style="border: 1px solid #000; margin: 10px 0;">

        <div style="display: flex; margin-top: 10px; width: 100%; justify-content: space-between;">
            <div
                    style="font-size: small; text-align: left;font-size:large; color:green; font-weight: 100; margin-top: 10px;">
                Part 1: Program (Your selected program is as follow)</div>
            <div style="font-size: small; text-align: left; font-weight: 100; margin-top: 10px;"> {{ $programs }} Private
            </div>
        </div>
        @if ($foreigner == 1)
            <div style="display: flex; margin-top: 10px; width: 100%; justify-content: space-between;">
                <div
                        style="font-size: small; text-align: left;font-size:large; color:green; font-weight: 100; margin-top: 10px;">
                    Part 2: Overseas Pakistani/ Foreigner</div>
                <div style="font-size: small; text-align: left; font-weight: 100; margin-top: 10px;"> Yes</div>
            </div>
        @endif
        @if ($foreigner == 0)
            <div style="display: flex; margin-top: 10px; width: 100%; justify-content: space-between;">
                <div
                        style="font-size: small; text-align: left;font-size:large; color:green; font-weight: 100; margin-top: 10px;">
                    Part 2: Overseas Pakistani/ Foreigner</div>
                <div style="font-size: small; text-align: left; font-weight: 100; margin-top: 10px;"> No</div>
            </div>
        @endif
        <div style="display: flex; margin-top: 10px; width: 100%; justify-content: space-between;">
            <div
                    style=" text-align: left;font-size:large; color:green; font-weight: 100; margin-top: 10px;">
                Part 3: Apply On Following Quota</div>
            <div style="font-size: small; text-align: left">
                <ol class="list-decimal ml-0 text-sm">
                    @if((boolval(auth()?->user()?->foreigner) && boolval(auth()?->user()?->is_open_merit) || boolval(!auth()?->user()?->foreigner)))
                        <li>Open Merit</li>
                    @endif
                    @if(boolval(auth()?->user()->foreigner))
                        <li>Overseas</li>
                    @endif

                </ol>
            </div>
        </div>

        <div style="margin-top: 5px;">
            <div
                    style="font-size: small; text-align: left;font-size:large; color:green; font-weight: 100; margin-top: 10px;">
                Part 4: Personal Information</div>
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="width: 50%; vertical-align: top; font-size: small; text-align: left;">

                        <div style="font-weight: bold;">Name:</div>
                        <div>{{ $name }}</div>
                        <div style="font-weight: bold; margin-top: 10px;">Father Name:</div>
                        <div>{{ $fatherName }}</div>
                        <div style="font-weight: bold; margin-top: 10px;">Mother Name:</div>
                        <div>{{ $motherName }}</div>
                    </td>
                    @if(isset($image))
                        <td style="width: 50%; vertical-align: top; text-align: right;">
                            <img style="width: 100px; height: 100px;" class="profile" src="{{ $image }}"
                                 alt="placeholder image">
                        </td>
                    @endif
                </tr>
            </table>
        </div>


        <div style="padding-top:-5px;display: flex; margin-top: 15px; width: 100%; justify-content: space-between;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td
                            style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                        Gender:</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                        {{ $gender }}</td>
                </tr>
                @if ($foreigner == 1)
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            Nationality:</td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $nationality }}</td>
                    </tr>
                @endif
                @if ($foreigner == 0)
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            Country:</td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $country }}</td>
                    </tr>
                @endif
                {{--@if ($districtOfDomicile !== null)
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            Country:</td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $nationality }}</td>
                    </tr>
                @endif--}}
                <tr>
                    <td
                            style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                        CNIC No:</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                        {{ $cnic }}</td>
                </tr>
                @if ($telephone !== null)
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            Telephone Number:</td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $telephone }}</td>
                    </tr>
                @endif

                <tr>
                    <td
                            style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                        Phone Number:</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                        {{ $phoneNumber }}</td>
                </tr>

                <tr>
                    <td
                            style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                        Date Of Birth:</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                        @php
                            $formattedDate = date("d-m-Y", strtotime(auth()->user()->personalDetails->date_of_birth));
                             echo $formattedDate;
                        @endphp
                    </td>
                </tr>
                <tr>
                    <td
                            style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                        Area of Residence:</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                        {{ $areaOfResidence }}</td>
                </tr>
                <tr>
                    <td
                            style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                        Email:</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                        {{ $email }}</td>
                </tr>
            </table>
        </div>

        <div style="page-break-before: always;"></div>

        <div style="display: flex; margin-top: 20px; width: 100%; justify-content: space-between;">
            <div
                    style="font-size: small; text-align: left;font-size:large; color:green; font-weight: 100; margin-top: 10px;">
                Part 5: Qualification Details</div>

            <table style="margin-top:10px; width: 100%; border-collapse: collapse;">
                <tr>
                    <td
                            style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left; font-weight: bold;">
                        Examination Passed</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left;">Science
                        Subjects</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left;">Institution
                        Type</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left;">Board /
                        University</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left;">Roll No</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left;">Year of
                        Passing</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left;">Marks Obtained
                    </td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left;">Total Marks
                    </td>
                </tr>
                <tr>
                    <td
                            style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left; font-weight: bold;">
                        {{ $sscExam }}</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left;">
                        {{ $sscSubjects }}
                    </td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left;">
                        {{ $sscInstitution }}</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left;">
                        {{ $sscBoard }}</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left;">{{$sscRollNumber}}</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left;">
                        {{ $sccPassingYear }}</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left;">
                        {{ $sscMarks }}</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left;">
                        {{ $sscTotalMarks }}</td>
                </tr>
                <tr>
                    <td
                            style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left; font-weight: bold;">
                        {{ $hsscExam }}</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left;">
                        {{ $hsscSubjects }}
                    </td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left;">
                        {{ $hsscInstitution }}</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left;">
                        {{ $hsscBoard }}</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left;">{{$hsscRollNumber}}</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left;">
                        {{ $hsccPassingYear }}</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left;">
                        {{ $hsscMarks }}</td>
                    <td style="border: 1px solid #000; padding: 5px; font-size: small; text-align: left;">
                        {{ $hsscTotalMarks }}</td>
                </tr>
            </table>
        </div>


        <div style="display: flex; margin-top: 20px; width: 100%; justify-content: space-between;">
            <div
                    style="font-size: small; text-align: left;font-size:large; color:green; font-weight: 100; margin-top: 10px;">
                Part 6: Admission Test </div>
            @if ($mdcatCnic !== null)
                <table style="margin-top:10px; width: 100%; border-collapse: collapse;">
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            MDCAT Roll No </td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $mdcatCnic }}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            MDCAT Passing Year
                        </td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">{{ $mdcatPassingYear }}</td>
                    </tr>
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            Center From Where Appeard</td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $mdcatCenter }}</td>
                    </tr>
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            MDCAT Obtained Marks</td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $mdcatMarks }}</td>
                    </tr>
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            MDCAT Applicant CNIC</td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $mdcatApplicantCnic }}</td>
                    </tr>

                </table>
            @endif

            @if ($satTestDate !== null)
                <table style="margin-top:30px; width: 100%; border-collapse: collapse;">
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            SAT Test Date</td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $satTestDate }}</td>
                    </tr>
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            SAT Chemistry Marks</td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $satChemistryMarks }}</td>
                    </tr>
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            SAT Biology Marks</td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $satBiologyMarks }}</td>
                    </tr>
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            SAT Physics/Maths Marks</td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $satPhyMathMarks }}</td>
                    </tr>
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            SAT User Name</td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $satUserName }}</td>
                    </tr>
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            SAT Password</td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $satPassword }}</td>
                    </tr>
                </table>
            @endif

            @if ($ucatId !== null)
                <table style="margin-top:30px; width: 100%; border-collapse: collapse;">
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            UCAT Candidate Id</td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $ucatId }}</td>
                    </tr>
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            UCAT Test Date</td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $ucatTestDate }}</td>
                    </tr>
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            UCAT Score</td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $ucatObtainedMarks }}</td>
                    </tr>
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            UCAT Band Score</td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $ucatBandScore }}</td>
                    </tr>
                </table>
            @endif

            @if ($mcatTestDate !== null)
                <table style="margin-top:30px; width: 100%; border-collapse: collapse;">
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            MCAT Test Date</td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $mcatTestDate }}</td>
                    </tr>
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            MCAT Marks Obtained</td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $mcatObtaniedMarks }}</td>
                    </tr>
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            MCAT User Name</td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $mcatUserName }}</td>
                    </tr>
                    <tr>
                        <td
                                style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left; font-weight: bold;">
                            MCAT Password</td>
                        <td style="border: 1px solid #000; padding: 5px; font-size: small;text-align: left;">
                            {{ $mcatPassword }}</td>
                    </tr>
                </table>
            @endif
        </div>

        <div style="page-break-before: always;"></div>

        <div style="display: flex; margin-top: 100px; width: 100%; justify-content: space-between;">
            <div
                    style="font-size: small; text-align:left; font-size: large;  font-weight: 100; margin-top: 10px; color:green">
                Part 7: College Preference</div>

            <!-- For MBBS Preferences -->
            @if (auth()->user()->program_id == 1)
                @if (!empty($mbbsPreference))
                    <div>
                        <div style="margin-top: 20px;">MBBS Preferences</div>
                        <hr style="border: 1px solid #000; margin: 10px 0;">
                        <table>
                            <tbody>
                            @foreach ($mbbsPreference as $index => $preference)
                                <tr>
                                    <td>{{ $index + 1 }}. {{ $preference['name'] }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            @endif

            @if (auth()->user()->program_id === 1 && auth()->user()->foreigner === 1 && auth()->user()->is_open_merit === 1)
                <div style="page-break-before: always;"></div>
                @if (!empty($mbbsForeignAsOpenMeritPreference))
                    <div>
                        <div style="margin-top: 20px;">MBBS Preferences on Open Merit Seat </div>
                        <hr style="border: 1px solid #000; margin: 10px 0;">
                        <table>
                            <tbody>
                            @foreach ($mbbsForeignAsOpenMeritPreference as $index => $preference)
                                <tr>
                                    <td>{{ $index + 1 }}. {{ $preference['name'] }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            @endif

            <!-- For BDS Preferences -->
            @if (auth()->user()->program_id == 2)
                @if (!empty($bdsPreference))
                    <div>
                        <div style="margin-top: 20px;">BDS Preferences</div>
                        <hr style="border: 1px solid #000; margin: 10px 0;">
                        <table>
                            <tbody>
                            @foreach ($bdsPreference as $index => $preference)
                                <tr>
                                    <td>{{ $index + 1 }}. {{ $preference['name'] }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            @endif

            @if (auth()->user()->program_id === 2 && auth()->user()->seat_id === 3)
                @if (!empty($bdsForeignAsOpenMeritPreference))
                    <div>
                        <div style="margin-top: 20px;">BDS Preferences on Overseas Seat </div>
                        <hr style="border: 1px solid #000; margin: 10px 0;">
                        <table>
                            <tbody>
                            @foreach ($bdsForeignAsOpenMeritPreference as $index => $preference)
                                <tr>
                                    <td>{{ $index + 1 }}. {{ $preference['name'] }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            @endif

            @if (auth()->user()->program_id == 3)
                @if(auth()->user()->program_priority == 1)
                    <div>

                        @if (!is_null($mbbsPreference))
                            <div>
                                <div style="margin-top: 20px;">MBBS Preferences</div>
                                <hr style="border: 1px solid #000; margin: 10px 0;">
                                <table>
                                    <tbody>
                                    @foreach ($mbbsPreference as $index => $preference)
                                        <tr>
                                            <td>{{ $index + 1 }}. {{ $preference['name'] }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>

                    <div>

                        @if (!empty($bdsPreference))
                            <div>
                                <div style="margin-top: 20px;">BDS Preferences</div>
                                <hr style="border: 1px solid #000; margin: 10px 0;">
                                <table>
                                    <tbody>
                                    @foreach ($bdsPreference as $index => $preference)
                                        <tr>
                                            <td>{{ $index + 1 }}. {{ $preference['name'] }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif

                    </div>
                @else
                    <div>

                        @if (!empty($bdsPreference))
                            <div>
                                <div style="margin-top: 20px;">BDS Preferences</div>
                                <hr style="border: 1px solid #000; margin: 10px 0;">
                                <table>
                                    <tbody>
                                    @foreach ($bdsPreference as $index => $preference)
                                        <tr>
                                            <td>{{ $index + 1 }}. {{ $preference['name'] }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif

                    </div>

                    <div>

                        @if (!is_null($mbbsPreference))
                            <div>
                                <div style="margin-top: 20px;">MBBS Preferences</div>
                                <hr style="border: 1px solid #000; margin: 10px 0;">
                                <table>
                                    <tbody>
                                    @foreach ($mbbsPreference as $index => $preference)
                                        <tr>
                                            <td>{{ $index + 1 }}. {{ $preference['name'] }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                @endif
            @endif
        </div>
        <div style="page-break-before: always;"></div>


        <div style="display: flex; margin-top: 100px; width: 100%; justify-content: space-between;">
            <div
                    style="font-size: small; text-align: left;font-size:large; color:green; font-weight: 100; margin-top: 10px;">
                Part 8: Undertaking By the Candidate</div>
            <div
                    style="font-size: small; text-align: left; font-weight: 100; margin-top: 10px; line-height: 1.5;word-spacing: 2px; margin-bottom: 10px;">
                I <span style="color:red; font-weight: bold;"> {{ $name }} </span> S/D/O <span
                        style="color:red; font-weight: bold;"> {{ $fatherName }} </span> hereby declare that all the information provided in this Admission Form and the attached documents is true, accurate, and complete to the best of my knowledge.


                <br><br>

                I acknowledge that if any information or document is found to be false, misleading, incomplete, or fabricated, the University reserves the right to reject my application or cancel my admission at any stage, as per the provisions outlined  Admission Policy. I confirm that I have read and understood all the rules and regulations  and undertake to comply with them fully.
                <br><br>
                I understand that the Order of Preference for colleges submitted in this Admission Form is final and cannot be changed after the submission deadline. I accept that submitting this form does not guarantee admission, which will be strictly based on merit.


                <br><br>

                I also agree that upgradation to a higher-preferred college depends on seat availability and merit. If upgraded, I understand that my admission will automatically shift to the higher-preferred college in subsequent merit lists, unless I submit a written undertaking before the display of the next merit list to retain my current placement and forgo further upgradation. I acknowledge that in such a case, I waive my right to any further upgradation.

                <br><br>
                
                <br><br>

                I further understand that upgradation or retention rights apply only to candidates who deposit the required college fee and join the college within the specified timeframe mentioned in the merit list.


                <br><br>

                I also understand that failure to deposit the fee or cancellation of my admission through a written request on a duly attested Rs. 100/- Stamp Paper will disqualify me from participating in further selection processes or upgradation.

                <br><br>

                Additionally, I acknowledge that mutual transfers, retention of status (choosing to stay in the same college post-upgradation), and down-gradation are strictly prohibited and will not be allowed under any circumstances.


                <br><br>

                I affirm my acceptance of the terms and conditions outlined above.



            </div>

            <div
                    style="font-size: small; text-align: left;font-size:large; color:green; font-weight: 100; margin-top: 10px;">
                Undertaking by the Parent/ Guardian</div>

            <div
                    style="font-size: small; text-align: left; font-weight: 100; margin-top: 10px; line-height: 1.5;word-spacing: 2px; margin-bottom: 10px;">

                I <span style="color:red; font-weight: bold;"> {{ $fatherName }} </span>  being the Parent/ Guardian of
                the
                applicant <span style="color:red; font-weight: bold;"> {{ $name }} </span> affirm that I have reviewed, understood, and consent to the terms and conditions of this Undertaking.
                <br><br>
                I acknowledge that the University has the authority to take any action, including rejecting this application or revoking any admission, if the information provided by the applicant is found to be false, incomplete, or misleading. I further recognize that all decisions made by the University will be in accordance with its rules, regulations, policies, and applicable laws, without exception.

            </div>


        </div>
        @php

            $show_images = true;
            if (isset($image_pages)) {
                $show_images = $image_pages;
            }

        @endphp
        @if ($show_images)
        <div style="page-break-before: always;"></div>

        <div style="display: flex; width: 100%; justify-content: space-between;">
            <div style="font-size: small; text-align: left; font-size: large; color: green; font-weight: 100; ">Part 9:
                Uploaded Documents </div>
            <div style="margin-top: 10px; font-size: medium; flex-grow: 1;">
                <table style="width: 100%; border-collapse: collapse;">
                    @if ($cnicImage)
                        <page size="A4">
                            <div
                                    style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                Cnic Image </div>
                            <div style="text-align: center;">
                                <img style="width: 100%; height: auto;" src="{{ $cnicImage }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>

                    @endif

                    @if ($userCnicBackSide)
                        <page size="A4">
                            <div
                                    style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                Cnic Backside Image </div>
                            <div style="text-align: center;">
                                <img style="width: 100%; height: auto;" src="{{ $userCnicBackSide }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>

                    @endif

                    <!-- For $fatherCnicImage -->
                    @if ($fatherCnicImage)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Father Cnic Image </div>
                                <img style="width: 100%; height: auto;" src="{{ $fatherCnicImage }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>

                    @endif


                    @if ($userFatherCnicBackSide)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Father Backside Cnic Image </div>
                                <img style="width: 100%; height: auto;" src="{{ $userFatherCnicBackSide }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>

                    @endif


                    <!-- For $signatureImage -->
                    @if ($signatureImage)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Signature Image </div>
                                <img style="width: 100%; height: auto;" src="{{ $signatureImage }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>

                    @endif

                    <!-- For $photoImage -->
                    @if ($photoImage)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Recent Colored Image </div>
                                <img style="width: 100%; height: auto;" src="{{ $photoImage }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>
                    @endif
                    <!-- For $intermediateTranscriptImage -->
                    @if ($intermediateTranscriptImage)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Intermediate Transcript Image </div>
                                <img style="width: 100%; height: auto;" src="{{ $intermediateTranscriptImage }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>

                    @endif

                    <!-- For $intermediateTranscriptImage -->
                    @if ($userIntermediateTranscriptBackSidePhoto)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Intermediate Transcript Backside Image </div>
                                <img style="width: 100%; height: auto;"
                                     src="{{ $userIntermediateTranscriptBackSidePhoto }}" alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>

                    @endif

                    <!-- For $disabilityImage -->
                    @if ($disabilityImage)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Disability Image </div>
                                <img style="width: 100%; height: auto;" src="{{ $disabilityImage }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>
                    @endif

                    @if ($userDisabilitySecondPhoto)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Disability Second Image </div>
                                <img style="width: 100%; height: auto;" src="{{ $userDisabilitySecondPhoto }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>
                    @endif

                    <!-- For $schoolLeavingImage -->
                    @if ($schoolLeavingImage)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    School Leaving Image </div>
                                <img style="width: 100%; height: auto;" src="{{ $schoolLeavingImage }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>
                    @endif

                    <!-- For $userProvisionalCertificate -->
                    @if ($userProvisionalCertificatePhoto)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Provisional Certificate Image </div>
                                <img style="width: 100%; height: auto;" src="{{ $userProvisionalCertificatePhoto }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>
                    @endif

                    <!-- For $cholistanCertificateImage -->
                    @if ($cholistanCertificateImage)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Cholistan Certificate Image </div>
                                <img style="width: 100%; height: auto;" src="{{ $cholistanCertificateImage }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>
                    @endif

                    <!-- For $cholistanCertificateImage -->
                    @if ($userCholistanCertificateSecondPhoto)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Cholistan Certificate Second Image </div>
                                <img style="width: 100%; height: auto;"
                                     src="{{ $userCholistanCertificateSecondPhoto }}" alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>
                    @endif

                    <!-- For $userUnderDevelopedFirstPhoto -->
                    @if ($userUnderDevelopedFirstPhoto)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Under-Developed Area Certificate Image </div>
                                <img style="width: 100%; height: auto;" src="{{ $userUnderDevelopedFirstPhoto }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>
                    @endif

                    <!-- For $userUnderDevelopedFirstPhoto -->
                    @if ($userUnderDevelopedSecondPhoto)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Under-Developed Area Certificate Second Image </div>
                                <img style="width: 100%; height: auto;" src="{{ $userUnderDevelopedSecondPhoto }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>
                    @endif

                    <!-- For $userUnderDevelopedFirstPhoto -->
                    @if ($userUnderDevelopedThirdPhoto)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Under-Developed Area Certificate Third Image </div>
                                <img style="width: 100%; height: auto;" src="{{ $userUnderDevelopedThirdPhoto }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>
                    @endif

                    <!-- For $stayCardImage -->
                    @if ($stayCardImage)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Stay Card Image </div>
                                <img style="width: 100%; height: auto;" src="{{ $stayCardImage }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>
                    @endif

                    <!-- For $foreignHsscCertificate -->
                    @if ($userForeignHsscCertificatePhoto)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Foriegn Hssc Certificate Image </div>
                                <img style="width: 100%; height: auto;" src="{{ $userForeignHsscCertificatePhoto }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>
                    @endif

                    <!-- For $HsscCertificate -->
                    @if ($userEquivalenceSscPhoto)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Equivalence Ssc Certificate Image </div>
                                <img style="width: 100%; height: auto;" src="{{ $userEquivalenceSscPhoto }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>
                    @endif

                    <!-- For $SscCertificate -->
                    @if ($userEquivalenceHsscPhoto)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Equivalence Hssc Certificate Image </div>
                                <img style="width: 100%; height: auto;" src="{{ $userEquivalenceHsscPhoto }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>
                    @endif

                    <!-- For $verifiedByCeoImage -->
                    @if ($verifiedByCeoImage)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Verified By CEO Image </div>
                                <img style="width: 100%; height: auto;" src="{{ $verifiedByCeoImage }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>
                    @endif

                    <!-- For $domicileCertificateImage -->
                    @if ($domicileCertificateImage)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Domicile Certificate Image </div>
                                <img style="width: 100%; height: auto;" src="{{ $domicileCertificateImage }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>

                    @endif

                    <!-- For $mdcatResultCardImage -->
                    @if ($mdcatResultCardImage)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    MDCAT Result Image </div>
                                <img style="width: 100%; height: auto;" src="{{ $mdcatResultCardImage }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>
                    @endif


                    <!-- For $matricTranscriptImage -->
                    @if ($matricTranscriptImage)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Matric Transcript Image </div>
                                <img style="width: 100%; height: auto;" src="{{ $matricTranscriptImage }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                        <div style="page-break-before: always;"></div>

                    @endif

                    <!-- For $matricTranscriptImage -->
                    @if ($userMatricTranscriptBackSidePhoto)
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Matric Transcript Backside Image </div>
                                <img style="width: 100%; height: auto;"
                                     src="{{ $userMatricTranscriptBackSidePhoto }}" alt="placeholder image">
                            </div>
                        </page>
                    @endif


                    <!-- For Extra Documents -->
                    @if ($userDocumentRequirementOnePhoto)
                        <div style="page-break-before: always;"></div>
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Extra Document Image 1</div>
                                <img style="width: 100%; height: auto;" src="{{ $userDocumentRequirementOnePhoto }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                    @endif

                    @if ($userDocumentRequirementTwoPhoto)
                        <div style="page-break-before: always;"></div>
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Extra Document Image 2</div>
                                <img style="width: 100%; height: auto;" src="{{ $userDocumentRequirementTwoPhoto }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                    @endif


                    @if ($userDocumentRequirementThreePhoto)
                        <div style="page-break-before: always;"></div>
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Extra Document Image 3</div>
                                <img style="width: 100%; height: auto;"
                                     src="{{ $userDocumentRequirementThreePhoto }}" alt="placeholder image">
                            </div>
                        </page>
                    @endif


                    @if ($userDocumentRequirementFourPhoto)
                        <div style="page-break-before: always;"></div>
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Extra Document Image 4</div>
                                <img style="width: 100%; height: auto;" src="{{ $userDocumentRequirementFourPhoto }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                    @endif


                    @if ($userDocumentRequirementFivePhoto)
                        <div style="page-break-before: always;"></div>
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Extra Document Image 5</div>
                                <img style="width: 100%; height: auto;" src="{{ $userDocumentRequirementFivePhoto }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                    @endif


                    @if ($userDocumentRequirementSixPhoto)
                        <div style="page-break-before: always;"></div>
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Extra Document Image 6</div>
                                <img style="width: 100%; height: auto;" src="{{ $userDocumentRequirementSixPhoto }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                    @endif


                    @if ($userDocumentRequirementSevenPhoto)
                        <div style="page-break-before: always;"></div>
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Extra Document Image 7</div>
                                <img style="width: 100%; height: auto;"
                                     src="{{ $userDocumentRequirementSevenPhoto }}" alt="placeholder image">
                            </div>
                        </page>
                    @endif


                    @if ($userDocumentRequirementEightPhoto)
                        <div style="page-break-before: always;"></div>
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Extra Document Image 8</div>
                                <img style="width: 100%; height: auto;"
                                     src="{{ $userDocumentRequirementEightPhoto }}" alt="placeholder image">
                            </div>
                        </page>
                    @endif


                    @if ($userDocumentRequirementNinePhoto)
                        <div style="page-break-before: always;"></div>
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Extra Document Image 9</div>
                                <img style="width: 100%; height: auto;" src="{{ $userDocumentRequirementNinePhoto }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                    @endif


                    @if ($userDocumentRequirementTenPhoto)
                        <div style="page-break-before: always;"></div>
                        <page size="A4">
                            <div style="text-align: center; margin-top: 20px;">
                                <div
                                        style="margin-top: 10px; font-size: small; text-align: center; font-size: small; color: red; font-weight: 100; ">
                                    Extra Document Image 10</div>
                                <img style="width: 100%; height: auto;" src="{{ $userDocumentRequirementTenPhoto }}"
                                     alt="placeholder image">
                            </div>
                        </page>
                    @endif
                </table>
            </div>
        </div>
        @endif

    </div>


</div>
