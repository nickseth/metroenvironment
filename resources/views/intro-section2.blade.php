@include('header')
<body class="sec1-bg">
<!-- Navbar -->
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

<div class="container "><div class="relative">

 <div class="page-head">
 <h2>Introductory Section</h2>
 </div>
 <div class="page-width mt-7 intro-sectionpage">
 <div class="row"> <div class="col-sm-9">
 <div class="sec1-box-left">
 <p class="animate__animated animate__fadeIn">The materials used to create these straws are all different from one another.<br>Choose the material you think is the most environment friendly.</p>
 <div class="box-head">
 <div class="box-icon animate__animated animate__fadeInLeft"><img src="images/leaves.svg" /></div><h4 class="animate__animated animate__fadeIn">Which straw do you think is the most sustainable?</h4>
 </div>
 


  <form class="survey-form"><div class="checkbox-group">
    <div class="form-group">
      <input type="radio" id="html" name="intro_section_question2" value="1">
      <label for="html">Wooden</label>
    </div>
    <div class="form-group">
      <input type="radio" id="css" name="intro_section_question2" value="2">
      <label for="css">Paper</label>
    </div>
    <div class="form-group">
      <input type="radio" id="javascript" name="intro_section_question2" value="3">
      <label for="javascript">Plastic</label>
    </div>
	 <div class="form-group">
      <input type="radio" id="java" name="intro_section_question2" value="4">
      <label for="java">Steel</label>
    </div></div>
  </form>

</div>
 </div><div class="col-sm-3">
 <div class="sec1-box-right  animate__animated animate__fadeInRight"><img src="images/straw.svg" class="jump-anim"/></div>
 </div></div>
<div class="button-wrapper bottom-button">
<a href="{{url('/intro-section3')}}" class="link-btn hvr-forward get-survey-details"><i class="fa fa-arrow-right fa-3x"></i></a>
</div>
 </div>
 </div></div>
</body>
</html>