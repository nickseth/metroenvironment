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
 <p class="animate__animated animate__fadeIn">Online processes also need significant amounts of non-renewable energy to function.<br>Choose the option you think is closest to the actual amount of energy used in <br>the mining of cryptocurrencies.</p>
 <div class="box-head">
 <div class="box-icon animate__animated animate__fadeInLeft"><img src="images/leaves.svg" /></div><h4 class="animate__animated animate__fadeIn">How many units of energy are required to mine one bitcoin?</h4>
 </div>
 


  <form class="survey-form"><div class="checkbox-group">
    <div class="form-group">
      <input type="radio" id="html" name="intro_section_question3" value="62 Terawatts">
      <label for="html">62 Terawatts</label>
    </div>
    <div class="form-group">
      <input type="radio" id="css" name="intro_section_question3" value="72 Terawatts">
      <label for="css">72 Terawatts</label>
    </div>
    <div class="form-group">
      <input type="radio" id="javascript" name="intro_section_question3" value="10 Terawatts">
      <label for="javascript">10 Terawatts</label>
    </div>
	 <div class="form-group">
      <input type="radio" id="java" name="intro_section_question3" value="28 Terawatts">
      <label for="java">28 Terawatts</label>
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
 </div></div>
</body>
</html>