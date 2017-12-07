<!DOCTYPE html>
<html>
<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hover.css">

    <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
    
        <script
		  src="https://code.jquery.com/jquery-2.2.4.js"
		  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
		  crossorigin="anonymous"></script>

		<script
		  src="https://code.jquery.com/jquery-3.2.1.js"
		  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
		  crossorigin="anonymous"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<style>

        *{
          font-family: 'Catamaran', sans-serif;
        }

          .navbar-inverse{
          	background-color:#E44424;
          	border-color:transparent;
          }

          .navbar-inverse .navbar-nav>li>a {
			color: #ececec;
		  }

          .navbar-brand {
          	background-image:url(AirProsLogo.png);
		    background-repeat: no-repeat;
		    width: 200px;
		    padding-bottom: 50px;
          }
		  .navbar-form .btn-warning {
            background-color: #544f48;
            border:none;
            margin-top: 13px;
		  }

		  .navbar-margin{
		  	margin-top: 10px;
		  }

          .heroImage {
          	background-image:url(HeroImage.png);
		    background-repeat: no-repeat;
		    width: 100%;
		    height: 880px;
		    background-size: cover;
          }

          body{
                background-color: #eee;
          }

          .thumbnail a{
              color: black;
          }

          .thumbnail a:hover{
              text-decoration: none;
          }

          .thumbnail img{
            max-width: 70% !important; 
            margin-top: 20px !important; 
            margin-bottom: 20px !important; 
          }

          hr{
            border-top: 1px solid #d6d6d6;
          }

          .btn-danger {
              color: #fff;
              background-color: #e44424;
              border-color: #b02f15;
          }

          .btn-danger:hover {
              background-color: #b02f15
          }



          .list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover,
          .panel-heading.active, .panel-heading.active:focus, .panel-heading.active:hover {
              color: #fff;
              background-color: #67BCDB;
              border-color: #67BCDB;
            }

            .category-title, .entry-title{
              font-weight: bold;
            }

            .list-category-child {
              padding-left: 35px;
            }
	    </style>


</head>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" ></a>
    </div>
    <div class="navbar-collapse collapse navbar-right main-nav" id="navbar">
       <ul class="nav navbar-nav navbar-margin">
        <li id="sub-1"><a href="#products">Who we are?</a></li>
        <li id="sub-2"><a href="<?php echo get_bloginfo('wpurl'); ?>/product">Products</a></li>
        <li id="sub-3"><a href="#about">Our Service</a></li>
        <li id="sub-4"><a href="#faqs">Careers</a></li>
      </ul>
      <form class="navbar-form navbar-right">            
        <button type="submit" class="btn btn-warning">Get a Quote</button>

      </form>
      <div class="bottom-arrow"></div>
    </div><!--/.navbar-collapse -->
  </div>
</nav>

<br>
<br>
<br>
<br>
<body>