<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
  <!-- Open Graph tags for LinkedIn sharing -->
  <meta property="og:title" content="Portfolio Website" />
  <meta property="og:description" content="Software and teaching portfolio of Kelly Lougheed" />
  <meta property="og:url" content="http://www.kellylougheed.com" />
  <meta property="og:image" content="http://www.kellylougheed.com/images/projects/participation.png" />
  <title>Kelly Lougheed</title>
  <!-- CSS -->
  <link href="style.css" rel="stylesheet" type="text/css">
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
  <script src="https://use.fontawesome.com/ee14bb1f23.js"></script>
  <!-- Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="header">
    <div class="intro">
      <h1>Kelly Lougheed</h1>
      <h2>Software Developer | Educator<br/>
      Los Angeles, CA</h2>
      <p><a class="contact" href="https://medium.com/@kellylougheed" target="_blank"><i class="fa fa-medium" aria-hidden="true"></i></a> <a class="contact" href="https://github.com/kellylougheed" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a> <a class="contact" href="https://www.linkedin.com/in/kelly-lougheed-ba147b121" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a> <a class="contact" href="http://www.twitter.com/kellylougheed" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a class="contact" href="mailto:hello@kellylougheed.com?Subject=Hello"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></p>
    </div><!-- intro -->
    <div class="down"><a onclick="$('#work').animatescroll();"><i class="fa fa-angle-down" aria-hidden="true"></i></a></div>
  </div><!-- header -->
<div id="work">
  <h1>Projects</h1>
  <div class="container"> 

    <div class="col-lg-6 col-md-6 col-sm-12">
      <a href="http://participation.herokuapp.com" target="_blank"><img src="http://www.kellylougheed.com/images/projects/participation.png" class="responsive" alt="Rails student participation gradebook app for teachers"></a>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
      <h2>Participation</h2>
      <ul>
        <li> Gradebook app for high school teachers.</li>
        <li> Teachers can input their rosters and track participation points for each student.</li>
        <li> Teachers can record comments about students to use in report cards &amp; parent-teacher conferences.</li>
        <li> Built with Ruby on Rails, JavaScript, HTML/CSS. Security managed by Devise.</li>
        <li> The code is <a href="https://github.com/kellylougheed/participation" target="_blank">open-source on GitHub</a> and has >95% test coverage. </li>
        <li> Read the blog post about the story and philosophy behind the app, <a href="http://kellylougheed.com/blog/participation-points-real/" target="_blank">Your Participation Points Are Real</a>. </li>
      </ul>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
      <br/>
      <h2>Roman Numeral Quiz</h2>
      <ul>
        <li> App to quiz students on Roman numerals.</li>
        <li> Students convert Arabic numerals to Roman numerals and receive instant feedback.</li>
        <li> The app tracks the student's history of correct and incorrect answers.</li>
        <li> Includes suggestions for use in the classroom.</li>
        <li> Built with AngularJS, JavaScript, and HTML/CSS.</li>
        <li> The code is <a href="https://github.com/kellylougheed/roman-numeral-quiz" target="_blank">open-source on GitHub</a>.</li>
        <li> Read the blog post converting the app from vanilla JavaScript and jQuery to the AngularJS framework: <a href="http://kellylougheed.com/blog/angularjs-ever-done/" target="_blank">What Has AngularJS Ever Done For Me?</a> </li>
      </ul>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
      <a href="http://www.kellylougheed.com/roman" target="_blank"><img src="http://www.kellylougheed.com/images/projects/romannumeral.png" class="responsive" alt="AngularJS Roman numeral quiz app"></a>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
      <a href="http://device-o.herokuapp.com" target="_blank"><img src="http://www.kellylougheed.com/images/projects/deviceo.png" class="responsive" alt="Rails game to quiz students on literary devices"></a>
      <p><span class="title">Device-O!</span><br/>
      Ruby on Rails • JavaScript • HTML • CSS • Bootstrap<br/>
      <span class="descr">Game to quiz students on literary devices for AP English or AP Latin.</span><br/>
      <span class="links"><a href="http://kellylougheed.com/blog/app-takes-english-class-seriously/" target="_blank"><i class="fa fa-wordpress" aria-hidden="true"></i></a>&nbsp;&nbsp;<a href="https://github.com/kellylougheed/device-o" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></p>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
      <a href="http://www.kellylougheed.com/weather-app" target="_blank"><img src="http://www.kellylougheed.com/images/projects/weatherapp.png" class="responsive" alt="JavaScript app that consumes weather API"></a>
      <p><span class="title">Weather App</span><br/>
      JavaScript • HTML • CSS<br/>
      <span class="descr">Weather app that consumes APIs for location and weather.</span><br/>
      <span class="links"><a href="https://github.com/kellylougheed/weather-app" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></p>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
      <a href="http://www.kellylougheed.com/this-is-just-to-say" target="_blank"><img src="http://www.kellylougheed.com/images/projects/thisisjusttosay.png" class="responsive" alt="PHP poetry-writing app"></a>
      <p><span class="title">This is Just To Say</span><br/>
      PHP • JavaScript • HTML • CSS<br/>
      <span class="descr">Writes and mails a poem to apologize for eating your roommate's food.</span><br/>
      <span class="links"><a href="http://kellylougheed.com/blog/says-computers-cant-write-poetry/" target="_blank"><i class="fa fa-wordpress" aria-hidden="true"></i></a>&nbsp;&nbsp;<a href="https://github.com/kellylougheed/this-is-just-to-say" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></p>
    </div>

  </div><!-- container -->
