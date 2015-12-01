<!DOCTYPE html>
<html>
	<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Drupal Distribution Assets</title>
    
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap-3.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css" >

    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- stylesheets -->
    <link rel="stylesheet" href="css/style.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- jqueryUI -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

    <!-- Bootstrap JavaScript plugins -->
    <script src="bootstrap-3.3.1/js/bootstrap.min.js"></script>

    <!-- To Top scripts http://www.mattvarone.com/web-design/uitotop-jquery-plugin/ -->
	<!-- the necessary css for UItoTop -->	
	<link rel="stylesheet" type="text/css" media="screen" href="jquery.ui.totop/css/ui.totop.css" />
	<!-- easing plugin ( optional ) -->
	<script src="jquery.ui.totop/js/jquery.easing.js" type="text/javascript"></script>
	<!-- UItoTop plugin -->
	<script src="jquery.ui.totop/js/jquery.ui.totop.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>

    <!-- equal height -->
	<script src="js/equalheight.js" type="text/javascript">            
    </script>
   
    <!-- sidebox hide -->
	<script src="js/sidebox.js" type="text/javascript"></script>

    <!-- owl carousel -->
    <link rel="stylesheet" href="owlcarousel/owl.carousel.css">
    <script src="owlcarousel/owl.carousel.min.js"></script>
    
    <script>
    // owl carousel 
    $(document).ready(function(){
                $('.owl-carousel, .admin-carousel').owlCarousel({
                margin:10,
                merge:true,
                nav:true, 
                navText:['&nbsp;','&nbsp;'],
                responsive:{
                    0:{
                        items:1,
                    },
                    700:{
                        items:2,
                    },
                    980:{
                        items:4,
                        loop:true
                }
            }
        });
    });
    </script>

        
    </head>
  <body>

<header id="header">

  <!-- REGION TOPBAR -->     
  <div id="wrapper-topbar" class="wrapper">
    <div class="container">
      <div id="topbar" class="row region">
          <div id="you-are-logged-in-as">
              <a href="/user"><i class="fa fa-user">username</i> </a>
          </div>
      </div>
    </div><!-- end container -->
  </div><!-- end wrapper -->
  <!-- END REGION TOPBAR -->     

  <!-- REGION BRANDING -->
  <!-- OX AC logo & site branding -->  
  <div id="wrapper-branding" class="wrapper">
    <div class="container">
      <div id="branding" class="row region">
        <div id="logos" class="col-lg-9 col-md-12">
            
            <!-- ox logo -->
            <div class="oxlogo">
              <a href="http://www.ox.ac.uk"><img src="img/oxlogo.gif" alt="Oxford University" /></a>
            </div>

            <!-- site logo -->
              <div id="sitelogo">
                <a class="navbar-btn" href=""><img src="img/logo.gif" alt="dept logo" /></a>        
              </div>
     
            <!-- site name and slogan -->
            <div id="sitebrand">
                <a class="sitename" href="" title="">Site Name</a>
                <p class="siteslogan">Strapline</p>
            </div>

        </div>
          
        <div id="search" class="col-lg-3 col-md-12">
            <div id="searchTop"> 
                <div class="region region-search">
                <section id="block-search-form" class="block block-search contextual-links-region clearfix">
                <form class="search-form form-search content-search" role="search" action="/people" method="post" id="search-block-form" accept-charset="UTF-8" target="_self">
                    <div class="input-group">
                        <input title="Enter the terms you wish to search for." class="custom-search-box form-control form-text" placeholder="Search" type="text" id="edit-search-block-form--2" name="search_block_form" value="" size="15" maxlength="128"><span class="input-group-btn"><button type="submit" class="btn btn-default"><i class="icon glyphicon glyphicon-search" aria-hidden="true"></i></button></span>
                    </div>
                </form>
                </section> <!-- /.block -->
                </div>
            </div>
        </div>
          
    </div><!-- end branding -->
  </div><!-- end container -->
</div><!-- end wrapper -->     
      
  <!-- END REGION BRANDING -->
          
  <!-- REGION NAVIGATION -->
