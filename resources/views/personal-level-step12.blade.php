@include('header')
<body class="personal-level-step12 personal-level-step sec2-bg2">
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
 
 <div class="animate__animated animate__fadeIn green-text">Which of the following alternative protein sources do you use in your diet?</div>
 </div>
 <p class="animate__animated animate__fadeIn">Drag and drop the food items you consume regularly on to the plate.</p>

</div>
 
 </div>
 <div class="col-sm-12">
 <div class="vegi-grup-wrap mt-7">
<div class="vegi-group">
 <div class="row"> <div class="col-sm-3">
 
 <div class="plate-item-3 plate-item "><img src="images/plate-item-3.svg" data-text="Tofu/soy products" /></div><p class="text-center"><strong>Tofu/soy products</strong>(soy cutlets, seitan, tempeh etc.)</p></div>
<div class="col-sm-6">
 

 
 </div><div class="col-sm-3"><div class="plate-item-2 plate-item"><img src="images/plate-item-2.svg" data-text="Meat alternatives" /></div><p class="text-center"><strong>Meat alternatives</strong>(Veggie sausage, mince, burger.)</p></div></div>
 <div class="row"><div class="col-sm-3 ">
 <div class="plate-item-1 plate-item"><img src="images/plate-item-1.svg" data-text="Legumes" /></div>
 <p class="text-center"><strong>Legumes</strong>(lentils, chickpeas, kidney beans, peas etc.)</p></div><div class="col-sm-6 "><div class="vegi-plate">

<div class="empty-plate">
</div>
</div></div><div class="col-sm-3 "> <div class="plate-item-4 plate-item"><img src="images/plate-item-4.svg" data-text="Nuts/seeds" /></div><p class="text-center"><strong>Nuts/seeds</strong>(pumpkin- sunflower seeds, peanuts, cashew etc.)</p></div></div>
 </div>
</div>

</div>
 </div></div>
 <form class="survey-form hide">
				<input type="hidden" name="personal_level_step12" value="" class="drag-input-details"/>
			</form>
<div class="button-wrapper bottom-button link-np">
<a href="#" class="link-btn back-navigate-btn btn-flip" data-back="Back" data-front="Back" ></a>
<a href="#" class="link-btn reset-btn btn-flip" data-back="Reset" data-front="Reset" ></a>
<a href="{{url('/personal-level-step13')}}" class="link-btn get-survey-details btn-flip get-veg-input-details" data-back="Next" data-front="Next" ></a>
</div>
 </div>
 </div></div>



</body>