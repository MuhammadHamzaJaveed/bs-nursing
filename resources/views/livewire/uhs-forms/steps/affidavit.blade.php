<form wire:submit.prevent="submit" enctype="multipart/form-data">

    <div class="mt-7 mb-7 bg-white rounded-lg"
        style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.03);">
        <div>
            <p class="p-5 md:px-10 py-4 text-2xl font-medium text-[#333333] tracking-[0.29px] font-sans">Undertaking by
                the Candidate</p>
            <hr class="border-t-2 w-full border-[#DAE4EA]">
        </div>

        <div class="p-5 md:p-10 mb-5 font-medium">
            <div>
                <p class="text-3xl font-semibold text-red-600 text-center">Read Carefully:</p>
            </div>
            <div class="mt-7 mb-5 px-3 lg:px-10 text-justify">
                <div class="mt-7 mb-5 px-3 lg:px-10 text-justify">
                    <div class="text-black text-base md:text-xl font-medium md:leading-10">
                        <ul>
                            <li class="flex items-start justify-start">
                                <div><input type="checkbox" id="under1" required
                                        class="w-5 h-5 rounded border text-2xl mr-3 font-bold text-blue-600 bg-gray-100
                                     border-gray-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 
                                     focus:ring-2 dark:bg-gray-100 dark:border-gray-300" />
                                </div>
                                <p>I <span class="text-red-600">{{ $name }}</span> S/D/O <span
                                        class="text-red-600">{{ $fatherName }}</span> hereby declare that all the information provided in this Admission Form and the attached documents is true, accurate, and complete to the best of my knowledge.
                                    </p>
                            </li>
                            <br>
                            <li class="flex items-start justify-start">
                                <div><input type="checkbox" id="under2" required
                                        class="w-5 h-5 rounded border text-2xl font-bold mr-3 text-blue-600 bg-gray-100
                                     border-gray-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 
                                     focus:ring-2 dark:bg-gray-100 dark:border-gray-300" />
                                </div>
                                I acknowledge that if any information or document is found to be false, misleading, incomplete, or fabricated, the University reserves the right to reject my application or cancel my admission at any stage, as per the provisions outlined in the  Admission Policy. I confirm that I have read and understood all the rules and regulations and undertake to comply with them fully.

                            </li>
                            <br>
                            <li class="flex items-start justify-start">
                                <div><input type="checkbox" id="under3" required
                                        class="w-5 h-5 rounded border text-2xl font-bold mr-3 text-blue-600 bg-gray-100
                                     border-gray-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 
                                     focus:ring-2 dark:bg-gray-100 dark:border-gray-300" />
                                </div>
                                
                                I understand that the Order of Preference for colleges submitted in this Admission Form is final and cannot be changed after the submission deadline. I accept that submitting this form does not guarantee admission, which will be strictly based on merit.

                            </li>
                            <br>
                            <li class="flex items-start justify-start">
                                <div><input type="checkbox" id="under4" required
                                        class="w-5 h-5 rounded border text-2xl font-bold mr-3 text-blue-600 bg-gray-100
                                     border-gray-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 
                                     focus:ring-2 dark:bg-gray-100 dark:border-gray-300" />
                                </div>
                                
                                I also agree that upgradation to a higher-preferred college depends on seat availability and merit. If upgraded, I understand that my admission will automatically shift to the higher-preferred college in subsequent merit lists, unless I submit a written undertaking before the display of the next merit list to retain my current placement and forgo further upgradation. I acknowledge that in such a case, I waive my right to any further upgradation
                            </li>
                            <br>
                            <li class="flex items-start justify-start">
                                <div><input type="checkbox" id="under4" required
                                        class="w-5 h-5 rounded border text-2xl font-bold mr-3 text-blue-600 bg-gray-100
                                     border-gray-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800
                                     focus:ring-2 dark:bg-gray-100 dark:border-gray-300" />
                                </div>
                                
                                I further understand that upgradation or retention rights apply only to candidates who deposit the required college fee and join the college within the specified timeframe mentioned in the merit list.

                                
                            </li>
                            <li class="flex items-start justify-start">
                                <div><input type="checkbox" id="under4" required
                                        class="w-5 h-5 rounded border text-2xl font-bold mr-3 text-blue-600 bg-gray-100
                                     border-gray-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800
                                     focus:ring-2 dark:bg-gray-100 dark:border-gray-300" />
                                </div>
                                
                                I also agree that upgradation to a higher-preferred college depends on seat availability and merit. If upgraded, I understand that my admission will automatically shift to the higher-preferred college in subsequent merit lists, unless I submit a written undertaking before the display of the next merit list to retain my current placement and forgo further upgradation. I acknowledge that in such a case, I waive my right to any further upgradation.

                                
                            </li>
                            <br>
                           
                            <li class="flex items-start justify-start">
                                <div><input type="checkbox" id="under4" required
                                        class="w-5 h-5 rounded border text-2xl font-bold mr-3 text-blue-600 bg-gray-100
                                     border-gray-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800
                                     focus:ring-2 dark:bg-gray-100 dark:border-gray-300" />
                                </div>
                                
                                I also understand that failure to deposit the fee or cancellation of my admission through a written request on a duly attested Rs. 100/- Stamp Paper will disqualify me from participating in further selection processes or upgradation.
                                .
                            </li>
                            <br>
                            <li class="flex items-start justify-start">
                                <div><input type="checkbox" id="under4" required
                                        class="w-5 h-5 rounded border text-2xl font-bold mr-3 text-blue-600 bg-gray-100
                                     border-gray-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800
                                     focus:ring-2 dark:bg-gray-100 dark:border-gray-300" />
                                </div>
                                
                                Additionally, I acknowledge that mutual transfers, retention of status (choosing to stay in the same college post-upgradation), and down-gradation are strictly prohibited and will not be allowed under any circumstances.
                            </li>
                            <br>
                            {{-- <li class="flex items-start justify-start">
                                <div><input type="checkbox" id="under4" required
                                        class="w-5 h-5 rounded border text-2xl font-bold mr-3 text-blue-600 bg-gray-100
                                     border-gray-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800
                                     focus:ring-2 dark:bg-gray-100 dark:border-gray-300" />
                                </div>
                                I affirm my acceptance of the terms and conditions outlined above.

                            </li>
                            <br> --}}
                            {{-- <li class="flex items-start justify-start">
                                <div><input type="checkbox" id="under4" required
                                        class="w-5 h-5 rounded border text-2xl font-bold mr-3 text-blue-600 bg-gray-100
                                     border-gray-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800
                                     focus:ring-2 dark:bg-gray-100 dark:border-gray-300" />
                                </div>
                                I understand and agree that to be considered as admitted candidate, I will
                                have to deposit the prescribed College Fee as per the method given
                                above by the specified due date and Report (in-writing) to the respective
                                College by the due date. I understand that if selected, I shall be given
                                three (03) working days to deposit the prescribed fee after display of the
                                Selection List.
                            </li>
                            <br>
                            <li class="flex items-start justify-start">
                                <div><input type="checkbox" id="under4" required
                                        class="w-5 h-5 rounded border text-2xl font-bold mr-3 text-blue-600 bg-gray-100
                                     border-gray-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800
                                     focus:ring-2 dark:bg-gray-100 dark:border-gray-300" />
                                </div>
                                I understand and agree that I will have to pay the remaining fee and other
                                dues after the conclusion of admission process at the respective college
                                where my admission has been finalized. I understand that in case of nonpayment of remaining amount, my admission shall be cancelled.
                            </li> --}}
                            
                        </ul>
                    </div>
                    @error('terms')
                        <div class="error text-red-600 mt-2">{{ $message }}</div>
                    @enderror
                </div>

                @error('terms')
                    <div class="error text-red-600 mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mt-7 mb-5 px-3 lg:px-20 flex items-center" wire:ignore>
                <x-checkbox wire:model="terms" required lg class="text-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600" />
                <span class=" text-xl font-semibold text-red-600 ml-3">I affirm my acceptance of the terms and conditions outlined above.
                </span>
            </div>
        </div>
    </div>

    <div class="mt-7 mb-7 bg-white rounded-lg"
        style="box-shadow: 0px 0px 10.666666984558105px 5.333333492279053px rgba(0, 0, 0, 0.03);">
        <div>
            <p class="p-5 md:px-10 py-4 text-2xl font-medium text-[#333333] tracking-[0.29px] font-sans">Undertaking by
                the Parent/ Guardian</p>
            <hr class="border-t-2 w-full border-[#DAE4EA]">
        </div>

        <div class="p-5 md:p-10 mb-5 font-medium">
            <div class="mt-7 mb-5 px-3 lg:px-10 text-justify">
                <div class="mt-7 mb-5 px-3 lg:px-10 text-justify">
                    <div class="text-black text-base md:text-xl font-medium md:leading-10">
                        <ul>
                            <li class="flex items-start justify-start">
                                <div><input type="checkbox" id="under1" required
                                        class="w-5 h-5 rounded border text-2xl mr-3 font-bold text-blue-600 bg-gray-100
                                     border-gray-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800
                                     focus:ring-2 dark:bg-gray-100 dark:border-gray-300" />
                                </div>
                                <p>I <span class="text-red-600">{{ auth()->user()->father_name }}</span> 
                                    being the Parent/ Guardian of the
                                    applicant <span class="text-red-600"> {{ auth()->user()->name }} </span>
                                     hereby
                                    affirm that I have reviewed, understood, and consent to the terms and conditions of this Undertaking.
                                    <br>
                                    I acknowledge that the University has the authority to take any action, including rejecting this application or revoking any admission, if the information provided by the applicant is found to be false, incomplete, or misleading. I further recognize that all decisions made by the University will be in accordance with its rules, regulations, policies, and applicable laws, without exception.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="p-5 md:p-10">
                    <div>
                        <p class="text-2xl font-semibold text-center">Upload Your Parent/ Guardian CNIC <span class="font-bold text-red-500"> (Frontside)</span> Here</p>
                    </div>
                    <div class="mt-5">
                        <p class="text-lg font-normal text-[#6B8097] text-center">Please upload the clear picture of
                            Parent/ Guardian <span class="font-bold text-red-500"> (Frontside)</span> CNIC</p>
                    </div>

                    <div class="mt-8 flex justify-center">
                        <div class="flex flex-col w-11/12 justify-center items-center">

                            <div
                                class="w-full p-4 bg-[#F0F4F680] bg-white m-auto rounded-lg border-2 border-dashed border-[#6B8097B2]">
                                <div>
                                    <svg class="mx-auto mb-2 mt-2" xmlns="http://www.w3.org/2000/svg" width="82"
                                        height="78" viewBox="0 0 82 78" fill="none">
                                        <ellipse cx="41.2584" cy="39.1062" rx="40.3463" ry="38.824"
                                            fill="#148DCB" />
                                        <path
                                            d="M55.6779 55.7019H45.2904V45.6016H48.7233C49.5938 45.6016 50.1083 44.6497 49.5938 43.9643L42.9162 35.073C42.4908 34.5018 41.6103 34.5018 41.1849 35.073L34.5072 43.9643C33.9928 44.6497 34.4973 45.6016 35.3778 45.6016H38.8106V55.7019H27.1766C21.9829 55.4258 17.8477 50.7517 17.8477 45.6873C17.8477 42.1936 19.8163 39.1474 22.7347 37.5005C22.4676 36.8056 22.3291 36.063 22.3291 35.2824C22.3291 31.7126 25.3267 28.8282 29.0365 28.8282C29.8378 28.8282 30.6094 28.9614 31.3316 29.2185C33.4784 24.8395 38.1082 21.8027 43.4899 21.8027C50.4545 21.8123 56.1924 26.9433 56.8453 33.4832C62.1973 34.3686 66.2633 39.1379 66.2633 44.5355C66.2633 50.3043 61.5939 55.3021 55.6779 55.7019Z"
                                            fill="white" />
                                    </svg>
                                    {{-- <div class="mx-auto w-4/5">
                                        <x-filepond.filepond size="1024*1024" file="{{ $fatherCnicAffidavit }}" allowFileImagePreview
                                            name="fatherCnicAffidavit" required id="cccc"
                                            wire:model="fatherCnicAffidavit" acceptedFileTypes="['image/*']" />
                                    </div> --}}

                                    <div class="flex justify-center items-center">
                                        <x-dynamic-file-upload
                                                inputHeading="Only Jpg or Jpeg"
                                            label="Father Cnic Affidavit"
                                            class="w-full"
                                            name="fatherCnicAffidavit"
                                            :filePath="auth()->user()->userFatherCnicAffidavit?->path ?? ''"
                                            :fileName="auth()->user()->userFatherCnicAffidavit?->name ?? ''"
                                        />
                                    </div>

                                    <div class="mt-2">
                                        <p class="font-medium text-xs text-center text-[#00000066]">JPG, JPEG,
                                            file size
                                            no
                                            more than 1MB</p>
                                    </div>

                                    @error('fatherCnicAffidavit')
                                        <div class="text-center error text-red-600 mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 mb-16">
        <div>
            <button wire:click.prevent="$emit('goToStep', 6)"
                class=" bg-transparent hover:bg-white text-sm px-3 py-2 md:px-6 md:py-3 mb-2 rounded-lg border-2 border-[#9BABB7]  gap-2 "
                type="button">
                <span class="flex flex-row items-center gap-2 justify-center text-[#687076] font-semibold text-base">
                    <x-heroicon-s-arrow-narrow-left class="w-5 h-5" />
                    Previous Step
                </span>
            </button>
        </div>
        <div class="text-right">

            <button class=" bg-[#3c1fff] hover:bg-[#5345ff] text-sm px-3 py-3 md:px-6 md:py-3 mb-2 rounded-lg  gap-2 "
                type="submit">
                <span
                    class="flex flex-row items-center gap-2 justify-center text-white font-semibold text-sm md:text-base">
                    Submit Application
                    <x-heroicon-s-check-circle class="w-5 h-5" />
                    <span wire:loading wire:target="submit">
                        <p class="flex"><x-loader /></p>
                    </span>
                </span>
            </button>
        </div>
    </div>
</form>
