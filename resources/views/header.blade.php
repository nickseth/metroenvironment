<!doctype html>
<html lang="{{ app()->getLocale() }}" data-base-path="{{URL::to('/')}}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MVIRONMENT</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="css/style.css?<?php echo rand(1,1000000);?>" rel="stylesheet">
  <link href="css/hover.css?<?php echo rand(1,1000000);?>" rel="stylesheet" media="all">
  <link href="css/custom.css?<?php echo rand(1,1000000);?>" rel="stylesheet" media="all">
  <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="js/customjs.js?<?php echo rand(1,1000000);?>"></script>
      <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Styles -->
        <style>
        </style>
    </head>