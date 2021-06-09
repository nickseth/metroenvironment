@include('header')
<body class="sec1-bg">
<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container"><div class="d-flex align-center space-between">
    <div class="navbar-header">

      <a class="navbar-brand" href="#"><img src="images/metro-logo.svg" /></a>
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
 <div class="page-width mt-7">
 <div class="row"> <div class="col-sm-9">
 <div class="sec1-box-left">
 <div class="box-head">
 <div class="box-icon animate__animated animate__fadeInLeft"><img src="images/leaves.svg" /></div><h4 class="animate__animated animate__fadeIn">How many units of energy is required to mine 1 bitcoin?</h4>
 </div>
 <p class="animate__animated animate__fadeIn">Online processes also need significant amounts of non-renewable energy to function.<br>Choose the option you think is closest to the actual amount of energy used in <br>the mining of cryptocurrencies.</p>


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
 <div class="sec1-box-right bg-anim"></div>
 </div></div>
<div class="button-wrapper bottom-button">
<a href="{{url('/personal-level-start')}}" class="link-btn hvr-forward"><i class="fa fa-arrow-right fa-3x"></i></a>
</div>
 </div>
 </div></div>
</body>
</html>