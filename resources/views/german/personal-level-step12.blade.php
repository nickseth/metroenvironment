@include('/german/header')
<body class="personal-level-step12 personal-level-step sec2-bg2">
<div class="loader-wrap"><div class="loader"><img src="images/anim-tree.gif" /></div></div>
<nav class="navbar navbar-default">
  <div class="container"><div class="d-flex align-center space-between">
    <div class="navbar-header">

      <a class="navbar-brand" href="{{URL::to('/de')}}"><img src="../german_assets/images/metro-logo.svg" /></a>
    </div>
    <div class=" navbar-collapse right-header text-right" id="myNavbar">
      <h1>#<span>M</span>vironment</h1><strong>NACHHALTIGKEIT & DU</strong>
    </div></div>
  </div>
</nav>



<div class="container "><div class="relative">

 
 <div class="page-width mt-7">
 <div class="row">

  <div class="col-sm-12">

 <div class="sec1-box-center text-center">
 <div class="box-top">
 
 <div class="animate__animated animate__fadeIn green-text">Welche der folgenden alternativen Proteinquellen verwenden Sie in Ihrer Ernährung?</div>
 </div>
 <p class="animate__animated animate__fadeIn gray-text">Ziehen Sie die Lebensmittel, die Sie regelmäßig konsumieren, per Drag & Drop auf den Teller.</p>

</div>
 
 </div>
 <div class="col-sm-12">
 <div class="vegi-grup-wrap mt-7">
<div class="vegi-group">
 <div class="row"> <div class="col-sm-3">
 
 <div class="plate-item-3 plate-item "><img src="../german_assets/images/plate-item-3.svg" data-text="Tofu/soy products" /></div><p class="text-center"><strong>Tofu-/Sojaprodukte</strong>(Sojakoteletts, Seitan, Tempeh etc.)</p></div>
<div class="col-sm-6">
 

 
 </div><div class="col-sm-3"><div class="plate-item-2 plate-item"><img src="../german_assets/images/plate-item-2.svg" data-text="Meat alternatives" /></div><p class="text-center"><strong>Fleischalternativen</strong>(Veggiewurst, Hackfleisch, Burger)</p></div></div>
 <div class="row"><div class="col-sm-3 ">
 <div class="plate-item-1 plate-item"><img src="../german_assets/images/plate-item-1.svg" data-text="Legumes" /></div>
 <p class="text-center"><strong>Hülsenfrüchte</strong>(Linsen, Kichererbsen, Kidneybohnen, Erbsen etc.)</p></div><div class="col-sm-6 "><div class="vegi-plate">

<div class="empty-plate">
</div>
</div></div><div class="col-sm-3 "> <div class="plate-item-4 plate-item"><img src="../german_assets/images/plate-item-4.svg" data-text="Nuts/seeds" /></div><p class="text-center"><strong>Nüsse/Samen</strong>(Kürbiskerne, Sonnenblumenkerne, Erdnüsse, Cashewnüsse etc.)</p></div></div>
 </div>
</div>

</div>
 </div></div>
 <div class="form-group text-center">
										<input type="checkbox" id="none_of_these" value="
Keine von diesen" class="never-selection-checkbox">
										<label for="none_of_these">
Keine von diesen</label>
									</div>
 <form class="survey-form hide required-validation" data-validation-type="single-input-field">
				<input type="hidden" name="personal_level_step12" value="" class="drag-input-details"/>
			</form>
<div class="button-wrapper bottom-button link-np">
<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="ZURÜCK" data-front="ZURÜCK" ></a>
<a href="#" class="link-btn reset-btn btn-flip" data-back="Zurücksetzen" data-front="Zurücksetzen" ></a>
<a href="{{url('/de/personal-level-step13')}}" class="link-btn get-survey-details btn-flip get-veg-input-details" data-back="WEITER" data-front="WEITER" ></a>
</div>
 </div>
 </div></div>



</body>