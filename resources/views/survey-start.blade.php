@include('header')
<body>

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

<!-- First Container -->

<div class="container "><div class="relative">

 <div class="page-head">
 <h2>Let's get to know you better!</h2>
 </div>
<div class="row"> <div class="col-sm-12">

<form>
<div class="row" >
<div class="col-sm-3 mt-5">
<div class="form-row">
<label><img src="images/age-icon.svg" /></label><input type="text" placeholder="Your Age">
</div>
</div> <div class="col-sm-6 mt-5">
<div class="form-row"><label><img src="images/pin-icon.svg" /></label><input type="search" class="search" placeholder="Where is your office located?"></div>

</div> <div class="col-sm-3 mt-5"><div class="form-row"><label><img src="images/gender-icon.svg" /></label>
<div class="cont_select_center">

  <!-- Custom select structure --> 
<div class="select_mate" data-mate-select="active" >
<select name="" onchange="" onclick="return false;" id="">
<option value="" disabled selected >Gender</option>
<option value="1">Male</option>
<option value="2" >Female</option>
<option value="3">Other</option>
  </select>
<p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" >
<img src="images/select-arrow.svg" />
</span>
<div class="cont_list_select_mate">
  <ul class="cont_select_int">  </ul> 
</div>
  </div>
  <!-- Custom select structure --> 


</div></div></div>
<div class="col-sm-9 mt-5"><div class="form-row"><label><img src="images/calender-icon.svg" /></label>

<div class="cont_select_center">

  <!-- Custom select structure --> 
<div class="select_mate" data-mate-select="active" >
<select name="" onchange="" onclick="return false;" id="">
<option value="" disabled selected>How long have you been a part of the METRO family</option>
<option value="1">5 Years</option>
<option value="2" >10 Years</option>
<option value="3">15 Years</option>
  </select>
<p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" >
<img src="images/select-arrow.svg" />
</span>
<div class="cont_list_select_mate">
  <ul class="cont_select_int">  </ul> 
</div>
  </div>
  <!-- Custom select structure --> 


</div>


</div>
</div>
<div class="col-sm-9 mt-5"><div class="form-row"><label><img src="images/family-icon.svg" /></label>

<div class="cont_select_center">

  <!-- Custom select structure --> 
<div class="select_mate department-options" data-mate-select="active" >
<select name="" class="" onchange="" onclick="return false;" id="">
<option value="" disabled selected>What is the size of your department at METRO?</option>
<option value="5">5 Years</option>
<option value="10" >10 Years</option>
<option value="15">15 Years</option>
  </select>
<p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" >
<img src="images/select-arrow.svg" />
</span>
<div class="cont_list_select_mate">
  <ul class="cont_select_int">  </ul> 
</div>
  </div>
  <!-- Custom select structure --> 


</div>

</div>
</div>
<div class="col-sm-9 mt-5"><div class="form-row"><label></label>
<input type="text" disabled="disabled" class="gray-out organization-team-input" placeholder="Please enter your Metro Organization, Team - ex: Metro AG, Corporate Responsibility">

</div>
</div>

<div class="col-sm-4 mt-5"><div class="form-row"><label></label>
<div class="form-info"><img src="images/lock.svg" /><span>Your personal information<br>is kept safe and secure</span></div>
</div>
</div>



<div class="col-sm-8 mt-5">
<div class="button-wrapper">
<button>Let’s Start the Survey</button>
</div>
</div>
</div>
</form>

</div></div>
 </div>
</div>


<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
 
</footer>
</body>
</html>
