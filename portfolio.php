<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Our Portfolio</title>
  <?php include 'common1.php'; ?>
  <link rel="stylesheet" type="text/css" href="css/portfolio.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.js"></script>
  <script type="text/javascript" src="portfolio/reflection.js"></script>
  <script src="portfolio/jquery.interpolate.js"></script>
  <script src="portfolio/jquery.coverflow.js"></script>
  <script>
  $(function() {
    $('.photos').coverflow({
      index:			3,
      width:			320,
      height:			240,
      visible:		'density',
      selectedCss:	{	opacity: 1	},
      outerCss:		{	opacity: .2	},

      select:		function(event, cover) {
        var img = $(cover).children().andSelf().filter('img').last();
        $('#photos-name').text(img.data('name') || 'unknown');
        $('#photos-desc').html(img.data('desc') || 'unknown');
        $('#photos-dl').html(img.data('dl') || '');
        $('#photos-link').html(img.data('link') || 'error');
      }
    });
  });
  </script>
</head>
<body>
  <?php include 'common2.php'; ?>
  <h1>our portfolio</h1>
  <div class="photos">
    <img class="cover" data-name="ISB Ace for OS X" data-desc="ISB Ace was the first project to be developed by the ISB Software Development club. This application features a variety of useful tools to assist the every-day ISB student! These features include:<br><ul><li>Your current grades</li><li>Notifications when your grades change</li><li>Your schedule</li><li>A news feed with the laters Panther Productions broadcasts and International articles</li></ul>Currently ISB Ace is available for Android devices and OSX, however the Software Development Club aims to release an iOS version this year as well." data-link="<a href='https://sites.google.com/a/students.isb.ac.th/hstech/software-development/isb-ace'>Download it here.</a>"  src="portfolio/img/ISBACEOSX.png"/>
    <img class="cover" data-name="ISB Ace for Android" data-desc="ISB Ace was the first project to be developed by the ISB Software Development club. This application features a variety of useful tools to assist the every-day ISB student! These features include:<br><ul><li>Your current grades</li><li>Notifications when your grades change</li><li>A grade calculator</li><li>Your schedule</li><li>A news feed with the laters Panther Productions broadcasts and International articles</li></ul>Currently ISB Ace is available for Android devices and OSX, however the Software Development Club aims to release an iOS version this year as well." data-link="<a href='https://play.google.com/store/apps/details?id=com.isbhstech.isbace&hl=en'>Download it here.</a>" src="portfolio/img/ISBACEANDROID.png"/>
    <img class="cover" data-name="ISB HS Tech Website" data-desc="The ISB HS Tech club is a team of students dedicated to maximize the educational opportunities presented at their school through technology use. <br><br>To assist their objectives, we set up an easy to navigate website for them, replacing the Google Site they were using previously. <br><br>This site stores valuable information for the school's community, from a database of tutorials to information on how to donate computers to students in Northern Thailand, and even a page where you can buy HS Tech gear!" data-link="<a href='http://isbhstech.com/'>View it here.</a>" src="portfolio/img/ISBHSTECHWEBSITE.png"/>
    <img class="cover" data-name="ISB Software Development Website" data-desc="This very website is among one of the projects to be developed by the software development club. The website has two main functions. The website serves as a portal to showcase the hard work and dedication of the talented individuals in the club. Furthermore, it also serves as an interface to contact the club for any software developement needs." data-link="You're currenty viewing it." src="portfolio/img/ISBSOFTDEVWEBSITE.png"/>
    <img class="cover" data-name="Panthernation App for iOS and Android" data-desc="PantherNation is the one stop location where all members of the ISB community can receive information about all ongoings occurring with the school. The Software Development Club was hired to develop an application for mobiles, for easy access to both Panther Productions broadcasts and articles from The International." data-link="<a href='https://play.google.com/store/apps/details?id=com.ramicaza.iasisguide'>Download it here for Android here.</a><br> <a href='https://itunes.apple.com/th/app/panthernation/id960118731?mt=8'>Download it here for iOS</a>"  src="portfolio/img/PANTHERNATION.png"/>
    <img class="cover" data-name="International Scholastic Journal Of Science Website" data-desc="The International Scholastic Journal Of Science was created by ISB teacher Dr. Eales, with the purpose of publishing student research papers officially. Previously he had been using the ISB Journal of Physics, and then the ISB Journal of Science." data-link="<a href='http://isjos.org/'>View it here.</a>"  src="portfolio/img/ISJOSWEBSITE.png"/>
    <img class="cover" data-name="Student Scientists Website" data-desc="Hand-in-hand with the International Scholastic Journal of Science, the Student Scientists website acts as a guide for other educators to set up their own science journals. " data-link="<a href='http://studentscientists.org/'>View it here.</a>"  src="portfolio/img/SSWEBSITE.png"/>
    <img class="cover" data-name="ISB Cafeteria Website" data-desc="The ISB Cafeteria Website is a colourful portal that displays ISB’s variety of foods in their cafeteria.  Students can also view descriptions and allergy warnings regarding every dish on the site" data-link="<a href='http://studentdevelopers.isb.ac.th/cafeteria/'>View it here.</a>"  src="portfolio/img/CAFWEBSITE.png"/>
  </div>
  <div id="photos-info">
    <div id="photos-name"></div>
    <div id="photos-desc"></div><br>
    <div id="photos-dl"></div>
    <div id="photos-link"></div>
  </div>
  <!--		<div class="clearfix"></div>
  <button id="leakdetect">LeakDetect</button>
  <div id="leakbucket"></div>-->
</body>
</html>
