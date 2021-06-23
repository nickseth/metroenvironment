@include('header')
<body class="survey-start-page">
<div class="loader-wrap"><div class="loader"><div class="loadersmall"></div></div></div>
<style>
form *{display:block; width:100%}
</style>
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

<!-- First Container -->

<div class="container survey-wrap"><div class="relative">

 <div class="page-head">
 <h2>Let's get to know you better!</h2>
 </div>
<div class="row"> <div class="col-sm-12">

<div class="row" >

<form class="survey-form">
<div class="col-sm-3 mt-5">
<div class="form-row">
<label><img src="images/age-icon.svg" /></label>
<div class="cont_select_center">

  <!-- Custom select structure --> 
<div class="select_mate" data-mate-select="active" >
<select name="age" onchange="" class="required-field" onclick="return false;" id="">
<option value="" disabled selected >Your Age</option>
<option value="20-30">20-30</option>
<option value="31-40" >31-40</option>
<option value="41+">41+</option>
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
</div> <div class="col-sm-6 mt-5">
<div class="form-row"><label><img src="images/pin-icon.svg" /></label><div class="autocomplete"><input type="text" id="search-input" class="search required-field" placeholder="Enter your Office’s Country" name="office_located"><span class="search-clear">X</span></div></div>

</div> <div class="col-sm-3 mt-5"><div class="form-row"><label><img src="images/gender-icon.svg" /></label>
<div class="cont_select_center">

  <!-- Custom select structure --> 
<div class="select_mate" data-mate-select="active" >
<select name="gender" onchange=""  onclick="return false;" id="">
<option value="" disabled selected >Gender</option>
<option value="Male">Male</option>
<option value="Female" >Female</option>
<option value="Other">Other</option>
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
<select name="joining_years" onchange=""  onclick="return false;" id="">
<option value="" disabled selected>How long have you been a part of the METRO family</option>
<option value="Less than 2 years">Less than 2 years</option>
<option value="2-5 Years">2-5 Years</option>
<option value="5-10 Years" >5-10 Years</option>
<option value="10-15 Years">10-15 Years</option>
<option value="15-20 Years">15-20 Years</option>
<option value="20+ Years">20+ Years</option>
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
<select name="department_size"  onchange="" onclick="return false;" id="">
<option value="" disabled selected>What is the size of your department at METRO?</option>
<option value="5">0-5</option>
<option value="10" >5-10</option>
<option value="15">10-15</option>
<option value="20">15-20</option>
<option value="20 and above">20-50</option>
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
<input type="text" name="metro_organization_team" disabled="disabled" class="gray-out organization-team-input" placeholder="Please enter your METRO Organisation (example, METRO AG) and Department Name (example, CSR)">

</div>
</div>

<div class="col-sm-4 mt-5 survey-oath"><div class="form-row"><label></label>
<div class="form-info"><img src="images/lock.svg" /><span>Your personal information<br>is kept safe and secure.</span></div>
</div>
</div>

</form>

<div class="col-sm-8 mt-5">
<div class="button-wrapper">
<a href="{{url('/intro-section')}}" class="link-btn btn-flip get-survey-details" data-back="Let’s Start the Survey" data-front="Let’s Start the Survey"></a>
</div>
</div>
</div>


</div></div>
 </div>
</div>


<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
 
</footer>
<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["Germany","France","Russia","Italy","Spain","Turkey","Ukraine","Romania","Poland","India","Netherlands","Belgium","Czech Republic","Hungary","Austria","Bulgaria","Portugal","Croatia","Japan","Serbia","Pakistan","Kazakhstan","Slovakia","Moldova"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("search-input"), countries);
</script>
</body>
</html>
