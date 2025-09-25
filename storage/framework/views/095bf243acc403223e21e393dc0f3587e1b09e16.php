<?php
    $action = $this->getMountedFormComponentAction();
?>

<form wire:submit.prevent="callMountedFormComponentAction">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'forms::components.modal.index','data' => ['id' => $this->id . '-form-component-action','wire:key' => $action ? $this->id . '.' . $action->getComponent()->getStatePath() . '.actions.' . $action->getName() . '.modal' : null,'visible' => filled($action),'width' => $action?->getModalWidth(),'slideOver' => $action?->isModalSlideOver(),'closeByClickingAway' => $action?->isModalClosedByClickingAway(),'displayClasses' => 'block','xInit' => 'livewire = $wire.__instance','xOn:modalClosed.stop' => 'if (\'mountedFormComponentAction\' in livewire?.serverMemo.data) livewire.set(\'mountedFormComponentAction\', null)']]); ?>
<?php $component->withName('forms::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->id . '-form-component-action'),'wire:key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($action ? $this->id . '.' . $action->getComponent()->getStatePath() . '.actions.' . $action->getName() . '.modal' : null),'visible' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(filled($action)),'width' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($action?->getModalWidth()),'slide-over' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($action?->isModalSlideOver()),'close-by-clicking-away' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($action?->isModalClosedByClickingAway()),'display-classes' => 'block','x-init' => 'livewire = $wire.__instance','x-on:modal-closed.stop' => 'if (\'mountedFormComponentAction\' in livewire?.serverMemo.data) livewire.set(\'mountedFormComponentAction\', null)']); ?>
        <?php if($action): ?>
            <?php if($action->isModalCentered()): ?>
                <?php if($heading = $action->getModalHeading()): ?>
                     <?php $__env->slot('heading', null, []); ?> 
                        <?php echo e($heading); ?>

                     <?php $__env->endSlot(); ?>
                <?php endif; ?>

                <?php if($subheading = $action->getModalSubheading()): ?>
                     <?php $__env->slot('subheading', null, []); ?> 
                        <?php echo e($subheading); ?>

                     <?php $__env->endSlot(); ?>
                <?php endif; ?>
            <?php else: ?>
                 <?php $__env->slot('header', null, []); ?> 
                    <?php if($heading = $action->getModalHeading()): ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'forms::components.modal.heading','data' => []]); ?>
<?php $component->withName('forms::modal.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                            <?php echo e($heading); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php endif; ?>

                    <?php if($subheading = $action->getModalSubheading()): ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'forms::components.modal.subheading','data' => []]); ?>
<?php $component->withName('forms::modal.subheading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                            <?php echo e($subheading); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php endif; ?>
                 <?php $__env->endSlot(); ?>
            <?php endif; ?>

            <?php echo e($action->getModalContent()); ?>


            <?php if($action->hasFormSchema()): ?>
                <?php echo e($this->getMountedFormComponentActionForm()); ?>

            <?php endif; ?>

            <?php echo e($action->getModalFooter()); ?>


            <?php if(count($action->getModalActions())): ?>
                 <?php $__env->slot('footer', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'forms::components.modal.actions','data' => ['fullWidth' => $action->isModalCentered()]]); ?>
<?php $component->withName('forms::modal.actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['full-width' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($action->isModalCentered())]); ?>
                        <?php $__currentLoopData = $action->getModalActions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modalAction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($modalAction); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                 <?php $__env->endSlot(); ?>
            <?php endif; ?>
        <?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</form>
<?php /**PATH C:\laragon\www\bs-nursing\vendor\filament\forms\src\/../resources/views/components/actions/modal/index.blade.php ENDPATH**/ ?>