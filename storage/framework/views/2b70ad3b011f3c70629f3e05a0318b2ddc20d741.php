

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.widget','data' => ['class' => 'col-span-12']]); ?>
<?php $component->withName('filament::widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'col-span-12']); ?>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.card.index','data' => ['class' => 'flex flex-col h-full w-full']]); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'flex flex-col h-full w-full']); ?>
            <section class="h-full">
                <div class="flex flex-col h-full justify-between rounded-lg pb-8 p-6 xl:p-8 bg-gray-50">
                    <div>
                        <h4 class="font-bold text-2xl text-red-600 leading-tight">Notice</h4>
                        <div class="mt-4">
                            <p>
                                If a student wants to change his/her upgradation choice, they must contact the respective college within three days of display of the last selection list.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.card.index','data' => ['class' => 'flex flex-col h-full w-full']]); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'flex flex-col h-full w-full']); ?>
            <section class="h-full">
                <div class="flex flex-col h-full justify-between rounded-lg pb-8 p-6 xl:p-8 bg-gray-50">
                    <div>
                        <h4 class="font-bold text-2xl text-red-600  leading-tight">Note</h4>
                        <div class="mt-4">
                            <p>
                                Please download the Joining report Required For Modification.
                            </p>
                        </div>
                    </div>
                    <div>
                        <a class="mt-1 inline-flex font-bold items-center border-2 border-transparent outline-none focus:ring-1 focus:ring-offset-2 focus:ring-link active:bg-link active:text-gray-700 active:ring-0 active:ring-offset-0 leading-normal bg-link text-gray-700 hover:bg-opacity-80 text-base rounded-lg py-1.5 px-4 hover:underline"
                           aria-label="Quick Start" target="_self" href="<?php echo e(asset('Joining_report_modification.pdf')); ?>">
                            Download Joining report modification
                            <svg data-slot="icon" fill="none" class="ml-3" height="20" width="20" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\bs-nursing\resources\views/filament/resources/merit-list-from-college-resource/widgets/college-notice.blade.php ENDPATH**/ ?>