<div id="wrapper-navigation" class="wrapper">
    <div class="container">
      <div id="navigation" class="row region">
        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="menu nav navbar-nav">
                <li class="active"><a href="index.html"><!--<i class="fa fa-home"></i>--><span class="sr-only">(current)</span>Home</a></li>
                <li><a href="">Menu Item</a></li>
                <li><a href="">Menu Item</a></li>
                <li><a href="">Menu Item</a></li>
                <li><a href="">Menu Item</a></li>
                <li class="last expanded menu-mlid-456"><a href="/about">Dropdown Menu</a>
                    <ul class="menu nav navbar-nav">
                        <li class="first last leaf menu-mlid-457"><a href="/contact">Submenu Item</a></li>
                    </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </div>
    </div><!-- end container -->
  </div>
  <!-- END REGION NAVIGATION -->

</header>

<div id="wrapper-main" class="wrapper">
  <!-- main container -->
  <div id="main-container" class="container">


    <!-- REGION PREFACE -->
    <div id="preface" >
        <div class="row">
        <div class="col-sm-12">
            <div class="region region-preface">

            <!-- slideshow alt 
            <section id="block-views-ox-slideshow-style-alt" class="block block-views clearfix">
                <div class="view view-ox-slideshow view-id-ox_slideshow view-display-id-style_alt oxdrupal-slideshow oxdrupal-slideshow-style-alt view-dom-id-116f925963042833b999b4261ba2ca9b">
                    <div class="view-content">
                        <div class="skin-default">
                            <div id="views_slideshow_cycle_main_ox_slideshow-style_alt" class="views_slideshow_cycle_main views_slideshow_main">
                                <div id="views_slideshow_cycle_teaser_section_ox_slideshow-style_alt" class="views-slideshow-cycle-main-frame views_slideshow_cycle_teaser_section">
                                    <div id="views_slideshow_cycle_div_ox_slideshow-style_alt_1" class="views-slideshow-cycle-main-frame-row views_slideshow_cycle_slide views_slideshow_slide views-row-2 views_slideshow_cycle_hidden views-row-even">
                                    <div class="views-slideshow-cycle-main-frame-row-item views-row views-row-1 views-row-even">
                                    <div class="views-field views-field-nothing">        
                                        <span class="field-content"><a href="/example-subpage1">
                                        <div class="slidetext">
                                            <div class="title">Example subpage1</div>
                                            <div class="teaser-text">Dynamically productivate bricks-and-clicks interfaces through ubiquitous imperatives</div>
                                        </div>
                                        <div class="image">
                                        <img typeof="foaf:Image" src="img/example_image_1.jpg" />
                                        </div>
                                        </a>
                                        </span>  
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="views-slideshow-controls-bottom clearfix">
                                <div id="views_slideshow_controls_text_ox_slideshow-style_alt" class="views-slideshow-controls-text views_slideshow_controls_text">
                                <span id="views_slideshow_controls_text_previous_ox_slideshow-style_alt" class="views-slideshow-controls-text-previous views_slideshow_controls_text_previous"><a href="#">Previous</a></span>
                                <span id="views_slideshow_controls_text_pause_ox_slideshow-style_alt" class="views-slideshow-controls-text-pause views_slideshow_controls_text_pause  views-slideshow-controls-text-status-play"><a href="#">Pause</a></span>
                                <span id="views_slideshow_controls_text_next_ox_slideshow-style_alt" class="views-slideshow-controls-text-next views_slideshow_controls_text_next"><a href="#">Next</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 

    <div class="marginbottom"></div> <!-- /end slideshow alt -->
                
                
            <!-- slideshow new - style3 -->
            <section id="block-views-ox-slideshow-style-3" class="block block-views clearfix">
                <div class="view view-ox-slideshow view-id-ox_slideshow view-display-id-style_3 oxdrupal-slideshow oxdrupal-slideshow-style-3 view-dom-id-116f925963042833b999b4261ba2ca9b">
                    <div class="view-content">
                        <div class="skin-default">
                            <div id="views_slideshow_cycle_main_ox_slideshow-style_3" class="views_slideshow_cycle_main views_slideshow_main">
                                <div id="views_slideshow_cycle_teaser_section_ox_slideshow-style_3" class="views-slideshow-cycle-main-frame views_slideshow_cycle_teaser_section">
                                    <div id="views_slideshow_cycle_div_ox_slideshow-style_3_1" class="views-slideshow-cycle-main-frame-row views_slideshow_cycle_slide views_slideshow_slide views-row-2 views_slideshow_cycle_hidden views-row-even">
                                    <div class="views-slideshow-cycle-main-frame-row-item views-row views-row-1 views-row-even">
                                    <div class="views-field views-field-nothing">        
                                        <span class="field-content">
                                        
                                        <div class="slidetext">
                                            <div class="title">Example subpage1</div>
                                            <div class="teaser-text">Dynamically productivate bricks-and-clicks interfaces through ubiquitous imperatives</div>
                                            <p><a class="btn btn-info btn-lg" href="" role="button">Learn more</a></p>
                                        </div>
                                        <div class="image">
                                        <img typeof="foaf:Image" src="img/example_image_1.jpg" />
                                        </div>
                                        
                                        </span>  
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="views-slideshow-controls-bottom clearfix">
                                <div id="views_slideshow_controls_text_ox_slideshow-style_3" class="views-slideshow-controls-text views_slideshow_controls_text">
                                <span id="views_slideshow_controls_text_previous_ox_slideshow-style_3" class="views-slideshow-controls-text-previous views_slideshow_controls_text_previous"><a href="#">Previous</a></span>
                                <span id="views_slideshow_controls_text_pause_ox_slideshow-style_3" class="views-slideshow-controls-text-pause views_slideshow_controls_text_pause  views-slideshow-controls-text-status-play"><a href="#">Pause</a></span>
                                <span id="views_slideshow_controls_text_next_ox_slideshow-style_3" class="views-slideshow-controls-text-next views_slideshow_controls_text_next"><a href="#">Next</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /end slideshow alt -->

    <div class="marginbottom"></div>                
                
                
                
                
            </div>
        </div>
    </div>
    </div>
    <!-- END REGION PREFACE -->

      
      

    <!-- REGION CONTENT -->    
    <div id="maincontent">
        
        <!-- people -->
        <div class="row">

            <div class="views-row views-row-1 views-row-odd views-row-first col-sm-6 col-md-4">
            <article about="/people/john-locke" typeof="sioc:Item foaf:Document" class="node node-oxdrupal-person node-teaser node--oxdrupal_person--teaser" >
            <a href="/people/john-locke">
            <div class="teaser-field image-wrapper">
            <div class="teaser-field image">
            <img typeof="foaf:Image" src="img/john-locke.png">          
            </div>
            </div>
            </a>
            <div class="teaser-field text-wrapper text-intro">
            <a href="/people/john-locke">
            <div class="teaser-field title">
            <h3>John Locke</h3>
            </div>
            <div class="teaser-field job-title">Philosopher</div>
            </a>
            </div>
            <div class="teaser-field text-wrapper">
            <div class="teaser-field teaser-text">
                John Locke FRS was an English philosopher and physician regarded as one of the most influential of Enlightenment thinkers and known as the Father of Classical Liberalism.
            </div>
            </div>
            <div class="clearfix"></div>
            </article>
            </div>

            <div class="views-row views-row-1 views-row-odd views-row-first col-sm-6 col-md-4">
            <article about="/people/john-locke" typeof="sioc:Item foaf:Document" class="node node-oxdrupal-person node-teaser node--oxdrupal_person--teaser" >
            <a href="/people/john-locke">
            <div class="teaser-field image-wrapper">
            <div class="teaser-field image">
            <img typeof="foaf:Image" src="img/john-locke.png">         
            </div>
            </div>
            </a>
            <div class="teaser-field text-wrapper text-intro">
            <a href="/people/john-locke">
            <div class="teaser-field title">
            <h3>John Locke</h3>
            </div>
            <div class="teaser-field job-title">Philosopher</div>
            </a>
            </div>
            <div class="teaser-field text-wrapper">
            <div class="teaser-field teaser-text">
                John Locke FRS was an English philosopher and physician regarded as one of the most influential of Enlightenment thinkers and known as the Father of Classical Liberalism.
            </div>
            </div>
            <div class="clearfix"></div>
            </article>
            </div>

            <div class="views-row views-row-1 views-row-odd views-row-first col-sm-6 col-md-4">
            <article about="/people/john-locke" typeof="sioc:Item foaf:Document" class="node node-oxdrupal-person node-teaser node--oxdrupal_person--teaser" >
            <a href="/people/john-locke">
            <div class="teaser-field image-wrapper">
            <div class="teaser-field image">
            <img typeof="foaf:Image" src="img/john-locke.png">          
            </div>
            </div>
            </a>
            <div class="teaser-field text-wrapper text-intro">
            <a href="/people/john-locke">
            <div class="teaser-field title">
            <h3>John Locke</h3>
            </div>
            <div class="teaser-field job-title">Philosopher</div>
            </a>
            </div>
            <div class="teaser-field text-wrapper">
            <div class="teaser-field teaser-text">
                John Locke FRS was an English philosopher and physician regarded as one of the most influential of Enlightenment thinkers and known as the Father of Classical Liberalism.
            </div>
            </div>
            <div class="clearfix"></div>
            </article>
            </div>
        </div>
        
        <div class="marginbottom"></div>
 
