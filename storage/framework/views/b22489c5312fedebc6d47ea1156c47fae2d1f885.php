<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('logo', null, []); ?> 
     <?php $__env->endSlot(); ?>
    <script>
        $(document).ready(function () {
            // $("#exampleModal").modal('show');
        });
    </script>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                            aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="<?php echo e(asset('images/public_notice_watim_medical_college.jpg')); ?>"/>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <div class="flex justify-center pr-5 bg-cover bg-center  md:gap-14 lg:gap-1 items-center min-h-screen"
             style="background-image: url('<?php echo e(asset('images/new-bg-blue.png')); ?>');">
            <!-- Centered Image and Text -->
            <div class="grid  md:grid-cols-2">
                <div class="flex flex-col justify-center items-center px-4 md:px-8 mb-10 md:mb-1">
                    <div class="flex flex-row justify-center gap-10 md:gap-20 lg:gap-44">
                        <img src="<?php echo e(asset('images/privateclogo.png')); ?>" alt="Login Image"
                             class="rounded-lg w-20 h-20 md:w-20 md:h-20">
                        <img src="<?php echo e(asset('images/login.png')); ?>" alt="Login Image" class="w-20 h-20 md:w-20 md:h-20">
                    </div>
                    <p
                            class="text-white text-center font-poppins text-base lg:text-lg font-semibold tracking-normal pt-4">
                        Online Admission Application Portal for Private Sector<br/>
                         Dental Colleges in Punjab<br/>

                    </p>
                    <p class="text-white font-poppins tracking-wide">Session <?php echo e(config('envdata.pdf_session')); ?></p>
                    <p
                            class="text-white text-center font-poppins text-base lg:text-lg font-semibold tracking-normal pt-4">
                        University of Health Sciences (UHS), Lahore<br/>
                        Specialized Healthcare & Medical Education Department (SH&MED)<br/>
                        Government of the Punjab

                    </p>
                    <div class="flex flex-col gap-4 mt-6 lg:flex-row">
                        <a href="https://uhs.edu.pk/downloads/bdsadmissions2425.pdf" target="_blank">
                            <?php if (isset($component)) { $__componentOriginalbd1b2348f4874b2c103814cdbbacb8cf8aef3b4d = $component; } ?>
<?php $component = $__env->getContainer()->make(WireUi\View\Components\Button::class, ['label' => 'Private Dental Colleges in Punjab','rightIcon' => 'cloud-download']); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['style' => 'color: white; background-color: blueviolet']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd1b2348f4874b2c103814cdbbacb8cf8aef3b4d)): ?>
<?php $component = $__componentOriginalbd1b2348f4874b2c103814cdbbacb8cf8aef3b4d; ?>
<?php unset($__componentOriginalbd1b2348f4874b2c103814cdbbacb8cf8aef3b4d); ?>
<?php endif; ?>
                        </a>
                        
                    </div>
                    <div class="mt-5">
                        <a href="#">
                            <?php if (isset($component)) { $__componentOriginalbd1b2348f4874b2c103814cdbbacb8cf8aef3b4d = $component; } ?>
<?php $component = $__env->getContainer()->make(WireUi\View\Components\Button::class, ['label' => 'For Complaint: +92-42-111-33-33-66','rightIcon' => 'phone']); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['style' => 'color: white; background-color: red']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd1b2348f4874b2c103814cdbbacb8cf8aef3b4d)): ?>
<?php $component = $__componentOriginalbd1b2348f4874b2c103814cdbbacb8cf8aef3b4d; ?>
<?php unset($__componentOriginalbd1b2348f4874b2c103814cdbbacb8cf8aef3b4d); ?>
<?php endif; ?>
                        </a>
                        
                    </div>

                </div>

                <!-- Signup -->
                <div class="w-full flex justify-center items-center md:justify-end md:items-end lg:pr-10 ">
                    <div class="flex flex-col justify-end items-end ">

                        <div class="flex p-5 bg-white rounded-lg shadow-xl md:p-9">

                            <div class="w-full  mt-5">
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => ['class' => 'mb-4']]); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <?php if(session('status')): ?>
                                    <div class="mb-4  font-medium text-sm text-blue-600">
                                        <?php echo session('status'); ?>

                                    </div>
                                <?php endif; ?>
                                <?php if(session('primary')): ?>
                                    <div class="mb-4 w-80 font-medium text-sm text-blue-600">
                                        <?php echo session()->pull('primary'); ?>

                                    </div>
                                <?php endif; ?>

                                <?php if(session('message')): ?>
                                    <div class="mb-4 font-medium text-sm text-red-600">
                                        <?php echo session('message'); ?>


                                    </div>
                                <?php endif; ?>

                                <div class="text-center">
                                    <h1 class="mb-4  text-2xl lg:text-3xl font-bold font-inter text-black">
                                        Login here
                                    </h1>
                                </div>

                                <div class=" mt-8">
                                    <?php if (isset($component)) { $__componentOriginalc0a351f3c0423aeafa2f19c5e8604c5318708f8a = $component; } ?>
