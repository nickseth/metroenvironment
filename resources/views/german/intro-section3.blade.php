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
 <h2>EINFÜHRUNGSABSCHNITT</h2>
 </div>
 <div class="page-width mt-7 intro-sectionpage">
 <div class="row"> <div class="col-sm-9">
 <div class="sec1-box-left">
 <p class="animate__animated animate__fadeIn">Online-Prozesse benötigen auch erhebliche Mengen an nicht erneuerbarer Energie, um zu funktionieren.<br>Wählen Sie die Option, die Ihrer Meinung nach der tatsächlichen Energiemenge, die beim Generieren von Kryptowährungen verwendet wird, am nächsten kommt.</p>
 <div class="box-head">
 <div class="box-icon animate__animated animate__fadeInLeft"><img src="images/leaves.svg" /></div><h4 class="animate__animated animate__fadeIn">Wie viele Energieeinheiten werden benötigt, um 1 Bitcoin zu generieren?</h4>
 </div>
 


  <form class="survey-form required-validation" data-validation-type="radio"><div class="checkbox-group">
    <div class="form-group">
      <input type="radio" id="html" name="intro_section_question3" value="62 Terawatts">
      <label for="html">62 Terawatt</label>
    </div>
    <div class="form-group">
      <input type="radio" id="css" name="intro_section_question3" value="72 Terawatts">
      <label for="css">72 Terawatt</label>
    </div>
    <div class="form-group">
      <input type="radio" id="javascript" name="intro_section_question3" value="10 Terawatts">
      <label for="javascript">10 Terawatt</label>
    </div>
	 <div class="form-group">
      <input type="radio" id="java" name="intro_section_question3" value="28 Terawatts">
      <label for="java">28 Terawatt</label>
    </div></div>
  </form>

</div>
 
 </div><div class="col-sm-3">
 <div class="sec1-box-right  animate__animated animate__fadeInRight"><img src="images/bitcoin-anim.gif" /> </div>
 </div></div>
<div class="button-wrapper bottom-button link-np">
<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="ZURÜCK" data-front="ZURÜCK" ></a>
<a href="{{url('/personal-level-start')}}" class="link-btn get-survey-details btn-flip" data-back="WEITER" data-front="WEITER" ></a>
</div>
 </div>
 </div></div>
</body>
</html>