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
 <div class="page-width mt-7">
 <div class="row"> <div class="col-sm-9">
 <div class="sec1-box-left">
  <p class="animate__animated animate__fadeIn">Global warming is a serious problem, and rising temperatures have shifted natural climatic patterns. Who do you think will feel these adverse effects the most?</p>
 <div class="box-head">
 <div class="box-icon animate__animated animate__fadeInLeft"><img src="images/leaves.svg" /></div><h4 class="animate__animated animate__fadeIn">Climate change will demonstrably affect</h4>
 </div>



  <form class="survey-form"><div class="checkbox-group">
    <div class="form-group">
      <input type="radio" id="html" name="intro_section_question1" value="My generation">
      <label for="html">My generation</label>
    </div>
    <div class="form-group">
      <input type="radio" id="css" name="intro_section_question1" value="My grandchildren">
      <label for="css">My grandchildren</label>
    </div>
    <div class="form-group">
      <input type="radio" id="javascript" name="intro_section_question1" value="My children">
      <label for="javascript">My children</label>
    </div>
	 <div class="form-group">
      <input type="radio" id="java" name="intro_section_question1" value="This not a serious threat">
      <label for="java">This not a serious threat</label>
    </div></div>
  </form>

</div>
 
 </div><div class="col-sm-3">
 <div class="sec1-box-right animate__animated animate__fadeInRight"><div class="bird-anim"><img src="images/bird-anim.gif" /></div>
 <img src="images/burning-earth-anim.gif"/></div>
 </div></div>
<div class="button-wrapper bottom-button">
<a href="{{url('/intro-section2')}}" class="link-btn hvr-forward get-survey-details"><i class="fa fa-arrow-right fa-3x"></i></a>
</div>
 </div>
 </div></div>
</body>
</html>