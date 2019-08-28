<?php $__env->startSection('content_text'); ?>

	<?php echo $__env->yieldContent('home_content_text'); ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('app.app_base_one_col', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>