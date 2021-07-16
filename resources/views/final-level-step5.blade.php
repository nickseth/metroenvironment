@include('header')
<body class="final-level-step12 personal-level-step">
<div style="display:none">
<img src="images/fls-12-img0.svg" />
<img src="images/fls-12-img1.svg" />
<img src="images/fls-12-img2.svg" />
<img src="images/fls-12-img3.svg" />
<img src="images/fls-12-img4.svg" />
<img src="images/fls-12-img5.svg" />
<img src="images/fls-12-img6.svg" />
<div class="final-level-step12">
<div class="circular-range-slider current-step-1 current-step-2 current-step-3 current-step-4 current-step-5 "><div class="rs-inner rs-bg-color rs-border"></div></div>
</div>

</div>
<div class="loader-wrap"><div class="loader"><div class="loadersmall"></div></div></div>
<nav class="navbar navbar-default">
  <div class="container"><div class="d-flex align-center space-between">
    <div class="navbar-header">

      <a class="navbar-brand" href="{{URL::to('/')}}"><img src="images/metro-logo.svg" /></a>
    </div>
    <div class=" navbar-collapse right-header text-right" id="myNavbar">
      <h1>#<span>M</span>vironment</h1><strong>Sustainability & WORK</strong>
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
 <div class="animate__animated animate__fadeIn green-text">I believe, sustainability is a promising business opportunity to be leveraged.</div>
 </div>
 <p class="animate__animated animate__fadeIn gray-text">Move the slider on the circle on a scale of 1 to 5, where 1 = Strongly Disagree and 5 = Strongly agree.</p>

</div>
 
 </div>
 <div class="col-sm-12">
<form class="survey-form hide required-validation" data-validation-type="circular-slider">
<input type="hidden" class="hidden-circular-slider-input" value="0" name="final_level_step5"/>
</form>
<div class="circular-range-slider"></div>
 </div></div>
<div class="button-wrapper bottom-button link-np">
<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="Back" data-front="Back" ></a>
<a href="{{url('/final-level-step7')}}" class="link-btn get-survey-details btn-flip" data-back="Next" data-front="Next" ></a>
</div>
 </div>
 </div>
 <div class="col-sm-12 text-center step-text">
	<p class="animate__animated animate__fadeIn gray-text">21 of 25</p>
</div>
 </div>



</body>