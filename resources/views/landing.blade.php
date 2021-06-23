<!doctype html>
<html lang="{{ app()->getLocale() }}" data-base-path="{{URL::to('/')}}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MVIRONMENT</title>
		      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="css/style.css?<?php echo rand(1,1000000);?>" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <script src="js/customjs.js?<?php echo rand(1,1000000);?>"></script>
</head>

<body class="landing language-page"><div class="landing-box">
<div class="loader-wrap"><div class="loader"><div class="loadersmall"></div></div></div>
 <h2 class="text-center" style="text-transform:uppercase">This website is available in the following languages:</h2>
 <div class="lang-btn text-center"><a href="{{URL::to('/')}}" class="btn-flip translate-btn index-btn" data-language="en" data-back="English" data-front="English"></a>
<a href="{{URL::to('/de')}}" class="btn-flip index-btn translate-btn" data-back="GERMAN " data-language="de" data-front="GERMAN"></a>
</div>
<p>
Alternatively, if you want to view the website in another language, you can avail of the translation feature in Google Chrome. To know more, go to the following link:<br/><br/><a href="https://support.google.com/chrome/answer/173424?co=GENIE.Platform%3DDesktop&hl=en" >
https://support.google.com/chrome/answer/173424?co=GENIE.Platform%3DDesktop&hl=en</a>
<br/><br/>
<em><strong>Note:</strong> Google Translate cannot translate all content, and may not provide an exact translation. Anyone relying on information obtained from using Google Translate does so at his or her own risk.<em>

</p></div>
</body>
</html>