</div><!-- work -->

<h1>Skills</h1>

<div id="skills" class="container">
  <div class="col-lg-1 col-md-2 col-sm-3">
    <i class="devicon-python-plain colored"></i>
    <br/><br/>
    Python
  </div>
  <div class="col-lg-1 col-md-2 col-sm-3">
    <i class="devicon-java-plain colored"></i>
    <br/><br/>
    Java
  </div>
  <div class="col-lg-1 col-md-2 col-sm-3">
    <i class="devicon-ruby-plain colored"></i>
    <br/><br/>
    Ruby
  </div>
  <div class="col-lg-1 col-md-2 col-sm-3">
    <i class="devicon-rails-plain colored"></i>
    <br/><br/>
    Rails
  </div>
  <div class="col-lg-1 col-md-2 col-sm-3">
    <i class="devicon-php-plain colored"></i>
    <br/><br/>
    PHP
  </div>
  <div class="col-lg-1 col-md-2 col-sm-3">
    <i class="devicon-javascript-plain colored"></i> 
    <br/><br/>
    JavaScript
  </div>
  <div class="col-lg-1 col-md-2 col-sm-3">
    <i class="devicon-html5-plain colored"></i>
    <br/><br/>
    HTML5
  </div>
  <div class="col-lg-1 col-md-2 col-sm-3">
    <i class="devicon-css3-plain colored"></i>
    <br/><br/>
    CSS3
  </div>
  <div class="col-lg-1 col-md-2 col-sm-3">
    <i class="devicon-swift-plain colored"></i>
    <br/><br/>
    Swift
  </div>
</div>

<h1>Teaching</h1>
  <div class="container"> 
    <div class="col-lg-6 col-md-6 col-sm-12">
      <a href="http://www.kellylougheed.com/teaching" target="_blank"><img src="http://www.kellylougheed.com/images/projects/teaching.png" class="responsive" alt="Computer science and Latin teaching portfolio"></a>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
      <h2>Teaching Portfolio</h2>
      <br/>
      <p class="about">I'm a computer science teacher with previous experience as a Latin teacher. My teaching portfolio includes...</p>
      <ul>
        <li> Sample lessons and projects in computer science and Latin.</li>
        <li> Student reviews from two institutions.</li>
        <li> Breakdown of my education in computer science and Latin.</li>
        <li> Description of my teaching experience at multiple schools and organizations.</li>
        <li> Website design inspired by the computer terminal and code text editors. Code available on <a href="https://github.com/kellylougheed/teaching-portfolio" target="_blank">GitHub</a>.</li>
        <li> Built with HTML/CSS, Bootstrap, and PHP.</li>
      </ul>
    </div>
</div>

<h1>About</h1>
<div class="container">
  <div class="col-lg-3 col-md-4 col-sm-12">
    <img src="http://www.kellylougheed.com/images/profile.jpg" class="responsive" id="profile" alt="Kelly Lougheed"/>
  </div>
  <div class="col-lg-9 col-md-8 col-sm-12">
    <p class="about">
    	I'm a Los Angeles-based software developer and computer science teacher. I've been making websites for years and have worked professionally with Python, JavaScript, and PHP.
    </p>
    <p class="about">
    	I love to code and build applications about my interests: education, literature, and languages. I have a degree in Classics (Latin &amp; Greek) from Brown University and have also studied computer science at Stanford University and the College of St. Scholastica.
    </p>
    <p class="about">
    	My favorite part of computer science is how vast the field is: I'll never run out of new things to learn!
    </p>
  </div>
</div>

<div class="footer">
  <p>
    Made with <a href="http://www.philzcoffee.com/" target="_blank"><i class="fa fa-coffee" aria-hidden="true"></i></a> and <a href="https://www.google.com/search?q=weather%20los%20angeles%20ca" target="_blank"><i class="fa fa-sun-o" aria-hidden="true"></i></a> by Kelly Lougheed, 2016-17.
    <a href="https://github.com/kellylougheed/portfolio" target="_blank"><i class="fa fa-code" aria-hidden="true"></i></a>
  </p>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="animatescroll.js"></script>
</body>
</html>
