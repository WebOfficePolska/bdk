<?php $__env->startSection('home_content_text'); ?>


 			<div class="row vertical-center">
				<div class="col"></div>
				<div class="col-md-5">

					  <form class="justify-content-center" method="GET" action="//wyszukiwarka.baza-kamieniarska.pl/kamieniarstwo/wyszukiwarka.nsf/wyszukiwanie.xsp">
					    <div class="input-group">

					      <input type="text" class="form-control" placeholder="np. parapet Wrocław" name="szukaj">
	   				      <div class="input-group-prepend">
					        <button type="submit" class=" btn input-group-text" id="basic-addon1"><i class="fas fa-search"></i></button>
					      </div>

					    </div>
					  </form>

						<p class="small text-center mt-2"> Baza Danych Kamieniarstwa - wpisz żądaną frazę, usługę, produkt.</p>				
				</div>
				<div class="col"></div>
			</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('app.home.one_col', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>