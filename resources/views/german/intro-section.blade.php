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
 <p class="animate__animated animate__fadeIn">Die globale Erwärmung ist weltweit ein ernstes Problem, und steigende Temperaturen haben natürliche Klimamuster verschoben. Wer wird Ihrer Meinung nach diese negativen Auswirkungen am stärksten spüren?</p>
 <div class="box-head">
 <div class="box-icon animate__animated animate__fadeInLeft"><img src="images/leaves.svg" /></div><h4 class="animate__animated animate__fadeIn">Der Klimawandel wird sich nachweislich auswirken</h4>
 </div>
 


  <form class="survey-form required-validation" data-validation-type="radio"><div class="checkbox-group">
    <div class="form-group">
      <input type="radio" id="html" name="intro_section_question1" value="My generation">
      <label for="html">Meine Generation</label>
    </div>
    <div class="form-group">
      <input type="radio" id="css" name="intro_section_question1" value="My grandchildren">
      <label for="css">Meine Enkel</label>
    </div>
    <div class="form-group">
      <input type="radio" id="javascript" name="intro_section_question1" value="My children">
      <label for="javascript">Meine Kinder</label>
    </div>
	 <div class="form-group">
      <input type="radio" id="java" name="intro_section_question1" value="This not a serious threat">
      <label for="java">Es ist keine ernsthafte Bedrohung</label>
    </div></div>
  </form>

</div>
 
 </div><div class="col-sm-3">
 <div class="sec1-box-right animate__animated animate__fadeInRight"><div class="bird-anim"><img src="images/bird-anim.gif" /></div>
 <img src="images/burning-earth-anim.gif"/></div>
 </div></div>
<div class="button-wrapper bottom-button link-np">
<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="ZURÜCK" data-front="ZURÜCK" ></a>
<a href="{{url('/intro-section2')}}" class="link-btn get-survey-details btn-flip" data-back="WEITER" data-front="WEITER" ></a>
</div>
 </div>
 </div></div>
</body>
</html>