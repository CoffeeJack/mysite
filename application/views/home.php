<!-- css -->
<link href="<?php echo $base_url?>css/reset.css" rel="stylesheet">
<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $base_url?>css/styles.css" rel="stylesheet">


<!-- js -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.js"></script>

<head>
<title>Vince Tsui - Web/Mobile Dev</title>
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Vinny</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <li><a href="#project-container">Projects</a></li>
        <li class="active"><a href="#aboutme-container">About Me</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">TBA</a></li>
            </ul>
        </li>
    </ul>
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div><!-- /.navbar-collapse -->
</nav>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41539882-2', 'vincetsui.com');
  ga('send', 'pageview');

</script>
</head>
<body>
	<!-- <img class="center" src="http://kaltrading.com/newsite/wp-content/uploads/2013/03/red_coming_soon_stamp.png" style=""> -->
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $base_url?>img/funf_green_logo_web.jpg" style="width:450px;">
            </div>
            <div class="col-md-6">
                <div class="feature-date">May, 2013</div>
                <h3 class="feature-title">Mobile GPS Tracker</h3>
                <div>Android / Node.js</div>
                <br>
                <div class="clear"></div>
                <div>Funf mobile framework allows developers to create applications which periodically sample data from various mobile hardware...</div>
                <hr>
                <button type="button" class="btn btn-default">Link</button>
            </div>
        </div>
    </div> -->
    <div id="aboutme-container" class="container" style="padding-top:80px;">
        <div class="row">
            <div class="col-md-4">
                <div class="image-container">
                    <iframe width="370" height="238" src="//www.youtube.com/embed/eZvmOEtqRkc" frameborder="0" allowfullscreen></iframe>
                    <a href="http://http://www.procurify.com/" target="_blank">
                        <span class="glyphicon glyphicon-globe project-link"></span>
                    </a>
                </div>
                <div class="feature-date">May, 2013 - Present</div>
                <h4 class="feature-title">Procurify (Web Developer)</h4>
                <div>
                    <span class="label label-default">Javascript</span>
                    <span class="label label-default">JQuery</span>
                    <span class="label label-default">CSS</span>
                    <span class="label label-default">Python</span>
                    <span class="label label-default">Django</span>
                </div>
                <div class="project-description-container">
                    Coming-of-age cloud-based ERP system. Save company spending, easy to use, and much more...
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <a href="http://ece.ubc.ca/" target="_blank">
                        <img src="<?php echo $base_url?>img/ECE.jpg" height="238" width="370">
                    </a>
                    <a href="http://ece.ubc.ca/" target="_blank">
                        <span class="glyphicon glyphicon-globe project-link"></span>
                    </a>
                </div>
                <div class="feature-date">Sep, 2007 - May, 2013</div>
                <h4 class="feature-title">Bachelor of Applied Science</h4>
                <div class="project-description-container">
                    <span class="label label-default">UBC</span>
                    <span class="label label-default">VHDL</span>
                    <span class="label label-default">C++</span>
                    <span class="label label-default">Assembler</span>
                </div>
                <div class="project-description-container">
                    I know such a geek right?
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div id="project-container" class="container" style="padding-top:30px;">
        <div class="row">
            <div class="col-md-4">
                <div class="image-container">
                    <a href="https://github.com/CoffeeJack/jsonserialize" target="_blank">
                        <img src="<?php echo $base_url?>img/jason-6.jpg" height="238" width="370">
                    </a>
                    <a href="https://github.com/CoffeeJack/jsonserialize" target="_blank">
                        <span class="glyphicon glyphicon-globe project-link"></span>
                    </a>
                </div>
                <div class="feature-date">Oct, 2013</div>
                <h4 class="feature-title">JSON Serialize</h4>
                <div class="project-description-container">
                    <span class="label label-default">JQuery</span>
                </div>
                <div class="project-description-container">
                    Similar to JQuery serialize function, this JQuery plugin parses form fields into a JSON object...
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <a href="https://github.com/CoffeeJack/FunfToWotk" target="_blank">
                        <img src="<?php echo $base_url?>img/charging-stations.jpg" height="238" width="370">
                    </a>
                    <a href="https://github.com/CoffeeJack/FunfToWotk" target="_blank">
                        <span class="glyphicon glyphicon-globe project-link"></span>
                    </a>
                </div>
                <div class="feature-date">May, 2013</div>
                <h4 class="feature-title">Mobile GPS Tracker</h4>
                <div class="project-description-container">
                    <span class="label label-default">Android</span>
                    <span class="label label-default">Node.js</span>
                    <span class="label label-default">MongoDB</span>
                    <span class="label label-default">Kurogo</span>
                    <span class="label label-default">Funf</span>
                </div>
                <div class="project-description-container">
                    Funf mobile framework allows developers to create applications which periodically sample data from various mobile hardware...
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <a href="http://www.vivospace.com" target="_blank">
                        <img src="<?php echo $base_url?>img/mhh_healthy_girl.jpg" height="238" width="370">
                    </a>
                    <a href="http://www.vivospace.com" target="_blank">
                        <span class="glyphicon glyphicon-globe project-link"></span>
                    </a>
                </div>
                <div class="feature-date">May, 2012</div>
                <h4 class="feature-title">Vivospace</h4>
                <div class="project-description-container">
                    <span class="label label-default">Code Igniter</span>
                    <span class="label label-default">Doctrine2</span>
                    <span class="label label-default">XAMPP</span>
                    <span class="label label-default">JQuery</span>
                </div>
                <div class="project-description-container">
                    Social network designed to promote good health. Log your meals, track your calories, more...
                    <br>
                    <span style="font-style:italic;">It says "certification expired" but it still works, no virus =P</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="image-container">
                    <iframe width="370" height="238" src="//www.youtube.com/embed/MOBCsdmWE_c" frameborder="0" allowfullscreen></iframe>
                    <!-- <a href="https://github.com/CoffeeJack/FunfToWotk" target="_blank">
                        <span class="glyphicon glyphicon-globe project-link"></span>
                    </a> -->
                </div>
                <div class="feature-date">Jan, 2012</div>
                <h4 class="feature-title">3D Rendering</h4>
                <div class="project-description-container">
                    <span class="label label-default">OpenGL</span>
                    <span class="label label-default">C++</span>
                </div>
                <div class="project-description-container">
                    Custom rendorer programmed in C++, here is a video captured frame by frame...
                </div>
            </div>
        </div>
    </div>
</body>

<script>
$(function(){
    var today = new Date();

    $(".image-container").hover(function(event){
        $(event.currentTarget).find(".project-link").css("opacity","0.5");
    },function(event){
        $(event.currentTarget).find(".project-link").css("opacity","0");
    });

    $(".navbar-nav li").click(function(event){
        $(event.currentTarget).siblings().removeClass("active");
        $(event.currentTarget).addClass("active");
    });
});
</script>
