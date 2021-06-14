@include('header')
<body class="final-level-step12 personal-level-step">
<nav class="navbar navbar-default">
  <div class="container"><div class="d-flex align-center space-between">
    <div class="navbar-header">

      <a class="navbar-brand" href="{{URL::to('/')}}"><img src="images/metro-logo.svg" /></a>
    </div>
    <div class=" navbar-collapse right-header text-right" id="myNavbar">
      <h1>#<span>M</span>vironment</h1><strong>Professional level</strong>
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
 <div class="animate__animated animate__fadeIn green-text">I believe, sustainability is a promising business opportunity to be leveraged</div>
 </div>
 <p class="animate__animated animate__fadeIn gray-text">Move the slider on the circle on a scale of 0 to 5 to submit your response, where 0 = least likely and 5 = most likely</p>

</div>
 
 </div>
 <div class="col-sm-12">
<form class="survey-form hide">
<input type="hidden" class="hidden-circular-slider-input" value="0" name="final_level_step12"/>
</form>
<div class="circular-range-slider"></div>
 </div></div>
<div class="button-wrapper bottom-button">
<a href="{{url('/final-level-step13')}}" class="link-btn get-survey-details btn-flip" data-back="Next" data-front="Next" ></a>
</div>
 </div>
 </div></div>



</body>