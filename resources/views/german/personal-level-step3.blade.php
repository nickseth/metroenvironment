@include('/german/header')
<body class="personal-level-step3 personal-level-step">
<div style="display:none">
<div class="personal-level-step3">
<div class="circular-range-slider current-step-1 current-step-2 current-step-3 current-step-4 current-step-5 "><div class="rs-inner rs-bg-color rs-border"></div></div>
</div>

</div>
<div class="loader-wrap"><div class="loader"><div class="loadersmall"></div></div></div>
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
 <div class="box-icon animate__animated animate__fadeInLeft"><img src="../german_assets/images/leaves.svg" /></div>
 <div class="animate__animated animate__fadeIn green-text">Bio-Lebensmittel machen einen großen Teil meiner Ernährung aus.</div>
 </div>
 <p class="animate__animated animate__fadeIn gray-text">Bewegen Sie den Schieberegler auf dem Kreis auf einer Skala von 1 bis 5, um Ihre Antwort einzureichen, wobei 1 am wenigsten wahrscheinlich und 5 am wahrscheinlichsten entspricht.</p>

</div>
 
 </div>
 <div class="col-sm-12">
<form class="survey-form hide required-validation" data-validation-type="circular-slider">
<input type="hidden" class="hidden-circular-slider-input" value="0" name="personal_level_step3"/>
</form>
<div class="circular-range-slider"></div>
 </div></div>
<div class="button-wrapper bottom-button link-np">
<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="ZURÜCK" data-front="ZURÜCK" ></a>
<a href="{{url('/de/personal-level-step4')}}" class="link-btn get-survey-details btn-flip" data-back="WEITER" data-front="WEITER" ></a>
</div>
 </div>
 </div></div>



</body>