<!-- 4way -->
    <div class="row">
        <div class="featured">
            <div class="views-row views-row-1 views-row-odd views-row-first col-sm-6 col-md-3">
            <article about="" typeof="sioc:Item foaf:Document" class="node node-oxdrupal-person node-teaser node--oxdrupal_person--teaser" >
            <a href="">
            <div class="teaser-field image-wrapper">
            <div class="teaser-field image">
            <img typeof="foaf:Image" src="img/4way-img.jpg">           
            </div>
            </div>
            </a>
            <div class="teaser-field text-wrapper text-intro">
            <a href="">
            <div class="teaser-field title">
            <h3>Title</h3>
            </div>
            </a>
            </div>
            <div class="teaser-field text-wrapper">
            <div class="teaser-field teaser-text">
                Teaser text
            </div>
            </div>
            <div class="clearfix"></div>
            </article>
            </div>       
        
            <div class="views-row views-row-1 views-row-odd views-row-first col-sm-6 col-md-3">
            <article about="" typeof="sioc:Item foaf:Document" class="node node-oxdrupal-person node-teaser node--oxdrupal_person--teaser" >
            <a href="">
            <div class="teaser-field image-wrapper">
            <div class="teaser-field image">
            <img typeof="foaf:Image" src="img/4way-img.jpg">           
            </div>
            </div>
            </a>
            <div class="teaser-field text-wrapper text-intro">
            <a href="">
            <div class="teaser-field title">
            <h3>Title</h3>
            </div>
            </a>
            </div>
            <div class="teaser-field text-wrapper">
            <div class="teaser-field teaser-text">
                Teaser text
            </div>
            </div>
            <div class="clearfix"></div>
            </article>
            </div>  
            
            <div class="views-row views-row-1 views-row-odd views-row-first col-sm-6 col-md-3">
            <article about="" typeof="sioc:Item foaf:Document" class="node node-oxdrupal-person node-teaser node--oxdrupal_person--teaser" >
            <a href="">
            <div class="teaser-field image-wrapper">
            <div class="teaser-field image">
            <img typeof="foaf:Image" src="img/4way-img.jpg">           
            </div>
            </div>
            </a>
            <div class="teaser-field text-wrapper text-intro">
            <a href="">
            <div class="teaser-field title">
            <h3>Title</h3>
            </div>
            </a>
            </div>
            <div class="teaser-field text-wrapper">
            <div class="teaser-field teaser-text">
                Teaser text
            </div>
            </div>
            <div class="clearfix"></div>
            </article>
            </div>  
            <div class="views-row views-row-1 views-row-odd views-row-first col-sm-6 col-md-3">
            <article about="" typeof="sioc:Item foaf:Document" class="node node-oxdrupal-person node-teaser node--oxdrupal_person--teaser" >
            <a href="">
            <div class="teaser-field image-wrapper">
            <div class="teaser-field image">
            <img typeof="foaf:Image" src="img/4way-img.jpg">           
            </div>
            </div>
            </a>
            <div class="teaser-field text-wrapper text-intro">
            <a href="">
            <div class="teaser-field title">
            <h3>Title</h3>
            </div>
            </a>
            </div>
            <div class="teaser-field text-wrapper">
            <div class="teaser-field teaser-text">
                Teaser text
            </div>
            </div>
            <div class="clearfix"></div>
            </article>
            </div>  
        </div>        
    </div>
 
    <div class="marginbottom"></div>
        
        
        
        
    <!-- carousel -->
    <div class="row">
        <div class="col-sm-12">
            <div class="carousel owl-carousel">
                    
                <div class="views-row views-row-1 views-row-odd views-row-first">
                    <article about="/people/john-locke" typeof="sioc:Item foaf:Document" class="node node-oxdrupal-person node-teaser node--oxdrupal_person--teaser" >
                        <a href="">
                        <div class="teaser-field image-wrapper">
                        <div class="teaser-field image">
                        <img typeof="foaf:Image" src="img/carousel-image.jpg">            
                        </div>
                        </div>
                        </a>
                        <div class="teaser-field text-wrapper text-intro">
                        <a href="">
                        <div class="teaser-field title">
                        <h3>Title</h3>
                        </div>
                        </a>
                        </div>
                        <div class="teaser-field text-wrapper">
                        <div class="teaser-field teaser-text">
                            Teaser text
                        </div>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                </div> 

                <div class="views-row views-row-1 views-row-odd views-row-first">
                    <article about="/people/john-locke" typeof="sioc:Item foaf:Document" class="node node-oxdrupal-person node-teaser node--oxdrupal_person--teaser" >
                        <a href="">
                        <div class="teaser-field image-wrapper">
                        <div class="teaser-field image">
                        <img typeof="foaf:Image" src="img/carousel-image.jpg">            
                        </div>
                        </div>
                        </a>
                        <div class="teaser-field text-wrapper text-intro">
                        <a href="">
                        <div class="teaser-field title">
                        <h3>Title</h3>
                        </div>
                        </a>
                        </div>
                        <div class="teaser-field text-wrapper">
                        <div class="teaser-field teaser-text">
                            Teaser text
                        </div>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                </div> 
                <div class="views-row views-row-1 views-row-odd views-row-first">
                    <article about="/people/john-locke" typeof="sioc:Item foaf:Document" class="node node-oxdrupal-person node-teaser node--oxdrupal_person--teaser" >
                        <a href="">
                        <div class="teaser-field image-wrapper">
                        <div class="teaser-field image">
                        <img typeof="foaf:Image" src="img/carousel-image.jpg">            
                        </div>
                        </div>
                        </a>
                        <div class="teaser-field text-wrapper text-intro">
                        <a href="">
                        <div class="teaser-field title">
                        <h3>Title</h3>
                        </div>
                        </a>
                        </div>
                        <div class="teaser-field text-wrapper">
                        <div class="teaser-field teaser-text">
                            Teaser text
                        </div>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                </div> 

                <div class="views-row views-row-1 views-row-odd views-row-first">
                    <article about="/people/john-locke" typeof="sioc:Item foaf:Document" class="node node-oxdrupal-person node-teaser node--oxdrupal_person--teaser" >
                        <a href="">
                        <div class="teaser-field image-wrapper">
                        <div class="teaser-field image">
                        <img typeof="foaf:Image" src="img/carousel-image.jpg">            
                        </div>
                        </div>
                        </a>
                        <div class="teaser-field text-wrapper text-intro">
                        <a href="">
                        <div class="teaser-field title">
                        <h3>Title</h3>
                        </div>
                        </a>
                        </div>
                        <div class="teaser-field text-wrapper">
                        <div class="teaser-field teaser-text">
                            Teaser text
                        </div>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                </div> 

                <div class="views-row views-row-1 views-row-odd views-row-first">
                    <article about="/people/john-locke" typeof="sioc:Item foaf:Document" class="node node-oxdrupal-person node-teaser node--oxdrupal_person--teaser" >
                        <a href="">
                        <div class="teaser-field image-wrapper">
                        <div class="teaser-field image">
                        <img typeof="foaf:Image" src="img/carousel-image.jpg">            
                        </div>
                        </div>
                        </a>
                        <div class="teaser-field text-wrapper text-intro">
                        <a href="">
                        <div class="teaser-field title">
                        <h3>Title</h3>
                        </div>
                        </a>
                        </div>
                        <div class="teaser-field text-wrapper">
                        <div class="teaser-field teaser-text">
                            Teaser text
                        </div>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                </div> 

                <div class="views-row views-row-1 views-row-odd views-row-first">
                    <article about="/people/john-locke" typeof="sioc:Item foaf:Document" class="node node-oxdrupal-person node-teaser node--oxdrupal_person--teaser" >
                        <a href="">
                        <div class="teaser-field image-wrapper">
                        <div class="teaser-field image">
                        <img typeof="foaf:Image" src="img/carousel-image.jpg">            
                        </div>
                        </div>
                        </a>
                        <div class="teaser-field text-wrapper text-intro">
                        <a href="">
                        <div class="teaser-field title">
                        <h3>Title</h3>
                        </div>
                        </a>
                        </div>
                        <div class="teaser-field text-wrapper">
                        <div class="teaser-field teaser-text">
                            Teaser text
                        </div>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                </div> 
                    
            </div>
        </div>
    </div>
        
        
    <!-- news region -->
    <div class="row">
        <div class="col-sm-12">
            <!-- latest news -->
                <div class="view-content row">
                    <div class="views-row views-row-1 views-row-odd views-row-first col-sm-6 col-md-4 latest-news-alt">
                        <h2 class="pane-title">Latest News</h2>

                        <article about="/news/here-news" typeof="sioc:Item foaf:Document" class="node node-oxdrupal-news-alt node-teaser node--oxdrupal_news--teaser">
                        <a href="/news/here-news">
                        <div class="teaser-field image-wrapper">
                            <div class="teaser-field image">
                            <img typeof="foaf:Image" src="http://drupal-platform.dd:8083/sites/drupal-platform.dd/files/styles/teaser_image/public/images/news/example_image_3.jpg?itok=0wOcFQSO" width="320" height="280" />          
                            </div>
                        </div>
                        <div class="teaser-field text-wrapper text-intro">
                            <div class="teaser-field date">
                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2015-04-17T01:00:00+01:00">Fri April 17th, 2015</span>
                            </div>
                            <div class="teaser-field title">
                            <h3>Here is the news</h3>
                            </div>
                            <div class="teaser-field teaser-text">
                            Professionally predominate plug-and-play catalysts.
                            </div>
                        </div>
                        </a>
                        <div class="clearfix"></div>
                        </article>

                        <article about="/news/here-news" typeof="sioc:Item foaf:Document" class="node node-oxdrupal-news-alt node-teaser node--oxdrupal_news--teaser">
                        <a href="/news/here-news">
                        <div class="teaser-field image-wrapper">
                            <div class="teaser-field image">
                            <img typeof="foaf:Image" src="http://drupal-platform.dd:8083/sites/drupal-platform.dd/files/styles/teaser_image/public/images/news/example_image_3.jpg?itok=0wOcFQSO" width="320" height="280" />          
                            </div>
                        </div>
                        <div class="teaser-field text-wrapper text-intro">
                            <div class="teaser-field date">
                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2015-04-17T01:00:00+01:00">Fri April 17th, 2015</span>
                            </div>
                            <div class="teaser-field title">
                            <h3>Here is the news</h3>
                            </div>
                            <div class="teaser-field teaser-text">
                            Professionally predominate plug-and-play catalysts.
                            </div>
                        </div>
                        </a>
                        <div class="clearfix"></div>
                        </article>

                        <article about="/news/here-news" typeof="sioc:Item foaf:Document" class="node node-oxdrupal-news-alt node-teaser node--oxdrupal_news--teaser">
                        <a href="/news/here-news">
                        <div class="teaser-field image-wrapper">
                            <div class="teaser-field image">
                            <img typeof="foaf:Image" src="http://drupal-platform.dd:8083/sites/drupal-platform.dd/files/styles/teaser_image/public/images/news/example_image_3.jpg?itok=0wOcFQSO" width="320" height="280" />          
                            </div>
                        </div>
                        <div class="teaser-field text-wrapper text-intro">
                            <div class="teaser-field date">
                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2015-04-17T01:00:00+01:00">Fri April 17th, 2015</span>
                            </div>
                            <div class="teaser-field title">
                            <h3>Here is the news</h3>
                            </div>
                            <div class="teaser-field teaser-text">
                            Professionally predominate plug-and-play catalysts for change vis-a-vis client-centric sources.
                            </div>
                        </div>
                        </a>
                        <div class="clearfix"></div>
                        </article>
                        
                        <p><a class="btn btn-info btn-lg" href="/components-showcase" role="button">All news</a></p>

                    </div><!-- end col-4 -->


    <!-- latest events -->

                    <div class="views-row views-row-1 views-row-odd views-row-first  col-sm-6  col-md-4 latest-events-alt">
                        <h2 class="pane-title">Latest Events</h2>

                        <article about="/news/here-events" class="node node-oxdrupal-events-alt">
                        <a href="/news/here-events">
                        <div class="teaser-field text-wrapper">
                            <div class="teaser-field title">
                            <h3>Event title</h3>
                            </div>
                            <div class="teaser-field date">
                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2015-04-17T01:00:00+01:00">Fri April 17th, 2015</span>
                            </div>
                        </div>
                        <div class="teaser-field image-wrapper">
                            <div class="teaser-field image">
                            <img typeof="foaf:Image" src="http://drupal-platform.dd:8083/sites/drupal-platform.dd/files/styles/teaser_image/public/images/news/example_image_1.jpg?itok=0wOcFQSO" width="320" height="280" />          
                            </div>
                        </div>
                        <div class="teaser-field text-wrapper">
                            <div class="teaser-field teaser-text">
                            Professionally predominate plug-and-play catalysts for change vis-a-vis client-centric sources.
                            </div>
                        </div>
                        </a>
                        <div class="clearfix"></div>
                        </article>

                        <article about="/news/here-events" class="node node-oxdrupal-events-alt">
                        <a href="/news/here-events">
                        <div class="teaser-field text-wrapper">
                            <div class="teaser-field title">
                            <h3>Event title</h3>
                            </div>
                            <div class="teaser-field date">
                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2015-04-17T01:00:00+01:00">Fri April 17th, 2015</span>
                            </div>
                        </div>
                        <div class="teaser-field image-wrapper">
                            <div class="teaser-field image">
                            <img typeof="foaf:Image" src="http://drupal-platform.dd:8083/sites/drupal-platform.dd/files/styles/teaser_image/public/images/news/example_image_1.jpg?itok=0wOcFQSO" width="320" height="280" />          
                            </div>
                        </div>
                        <div class="teaser-field text-wrapper">
                            <div class="teaser-field teaser-text">
                            Professionally predominate plug-and-play catalysts for change vis-a-vis client-centric sources.
                            </div>
                        </div>
                        </a>
                        <div class="clearfix"></div>
                        </article>

                        <article about="/news/here-events" class="node node-oxdrupal-events-alt">
                        <a href="/news/here-events">
                        <div class="teaser-field text-wrapper">
                            <div class="teaser-field title">
                            <h3>Event title</h3>
                            </div>
                            <div class="teaser-field date">
                            <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2015-04-17T01:00:00+01:00">Fri April 17th, 2015</span>
                            </div>
                        </div>
                        <div class="teaser-field image-wrapper">
                            <div class="teaser-field image">
                            <img typeof="foaf:Image" src="http://drupal-platform.dd:8083/sites/drupal-platform.dd/files/styles/teaser_image/public/images/news/example_image_1.jpg?itok=0wOcFQSO" width="320" height="280" />          
                            </div>
                        </div>
                        <div class="teaser-field text-wrapper">
                            <div class="teaser-field teaser-text">
                            Professionally predominate plug-and-play catalysts for change vis-a-vis client-centric sources.
                            </div>
                        </div>
                        </a>
                        <div class="clearfix"></div>
                        </article>
                        
                        <p><a class="btn btn-info btn-lg" href="/components-showcase" role="button">All events</a></p>


                    </div><!-- end col-4 -->
                </div><!-- end row -->
        </div><!-- end col-12 -->
    </div><!-- end row -->
        
        
    <div class="marginbottom"></div>     
        
    <!-- content region -->
    <div class="row">
        <div class="col-sm-12">
            
        </div>
    </div>
        
   <div class="marginbottom"></div> 

    <!-- REGION POSTSCRIPT -->
    <div id="postscript">

        <div class="row">
            <div id="postscript" class="col-sm-12">
                postscript region
            </div>
        </div>

    </div><!-- END REGION POSTSCRIPT -->
  </div><!-- end content container -->
