@include('/german/header')
<body class="sec1-bg">
<div class="loader-wrap"><div class="loader"><div class="loadersmall"></div></div></div>
<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container"><div class="d-flex align-center space-between">
    <div class="navbar-header">

      <a class="navbar-brand" href="{{URL::to('/de')}}"><img src="../german_assets/images/metro-logo.svg" /></a>
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
 <p class="animate__animated animate__fadeIn">Die Materialien, aus denen diese Strohhalme hergestellt werden, unterscheiden sich alle voneinander.<br>Wählen Sie das Material, das Ihrer Meinung nach am umweltfreundlichsten ist.</p>
 <div class="box-head">
 <div class="box-icon animate__animated animate__fadeInLeft"><img src="../german_assets/images/leaves.svg" /></div><h4 class="animate__animated animate__fadeIn">Welcher Strohhalm ist Ihrer Meinung nach der nachhaltigste?</h4>
 </div>
  <p class="animate__animated animate__fadeIn gray-text">Bitte wählen Sie eines der vier unten aufgeführten Materialien aus, das Ihrer Meinung nach am umweltfreundlichsten ist. Klicken Sie auf Weiter, um zu senden und fortzufahren.
</p>


  <form class="survey-form required-validation" data-validation-type="radio" data-correct-answers="
Die richtige Antwort ist Stahl"><div class="checkbox-group">
    <div class="form-group">
      <input type="radio" id="html" name="intro_section_question2" class="correct-answer" value="1" >
      <label for="html">Holz</label>
    </div>
    <div class="form-group">
      <input type="radio" id="css" name="intro_section_question2" class="correct-answer" value="2" >
      <label for="css">Papier</label>
    </div>
    <div class="form-group">
      <input type="radio" id="javascript" name="intro_section_question2" class="correct-answer" value="3" >
      <label for="javascript">Plastik</label>
    </div>
	 <div class="form-group">
      <input type="radio" id="java" name="intro_section_question2" value="4" class="correct-answer">
      <label for="java">Stahl</label>
    </div></div>
  </form>

</div>
 </div><div class="col-sm-3">
 <div class="sec1-box-right  animate__animated animate__fadeInRight"><img src="../german_assets/images/straw.svg" class="jump-anim"/></div>
 </div></div>
<div class="button-wrapper bottom-button link-np">
<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="ZURÜCK" data-front="ZURÜCK" ></a>
<a href="{{url('/de/intro-section3')}}" class="link-btn get-survey-details btn-flip" data-back="WEITER" data-front="WEITER" ></a>
</div>
 </div>
 </div>
 <div class="col-sm-12 text-center step-text">
	<p class="animate__animated animate__fadeIn gray-text">3 von 25</p>
</div>
</div>
</body>
</html>