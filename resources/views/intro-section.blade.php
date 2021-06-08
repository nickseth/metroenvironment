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
 <div class="row"> <div class="col-sm-8">
 <div class="sec1-box-left">
 <div class="box-head">
 <div class="box-icon animate__animated animate__fadeInLeft"><img src="images/leaves.svg" /></div><h4 class="animate__animated animate__fadeIn">Climate change will demonstrably affect</h4>
 </div>
 <p class="animate__animated animate__fadeIn">Global warming is a serious problem all around the world, and rising temperatures<br>have shifted natural climatic patterns. Who do you think will feel these adverse<br> effects the most?</p>


  <form><div class="checkbox-group">
    <div class="form-group">
      <input type="radio" id="html" name="intro_section">
      <label for="html">My generation</label>
    </div>
    <div class="form-group">
      <input type="radio" id="css" name="intro_section">
      <label for="css">My grandchildren</label>
    </div>
    <div class="form-group">
      <input type="radio" id="javascript" name="intro_section">
      <label for="javascript">My children</label>
    </div>
	 <div class="form-group">
      <input type="radio" id="java" name="intro_section">
      <label for="java">This not a serious threat</label>
    </div></div>
  </form>

</div>
 
 </div><div class="col-sm-4">
 <div class="sec1-box-right"><div class="bird-anim"><img src="images/bird-anim.gif" /></div>
 <img src="images/burning-earth-anim.gif"/></div>
 </div></div>
<div class="button-wrapper bottom-button">
<a href="{{url('/intro-section2')}}" class="link-btn"><button>Next</button></a>
</div>
 </div>
 </div></div>
</body>
</html>