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
 <p class="animate__animated animate__fadeIn">Global warming is a serious problem, and rising temperatures have shifted natural climatic patterns.<br/>Who do you think will feel these adverse effects the most?</p>
 <div class="box-head">
 <div class="box-icon animate__animated animate__fadeInLeft"><img src="images/leaves.svg" /></div><h4 class="animate__animated animate__fadeIn">Climate change will demonstrably affect</h4>

 </div>
  <p class="animate__animated animate__fadeIn gray-text">Please select the option most relevant to you.</p>
 


  <form class="survey-form required-validation" data-validation-type="radio" data-correct-answers="Climate change will affect everyone adversely."><div class="checkbox-group" >
    <div class="form-group">
      <input type="radio" id="html" class="correct-answer" name="intro_section_question1"  value="My generation">
      <label for="html">My generation</label>
    </div>
    
    <div class="form-group">
      <input type="radio" id="javascript" class="correct-answer" name="intro_section_question1"  value="My children and grandchildren">
      <label for="javascript">My children and grandchildren</label>
    </div>
	<div class="form-group">
      <input type="radio" id="css" class=" correct-answer" name="intro_section_question1"  value="Everyone">
      <label for="css">Everyone</label>
    </div>
	 <div class="form-group">
      <input type="radio" id="java" class="correct-answer" name="intro_section_question1" value="This not a serious threat">
      <label for="java">This is not a serious threat</label>
    </div></div>
	
  </form>

</div>
 
 </div><div class="col-sm-3">
 <div class="sec1-box-right animate__animated animate__fadeInRight"><div class="bird-anim"><img src="images/bird-anim.gif" /></div>
 <img src="images/burning-earth-anim.gif"/></div>
 </div></div>
<div class="button-wrapper bottom-button link-np">
<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="Back" data-front="Back" ></a>
<a href="{{url('/intro-section2')}}" class="link-btn get-survey-details btn-flip" data-back="Next" data-front="Next" ></a>
</div>
 </div>
 </div>
 <div class="col-sm-12 text-center step-text">
	<p class="animate__animated animate__fadeIn gray-text">2 of 25</p>
</div>
 </div>
</body>
</html>