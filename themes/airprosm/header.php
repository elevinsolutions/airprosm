<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Air Pros Mechanical</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

    <!-- HOVER CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hover.css">

    <!-- CUSTOM GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

    <!-- BOOTSTRAP JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- ENZO -->
    <style>
        * {
            font-family: 'Catamaran', sans-serif;
        }
        .navbar-inverse {
            background-color: #a52424f2;
            border-color: transparent;
        }
        .navbar-inverse .navbar-nav>li>a {
            color: #ececec;
            font-size: 15px;
            margin-left: 20PX;
            font-weight: 800;
        }
        .navbar-brand {
            margin-top: 15px;
            background-image: url(AirProsLogo.png);
            background-repeat: no-repeat;
            width: 200px;
            padding-bottom: 50px;
            margin-left: 40px !important;
            background-size: 160px 50px;
        }
        .navbar-form .btn-warning {
            background-color: #ffffff;
            color: #8a1e1e;
            border: none;
            margin-top: 13px;
            transform: perspective(1px) translateZ(0);
            transition-property: color,background-color;
            transition-duration: .2s;
        }

        .navbar-toggle {
            margin-top: 15px;
        }

        .navbar-form .btn-warning:hover {
            background-color: #3a3a3a;
            color: #ffffff;
        }
        .navbar-margin {
            margin-top: 5px;
        }

        body {
            /*background-color: #eee;*/
        }
        .thumbnail a {
            color: black;
        }
        .thumbnail a:hover {
            text-decoration: none;
        }
        .thumbnail img {
            max-width: 70% !important;
            margin-top: 20px !important;
            margin-bottom: 20px !important;
        }
        hr {
            border-top: 1px solid #d6d6d6;
        }
        .btn-danger {
            color: #ffffff;
            background-color: #3e3d3d;
            border-color: #848484;
        }
        .btn-danger:hover, .btn-danger:active, .btn-danger:visited, .btn-danger:focus {
            background-color: #484848 !important;
            border-color:#484848 !important;
        }

        .list-group-item.active,
        .list-group-item.active:focus,
        .list-group-item.active:hover,
        .panel-heading.active,
        .panel-heading.active:focus,
        .panel-heading.active:hover {
            color: #fff;
            background-color: #67BCDB;
            border-color: #67BCDB;
        }
        .category-title,
        .entry-title {
            font-weight: bold;
        }
        .list-category-child {
            padding-left: 35px;
        }
        .footerContainer {
            background-color: #252525;
            padding-bottom: 100px;

        }
        .testimonial {
            display: inline-block;
            padding-right: 50px;
            padding-left: 50px;
            padding-top: 50px;
        }
        .testimonial_group {
            background-color: rgba(255, 255, 255, 0.5);
            padding-bottom: 100px;
        }
        .contact_form input, .contact_form textarea,
        .review_form input, .review_form textarea,
        .career_form input, .career_form textarea{
            margin-bottom: 20px;
            height: 45px;
            padding: 4px 4px 4px 15px;
            width: 100%;
            color: #000000;
            font-size: 17px;
        }

        .review{
            padding-top:50px;
            padding-bottom:50px;
            background-repeat: no-repeat;
            width: 100%;
/*            height: 550px;
*/            background-size: cover;
        }
        
        .review h1 {
            text-align: center;
            font-size: 50px;
            color: #a72727;
        }

        .review button {
            color: #585858;
            border: 1px solid;
            border-color:#afafaf;
        }

        .review button:hover {
            color: white;
            border: 1px solid;
            background-color: #a52424;
            transform: perspective(1px) translateZ(0);
            transition-property: color,background-color;
            transition-duration: .2s;
        }
        section.testimonials{
          background-color: #000000d6;
          color: white;
          padding-top: 40px;
          padding-bottom: 40px;
        }

        a.our_products_link:hover{
            color: white;
        }
    </style>

    <!-- JOVIN -->
    <style>
        
        @media (min-width: 768px)
        {
            .navbar-header {
                float: none;
            }
        }

        p {
            font-size: 17px;
        }
        .navbar-inverse {
            background-color: #c72e2ef2;
            border-color: transparent;
        }
        .navbar-inverse .navbar-nav>li>a {
            color: #ececec;
        }
        .navbar-brand {
            background-image: url(<?php echo get_template_directory_uri(); ?>/images/AirProsLogo.png);
            background-repeat: no-repeat;
            width: 200px;
            padding-bottom: 50px;
        }

        .navbar-margin {
            margin-top: 7px;
        }

        .navbar-details {
            float:right;
        }

        .main-nav
        {
            float: left !important;
        }


        .hero {

        }
        

        #heroCarousel .carousel-control.left {
            background-image:none;
        }

        #heroCarousel .carousel-control.right {
            background-image:none;
        }

        .heroMainTitle h2 {
            font-size: 3.5em;
            font-family: 'Roboto Condensed', sans-serif;
            text-shadow: -5px -1px 10px rgb(85, 85, 85);
        }
        .heroImage {
            background-image: url(<?php echo get_template_directory_uri(); ?>/images/HeroImage.png);
            background-repeat: no-repeat;
            margin-top: 90px;
            width: 100%;
            height: 620px;
            background-size: cover;
            box-shadow:inset 0 0 0 2000px rgba(68, 68, 68, 0.22);
        }

         .heroImage2 {
            background-image: url(<?php echo get_template_directory_uri(); ?>/images/slideshow2.jpeg);
            background-repeat: no-repeat;
            margin-top: 90px;
            width: 100%;
            height: 620px;
            background-size: cover;
            box-shadow:inset 0 0 0 2000px rgba(68, 68, 68, 0.22);
        }

        .heroBox {
            margin-top: 10px;
            padding-top: 50px;
            padding-bottom: 50px;
            background-color: #790202ab;
        }

        .heroInsideContent {
            color: white;
            text-shadow: 0px 0px 10px rgb(85, 85, 85);
            padding-top: 220px;
        }

        .heroMainTitle {
            height: 80px;
        }

        .hero input {
            height: 40px;
        }
        .hero .btn-hero {
            width: 350px;
            background-color: #202020;
            border: none;
        }
        .whyUs {
            height: 400px;
            margin-top: 150px;
        }
        .whyUs h3 {
            font-size: 24px;
            background-color: #ea3131;
            border-radius: 5px;
            color: white;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .whyUsIcons {
            height: 80px;
            width: 80px;
        }
        .slideshowProducts {
            height: 400px;
        }
        .slideshowProducts img {
            height: 400px;
            width: 500px !important;
            margin: 0 auto;
        }
        .weAre {
            margin-top: 100px;
            padding-top: 20px;
            padding-bottom: 100px;
        }
        .weAre p {
            line-height: 1.9;
            color: #777777;
        }
        .weAre .leftSideWeAre h4 {
            color: #b1b1b1;
            font-weight: 300;
        }
        .leftSideWeAre {
            background-color: #f2f2f2;
            padding: 50px;
        }

        .leftSideWeAre h1 {
            color: #b12c14;
        }
        .rightSideWeAre img {
            height: 110px;
            width: 100%;
        }

        .rightSideWeAre h4 {
            color: #b12c14;
            margin-top: 50px;
            font-size: 29px;
        }

        .rightSideWeAre .checkOutProducts {
            border: 1px solid;
            color: white;
            background-color: #3c3c3c;
            padding-top: 10px;
            padding-bottom: 10px;
            font-size: 18px;
            margin-top: 30px;
            transform: perspective(1px) translateZ(0);
            transition-property: color,background-color;
            transition-duration: .3s;
        }

        .checkOutProducts:hover {
            background-color: #ffffff;
            color:black;
        }
        .services {
            padding-bottom: 100px;
        }
        .services h3 {
            color: #ab1e1e;
        }

        .well {
            padding-top: 50px;
            padding-bottom: 90px;
            padding-left: 50px;
            padding-right: 50px;
            background-color: #b9b9b924;;
            border-radius: 0px;
        }
        
        .careers {
            background-color: #fafafa;
            padding-top:50px;
            padding-bottom:50px;
        }
        .careers h1 {
            font-size: 52px;
            color: #ab4646;
        }

        .careers p {
            color: #8d8f93;
            font-size: 18px;
            line-height: 1.9;
            font-style: italic;
        }

        .careers button:hover {
            transform: perspective(1px) translateZ(0);
            transition-property: color,background-color;
            transition-duration: .2s;
            color: white;
            background-color: #a52424;
        }

        textarea {
            border-color: #c3c3c3;
        }

        .caption h4 {
            height: 40px;
        }

        .caption button{
            color: #060606;
            background-color: #ffffff;
            border-color: #848484;
        }

        /** SideBar **/

        #sidebar {
            margin-top: 95px;
        }

        #sidebar .panel-group {
            background-color:#f5f5f5;
            border: 1px solid #cccccc;
            border-bottom: none;
            border-radius: 2px;
        }

        #sidebar .panel-default>.panel-heading {
            border-bottom: 1px solid #cccccc;
        }

        #sidebar .panel-default {
            border:none;

        }

        /** End SideBar **/
 
        #content {
            margin-top: 10px;
            padding-bottom: 170px;
        }
        
        /** Our Work **/

        .ourWork img {
            width: 100%;
            height: 380px;
        }

        .ourWork .panel-heading {
            padding:0;
        }
        
        .ourWork .panel-body {
            height:320px;
        }

        .ourWork .panel-work-title{
            height:60px;
        }

        .ourWork h4 {
            font-size:21px;
            font-weight: 800;
            color: #383838;
        }

        .ourWork p {
            font-size:15px;
        }

        .ourWork .glyphicon {
             -webkit-transition: all 0.6s cubic-bezier(0.3, 1, 0, 1);
            transition: all 0.6s cubic-bezier(0.3, 1, 0, 1);
            color: #af2929;
        }

        .ourWork .carousel-control.left {
            background-image:none;
        }

        .ourWork .carousel-control.right {
            background-image:none;
        }


        .ourWork .carousel-control:focus, .carousel-control:hover {
            color: #fb2e2e;
            text-decoration: none;
            filter: alpha(opacity=90);
            outline: 0;
            opacity: .9;
        }

        /** End of Our Work **/


        .productsPage img {
            width: 100%;
            height: 210px;
        }

        .productsPage .panel-heading {
            padding: 0;
        }

        .productsPage .panel-body {
            padding: 8px;
            color: #616161;
        }

        .btn-ground {
            margin-top: 50px;
        }

        /** footer style **/

        .footerContainer h4{
             font-size: 16px;
             text-align: left;
        }

        .footerContainer a {
            color:white;
        }

        /** modal style for get a quote**/

        .modalquote .modal-title {
        	color: #5d5d5d;
        	font-weight: 700;
        	font-size: 28px;
        }

        .modalquote .modal-header {
		    border-bottom: 8px solid #f1f3f5;
		}
      
        .modal-body {
        	padding-bottom: 80px;
        }

		.modalquote .contactInfoText {
			font-weight: 600;
			color:#5d5d5d;
		}

		.modalquote .inquiringText {
			color: #5d5d5d;
            font-style: italic;
		}

        .modalquote .modalclosebutton {
        	padding: 9px;
		    padding-top: 2px;
		    border: 1px solid transparent;
		    padding-bottom: 2px;
		    border-radius: 50px;
		    transition: all .1s ease-in-out;
        }

        .modalquote .modalclosebutton:hover {
        	color:white;
        	background-color: #ff0101;
        }

        #sidebar {
                margin-top: inherit;
       }
    </style>

    <!-- TESTIMONIALS SNIPPET -->
    <style>
        #testimonial4 {
            overflow: hidden;
            min-height: 375px;
            position: relative;
        }
        #testimonial4 .carousel-inner {
            width: 75%;
            margin: auto;

        }
        #testimonial4 .carousel-inner:hover {
            cursor: -moz-grab;
            cursor: -webkit-grab;
        }
        #testimonial4 .carousel-inner:active {
            cursor: -moz-grabbing;
            cursor: -webkit-grabbing;
        }
        #testimonial4 .carousel-inner .item {
            overflow: hidden;
        }
        .testimonial4_indicators .carousel-indicators {
            left: 0;
            margin: 0;
            width: 100%;
            font-size: 0;
            height: 20px;
            bottom: 15px;
            padding: 0 5px;
            overflow-x: auto;
            overflow-y: hidden;
            text-align: center;
            white-space: nowrap;
        }
        .testimonial4_indicators .carousel-indicators li {
            padding: 0;
            width: 10px;
            height: 10px;
            border: none;
            text-indent: 0;
            margin: 2px 3px;
            cursor: pointer;
            display: inline-block;
            background: #ffffff;
            -webkit-border-radius: 100%;
            border-radius: 100%;
        }
        .testimonial4_indicators .carousel-indicators .active {
            padding: 0;
            width: 10px;
            height: 10px;
            border: none;
            margin: 2px 3px;
            background-color: red;
            -webkit-border-radius: 100%;
            border-radius: 100%;
        }
        .testimonial4_indicators .carousel-indicators::-webkit-scrollbar {
            height: 3px;
        }
        .testimonial4_indicators .carousel-indicators::-webkit-scrollbar-thumb {
            background: #eeeeee;
            -webkit-border-radius: 0;
            border-radius: 0;
        }
        .testimonial4_control_button .carousel-control {
            top: 175px;
            opacity: 1;
            width: 40px;
            bottom: auto;
            height: 40px;
            font-size: 10px;
            cursor: pointer;
            font-weight: 700;
            overflow: hidden;
            line-height: 38px;
            text-shadow: none;
            text-align: center;
            background: transparent;
            border: 2px solid #ffffff;
            text-transform: uppercase;
            -webkit-border-radius: 100%;
            border-radius: 100%;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-transition: all 0.6s cubic-bezier(0.3, 1, 0, 1);
            transition: all 0.6s cubic-bezier(0.3, 1, 0, 1);
        }
        .testimonial4_control_button .carousel-control.left {
            left: 7%;
            right: auto;
        }
        .testimonial4_control_button .carousel-control.right {
            right: 7%;
            left: auto;
        }
        .testimonial4_control_button .carousel-control.left:hover,
        .testimonial4_control_button .carousel-control.right:hover {
            color: #000;
            background: #fff;
            border: 2px solid #fff;
        }
        .testimonial4_header {
            top: 0;
            left: 0;
            bottom: 0;
            width: 550px;
            display: block;
            margin: 30px auto;
            text-align: center;
            position: relative;
        }
        .testimonial4_header h4 {
            color: #ffffff;
            font-size: 36px;
            font-weight: 600;
            position: relative;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .testimonial4_slide {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 70%;
            margin: auto;
            padding: 20px;
            position: relative;
            text-align: center;
            padding-top: 0;
        }
        .testimonial4_slide img {
            top: 0;
            left: 0;
            right: 0;
            width: 50px;
            height: 50px;
            margin: auto;
            display: block;
            color: #f2f2f2;
            font-size: 18px;
            line-height: 46px;
            text-align: center;
            position: relative;
        }
        .testimonial4_slide p {
            color: #ffffff;
            font-size: 16px;
            margin: 40px 0 20px 0;
            font-style: italic;
        }
        .testimonial4_slide h4 {
            color: #ffffff;
            font-size: 24px;
            font-weight: bold;
        }

        .services {
            margin-top:20px;
          }

          .services h3 {
            color:#ab1e1e;
          }

           .parallax-one {
            padding-top: 150px;
            padding-bottom: 150px; 
            overflow: hidden; position: 
            relative; 
            width: 100%; 
            background-image: url(<?php echo get_template_directory_uri(); ?>/images/parallax1.jpeg);
            background-attachment: fixed; 
            background-size: cover; 
            -moz-background-size: cover; 
            -webkit-background-size: cover; 
            background-repeat: no-repeat;
            background-position: top center;     
            text-shadow: 0px 0px 10px rgb(85, 85, 85);
            box-shadow: inset 0 0 0 2000px rgba(68, 68, 68, 0.46);
           }

           .parallax-one h2 {
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            color: white;
            text-align: center;
            font-size:42px;
           }
           
           .parallax-one p {
             color: white;
             font-size: 16px;
             margin-top: 15px;
             line-height: 1.9;
           }

           .circularIcon {
             font-size: 70px;
            border-radius: 50%;
            border: 1px solid #d4d4d4;
            padding: 44px;
            height: 155px;
            width: 155px;
            color: #a52424;
           }
        
        @media(max-width: 1534px) {
            .productsPage img {
                height:160px;
            }
        }
        @media(max-width: 550px) {
            
            .main-nav {
            	float:none !important;
            }

            .navbar-inverse {
                background-color: #fb4747;
                border-color: transparent;
            }
            
            .navbar-details {
                 background-color: #fb4747;
                 float:initial;
                 padding-top:0px !important;
            }

            .navbar-navlinks {
                margin-top:0px !important;
                border-top: 1px solid #ff585e;
            }

            .navbar-inverse .navbar-toggle:focus, .navbar-inverse .navbar-toggle:hover {
                box-shadow: inset 0 0 0 2000px rgba(21, 1, 1, 0.18);
                background-color:white;
            }

            .navbar-inverse .navbar-toggle .icon-bar {
                background-color: red !important;
            }

            .navbar-toggle {
                border:none;
                background-color: white;
            }
            .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
                border-color: transparent;
            }

            .navbar-form .btn-warning {
                margin-top:0;
            }
            .heroImage {
                height:245px;
                background-position:center;
                margin-top: 40px;
            }

            .heroImage2 {
            	margin-top: 40px;
                background-position:center;
                height: 245px;

            }

            .heroInsideContent {
                padding-top: 50px;
            }

            .heroMainTitle h2 {
            	font-size:2.0em;
            }

            .hero .btn-hero {
                width: 250px !important;
            }

            .rightSideWeAre img {
                height: 110px;
                width: 100%;
                padding-bottom:30px;
             }

             .parallax-one {
                box-shadow: inset 0 0 0 2000px rgba(68, 68, 68, 0.68);
                padding-top: 50px;
                padding-bottom: 50px;
                background-image:none;
                background-color: rgb(44, 62, 80);

             }

             .parallax-one p {
                text-align:left;
             }

             .weAre {
             	margin-top:50px;
             }

             #testimonial4 .carousel-inner {
                margin-top: -20px;
             }

             #sidebar {
                margin-top: inherit;
             }

             #heroCarousel .carousel-control{
             	display: none;
             }

            .productsPage img {
                height: 190px;
            }
             input {
                border-color: white;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border: 1px solid #b9b9b9;

                }


             }

        @media only screen and (max-width: 480px) {
            .testimonial4_control_button .carousel-control {
                display: none;
            }
            .testimonial4_header {
                width: 95%;
            }
            .testimonial4_header h4 {
                font-size: 20px;
            }
            .testimonial4_slide {
                width: 98%;
                padding: 5px;
            }

            .navbar-brand {
                margin-top: 15px;
                background-size: 125px 40px;
                padding-bottom: 10px;
            }


            .navbar-details{
                clear:both;
            }

            .navbar-details .telnumber{
                font-size:22px !important;
            }
            .btn-getaquote {
                width: 140px;
            }

            .navbutton {
                font-size:14px !important;
                display:none;
            }

            .navbar-quote {
            	padding-top: 0px;
    			padding-bottom: 5px;
            }

            .navbar-quote button {
            	font-size: 15px !important;
            }

            .navbar-form {
                -webkit-box-shadow: none;
                box-shadow: none;
            }

            .heroBox {
                display:none;
            }

            .errorPage {
                margin-top: 120px;
            }

            .navbar-collapse {
                -webkit-box-shadow: none;
                box-shadow:none;
            }


        }
        @media (min-width: 481px) and (max-width: 767px) {
            .testimonial4_control_button .carousel-control.left {
                left: 2%;
            }
            .testimonial4_control_button .carousel-control.right {
                right: 2%;
            }
            .testimonial4_header {
                width: 95%;
            }
            .testimonial4_slide {
                width: 98%;
                padding: 5px;
            }
        }
        @media (min-width: 768px) and (max-width: 991px) {
            .testimonial4_control_button .carousel-control.left {
                left: 5%;
            }
            .testimonial4_control_button .carousel-control.right {
                right: 5%;
            }
        }
        @-webkit-keyframes psBoxShadowEffect_2 {
            0% {
                opacity: 0.3;
            }
            40% {
                opacity: 0.5;
                -webkit-box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.1), 0 0 10px 10px #ffffff, 0 0 0 10px rgba(255, 255, 255, 0.5);
            }
            100% {
                -webkit-box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.1), 0 0 5px 5px #ffffff, 0 0 0 5px rgba(255, 255, 255, 0.5);
                -webkit-transform: scale(1.5);
                opacity: 0;
            }
        }
        @keyframes psBoxShadowEffect_2 {
            0% {
                opacity: 0.3;
            }
            40% {
                opacity: 0.5;
                box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.1), 0 0 10px 10px #ffffff, 0 0 0 10px rgba(255, 255, 255, 0.5);
            }
            100% {
                box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.1), 0 0 5px 5px #ffffff, 0 0 0 5px rgba(255, 255, 255, 0.5);
                transform: scale(1.5);
                opacity: 0;
            }
        }
    </style>
