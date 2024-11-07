<?php
session_start();                                        // $_SESSION[''] islemeyi ucun her zaman en basda yaz
require_once "environment.php"
  ?>

<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <title>Income Budget App</title>
  <style type="text/css">
    html {
      scroll-behavior: smooth;
    }

    body {
      overflow-y: hidden;
      overflow-x: hidden;
    }

    .pie_chart {
      width: 450px !important;
      height: calc(100vh - 290px) !important;
      margin: 0 auto;
    }
  </style>
</head>

<nav class="navbar sticky-top navbar-expand-md navbar-light bg-light border">
  <div class="container justify-content-center">
    <a style="font-size:25px;" class="navbar-brand  p-0" href="#"><b>Income</b> Budget<br></a>
  </div>
</nav>