</div>

      
      
<footer>
    
<!-- REGION PREFOOTER -->     
<div id="wrapper-prefooter" class="wrapper">
    <div class="container">
        <div id="prefooter" class="row">
            <div class="region region-prefooter">
                <section id="block-views-social-media-links-blk-social" class="block block-views contextual-links-region clearfix">
                  <div class="view view-social-media-links view-id-social_media_links view-display-id-blk_social block-social-media-links view-dom-id-5b5db1f25686700913ccdfe3d028923c">
                      <div class="view-content">
                        <div class="views-row views-row-1 views-row-odd views-row-first">
                            <div class="views-field views-field-field-link">
                                <div class="field-content">
                                    <div class=""><a href="https://www.facebook.com/Ox.Uni.IT.Services" title="Find Us On Facebook"><i class="fa fa-2x fa-facebook" ></i></a></div>
                                </div>  
                            </div>  
                        </div>
                        <div class="views-row views-row-2 views-row-even">
                            <div class="views-field views-field-field-link">        
                                <div class="field-content">
                                    <div class=""><a href="https://github.com/ox-it" title="Find Us On Github"><i class="fa fa-2x fa-github" ></i></a></div>
                                </div>  
                            </div>  
                        </div>
                        <div class="views-row views-row-3 views-row-odd">
                            <div class="views-field views-field-field-link">        
                                <div class="field-content">
                                    <div class=""><a href="https://www.linkedin.com" title="Find Us On LinkedIn"><i class="fa fa-2x fa-linkedin" ></i></a></div>
                                </div>  
                            </div>  
                        </div>
                            <div class="views-row views-row-4 views-row-even">
                                <div class="views-field views-field-field-link">        
                                    <div class="field-content"><div class=""><a href="http://twitter.com/Ox_IT" title="Follow Us On Twitter"><i class="fa fa-2x fa-twitter" ></i></a></div>
                                </div>  
                            </div>  
                        </div>
                        <div class="views-row views-row-5 views-row-odd views-row-last">
                            <div class="views-field views-field-field-link">        
                                <div class="field-content">
                                    <div class=""><a href="http://www.youtube.com" title="View Our YouTube Channel"><i class="fa fa-2x fa-youtube" ></i></a></div>
                                </div>  
                            </div>  
                        </div>
                    </div>
                </div><!-- end prefooter container -->
                </section>
            </div>
        </div>
    </div>
