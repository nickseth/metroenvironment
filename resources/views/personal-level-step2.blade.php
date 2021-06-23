@include('header')
<body class="personal-level-step1 personal-level-step sec2-bg2">
<div class="loader-wrap"><div class="loader"><div class="loadersmall"></div></div></div>
<nav class="navbar navbar-default">
  <div class="container"><div class="d-flex align-center space-between">
    <div class="navbar-header">

      <a class="navbar-brand" href="{{URL::to('/')}}"><img src="images/metro-logo.svg" /></a>
    </div>
    <div class=" navbar-collapse right-header text-right" id="myNavbar">
      <h1>#<span>M</span>vironment</h1><strong>Sustainability & YOU</strong>
    </div></div>
  </div>
</nav>



<div class="container "><div class="relative">

 
 <div class="page-width mt-7">
 <div class="row">

  <div class="col-sm-12">

 <div class="sec1-box-center text-center">
 <div class="box-top">
 <div class="box-icon animate__animated animate__fadeInLeft"><img src="images/leaves.svg" /></div>
 <div class="animate__animated animate__fadeIn green-text">What is the difference between Bio Products and Organic Products?</div>
 </div>
 <p class="animate__animated animate__fadeIn gray-text">Select the main point of difference between the two types of products</p>

</div>
 
 </div>
 <div class="col-sm-12">
<div class="row">
<form class="survey-form required-validation" data-validation-type="custom">
 <div class="col-sm-6">
<div class="gbb-wrap">
<div class="gbb-item gbb-item-1 animate__animated animate__bounceInDown"><img  src="images/pls2-item-1.svg"/></div>
 <div class="green-brdr-box bio-options-wrapper"><div class="gbb-head">Bio</div>
 <div class="form-group">
     <input type="radio" id="nutritional_bio" name="personal_level_step2_bio" value="Bio products have less nutritional value">
      <label for="nutritional_bio">Bio products have less nutritional value</label>
	 
    </div>
  <div class="form-group">
     <input type="radio" id="gm_bio" name="personal_level_step2_bio" value="Bio products are generally genetically modified">
      <label for="gm_bio">Bio products are generally genetically modified</label>
	 
    </div>
	<div class="form-group">
     <input type="radio" id="pesticites_bio" name="personal_level_step2_bio" value="Bio products are generally genetically modified">
      <label for="pesticites_bio">Food producers do not use chemicals or pesticides</label>
	 
    </div>
 </div> </div>
 </div>
  <div class="col-sm-6">
 <div class="gbb-wrap"> 
 <div class="gbb-item gbb-item-2 animate__animated animate__flip"><img src="images/pls2-item-2.png"/></div>
 <div class="green-brdr-box organic-options-wrapper"><div class="gbb-head">Organic</div>
 <div class="form-group">
     <input type="radio" id="nutritional_organic" name="personal_level_step2_organic" value="Organic food contributes to an increase in CO2 emissions">
      <label for="nutritional_organic">Organic food contributes to an increase in CO<sub>2</sub> emissions</label>
	 
    </div>
  <div class="form-group">
     <input type="radio" id="gm_organic" name="personal_level_step2_organic" value="Product is made with as little impact on the environment as possible">
      <label for="gm_organic">Product is made with as little impact on the environment as possible</label>
	 
    </div>
	<div class="form-group">
     <input type="radio" id="pesticites_organic" name="personal_level_step2_organic" value="The organic certification does not have an own logo">
      <label for="pesticites_organic">The organic certification does not have an own logo</label>
	 
    </div>
 
 </div>
 
 </div>
  </div>
  <div class="col-sm-12"><div class="outer-input text-center"><div class="form-group">
     <input type="checkbox" id="allsame" name="personal_level_step2_allsame" value="true">
      <label for="allsame">They are the same</label>
	 
    </div></div></div>
  </form>
</div>
 </div></div>
<div class="button-wrapper bottom-button link-np">
<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="Back" data-front="Back" ></a>
<a href="{{url('/personal-level-step3')}}" class="link-btn  get-survey-details btn-flip" data-back="Next" data-front="Next" ></a>
</div>
 </div>
 </div></div>



</body>