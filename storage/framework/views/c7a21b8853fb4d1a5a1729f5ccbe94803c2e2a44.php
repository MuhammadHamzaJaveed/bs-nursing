<?php
    $notifications = $this->getDatabaseNotifications();
    $unreadNotificationsCount = $this->getUnreadDatabaseNotificationsCount();
?>

<div
    <?php if($pollingInterval = $this->getPollingInterval()): ?>
        wire:poll.<?php echo e($pollingInterval); ?>

    <?php endif; ?>
    class="flex items-center"
>
    <?php if($databaseNotificationsTrigger = $this->getDatabaseNotificationsTrigger()): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'notifications::components.database.trigger','data' => []]); ?>
<?php $component->withName('notifications::database.trigger'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
            <?php echo e($databaseNotificationsTrigger->with(['unreadNotificationsCount' => $unreadNotificationsCount])); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'notifications::components.database.modal.index','data' => ['notifications' => $notifications,'unreadNotificationsCount' => $unreadNotificationsCount]]); ?>
<?php $component->withName('notifications::database.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['notifications' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($notifications),'unread-notifications-count' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($unreadNotificationsCount)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div>
<?php /**PATH C:\laragon\www\bs-nursing\vendor\filament\notifications\src\/../resources/views/components/database/index.blade.php ENDPATH**/ ?>