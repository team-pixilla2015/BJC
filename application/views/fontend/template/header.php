<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>BJC Official</title>


  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/FE/css/reset.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/FE/css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/FE/css/bootstrap/bootstrap-select.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/FE/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/FE/css/owl.theme.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/FE/css/style.css" type="text/css" media="screen"/> -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/FE/css/animate.css" type="text/css" media="screen"/> -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/FE/css/font.css" type="text/css" media="screen"/> -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/FE/css/style_arm.css" type="text/css" media="screen"/> -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/FE/css/main.css" type="text/css" media="screen"/>

  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/FE/css/company.css" type="text/css" media="screen"/> -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/FE/css/business.css" type="text/css" media="screen"/> -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/FE/css/business02.css" type="text/css" media="screen"/> -->





  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/FE/css/jquery.bxslider.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/FE/css/jquery.fancybox.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/FE/css/jquery.fancybox-thumbs.css" type="text/css" media="screen"/>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->



  <script src="<?php echo base_url(); ?>assets/FE/js/jquery-1.11.0.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/FE/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/FE/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/FE/js/bootstrap-select.js"></script>
  <script src="<?php echo base_url(); ?>assets/FE/js/bootstrap-filestyle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/FE/js/jquery.bxslider.js"></script>
  <script src="<?php echo base_url(); ?>assets/FE/js/jquery.fancybox.js"></script>
  <script src="<?php echo base_url(); ?>assets/FE/js/jquery.fancybox-thumbs.js"></script>
  <script src="<?php echo base_url(); ?>assets/FE/js/jquery-ui.min.js"></script>


  <script>
  $(document).ready(function(){
    $('.btn-slide').click(function(){
      if($(this).parent('.topicfooter').next('ul').is(":visible")==true){

      }else{
      $('.topicfooter').next('ul').slideUp();
      $(this).parent('.topicfooter').next('ul').slideDown();
      }

    });

    $("#owl-example").owlCarousel({
      // autoPlay: 3000, //Set AutoPlay to 3 seconds
      items : 1,
      itemsDesktop : [1000,1], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,1], // betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
    });

  });
  $(window).bind('resize', function () {
    var checkW = $(window).width();
    if(checkW >= 1024){
      $('.footmenu ul').show();
    }else{
      $('.footmenu ul').hide();
    }


});

  </script>
<?php //require('conn.php'); ?>
</head>

<body>
  <header>
    <div id="bartop" class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="lang">
            <a href="javascript:;" class="btn-lang">TH</a> / <a href="javascript:;" class="btn-lang">EN</a>
          </div>
          <div class="top-smenu">
            <a href="<?php echo site_url("contact");?>">Contact</a>
            <span></span>
            <a href="<?php echo site_url("career");?>">Career</a>
          </div>
        </div>
      </div>
    </div>
    <!-- <div id="topmenu" class="container-fluid fullwidth">

    </div> -->
    <div class="headmenu">
      <div class="container">
        <div class="row">
          <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="logo">
                <a href="<?php echo site_url("home");?>"><img src="<?php echo base_url(); ?>assets/FE/images/mainlogo01.png"></a>
                <a href="<?php echo site_url("home");?>"><img src="<?php echo base_url(); ?>assets/FE/images/mainlogo02.png"></a>
              </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">

              <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo site_url("company");?>" class="listmenu">Company</a></li>
                    <li><a href="<?php echo site_url("business");?>" class="listmenu">Business</a></li>
                    <li><a href="<?php echo site_url("corporate");?>" class="listmenu">Corporate Governance</a></li>
                    <li><a href="<?php echo site_url("investor");?>" class="listmenu">Investor Relations</a></li>
                    <li><a href="<?php echo site_url("news_event");?>" class="listmenu">News &amp; Events</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav>
        </div>
      </div>
    </div>


  </header>
  <!-- End Header -->