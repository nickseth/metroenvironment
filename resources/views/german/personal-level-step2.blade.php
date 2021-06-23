@include('/german/header')
<body class="personal-level-step1 personal-level-step sec2-bg2">
<div class="loader-wrap"><div class="loader"><img src="images/anim-tree.gif" /></div></div>
<nav class="navbar navbar-default">
  <div class="container"><div class="d-flex align-center space-between">
    <div class="navbar-header">

      <a class="navbar-brand" href="{{URL::to('/de')}}"><img src="../german_assets/images/metro-logo.svg" /></a>
    </div>
    <div class=" navbar-collapse right-header text-right" id="myNavbar">
      <h1>#<span>M</span>vironment</h1><strong>NACHHALTIGKEIT & DU</strong>
    </div></div>
  </div>
</nav>



<div class="container "><div class="relative">

 
 <div class="page-width mt-7">
 <div class="row">

  <div class="col-sm-12">

 <div class="sec1-box-center text-center">
 <div class="box-top">
 <div class="box-icon animate__animated animate__fadeInLeft"><img src="../german_assets/images/leaves.svg" /></div>
 <div class="animate__animated animate__fadeIn green-text">Was ist der Unterschied zwischen Bioprodukten und organischen Produkten?</div>
 </div>
 <p class="animate__animated animate__fadeIn gray-text">Wählen Sie die Kästchen mit den Aussagen aus, die Ihnen am relevantesten erscheinen</p>

</div>
 
 </div>
 <div class="col-sm-12">
<div class="row">
<form class="survey-form required-validation" data-validation-type="radio">
 <div class="col-sm-6">
<div class="gbb-wrap">
<div class="gbb-item gbb-item-1"><img src="../german_assets/images/pls2-item-1.svg"/></div>
 <div class="green-brdr-box bio-options-wrapper"><div class="gbb-head">Bio:</div>
 <div class="form-group">
     <input type="radio" id="nutritional_bio" name="personal_level_step2_bio" value="Bio products have less nutritional value">
      <label for="nutritional_bio">Bioprodukte haben weniger Nährwert</label>
	 
    </div>
  <div class="form-group">
     <input type="radio" id="gm_bio" name="personal_level_step2_bio" value="Bio products are generally genetically modified">
      <label for="gm_bio">Bioprodukte sind in der Regel gentechnisch verändert</label>
	 
    </div>
	<div class="form-group">
     <input type="radio" id="pesticites_bio" name="personal_level_step2_bio" value="Bio products are generally genetically modified">
      <label for="pesticites_bio">Lebensmittelhersteller verwenden keine Chemikalien oder Pestizide</label>
	 
    </div>
 </div> </div>
 </div>
  <div class="col-sm-6">
 <div class="gbb-wrap"> 
 <div class="gbb-item gbb-item-2"><img src="../german_assets/images/pls2-item-2.svg"/></div>
 <div class="green-brdr-box organic-options-wrapper"><div class="gbb-head">Organisch:</div>
 <div class="form-group">
     <input type="radio" id="nutritional_organic" name="personal_level_step2_organic" value="Organic food contributes to an increase in CO2 emissions">
      <label for="nutritional_organic">Organische Lebensmittel tragen zu einer Erhöhung der CO2-Emissionen bei</label>
	 
    </div>
  <div class="form-group">
     <input type="radio" id="gm_organic" name="personal_level_step2_organic" value="Product is made with as little impact on the environment as possible">
      <label for="gm_organic">Das Produkt wird mit so wenig Einfluss auf die Umwelt wie möglich hergestellt</label>
	 
    </div>
	<div class="form-group">
     <input type="radio" id="pesticites_organic" name="personal_level_step2_organic" value="The organic certification does not have an own logo">
      <label for="pesticites_organic">Die organischeZertifizierung hat kein eigenes Logo</label>
	 
    </div>
 
 </div>

 </div>
  </div>
  <div class="col-sm-12">
   <div class="outer-input text-center"><div class="form-group">
     <input type="checkbox" id="allsame" name="personal_level_step2_allsame" value="true">
      <label for="allsame">Sie sind identisch</label>
	 
    </div></div></div>
  
  
  </form>
</div>
 </div></div>
<div class="button-wrapper bottom-button link-np">
<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="ZURÜCK" data-front="ZURÜCK" ></a>
<a href="{{url('/de/personal-level-step3')}}" class="link-btn  get-survey-details btn-flip" data-back="WEITER" data-front="WEITER" ></a>
</div>
 </div>
 </div></div>



</body>