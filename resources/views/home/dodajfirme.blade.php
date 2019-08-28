@extends('app.home.one_col')



@section('home_content_text')


 			<div class="row mt-5 mb-5 pt-5 pb-5 grey">
				<div class="col"></div>
				<div class="col-md-10">

					<h2>Dodaj firmę</h2>

					<form action="/wyslijzgloszenie" method="POST" class="form-horizontal toHide mt-4" role="form" id="f" name="form"  enctype="multipart/form-data">


						{{ csrf_field() }}

					    <div class="">

						<!-- Nazwa firmy -->
						<div class="form-group">
						    <div class="col-sm-12">
							<label for="firma" >
							Podaj nazwę firmy:
							</label>
						    </div>
						    <div class="col-sm-12">
							<input type="text" id="firma" name="firma" class="form-control" required="true" filter="email"  placeholder="Podaj nazwę firmy" />
						    </div>
						</div>

						<!-- Imię i nazwisko -->
						<div class="form-group">
						    <div class="col-sm-12">
							<label for="imie_nazwisko" >
							Podaj imię i nazwisko:
							</label>
						    </div>
						    <div class="col-sm-12">
							<input type="text" id="imie_nazwisko" name="imie_nazwisko" class="form-control" required="true" filter="email"  placeholder="Podaj imię i nazwisko" />
						    </div>
						</div>

						<!-- Imię i nazwisko -->
						<div class="form-group">
						    <div class="col-sm-12">
							<label for="telefon" >
							Podaj nr telefonu (bezpośredni):
							</label>
						    </div>
						    <div class="col-sm-12">
							<input type="text" id="telefon" name="telefon" class="form-control" required="true" filter="email"  placeholder="Podaj nr telefonu" />
						    </div>
						</div>

						<!-- Od -->
						<div class="form-group">
						    <div class="col-sm-12">
							<label for="email" >
							Podaj swój email:
							</label>
						    </div>
						    <div class="col-sm-12">
							<input type="email" id="email" name="email" class="form-control" required="true" filter="email"  placeholder="Podaj swój adres email" />
						    </div>
						</div>

						<div class="form-group mt-5">
						    <div class="col-sm-12">
								<input id="chck1" type="checkbox" class="form-check-input" required="true" placeholder="" /> 
								<label class="form-check-label ml-2" for="chck1"> Wyrażam zgodę na  otrzymywanie od  SVPR - wydawcy Nowego Kamieniarza, informacji handlowej i  materiałów marketingowych środkami komunikacji elektronicznej w  rozumieniu ustawy o  świadczeniu usług drogą elektroniczną.</label>							
						    </div>
						</div>

						<div class="form-group">
						    <div class="col-sm-12">
								<input id="chck2" type="checkbox" class="form-check-input" required="true" placeholder="" /> 
								<label class="form-check-label ml-2" for="chck2"> Wyrażam zgodę na kontakt ze strony SVPR - wydawcy Nowego Kamieniarza, w  celu marketingu bezpośredniego z użyciem telekomunikacyjnych urządzeń końcowych oraz  automatycznych systemów wywołujących.</label>							
						    </div>
						</div>


						<div class="g-recaptcha" data-sitekey="6Lc4JR8UAAAAAL2KqAKoWhQhUbvyi-XOnhHTVPue"></div>

					    </div>

					    <br>

					    <button type="submit" class="btn btn-primary" aria-label="Right Align">
							<span class="glyphicon glyphicon-save" aria-hidden="true"></span> Wyślij zgłoszenie
					    </button>

					</form>
				</div>

				<div class="col"></div>
			</div>





@stop