<?php $component = $__env->getContainer()->make(WireUi\View\Components\Input::class, ['label' => 'Email *']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'email','placeholder' => 'Email','class' => 'w-full md:w-80 lg:w-96','type' => 'email','name' => 'email','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('email')),'required' => true,'autofocus' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc0a351f3c0423aeafa2f19c5e8604c5318708f8a)): ?>
<?php $component = $__componentOriginalc0a351f3c0423aeafa2f19c5e8604c5318708f8a; ?>
<?php unset($__componentOriginalc0a351f3c0423aeafa2f19c5e8604c5318708f8a); ?>
<?php endif; ?>
                                </div>

                                <div class="mt-4">
                                    <?php if (isset($component)) { $__componentOriginalc0a351f3c0423aeafa2f19c5e8604c5318708f8a = $component; } ?>
<?php $component = $__env->getContainer()->make(WireUi\View\Components\Input::class, ['label' => 'Password *']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'password','placeholder' => 'Password','class' => 'w-full md:w-80 lg:w-96','type' => 'password','name' => 'password','required' => true,'autocomplete' => 'current-password']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc0a351f3c0423aeafa2f19c5e8604c5318708f8a)): ?>
<?php $component = $__componentOriginalc0a351f3c0423aeafa2f19c5e8604c5318708f8a; ?>
<?php unset($__componentOriginalc0a351f3c0423aeafa2f19c5e8604c5318708f8a); ?>
<?php endif; ?>
                                </div>

                                <div class="grid grid-cols-2 mt-6">
                                    <div class="flex items-center">
                                        <label for="remember_me" class="flex items-center">
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.checkbox','data' => ['id' => 'remember_me','name' => 'remember','class' => 'w-3 h-3 border-[1.2px] rounded-none border-[#606060]']]); ?>
<?php $component->withName('jet-checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'remember_me','name' => 'remember','class' => 'w-3 h-3 border-[1.2px] rounded-none border-[#606060]']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                            <span
                                                    class="ml-3 text-[#909090] text-sm font-sans"><?php echo e(__('Remember me')); ?></span>
                                        </label>
                                    </div>
                                    <div class="flex justify-end">
                                        <p class="mt-1">
                                            <a class="text-[#909090] text-[13px] font-normal hover:underline font-sans"
                                               href="<?php echo e(route('password.request')); ?>">
                                                Forgot password?
                                            </a>
                                        </p>
                                    </div>
                                </div>

                                <!-- Google Recaptcha -->
                                <div>
                                    <input type="hidden" name="g-recaptcha-response" value="true">
                                    
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['style' => 'border-radius: 3px ;background: #3c1fff','class' => 'block w-full md:w-full px-[27px] py-2 mt-4 text-[16px] items-center justify-center
                                font-normal text-center font-sans text-white bg-cyan border rounded-[5px] leading-normal']]); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['style' => 'border-radius: 3px ;background: #3c1fff','class' => 'block w-full md:w-full px-[27px] py-2 mt-4 text-[16px] items-center justify-center
                                font-normal text-center font-sans text-white bg-cyan border rounded-[5px] leading-normal']); ?>
                                        <?php echo e(__('Sign In')); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>

<?php /**PATH C:\laragon\www\bs-nursing\resources\views/auth/login.blade.php ENDPATH**/ ?>