@include('header')
<body class="personal-level-step1 personal-level-step">
<nav class="navbar navbar-default">
  <div class="container"><div class="d-flex align-center space-between">
    <div class="navbar-header">

      <a class="navbar-brand" href="{{URL::to('/')}}"><img src="images/metro-logo.svg" /></a>
    </div>
    <div class=" navbar-collapse right-header text-right" id="myNavbar">
      <h1>#<span>M</span>vironment</h1>
    </div></div>
  </div>
</nav>

<div class="main-content-wrapper">
<form class="survey-form hide">
<input type="hidden" class="hidden-circular-slider-input" value="0" name="buy_locally_grown_fruit"/>
</form>
<div class="circular-range-slider"></div>
  <div class="button-wrapper bottom-button "><div class="container text-right">
  
<a href="{{url('/intro-section3')}}" class="link-btn hvr-forward get-survey-details"><i class="fa fa-arrow-right fa-3x"></i></a>
</div></div>
</div>
</body>