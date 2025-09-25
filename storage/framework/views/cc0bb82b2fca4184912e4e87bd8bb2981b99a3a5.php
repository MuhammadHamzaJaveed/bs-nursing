<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.icon-button','data' => ['label' => __('filament::layout.buttons.database_notifications.label'),'icon' => 'heroicon-o-bell','color' => $unreadNotificationsCount ? 'primary' : 'secondary','indicator' => $unreadNotificationsCount,'class' => '-mr-1 ml-4 rtl:-ml-1 rtl:mr-4']]); ?>
<?php $component->withName('filament::icon-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('filament::layout.buttons.database_notifications.label')),'icon' => 'heroicon-o-bell','color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($unreadNotificationsCount ? 'primary' : 'secondary'),'indicator' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($unreadNotificationsCount),'class' => '-mr-1 ml-4 rtl:-ml-1 rtl:mr-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\bs-nursing\vendor\filament\filament\src\/../resources/views/components/layouts/app/topbar/database-notifications-trigger.blade.php ENDPATH**/ ?>