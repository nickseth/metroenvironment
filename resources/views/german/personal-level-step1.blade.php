@include('header')
<body class="personal-level-step1 personal-level-step">
<nav class="navbar navbar-default">
  <div class="container"><div class="d-flex align-center space-between">
    <div class="navbar-header">

      <a class="navbar-brand" href="{{URL::to('/')}}"><img src="images/metro-logo.svg" /></a>
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
 <div class="box-icon animate__animated animate__fadeInLeft"><img src="images/leaves.svg" /></div>
 <div class="animate__animated animate__fadeIn green-text">Ich kaufe Obst und Gemüse aus lokalem Anbau.</div>
 </div>
 <p class="animate__animated animate__fadeIn gray-text">Bewegen Sie den Schieberegler auf dem Kreis auf einer Skala von 1 bis 5, um Ihre Antwort einzureichen, wobei 1 = am wenigsten</p>

</div>
 
 </div>
 <div class="col-sm-12">
<form class="survey-form hide required-validation" data-validation-type="circular-slider">
<input type="hidden" class="hidden-circular-slider-input" value="0" name="personal_level_step1"/>
</form>
<div class="circular-range-slider"></div>
 </div></div>
<div class="button-wrapper bottom-button link-np">
<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="ZURÜCK" data-front="ZURÜCK" ></a>

<a href="{{url('/personal-level-step2')}}" class="link-btn get-survey-details btn-flip" data-back="WEITER" data-front="WEITER" ></a>
</div>
 </div>
 </div></div>



</body>