</div>
<!-- END REGION PREFOOTER -->     

  <!-- REGION FOOTER -->
  <div id="wrapper-footer" class="wrapper">
    <div id="footer" class="container">          
        <div class="row">
            <div id="footer_1" class="col-md-6">
                    <h2>Our offices</h2><p>13 Banbury Road, Oxford OX2 6NN<br /> 
                    <strong>tel:</strong> (+44) 1865 273200</p><p>Dartington House, University Offices, Wellington Square, Oxford OX1 2JD<br />
                    <strong>tel:</strong>&nbsp;(+44) 1865 270202</p><p>23-38 Hythe Bridge Street, Oxford OX1 2EP<br /> 
                    <strong>tel:</strong> (+44) 1865 270000</p>               
            </div>
            
            <div id="footer_2" class="col-sm-6 col-md-3">
                <h2>Related sites</h2>
                <ul class="menu">
                    <li class="first leaf"><a href="https://sharepoint.nexus.ox.ac.uk/sites/itservices/staff/SitePages/start.aspx">Staff Intranet</a></li>	
                    <li class="leaf"><a href="http://courses.it.ox.ac.uk">IT Learning Programme courses catalogue</a></li>	
                    <li class="leaf"><a href="https://www.oxforduniversitystores.co.uk/browse/department.asp?compid=2&amp;modid=1&amp;deptid=85">IT Services online shop</a></li>	
                    <li class="leaf"><a href="https://sharepoint.nexus.ox.ac.uk">Sharepoint</a></li>	
                    <li class="last leaf"><a href="http://weblearn.ox.ac.uk/">WebLearn</a></li>
                </ul>
            </div>
            
            <div id="footer_3" class="col-sm-6 col-md-3">
                <div class="region region-footer-3">
                    <section id="block-menu-block-footer" class="block block-menu-block contextual-links-region clearfix">
                        <div class="menu-block-wrapper menu-block-footer menu-name-footer-mandatory-menu parent-mlid-0 menu-level-1">
                            <ul class="menu nav">
                                <li class="first leaf menu-mlid-432"><a href="/ownership-liability-and-use">Copyright</a></li>
                                <li class="leaf menu-mlid-431"><a href="/privacy-policy">Privacy Policy</a></li>
                                <li class="last leaf menu-mlid-430"><a href="/picture-credits">Picture Credits</a></li>
                            </ul>
                        </div>
                    </section> <!-- /.block -->
                </div>
            </div>
        </div>
        
        <div class="row">
        <p class="copyright">&copy; 2015 - University of Oxford</p>
        </div>
    </div> <!-- end container -->
  </div> <!-- end wrapper -->

</footer>


  </body>
</html>