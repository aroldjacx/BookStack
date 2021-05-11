<?php $__env->startSection('body'); ?>
    <?php echo $__env->make('shelves.list', ['shelves' => $shelves, 'view' => $view], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('left'); ?>
    <?php echo $__env->make('common.home-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('right'); ?>
    <div class="actions mb-xl xb1">
        <h5><?php echo e(trans('common.actions')); ?></h5>
        <!--div class="icon-list text-primary">
            <?php echo $__env->make('partials.view-toggle', ['view' => $view, 'type' => 'shelves'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('components.expand-toggle', ['target' => '.entity-list.compact .entity-item-snippet', 'key' => 'home-details'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.dark-mode-toggle', ['classes' => 'text-muted icon-list-item text-primary'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div-->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tri-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\apps\bookstack\resources\views/common/home-shelves.blade.php ENDPATH**/ ?>