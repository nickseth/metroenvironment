@include('header')
<body class="sec3-home-bg index-page">
<div class="loader-wrap">
  <div class="loader"><img src="images/anim-tree.gif" /></div>
</div>

<div class="herooo">

  <div class="top-sectionn">
    <div class="clouds"></div>
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

    <main class="mid-content">
      <div class="wrper-cstm-width">
        <div class="welcome">
          <h3>
            <span class="clr-green">SUSTAINABILITY</br> AND<span>
            <span class="clr-blue">YOU@METRO<span>
          </h3>
        </div>
        <div class="home-content clr-blue mt-5">
          <p>Hello and welcome! Thanks for taking out the time to take this interactive
        survey. Your responses will enable us to create impactful strategies that
        benefit the world around us. We promise it won't take long.</p>
        </div>
        <div class="mt-7 btn-cover">
          <a href="{{url('/survey-start')}}" class="btn-flip agree-btn" data-back="Agree" data-front="Agree"></a>
        </div>
      </div>
    </main>
  </div>
</div>

</body>
</html>