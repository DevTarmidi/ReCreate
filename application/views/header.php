<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Re:Create</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }
      <?php if ($menu != 4){ goto end;} ?>
        * {box-sizing: border-box}
	body {font-family: "Lato", sans-serif;}
	@font-face{font-family:'Glyphicons Halflings';src:url(https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/fonts/glyphicons-halflings-regular.eot);src:url(https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/fonts/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'),url(https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/fonts/glyphicons-halflings-regular.woff2) format('woff2'),url(https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/fonts/glyphicons-halflings-regular.woff) format('woff'),url(https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/fonts/glyphicons-halflings-regular.ttf) format('truetype'),url(https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')}.glyphicon{position:relative;top:1px;display:inline-block;font-family:'Glyphicons Halflings';font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
	.glyphicon-search:before{content:"\e003"}
	.glyphicon-sort:before{content:"\e150"}
	.glyphicon-floppy-disk:before{content:"\e172"}
	.glyphicon-export:before{content:"\e170"}
	/* Style the tab */
	div.tab {
		float: left;
		border: 1px solid #ccc;
		background-color: #f1f1f1;
		width: 30%;
		height: 100%;
	}

	
	/* Style the buttons inside the tab */
	div.tab button {
		display: block;
		background-color: inherit;
		color: black;
		padding: 22px 16px;
		width: 100%;
		border: none;
		outline: none;
		text-align: left;
		cursor: pointer;
		transition: 0.3s;
		font-size: 17px;
	}

	/* Change background color of buttons on hover */
	div.tab button:hover {
		background-color: #ddd;
	}

	/* Create an active/current "tab button" class */
	div.tab button.active {
		background-color: #ccc;
	}

	/* Style the tab content */
	.tabcontent {
		float: left;
		padding: 0px 12px;
		border: 1px solid #ccc;
		background-color: #ccc;
		width: 70%;
		border-left: none;
		height: 550px;
	}
  /*Drag drop property*/
	img
	{
		width: 110px;
		margin: 2px;
	}
	.draggable
	{
		filter: alpha(opacity=60);
		opacity: 0.6;
	}
	.dropped
	{
		position: static !important;
	}
	#dvSource, #dvDest
	{
		
		padding: 5px;
		min-height: 100px;
		width: 430px;
	}
	#sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; }
  #sortable li { margin: 0 0 5px 5px; padding: 5px; font-size: 1.2em; height: 1.5em; background-color: #fff; text-align: left;}
	html>body #sortable li { height: 2em; line-height: 1.2em; }
	#sortable li span { font-size: 0.5em; color: #999 }
	
      <?php end: ?>
      .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: #999;
      color: black;
      text-align: center; 
    }
    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url();?>">Re:Create</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php if ($menu == 1) {echo "active";} ?>">
              <a class="nav-link" href="<?php if ($menu == 1) {echo "#";} else {echo site_url();} ?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item <?php if ($menu == 2) {echo "active";} ?>">
              <a class="nav-link" href="<?php if ($menu == 2) {echo "#";} else {echo site_url()."about";} ?>">About</a>
            </li>
            <li class="nav-item <?php if ($menu == 3) {echo "active";} ?>">
              <a class="nav-link" href="<?php if ($menu == 3) {echo "#";} else {echo site_url()."contact";} ?>">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>