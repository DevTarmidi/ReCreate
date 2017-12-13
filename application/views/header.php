<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Singkat.in | Persingkat URL untuk kemudahan hidup anda</title>

    <!-- Bootstrap core CSS -->
		<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
		<?php if ($menu != 4){ goto styl;} ?>
		<link href="<?php echo base_url(); ?>font.css" rel="stylesheet">
		<script type="text/javascript" src="<?php echo base_url(); ?>js/w3color.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Custom styles for this template -->
		<?php styl: ?>
    <style>
      body {
        padding-top: 54px;
				<?php if ($menu==4) {echo "background-color: #aaa" ;} ?>
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }
      <?php if ($menu != 4){ goto end;} ?>
      
        * {box-sizing: border-box}
				body {font-family: "Lato", sans-serif;}
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

  <body <?php if($menu<=4 ){echo "style=\"background-image:url(".base_url()."images/background/background.jpg);background-repeat:no-repeat;background-size:cover; background-position:center center;\"";} ?>>

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
              <a class="nav-link" href="<?php if ($menu == 1) {echo "#";} else {echo site_url();} ?>">Beranda
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item <?php if ($menu == 2) {echo "active";} ?>">
              <a class="nav-link" href="<?php if ($menu == 2) {echo "#";} else {echo site_url()."about";} ?>">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">|</a>
            </li>
            <li class="nav-item <?php if ($menu == 3) {echo "active";} ?>">
              <a class="nav-link" href="<?php if ($menu == 3) {echo "#";} else {echo site_url()."sign";} ?>">Masuk</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>