</head>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="<?php echo get_site_url(); ?>"></a>

                 <div class="navbar-details hidden-xs" style="text-align: center;
                        padding-top: 10px;">
                  <a class="telnumber" href="tel:1-630-779-3805" style="font-family: Arial;
                        font-weight: 800; color: white;
                        font-size: 24px;">
                    1-630-779-3805</a>
                  <h1 style="font-size: 0.9em;
                        margin-top: 0;
                        font-family: arial; color:white;">
                    24 Hour Emergency Service Available</h1>
                  <a class="navbutton btn" href="https://microf.com/customers/" class="btn" style="color: #944848;
                        background-color: #ffffff;
                        /* border-color: #eea236; */
                        font-size: 17px;">
                    Financing Available</a>
                  <form class="navbar-form navbar-right navbar-quote d-sm-none" style="margin: 0;">
                    <button type="button" data-toggle="modal" data-target="#quoteModal" class="btn btn-warning btn-getaquote " style="    margin-top: 0;
                        color: #944848;
                        background-color: #ffffff;
                        font-size: 18px;">
                    Get a Quote</button>

                  </form>
                </div>

            </div>
        </div>
        <div class="row navbar-navlinks" style="margin-top: -50px;">


            
            <div class="navbar-collapse collapse navbar-right main-nav" id="navbar">

            	<div class="navbar-details visible-xs" style="text-align: center;
                        padding-top: 10px;">
                  <a class="telnumber" href="tel:1-630-779-3805" style="font-family: Arial;
                        font-weight: 800; color: white;
                        font-size: 24px;">
                    1-630-779-3805</a>
                  <h1 style="font-size: 0.9em;
                        margin-top: 0;
                        font-family: arial; color:white;">
                    24 Hour Emergency Service Available</h1>
                  <a class="navbutton btn" href="https://microf.com/customers/" class="btn" style="color: #944848;
                        background-color: #ffffff;
                        /* border-color: #eea236; */
                        font-size: 17px;">
                    Financing Available</a>
                  <form class="navbar-form navbar-right navbar-quote d-sm-none" style="margin: 0;">
                    <button type="button" data-toggle="modal" data-target="#quoteModal" class="btn btn-warning btn-getaquote " style="    margin-top: 0;
                        color: #944848;
                        background-color: #ffffff;
                        font-size: 18px;">
                    Get a Quote</button>

                  </form>
                </div>


                <ul class="nav navbar-nav navbar-margin">
                    <li id="sub-1"><a href="<?php echo get_bloginfo('wpurl'); ?>#weAre" onclick="scrollToPage('weAre');return false;">HOME</a>
                    </li>
                    <li id="sub-2"><a href="<?php echo get_bloginfo('wpurl'); ?>/product">PRODUCTS</a>
                    </li>
                    <li id="sub-3"><a href="<?php echo get_bloginfo('wpurl'); ?>#services" onclick="scrollToPage('services');return false;">SERVICES</a>
                    </li>
                    <li id="sub-4"><a href="<?php echo get_bloginfo('wpurl'); ?>#testimonials" onclick="scrollToPage('testimonials');return false;">REVIEWS</a>
                    </li>
                    <li id="sub-5"><a href="<?php echo get_bloginfo('wpurl'); ?>#careers" onclick="scrollToPage('careers');return false;">CAREERS</a>
                    </li>
                </ul>
                <div class="bottom-arrow"></div>
            </div>
        </div>
        <!--/.navbar-collapse -->
    </div>
