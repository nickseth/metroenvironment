@include('header')
<body class="sec1-bg">
<div class="loader-wrap"><div class="loader"><div class="loadersmall"></div></div></div>
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
 <p class="animate__animated animate__fadeIn">The materials used to produce these straws are all different from one another.<br>Choose the material you think is the most environment friendly.</p>
 <div class="box-head">
 <div class="box-icon animate__animated animate__fadeInLeft"><img src="images/leaves.svg" /></div><h4 class="animate__animated animate__fadeIn">Which straw do you think is the most sustainable?</h4>
 </div>
 <p class="animate__animated animate__fadeIn gray-text">Please select one material from the four options given below that you think is the most environment friendly. Click next to submit and proceed.</p>
 


  <form class="survey-form required-validation" data-validation-type="radio" data-correct-answers="The correct answer is Steel"><div class="checkbox-group">
    <div class="form-group">
      <input type="radio" id="html" name="intro_section_question2" class="correct-answer" value="1">
      <label for="html">Wooden</label>
    </div>
    <div class="form-group">
            <input type="radio" id="css" name="intro_section_question2" class="correct-answer" value="2">
      <label for="css">Paper</label>
    </div>
    <div class="form-group">
      <input type="radio" id="javascript" name="intro_section_question2" class="correct-answer"  value="3">
      <label for="javascript">Plastic</label>
    </div>
	 <div class="form-group">
      <input type="radio" id="java" name="intro_section_question2" class="correct-answer" value="4">
      <label for="java">Steel</label>
    </div></div>
  </form>

</div>
 </div><div class="col-sm-3">
 <div class="sec1-box-right  animate__animated animate__fadeInRight"><img src="images/straw.svg" class="jump-anim"/></div>
 </div></div>
<div class="button-wrapper bottom-button link-np">
<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="Back" data-front="Back" ></a>
<a href="{{url('/intro-section3')}}" class="link-btn get-survey-details btn-flip" data-back="Next" data-front="Next" ></a>
</div>
 </div>
 </div>
 <div class="col-sm-12 text-center step-text">
	<p class="animate__animated animate__fadeIn gray-text">3 of 25</p>
</div>
 </div>
</body>
</html>