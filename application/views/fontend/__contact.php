<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>BJC Official</title>
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen"/>
  <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="css/owl.carousel.css" rel="stylesheet">
  <link href="css/owl.theme.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="css/font.css" type="text/css" media="screen"/>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
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
</head>
<body>
  <header>
    <div id="bartop" class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="lang">
            <a href="javascript:;" class="btn-lang">TH</a> / <a href="javascript:;" class="btn-lang">EN</a>
          </div>
          <div class="top-smenu">
            <a href="javascript:;">Contact</a>
            <span></span>
            <a href="javascript:;">Career</a>
          </div>
        </div>
      </div>
    </div>
    <div id="topmenu" class="container-fluid fullwidth">
      <div class="container">
        <div class="row">
        <div class="col-lg-12">
          <div class="topmenu">
            <div class="logo">
              <a href="javascript:;"><img src="images/mainlogo01.png"></a>
              <a href="javascript:;"><img src="images/mainlogo02.png"></a>
            </div>
            <div class="menu">
              <a href="javascript:;" class="listmenu">Company</a>
              <a href="javascript:;" class="listmenu">Business</a>
              <a href="javascript:;" class="listmenu">Corporate Governance</a>
              <a href="javascript:;" class="listmenu">Investor Relations</a>
              <a href="javascript:;" class="listmenu">News &amp; Events</a>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <div class="hamburger">
      <a href="javascript:;" class="btn-hamburger">
      </a>
    </div>
  </header>
  <!-- End Header -->
  <section id="homebanner">
    <div class="row">
      <img src="images/banner01.jpg">
    </div>
  </section>


  <section id="selectBU" class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 topicSection">
        <h3>
          Select BJC Business By
        </h3>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <div class="typebu">
          <div class="icontype">
            <a href="javascript:;">
              <img src="images/bu-icon01.png">
            </a>
          </div>
          <div class="topictype">
            <a href="javascript:;">
              <h3>Brands</h3>
            </a>
          </div>
          <div class="desctype">
            <p>Explore BJC Business operation covers a complete value chain of services for brands.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <div class="typebu">
          <div class="icontype">
            <a href="javascript:;">
              <img src="images/bu-icon02.png">
            </a>
          </div>
          <div class="topictype">
            <a href="javascript:;">
              <h3>Category</h3>
            </a>
          </div>
          <div class="desctype">
            <p>Explore a category of BJC Company leading trading and manufacturing company by industry.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <div class="typebu">
          <div class="icontype">
            <a href="javascript:;">
              <img src="images/bu-icon03.png">
            </a>
          </div>
          <div class="topictype">
            <a href="javascript:;">
              <h3>Company</h3>
            </a>
          </div>
          <div class="desctype">
            <p>Explore list  companies based in the Berli Jucker Public Company Limited.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <div class="typebu">
          <div class="icontype">
            <a href="javascript:;">
              <img src="images/bu-icon04.png">
            </a>
          </div>
          <div class="topictype">
            <a href="javascript:;">
              <h3>Business Units</h3>
            </a>
          </div>
          <div class="desctype">
            <p>Explore BJC Business unit Organization divided into five groups.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <section id="timeline">

  </section> -->

  <section id="typeBU">
    <div class="wrapper-type">
      <div id="owl-example" class="owl-carousel">


        <div class="item darkCyan">
          <div class="texttypeBU">
            <div class="topictypeBU">
              <h3>
                Food &amp; Beverage
              </h3>
            </div>
            <div class="desctypeBU">
              <p>
                Business operation of BJC Consumer Supply Chain (CSC) covers a complete value chain of services for consumer products, ranging from manufacturing of own proprietary brands, contract-manufacturing of third-party’s product brands to marketing, sales, logistics and distribution, both domestically and in the ASEAN region.
              </p>
            </div>
            <div class="buttontypeBU">
              <a href='javascript:;' class="btntypeBU">View Detail</a>
            </div>
          </div>
          <div class="imgtypeBU">
            <img src='images/category/img01.jpg'>
          </div>
        </div>
        <div class="item darkCyan">
          <div class="texttypeBU">
            <div class="topictypeBU">
              <h3>
                Food &amp; Beverage
              </h3>
            </div>
            <div class="desctypeBU">
              <p>
                Business operation of BJC Consumer Supply Chain (CSC) covers a complete value chain of services for consumer products, ranging from manufacturing of own proprietary brands, contract-manufacturing of third-party’s product brands to marketing, sales, logistics and distribution, both domestically and in the ASEAN region.
              </p>
            </div>
            <div class="buttontypeBU">
              <a href='javascript:;' class="btntypeBU">View Detail</a>
            </div>
          </div>
          <div class="imgtypeBU">
            <img src='images/category/img02.jpg'>
          </div>
        </div>
        <div class="item darkCyan">
          <div class="texttypeBU">
            <div class="topictypeBU">
              <h3>
                Food &amp; Beverage
              </h3>
            </div>
            <div class="desctypeBU">
              <p>
                Business operation of BJC Consumer Supply Chain (CSC) covers a complete value chain of services for consumer products, ranging from manufacturing of own proprietary brands, contract-manufacturing of third-party’s product brands to marketing, sales, logistics and distribution, both domestically and in the ASEAN region.
              </p>
            </div>
            <div class="buttontypeBU">
              <a href='javascript:;' class="btntypeBU">View Detail</a>
            </div>
          </div>
          <div class="imgtypeBU">
            <img src='images/category/img03.jpg'>
          </div>
        </div>
        <div class="item darkCyan">
          <div class="texttypeBU">
            <div class="topictypeBU">
              <h3>
                Food &amp; Beverage
              </h3>
            </div>
            <div class="desctypeBU">
              <p>
                Business operation of BJC Consumer Supply Chain (CSC) covers a complete value chain of services for consumer products, ranging from manufacturing of own proprietary brands, contract-manufacturing of third-party’s product brands to marketing, sales, logistics and distribution, both domestically and in the ASEAN region.
              </p>
            </div>
            <div class="buttontypeBU">
              <a href='javascript:;' class="btntypeBU">View Detail</a>
            </div>
          </div>
          <div class="imgtypeBU">
            <img src='images/category/img04.jpg'>
          </div>
        </div>
        <div class="item darkCyan">
          <div class="texttypeBU">
            <div class="topictypeBU">
              <h3>
                Food &amp; Beverage
              </h3>
            </div>
            <div class="desctypeBU">
              <p>
                Business operation of BJC Consumer Supply Chain (CSC) covers a complete value chain of services for consumer products, ranging from manufacturing of own proprietary brands, contract-manufacturing of third-party’s product brands to marketing, sales, logistics and distribution, both domestically and in the ASEAN region.
              </p>
            </div>
            <div class="buttontypeBU">
              <a href='javascript:;' class="btntypeBU">View Detail</a>
            </div>
          </div>
          <div class="imgtypeBU">
            <img src='images/category/img05.jpg'>
          </div>
        </div>
        <div class="item darkCyan">
          <div class="texttypeBU">
            <div class="topictypeBU">
              <h3>
                Food &amp; Beverage
              </h3>
            </div>
            <div class="desctypeBU">
              <p>
                Business operation of BJC Consumer Supply Chain (CSC) covers a complete value chain of services for consumer products, ranging from manufacturing of own proprietary brands, contract-manufacturing of third-party’s product brands to marketing, sales, logistics and distribution, both domestically and in the ASEAN region.
              </p>
            </div>
            <div class="buttontypeBU">
              <a href='javascript:;' class="btntypeBU">View Detail</a>
            </div>
          </div>
          <div class="imgtypeBU">
            <img src='images/category/img06.jpg'>
          </div>
        </div>
        <div class="item darkCyan">
          <div class="texttypeBU">
            <div class="topictypeBU">
              <h3>
                Food &amp; Beverage
              </h3>
            </div>
            <div class="desctypeBU">
              <p>
                Business operation of BJC Consumer Supply Chain (CSC) covers a complete value chain of services for consumer products, ranging from manufacturing of own proprietary brands, contract-manufacturing of third-party’s product brands to marketing, sales, logistics and distribution, both domestically and in the ASEAN region.
              </p>
            </div>
            <div class="buttontypeBU">
              <a href='javascript:;' class="btntypeBU">View Detail</a>
            </div>
          </div>
          <div class="imgtypeBU">
            <img src='images/category/img07.jpg'>
          </div>
        </div>
        <div class="item darkCyan">
          <div class="texttypeBU">
            <div class="topictypeBU">
              <h3>
                Food &amp; Beverage
              </h3>
            </div>
            <div class="desctypeBU">
              <p>
                Business operation of BJC Consumer Supply Chain (CSC) covers a complete value chain of services for consumer products, ranging from manufacturing of own proprietary brands, contract-manufacturing of third-party’s product brands to marketing, sales, logistics and distribution, both domestically and in the ASEAN region.
              </p>
            </div>
            <div class="buttontypeBU">
              <a href='javascript:;' class="btntypeBU">View Detail</a>
            </div>
          </div>
          <div class="imgtypeBU">
            <img src='images/category/img08.jpg'>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="investor">
    <div class="pt-investor">
      <div class="blogtopicinvestor">
        <div class="topicinvestor">
          <h3>
            Investor Relations
          </h3>
        </div>
        <div class="buttoninvestor">
          <a herf="javascript:;" class="btninvestor">
            <img src="images/btninvestor.jpg">
          </a>
        </div>
      </div>
    </div>
    <div id="whatnews" class="wrapper">
      <div id="hnews" class="container">
        <h3 class="hwhatsnew">
          What’s New
        </h3>
      </div>
      <div class="container">
        <div class="row">
          <?php for($r=1;$r<=4;$r++){ ?>
          <div class="listnewshide col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="listnews">
              <div class="imgeachnews">
                <a href='javascript:;'>
                  <img src="images/news-img0<?php echo $r; ?>.jpg">
                </a>
              </div>
              <div class="texteachnews">
                <a href='javascript:;' class="linkeachnews">
                  Aswin Techajareonvikul is the lastest Thai to make his name known...
                </a>

                <p class="datenews">
                  12 Jul 2014
                </p>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>
      </div>
    </div>
  </section>

  <!-- Start Footer -->
  <footer>
    <div id="menufooter" class="container">
      <div class="row">
        <div class="footmenu col-lg-2 col-md-2 col-sm-12">
          <div class="topicfooter">
            <a data-id="company" herf="javascript:;" class="btn-slide">
              Company
            </a>
          </div>
          <ul>
            <li>
              <h3 class="topic-menuf">Company</h3>
            </li>
            <li>
              <a href="javascript:;">Company &amp; Profile</a>
            </li>
            <li>
              <a href="javascript:;">Vision &amp; Mission</a>
            </li>
            <li>
              <a href="javascript:;">BJC Group Structure</a>
            </li>
            <li>
              <a href="javascript:;">Management</a>
            </li>
            <li>
              <a href="javascript:;">Value and Culture</a>
            </li>
          </ul>
        </div>
        <div class="footmenu col-lg-3 col-md-3 col-sm-12">
          <div class="topicfooter">
            <a data-id="bjcbu" herf="javascript:;" class="btn-slide">
              BJC Business
            </a>
          </div>
          <ul>
            <li>
              <h3 class="topic-menuf">BJC Business</h3>
            </li>
            <li>
              <a href="javascript:;">Business Unit</a>
            </li>
            <li>
              <a href="javascript:;">Industry</a>
            </li>
            <li>
              <a href="javascript:;">Company</a>
            </li>
            <li>
              <a href="javascript:;">Brand</a>
            </li>
          </ul>
          <div class="topicfooter">
            <a data-id="corporate" herf="javascript:;" class="btn-slide">
              Corporate Governance
            </a>
          </div>
          <ul>
            <li>
              <h3 class="topic-menuf">Corporate<br/>Governance</h3>
            </li>
            <li>
              <a href="javascript:;">Code of Conduct</a>
            </li>
            <li>
              <a href="javascript:;">Handbook and Report</a>
            </li>
            <li>
              <a href="javascript:;">Committees</a>
            </li>
            <li>
              <a href="javascript:;">Company Documents</a>
            </li>
          </ul>
        </div>
        <div class="footmenu col-lg-3 col-md-3 col-sm-12">
          <div class="topicfooter">
            <a data-id="Investor" herf="javascript:;" class="btn-slide">
              Investor Relations
            </a>
          </div>
          <ul>
            <li>
              <h3 class="topic-menuf">Investor Relations</h3>
            </li>
            <li>
              <a href="javascript:;">IR Home</a>
            </li>
            <li>
              <a href="javascript:;">Corporate Information</a>
            </li>
            <li>
              <a href="javascript:;">Financial Information</a>
            </li>
            <li>
              <a href="javascript:;">Bond Info</a>
            </li>
            <li>
              <a href="javascript:;">Newsroom</a>
            </li>
            <li>
              <a href="javascript:;">Publication</a>
            </li>
            <li>
              <a href="javascript:;">Shareholder Information</a>
            </li>
            <li>
              <a href="javascript:;">Analyst Coverage</a>
            </li>
          </ul>
        </div>
        <div class="footmenu col-lg-2 col-md-2 col-sm-12">
          <div class="topicfooter">
            <a data-id="news" herf="javascript:;" class="btn-slide">
              News &amp; Events
            </a>
          </div>
          <ul>
            <li>
              <h3 class="topic-menuf">News &amp; Events</h3>
            </li>
            <li>
              <a href="javascript:;">News</a>
            </li>
            <li>
              <a href="javascript:;">Corporate Social<br/>Responsibility</a>
            </li>
            <li>
              <a href="javascript:;">Collection</a>
            </li>
            <li>
              <a href="javascript:;">TVC</a>
            </li>
            <li>
              <a href="javascript:;">Promotions</a>
            </li>

          </ul>
        </div>
        <div class="footmenu col-lg-2 col-md-2 col-sm-12">
          <div class="topicfooter">
            <a data-id="Careers" herf="javascript:;" class="btn-slide">
              Careers
            </a>
          </div>
          <ul>
            <li>
              <h3 class="topic-menuf">Career</h3>
            </li>
            <li>
              <a href="javascript:;">Job Vacancy</a>
            </li>
            <li>
              <a href="javascript:;">Apply Job</a>
            </li>
          </ul>
          <ul>
            <div class="topicfooter">
              <a data-id="contact" herf="javascript:;" class="btn-slide">
                Contact us
              </a>
            </div>
            <li>
              <h3 class="topic-menuf">Contact us</h3>
            </li>
            <li>
              <a href="javascript:;">Contact BJC</a>
            </li>
            <li>
              <a href="javascript:;">Address</a>
            </li>
            <li>
              <a href="javascript:;">Map</a>
            </li>
          </ul>

        </div>

      </div>

      </div>
    </div>
    <div id="copyright" class="container-fluid fullwidth">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="policy">
              <a href="javascript:;">Terms of Service</a>
              <a href="javascript:;">Policy</a>
              <a href="javascript:;">Legal &amp; Discialmer</a>
            </div>
            <div class="copyright">
              <p>
                Copyright © 2014 Berli Jucker Public Co. Ltd. All rights reserved.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>
