<!-- css -->
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/styles.css" rel="stylesheet">


<!-- js -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="http://timeline.verite.co/lib/timeline/js/storyjs-embed.js"></script>
<script src="<?php echo base_url(); ?>js/moment.min.js"></script>

<head>
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
            <a href="#">Home</a>
          </li>
          <li class="">
            <a href="#">Projects</a>
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
        "text":"<p>It's my life...it's now or never...</p>",
        "asset": {
            "media":"http://onlyhdwallpapers.com/wallpaper/battlestar_galactica_cylon_centurion_desktop_1022x747_hd-wallpaper-816171.jpg",
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
                "<ul class='ul-list'><li>Health-oriented social network</li><li>Model, View, Controller Design</li><li>PHP Code Igniter</li></ul>",
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
                    "credit":"https://www.bchydro.com/powersmart.html"
                    // "caption":"=P"
                }
            }
        ],
        "era": [
            {
                "startDate":"2008,01,01",
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
