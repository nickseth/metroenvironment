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
 <p class="animate__animated animate__fadeIn">Die globale Erwärmung ist weltweit ein ernstes Problem, und steigende Temperaturen haben natürliche Klimamuster verschoben. Wer wird Ihrer Meinung nach diese negativen Auswirkungen am stärksten spüren?</p>
 <div class="box-head">
 <div class="box-icon animate__animated animate__fadeInLeft"><img src="../german_assets/images/leaves.svg" /></div><h4 class="animate__animated animate__fadeIn">Der Klimawandel wird sich nachweislich auswirken auf</h4>
 </div>
 <p class="animate__animated animate__fadeIn gray-text">Bitte wählen Sie eine der vier unten aufgeführten Optionen aus. Klicken Sie auf Weiter, um zu senden und fortzufahren.</p>
  <form class="survey-form required-validation" data-validation-type="radio" data-correct-answers="Der Klimawandel wird sich negativ auf alle auswirken."><div class="checkbox-group">
    <div class="form-group">
      <input type="radio" id="html"class="correct-answer" name="intro_section_question1" value="My generation">
      <label for="html">Meine Generation</label>
    </div>
	<div class="form-group">
      <input type="radio" id="javascript"class="correct-answer" name="intro_section_question1" value="My children and my grandchildren">
      <label for="javascript">
Meine Kinder und meine Enkel</label>
    </div>
    <div class="form-group">
      <input type="radio" id="css" class="correct-answer" name="intro_section_question1" value="Everyone">
      <label for="css">Jeder</label>
    </div>
    
	 <div class="form-group">
      <input type="radio" id="java" class="correct-answer" name="intro_section_question1" value="This not a serious threat">
      <label for="java">Es ist keine ernsthafte Bedrohung</label>
    </div></div>
	
  </form>

</div>
 
 </div><div class="col-sm-3">
 <div class="sec1-box-right animate__animated animate__fadeInRight"><div class="bird-anim"><img src="../german_assets/images/bird-anim.gif" /></div>
 <img src="../german_assets/images/burning-earth-anim.gif"/></div>
 </div></div>
<div class="button-wrapper bottom-button link-np">
<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="ZURÜCK" data-front="ZURÜCK" ></a>
<a href="{{url('/de/intro-section2')}}" class="link-btn get-survey-details btn-flip" data-back="WEITER" data-front="WEITER" ></a>
</div>
 </div>
 </div>
 <div class="col-sm-12 text-center step-text">
	<p class="animate__animated animate__fadeIn gray-text">2 von 25</p>
</div>
 </div>
</body>
</html>