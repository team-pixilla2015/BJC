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
  <link rel="stylesheet" href="css/company.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="css/font.css" type="text/css" media="screen"/>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
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
    $('.openimg').on('click',function(){
      $('.imgexplore').slideDown(300);
      $('.btnexplore').addClass('closeimg').removeClass('openimg');
    });
    $('.closeimg').on('click',function(){
      $('.imgexplore').slideUp(300);
      $('.btnexplore').addClass('openimg').removeClass('closeimg');
    });

    // tabs
    $( "#tabsgroup" ).tabs();

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
            <a href="contact.php">Contact</a>
            <span></span>
            <a href="career.php">Career</a>
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
              <a href="company.php" class="listmenu">Company</a>
              <a href="business01.php" class="listmenu">Business</a>
              <a href="corp.php" class="listmenu">Corporate Governance</a>
              <a href="javascript:;" class="listmenu">Investor Relations</a>
              <a href="news_events_all.php" class="listmenu">News &amp; Events</a>
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
  <section id="banner">
    <img src="images/company/banner01.jpg">
  </section>
  <section id="introcp">
    <div class="wrapper">
      <div class="hintrocp">
        <h3 class="txt-hicp">
          Berli Jucker Company
        </h3>
        <h5 class="txt-hicp">
          Building Partnerships in Thailand SINCE 1882
        </h5>
      </div>
      <div class="dintrocp">
        <p class="txt-dicp">
          The rich and remarkable history of Berli Jucker Public Company Limited (BJC) that spans over 131 years takes it to the very forefront of the trading, manufacturing and servicing fields in Thailand.
        </p>
        <p class="txt-dicp">
          The company’s inception was first created through a partnership between the Berli and Jucker families. This was the first of many strong partnerships that led to one of the Kingdom of Siam's earliest and most successful  trading companies.
        </p>
        <p class="txt-dicp">
          Originally, BJC engaged in rice milling, mining, timber, shipping, importing, and other activities that laid a foundation instrumental for Thailand’s progress towards an “industrial” stage. By carefully selecting and nurturing its local and international partners, BJC continuously prospered over the years to become a major Thai import and export firm. After World War II, BJC diversified its operations into manufacturing, packaging and
          distribution.
        </p>

      </div>
    </div>
  </section>
  <section id="onmu">
    <div class="wrapper">
      <div class="topiconmu">
        <h3 class="txt-tonmu">
          Online Museum
        </h3>
        <h5 class="txt-tonmu">
          Watch Berli Jucker Company's Online Museum
        </h5>
      </div>
      <div class="btnonmu">
        <a href="javascript:;" class="buttononmu openimg">
          Explore <span>Online Museum</span>
        </a>
      </div>
    </div>
  </section>
  <section id="vismis">
    <div class="wrapper">
      <div class="vision">
        <div class="hvis">
          <h3 class="txt-hvis">Vision</h3>
        </div>
        <div class="dvis">
          <p class="txt-dvis">
            To be a provider of integrated supply chain solution in the region, providing top quality products and services that are involved in the everyday life of people
          </p>
        </div>
      </div>
      <div class="mission">
        <div class="hmis">
          <h3 class="txt-hmis">Mission</h3>
        </div>
        <div class="dmis">
          <p class="txt-dmis">
            Dedicated first and foremost to delivering high-quality products and superior service to our customer.
          </p>
          <ul class="listdmis">
            <li>
              <p class="txt-dmis">
                Build and extensive yet cost-effective distribution network across the region
              </p>
            </li>
            <li>
              <p class="txt-dmis">
                Be the preferred partner of choice to all our clients
              </p>
            </li>
            <li>
              <p class="txt-dmis">
                Ultimately achieve superior returns on investment to our shareholders
              </p>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </section>
  <section id="bjcgroup">
    <div class="topicbjcg">
      <h3 class="txt-topicbjcg">
        BJC GROUP STRUCTURE
      </h3>
    </div>
    <div id="tabsgroup" class="">
      <div class="imgctrtabs">
        <img src="images/company/choice01.png">
      </div>
      <ul class="ultabs">
        <li>
          <a href="#tabs1">
            <div class="blogicon first">
              <h3 class="txticon">
                Icon01
              </h3>
            </div>
          </a>
        </li>
        <li>
          <a href="#tabs2">
            <div class="blogicon">
              <h3 class="txticon">
                Icon02
              </h3>
            </div>
          </a>
        </li>
        <li>
          <a href="#tabs3">
            <div class="blogicon">
              <h3 class="txticon">
                Icon03
              </h3>
            </div>
          </a>
        </li>
        <li>
          <a href="#tabs4">
            <div class="blogicon">
              <h3 class="txticon">
                Icon04
              </h3>
            </div>
          </a>
        </li>
        <li>
          <a href="#tabs5">
            <div class="blogicon">
              <h3 class="txticon">
                Icon05
              </h3>
            </div>
          </a>
        </li>
      </ul>
      <!-- Start Tabs -->
      <div id="tabs1" class="showtabs">

        <div class="row">

          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
            <div class="listbjcg">
              <div class="imgbjcg">
                <img src="images/company/img01.png">
              </div>
              <div class="descbjcg">
                <h5 class="ncp">Company</h5>
                <p class="typecp">Business Group</p>
              </div>
            </div>
          </div>
		  
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
            <div class="listbjcg">
              <div class="imgbjcg">
                <img src="images/company/img02.png">
              </div>
              <div class="descbjcg">
                <h5 class="ncp">Company</h5>
                <p class="typecp">Business Group</p>
              </div>
            </div>
          </div>
		  
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
            <div class="listbjcg">
              <div class="imgbjcg">
                <img src="images/company/img03.png">
              </div>
              <div class="descbjcg">
                <h5 class="ncp">Company</h5>
                <p class="typecp">Business Group</p>
              </div>
            </div>
          </div>
		  
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
            <div class="listbjcg">
              <div class="imgbjcg">
                <img src="images/company/img04.png">
              </div>
              <div class="descbjcg">
                <h5 class="ncp">Company</h5>
                <p class="typecp">Business Group</p>
              </div>
            </div>
          </div>
		  
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
            <div class="listbjcg">
              <div class="imgbjcg">
                <img src="images/company/img05.png">
              </div>
              <div class="descbjcg">
                <h5 class="ncp">Company</h5>
                <p class="typecp">Business Group</p>
              </div>
            </div>
          </div>
		  
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
            <div class="listbjcg">
              <div class="imgbjcg">
                <img src="images/company/img06.png">
              </div>
              <div class="descbjcg">
                <h5 class="ncp">Company</h5>
                <p class="typecp">Business Group</p>
              </div>
            </div>
          </div>
		  
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
            <div class="listbjcg">
              <div class="imgbjcg">
                <img src="images/company/img07.png">
              </div>
              <div class="descbjcg">
                <h5 class="ncp">Company</h5>
                <p class="typecp">Business Group</p>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
            <div class="listbjcg">
              <div class="imgbjcg">
                <img src="images/company/img08.png">
              </div>
              <div class="descbjcg">
                <h5 class="ncp">Company</h5>
                <p class="typecp">Business Group</p>
              </div>
            </div>
          </div>
		  
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
            <div class="listbjcg">
              <div class="imgbjcg">
                <img src="images/company/img08.png">
              </div>
              <div class="descbjcg">
                <h5 class="ncp">Company</h5>
                <p class="typecp">Business Group</p>
              </div>
            </div>
          </div>
		  
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
            <div class="listbjcg">
              <div class="imgbjcg">
                <img src="images/company/img09.png">
              </div>
              <div class="descbjcg">
                <h5 class="ncp">Company</h5>
                <p class="typecp">Business Group</p>
              </div>
            </div>
          </div>
		  
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
            <div class="listbjcg">
              <div class="imgbjcg">
                <img src="images/company/img10.png">
              </div>
              <div class="descbjcg">
                <h5 class="ncp">Company</h5>
                <p class="typecp">Business Group</p>
              </div>
            </div>
          </div>
		  
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
            <div class="listbjcg">
              <div class="imgbjcg">
                <img src="images/company/img11.png">
              </div>
              <div class="descbjcg">
                <h5 class="ncp">Company</h5>
                <p class="typecp">Business Group</p>
              </div>
            </div>
          </div>
		  
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
            <div class="listbjcg">
              <div class="imgbjcg">
                <img src="images/company/img12.png">
              </div>
              <div class="descbjcg">
                <h5 class="ncp">Company</h5>
                <p class="typecp">Business Group</p>
              </div>
            </div>
          </div>
		  
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
            <div class="listbjcg">
              <div class="imgbjcg">
                <img src="images/company/img13.png">
              </div>
              <div class="descbjcg">
                <h5 class="ncp">Company</h5>
                <p class="typecp">Business Group</p>
              </div>
            </div>
          </div>
		  
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
            <div class="listbjcg">
              <div class="imgbjcg">
                <img src="images/company/img14.png">
              </div>
              <div class="descbjcg">
                <h5 class="ncp">Company</h5>
                <p class="typecp">Business Group</p>
              </div>
            </div>
          </div>
		  
		  
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
            <div class="listbjcg">
              <div class="imgbjcg">
                <img src="images/company/img15.png">
              </div>
              <div class="descbjcg">
                <h5 class="ncp">Company</h5>
                <p class="typecp">Business Group</p>
              </div>
            </div>
          </div>
		  
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
            <div class="listbjcg">
              <div class="imgbjcg">
                <img src="images/company/img16.png">
              </div>
              <div class="descbjcg">
                <h5 class="ncp">Company</h5>
                <p class="typecp">Business Group</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="tabs2" class="showtabs">
        <div class="row">
          <?php for($q=1;$q<=16;$q++){ ?>
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">

            <div class="listbjcg">
              <div class="imgbjcg">
                <img src="images/company/img01.png">
              </div>
              <div class="descbjcg">
                <h3 class="ncp">Company02</h3>
                <p class="typecp">Type Company02</p>
              </div>
            </div>

          </div>
          <?php } ?>
        </div>
      </div>
      <div id="tabs3" class="showtabs">
        <div class="row">
          <?php for($w=1;$w<=16;$w++){ ?>
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">

            <div class="listbjcg">
              <div class="imgbjcg">
                <img src="images/company/img01.png">
              </div>
              <div class="descbjcg">
                <h3 class="ncp">Company03</h3>
                <p class="typecp">Type Company03</p>
              </div>
            </div>

          </div>
          <?php } ?>
        </div>
      </div>
      <div id="tabs4" class="showtabs">
        <div class="row">
          <?php for($e=1;$e<=16;$e++){ ?>
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">

            <div class="listbjcg">
              <div class="imgbjcg">
                <img src="images/company/img01.png">
              </div>
              <div class="descbjcg">
                <h3 class="ncp">Company04</h3>
                <p class="typecp">Type Company04</p>
              </div>
            </div>

          </div>
          <?php } ?>
        </div>
      </div>
      <div id="tabs5" class="showtabs">
        <div class="row">
          <?php for($r=1;$r<=16;$r++){ ?>
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">

            <div class="listbjcg">
              <div class="imgbjcg">
                <img src="images/company/img01.png">
              </div>
              <div class="descbjcg">
                <h3 class="ncp">Company05</h3>
                <p class="typecp">Type Company05</p>
              </div>
            </div>

          </div>
          <?php } ?>
        </div>
      </div>
      <!-- End Tabs -->
    </div>
    <div class="exploreAS">
      <div class="blogbtnexplore">
        <a href="javascript:;" class="btnexplore openimg">
          Explore <span>All Structures</span>
        </a>
      </div>
      <div class="imgexplore">
        <img src="images/company/chart.jpg">
      </div>
    </div>
  </section>
  <section id="blogbod">
    <div class="wrapper">
      <div class="blogtopicsbod">
        <div class="topicsbod">
          <h3 class="txt-tbod">BJC Management</h3>
        </div>
        <div class="descsbod">
          <p class="txt-tbod">
            Run by highly experienced and respected management with the single-mindedness to further expand the performance of the Company, BJC firmly believes in the principles of free trade and good corporate governance. It is fully accountable to its stakeholders’ interests - shareholders, business partners, employees and the society as a whole.
          </div>
        </div>
      </div>
    </div>
    <div class="blogbod">
      <div class="wrapper">
        <div class="topicbod">
          <h3 class="txt-bod">
            Board of Directors
          </h3>
        </div>
      </div>
      <div class="bod">
		
	        <div class="listbod">
          <div class="imgbod">
            <img src="images/company/pn01.png">
          </div>
          <div class="descbod">
            <h3 class="txt-dbod">
				นาย เจริญ สิริวัฒนภักดี   
            </h3>
            <p class="txt-dbod">
              ประธานกรรมการ / ประธานกรรมการบริหาร / ประธานเจ้าหน้าที่บริหาร
            </p>
          </div>
        </div>
		
	        <div class="listbod">
          <div class="imgbod">
            <img src="images/company/pn02.png">
          </div>
          <div class="descbod">
            <h3 class="txt-dbod">
              คุณหญิงวรรณา สิริวัฒนภักดี	
            </h3>
            <p class="txt-dbod">
              รองประธานกรรมการ
            </p>
          </div>
        </div>
		
	        <div class="listbod">
          <div class="imgbod">
            <img src="images/company/pn03.png">
          </div>
          <div class="descbod">
            <h3 class="txt-dbod">
              นายประเสิรฐ เมฆวัฒนา
            </h3>
            <p class="txt-dbod">
              กรรมการบริษัท / รองประธานกรรมการบริหาร / กรรมการบริหารความเสี่ยง
            </p>
          </div>
        </div>
		
	        <div class="listbod">
          <div class="imgbod">
            <img src="images/company/pn04.png">
          </div>
          <div class="descbod">
            <h3 class="txt-dbod">
              นายชัยยุทธ ปิลันธน์โอวาท 
            </h3>
            <p class="txt-dbod">
             กรรมการบริษัท / รองประธานกรรมการบริหาร /กรรมการสรรหาและกำหนดค่าตอบแทน
            </p>
          </div>
        </div>
		
	        <div class="listbod">
          <div class="imgbod">
            <img src="images/company/pn05.png">
          </div>
          <div class="descbod">
            <h3 class="txt-dbod">
             นายธีรศักดิ์ นาทีกาญจนลาภ
            </h3>
            <p class="txt-dbod">
          กรรมการบริษัท / รองประธานกรรมการบริหาร / กรรมการบริหารความเสี่ยง
            </p>
          </div>
        </div>
		
	        <div class="listbod">
          <div class="imgbod">
            <img src="images/company/pn06.png">
          </div>
          <div class="descbod">
            <h3 class="txt-dbod">
           นายฐาปน สิริวัฒนภักดี  
            </h3>
            <p class="txt-dbod">
             กรรมการบริษัท / กรรมการบริหาร
            </p>
          </div>
        </div>
		
	        <div class="listbod">
          <div class="imgbod">
            <img src="images/company/pn07.png">
          </div>
          <div class="descbod">
            <h3 class="txt-dbod">
             นายปณต  สิริวัฒนภักดี
            </h3>
            <p class="txt-dbod">
             กรรมการบริษัท / กรรมการบริหาร
            </p>
          </div>
        </div>
		
	        <div class="listbod">
          <div class="imgbod">
            <img src="images/company/pn08.png">
          </div>
          <div class="descbod">
            <h3 class="txt-dbod">
             นายสิทธิชัย ชัยเกรียงไกร
            </h3>
            <p class="txt-dbod">
             กรรมการบริษัท / กรรมการบริหาร / กรรมการบริหารความเสี่ยง
            </p>
          </div>
        </div>
		
	        <div class="listbod">
          <div class="imgbod">
            <img src="images/company/pn09.png">
          </div>
          <div class="descbod">
            <h3 class="txt-dbod">
             พลตำรวจเอกกฤษณะ ผลอนันต์ 
            </h3>
            <p class="txt-dbod">
             กรรมการบริษัท / กรรมการตรวจสอบ / กรรมการอิสระ
            </p>
          </div>
        </div>
		
	        <div class="listbod">
          <div class="imgbod">
            <img src="images/company/pn10.png">
          </div>
          <div class="descbod">
            <h3 class="txt-dbod">
              นายวีระวงศ์ จิตต์มิตรภาพ 
            </h3>
            <p class="txt-dbod">
             กรรมการบริษัท / กรรมการตรวจสอบ / กรรมการอิสระ
            </p>
          </div>
        </div>
		
	        <div class="listbod">
          <div class="imgbod">
            <img src="images/company/pn11.png">
          </div>
          <div class="descbod">
            <h3 class="txt-dbod">
              นายประสิทธิ์  โฆวิไลกุล   
            </h3>
            <p class="txt-dbod">
             กรรมการบริษัท / ประธานกรรมการตรวจสอบ / กรรมการอิสระ
            </p>
          </div>
        </div>
		
	        <div class="listbod">
          <div class="imgbod">
            <img src="images/company/pn12.png">
          </div>
          <div class="descbod">
            <h3 class="txt-dbod">
            นายสุวิทย์ เมษินทรีย์   
            </h3>
            <p class="txt-dbod">
             กรรมการบริษัท / กรรมการตรวจสอบ / กรรมการอิสระ / กรรมการสรรหาและกำหนดค่าตอบแทน
            </p>
          </div>
        </div>
		
	        <div class="listbod">
          <div class="imgbod">
            <img src="images/company/pn13.png">
          </div>
          <div class="descbod">
            <h3 class="txt-dbod">
         นางสาวพจนีย์  ธนวรานิช  
            </h3>
            <p class="txt-dbod">
        กรรมการบริษัท / กรรมการอิสระ
            </p>
          </div>
        </div>
		
	<div class="listbod">
          <div class="imgbod">
            <img src="images/company/pn14.png">
          </div>
          <div class="descbod">
            <h3 class="txt-dbod">
         นายอัศวิน เตชะเจริญวิกุล
            </h3>
            <p class="txt-dbod">
   กรรมการบริษัท / กรรมการบริหาร / กรรมการบริหารความเสี่ยง
            </p>
          </div>
        </div>
		
	<div class="listbod">
          <div class="imgbod">
            <img src="images/company/pn15.png">
          </div>
          <div class="descbod">
            <h3 class="txt-dbod">
 นางฐาปณี เตชะเจริญวิกุล    
            </h3>
            <p class="txt-dbod">
 กรรมการบริษัท / กรรมการบริหาร / เลขานุการคณะกรรมการสรรหาและกำหนดค่าตอบแทน