</nav>

.<!-- line modal -->
<div class="modal fade modalquote" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

    <?php include 'includes/quote_form.php'; ?>
    <form method="post" enctype="multipart/form-data">
    <input type="hidden" name="action" value="quote">
        <div class="modal-header">
            <button type="button" class="close modalclosebutton" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel">Get a Quote</h3>
        </div>

        <div class="modal-body">
            
            <!-- content goes here -->

                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h4 class="contactInfoText">Contact Info</h4>
                        <input type="text" name="contact_name" class="form-control" placeholder="Full Name" required> <br>
                        <input type="email" name="email" class="form-control" placeholder="Email" required> <br>
                        <input type="text" name="phone" class="form-control" placeholder="Contact Number" required>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <h4 class="inquiringText">What are you inquiring about?</h4>
                        <select name="category" class="form-control" name="category" required>
                            <option> -- Select Product (if applicable) -- </option>

                            <? foreach(get_categories() as $category): ?>

                                <option value="<?= $category->cat_name; ?>"><?= $category->cat_name; ?></option>

                            <? endforeach; ?>
                        </select> <br>
                        <textarea name="comment" style="height: 90px;" class="form-control" placeholder="Comments" required></textarea>
                    </div>
                </div>

        </div>

        <div class="modal-footer">
            <div class="btn-group" role="group">
                <button type="submit" class="btn btn-default btn-hover-green pull-right" data-action="save" role="button">Submit</button>
            </div>
        </div>
    </form>

    </div>
  </div>
</div>

<body>