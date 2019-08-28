<?php $__env->startSection('content'); ?>

	<div class="row">

		<div class="col-md-12">

		    <?php echo $__env->yieldContent('content_text'); ?>

		</div>

	</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('app.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>