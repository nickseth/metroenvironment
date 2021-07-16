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
 <p class="animate__animated animate__fadeIn">Online processes also need significant amounts of non-renewable energy to function.<br>Choose the option that you think is closest to the actual amount of energy used in the mining of cryptocurrencies.</p>
 <div class="box-head">
 <div class="box-icon animate__animated animate__fadeInLeft"><img src="images/leaves.svg" /></div><h4 class="animate__animated animate__fadeIn">How many units of energy are required to mine <br/>one bitcoin?</h4>
 </div>
  <p class="animate__animated animate__fadeIn gray-text">Please select one amount from the four options given below that you think will be required to mine one unit of cryptocurrency. Click next to submit and proceed. 
</p>


  <form class="survey-form required-validation" data-validation-type="radio" data-correct-answers="The correct answer is 72 terawatts"><div class="checkbox-group">
    <div class="form-group">
      <input type="radio" id="html" name="intro_section_question3" class="correct-answer" value="62 Terawatts">
      <label for="html">62 Terrawatts hours</label>
    </div>
    <div class="form-group">
      <input type="radio" id="css" name="intro_section_question3" class="correct-answer" value="72 Terawatts">
      <label for="css">72 Terrawatts hours</label>
    </div>
    <div class="form-group">
      <input type="radio" id="javascript" name="intro_section_question3" class="correct-answer"value="10 Terawatts">
      <label for="javascript">10 Terrawatts hours</label>
    </div>
	 <div class="form-group">
      <input type="radio" id="java" name="intro_section_question3" class="correct-answer" value="28 Terawatts">
      <label for="java">28 Terrawatts hours</label>
    </div></div>
	  </form>

</div>
 
 </div><div class="col-sm-3">
 <div class="sec1-box-right  animate__animated animate__fadeInRight"><img src="images/bitcoin-anim.gif" /> </div>
 </div></div>
<div class="button-wrapper bottom-button link-np">
<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="Back" data-front="Back" ></a>
<a href="{{url('/personal-level-start')}}" class="link-btn get-survey-details btn-flip" data-back="Next" data-front="Next" ></a>
</div>
 </div>
 </div>
  <div class="col-sm-12 text-center step-text">
	<p class="animate__animated animate__fadeIn gray-text">4 of 25</p>
</div>
 </div>
</body>
</html>