<!DOCTYPE html>
<html lang="en">
<head>
  <title>{$title}</title>
  <meta charset="UTF-8">
  <meta name=description content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
  <link href="{$BASE_URL}/css/style.css" rel="stylesheet">
  <link href="{$BASE_URL}/css/sidebar.css" rel="stylesheet">
</head>
<body>

<div id="wrapper">

  <!--
  Perform sidebar operations here
  -->

  {include file='common/sidebar.tpl'}

  <!-- Page Content -->
  <div id="page-content-wrapper">
    <div class="container-fluid">


      <div class="row header">
        <div class="col-sm-2 col-md-2 col-lg-2 logo">

          <img src="{$BASE_URL}images/assets/{$title_image}" alt="Image">

        </div>
        <div class=" col-sm-10 col-md-10 col-lg-10">

          <h1>{$title}</h1>
          {if $subtitle != null}
            <h5>{$subtitle}</h5>
          {/if}


        </div>
      </div>