/ กรรมการรองผู้จัดการใหญ่อาวุโส
            </p>
          </div>
        </div>
		
      </div>
    </div>
    <div class="mngb">
      <div class="wrapper">
        <div class="topicmngb">
          <h3 class="txt-mngb">
            Management Board
          </h3>
        </div>
      </div>
      <div class="blogmngb">

          <div class="listmngb">
            <div class="imgmngb">
              <img src="images/company/spn01.png">
            </div>
            <div class="descmngb">
              <h3 class="txt-dmngb">
                นายอัศวิน เตชะเจริญวิกุล
              </h3>
              <p class="txt-dmngb">
              กรรมการบริษัท / กรรมการบริหาร / กรรมการบริหารความเสี่ยง
              </p>
            </div>
          </div>
		  
          <div class="listmngb">
            <div class="imgmngb">
              <img src="images/company/spn02.png">
            </div>
            <div class="descmngb">
              <h3 class="txt-dmngb">
               นางฐาปณี เตชะเจริญวิกุล
              </h3>
              <p class="txt-dmngb">
             กรรมการบริษัท / กรรมการบริหาร / เลขานุการคณะกรรมการสรรหาและกำหนดค่าตอบแทน
/ กรรมการรองผู้จัดการใหญ่อาวุโส
              </p>
            </div>
          </div>
		  
          <div class="listmngb">
            <div class="imgmngb">
              <img src="images/company/spn03.png">
            </div>
            <div class="descmngb">
              <h3 class="txt-dmngb">
               นายปฐพงศ์  เอี่ยมสุโร    
              </h3>
              <p class="txt-dmngb">
               รองผู้จัดการใหญ่ กลุ่มสินค้าและบริการทางอุปโภคบริโภค
              </p>
            </div>
          </div>
		  
          <div class="listmngb">
            <div class="imgmngb">
              <img src="images/company/spn04.png">
            </div>
            <div class="descmngb">
              <h3 class="txt-dmngb">
              นายธีระพล เกรียรติสุรนนท์ 
              </h3>
              <p class="txt-dmngb">
                รองผู้จัดการใหญ่ กลุ่มสินค้าและบริการทางเวชถัณฑ์
              </p>
            </div>
          </div>
		  
          <div class="listmngb">
            <div class="imgmngb">
              <img src="images/company/spn05.png">
            </div>
            <div class="descmngb">
              <h3 class="txt-dmngb">
               นางวิภาดา ดวงรัตน์ 
              </h3>
              <p class="txt-dmngb">
              รองผู้จัดการใหญ่ กลุ่มสินค้าและบริการทางบรรจุภัณฑ์
              </p>
            </div>
          </div>
		  
          <div class="listmngb">
            <div class="imgmngb">
              <img src="images/company/spn06.png">
            </div>
            <div class="descmngb">
              <h3 class="txt-dmngb">
              นายธีระ วีรธรรมสาธิต
              </h3>
              <p class="txt-dmngb">
               ผู้ช่วยผู้จัการใหญ่ ฝ่ายทรัพยากรบุคคลกลุ่มบริษัท
              </p>
            </div>
          </div>
		  
          <div class="listmngb">
            <div class="imgmngb">
              <img src="images/company/spn07.png">
            </div>
            <div class="descmngb">
              <h3 class="txt-dmngb">
               นายมนัส มนูญชัย
              </h3>
              <p class="txt-dmngb">
                ผู้ช่วยผู้จัดการใหญ่ ฝ่ายธุรกิจต่างประเทศ
              </p>
            </div>
          </div>
		  
          <div class="listmngb">
            <div class="imgmngb">
              <img src="images/company/spn08.png">
            </div>
            <div class="descmngb">
              <h3 class="txt-dmngb">
              นางสาวสุรีรัตน์ ศิลป์สกุลสุข
              </h3>
              <p class="txt-dmngb">
             ผู้ช่วยผู้จัดการใหญ่ ฝ่ายบัญชีกลุ่มบริษัท
              </p>
            </div>
          </div>

      </div>
    </div>
  </section>
  <section id="valandcul">
    <div class="wrapper">
      <div class="topicvac">
        <h3 class="txt-vac">
          Value and Culture
        </h3>
      </div>
      <div class="descvac">
        <p class="txt-vac">
          The current success of BJC is based on our sound and solid foundation - we are like a tree with roots that reach deep into the earth and branches that reach out to the Thai society. We believe in and adhere to our core values :
        </p>
      </div>
      <div class="slidevac">
        <div class="imgvac">
          <img src="images/company/tree01.png">
        </div>
        <div class="contentvac">
          <div class="hcontentvac">
            <h3 class="txt-contentvac">
              Corporate Values
            </h3>
          </div>
          <div class="dcontentvac">
            <div class="eachdvac typeb">
              <h5 class="txt-eachdvac">
                Beyond Satisfactions :
              </h5>
              <p class="txt-eachdvac">
                The Company believes in the customer’s intellectual value and satisfaction, therefore the Company focuses on the quality and excellence at every unit of the Company so as to offer maximum satisfaction to our customers, including consumers, traders, staff and shareholders.
              </p>
            </div>
            <div class="eachdvac typej">
              <h5 class="txt-eachdvac">
                Joint Success :
              </h5>
              <p class="txt-eachdvac">
                The Company believes in the value of success in the participation of every stakeholder, therefore the Company aims for the goal of success so as to create the mutual value and pride of the corporation and its personnel
              </p>
            </div>
            <div class="eachdvac typec">
              <h5 class="txt-eachdvac">
                Caring for community :
              </h5>
              <p class="txt-eachdvac">
                The Company believes in the value of responsibility towards society, therefore the Company highlights the operation of its business with morality, ethics and awareness of responsibility for natural resources, environment, and the promotion of quality of life both within and without the corporation so as to enhance the common interest of society.
              </p>
            </div>
          </div>
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
