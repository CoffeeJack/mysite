<!-- css -->
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/styles.css" rel="stylesheet">


<!-- js -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="http://timeline.verite.co/lib/timeline/js/storyjs-embed.js"></script>
<script src="<?php echo base_url(); ?>js/moment.min.js"></script>

<head>
<title>Vince Tsui - Web/Mobile Dev</title>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="./index.php">Vince Tsui</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li class="">
            <a href="#">About</a>
          </li>
          <li class="">
            <a href="#">Web Projects</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</head>
<body>

  <div id="timeline"></div>
	<!-- <img class="center" src="http://kaltrading.com/newsite/wp-content/uploads/2013/03/red_coming_soon_stamp.png" style=""> -->
</body>

<script>
$(function(){
    var today = new Date();

    var data = {
    "timeline":
    {
        "headline":"The Life of Vinny",
        "type":"default",
        "text":"<ul><li>Email: ubcvincenttsui@gmail.com</li><li>Linkedin: http://ca.linkedin.com/pub/dir/Vince/Tsui</ul>",
        "asset": {
            "media":"http://media.battlestarwiki.org/images/f/f0/Cylon_Centurion,_%22The_Hub%22.jpg",
            "credit":"Watch Battlestar Galactica!!"
            // "caption":"<h3>I am a Cylon</h3>"
        },
        "date": [
            {
                "startDate":"2007,09,01",
                "endDate":"2013,06,01",
                "headline":"University of British Columbia",
                "text":"Bachelor of Applied Science<br>Computer Engineering",
                // "tag":"This is Optional",
                "classname":"optionaluniqueclassnamecanbeaddedhere",
                "asset": {
                    "media":"http://ubcecess.com/wp-content/uploads/2012/08/cover-photo1.jpg",
                    "thumbnail":"https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn2/276736_213915565410137_644492110_q.jpg",
                    "credit":"This is obviously not me"
                    // "caption":"=P"
                }
            },
            {
                "startDate":"2012,05,01",
                "endDate":"2012,09,01",
                "headline":"Vivospace",
                "text":
                "<ul class='ul-list'><li>Health-oriented social network</li><li>JQuery/CSS</li><li>Model, View, Controller Design</li><li>PHP Code Igniter</li></ul>",
                "tag":"Web Developer",
                "classname":"optionaluniqueclassnamecanbeaddedhere",
                "asset": {
                    "media":"https://www.vivospace.com/img/logo.png",
                    "thumbnail":"http://www.openvl.org.uk/Images/Magic.png",
                    "credit":"www.vivospace.com"
                    // "caption":"=P"
                }
            },
            {
                "startDate":"2009,09,01",
                "endDate":"2010,09,01",
                "headline":"BC Hydro",
                "text":"<ul class='ul-list'><li>Made energy usage accessment</li><li>Provided energy-savings recommendations to clients</li></ul>",
                "tag":"Consultant",
                "classname":"optionaluniqueclassnamecanbeaddedhere",
                "asset": {
                    "media":"http://www.vsb.bc.ca/sites/default/files/images/bc-hydro-powersmart.jpg",
                    "thumbnail":"https://si0.twimg.com/profile_images/1239504698/PowerSmartBC_Twitter_300_normal.png",
                    "credit":"https://www.bchydro.com/powersmart.html"
                    // "caption":"=P"
                }
            },
            {
                "startDate":"2008,05,01",
                "endDate":"2009,01,01",
                "headline":"Roger Preston & Partners",
                "text":"<ul class='ul-list'><li>Electrical engineering designs for skyscrapers</li><li>ISO9001</li></ul>",
                "tag":"Consultant",
                "classname":"optionaluniqueclassnamecanbeaddedhere",
                "asset": {
                    "media":"http://g2.img-dpreview.com/84F441AFF34F4A0BA5E14FF972B1B917.jpg",
                    "thumbnail":"<?php echo base_url(); ?>img/jrp.png",
                    "credit":"http://www.jrp-group.com/en/"
                    // "caption":"=P"
                }
            },
            {
                "startDate":"2012,01,01",
                "endDate":"2012,04,01",
                "headline":"Open GL",
                "text":"C++ GLUT",
                // "tag":"Graphics Design",
                "classname":"optionaluniqueclassnamecanbeaddedhere",
                "asset": {
                    "media":"http://www.youtube.com/watch?v=MOBCsdmWE_c",
                    "thumbnail":"https://lh6.ggpht.com/AtIt8ZrcLD8hudtykUPJI6i6QQQpAr54H2Y-kYpwRDDn2z8y1P5yB_PTSuL75b6yW9o=w78-h78",
                    "credit":"Music: Evanescence - Bring me to life"
                    // "caption":"=P"
                }
            },
            {
                "startDate":"2012,09,01",
                "endDate":"2012,12,01",
                "headline":"Facebook Web/Mobile App",
                "text":"<ul class='ul-list'><li>Facebook PHP SDK</li><li>JQuery/CSS</li><li>Restlet framework</li><li>https://github.com/hamo26/EECE419Group7</li></ul>",
                "tag":"Web Developer",
                "classname":"optionaluniqueclassnamecanbeaddedhere",
                "asset": {
                    "media":"http://www.staples.com/sbd/cre/marketing/technology-research-centers/tablets/images/facebook.png",
                    "thumbnail":"https://ieeetv.ieee.org/assets/images_ui/icons/facebook-app-btn.png",
                    "credit":"https://github.com/hamo26/EECE419Group7"
                    // "caption":"=P"
                }
            },
            {
                "startDate":"2013,05,01",
                // "endDate":"",
                "headline":"Procurify",
                "text":"<ul class='ul-list'><li>Python Django</li><li>JQuery/CSS</li><li>Google App Engine/Cloud SQL</li></ul>",
                "tag":"Web Developer",
                "classname":"optionaluniqueclassnamecanbeaddedhere",
                "asset": {
                    "media":"http://www.procurify.com/assets/images/homeScreens.jpg",
                    "thumbnail":"https://si0.twimg.com/profile_images/2909929869/043b126cb1952d80ef3cc565ccfaca12.png",
                    "credit":"www.procurify.com"
                    // "caption":"=P"
                }
            },
            {
                "startDate":"2013,01,01",
                "endDate":"2013,04,01",
                "headline":"FunF Mobile Tracker",
                "text":"<ul class='ul-list'><li>MongoDB</li><li>Android App:<br>https://github.com/CoffeeJack/EECE496</li><li>Node.js Server:<br>https://github.com/CoffeeJack/FunfToWotk</li></ul>",
                "tag":"Mobile Developer",
                "classname":"optionaluniqueclassnamecanbeaddedhere",
                "asset": {
                    "media":"http://funf.org/images/slider/sneakslide.png",
                    "thumbnail":"https://si0.twimg.com/profile_images/1574021182/funf_logo_bot_normal.png",
                    "credit":"http://funf.org/"
                    // "caption":"=P"
                }
            }
        ],
        "era": [
            {
                "startDate":"2010,01,01",
                "endDate":today.getYear()+","+(today.getMonth()+1)+","+today.getDate(),
                "headline":"Headline Goes Here",
                "text":"<p>Body text goes here, some HTML is OK</p>",
                "tag":"This is Optional"
            }

        ]
    }
};

  createStoryJS({
        type:       'timeline',
        width:      '100%',
        height:     'auto',
        source:     data,
        embed_id:   'timeline'
  });

});
</script>
