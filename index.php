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
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="header">
    <div class="intro">
      <h1>Kelly Lougheed</h1>
      <h2>Software Developer</h2>
    </div><!-- intro -->
    <div class="down"><a onclick="$('#work').animatescroll();"><i class="fa fa-angle-down" aria-hidden="true"></i></a></div>
  </div><!-- header -->
<div id="work">
  <h1>Work</h1>

  <div class="container"> 

    <div class="proj">

      <div class="col-lg-6 col-md-6 col-sm-12">
        <a href="http://participation.herokuapp.com" target="_blank"><img src="http://www.kellylougheed.com/images/projects/participation.png" class="responsive" alt="Rails student participation gradebook app for teachers"></a>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12">
        <h2>Participation</h2>
        <p class="tools">
          <span>Ruby on Rails</span>
          <span>JavaScript</span>
          <span>TDD</span>
          <span>Bootstrap</span>
          <span>HTML</span>
          <span>CSS</span>
        </p>
        <ul>
          <li> Gradebook app for high school teachers.</li>
          <li> Teachers can input their rosters and track participation points for each student.</li>
          <li> Teachers can record comments about students to use in report cards &amp; parent-teacher conferences.</li>
          <li> Comments can be automatically emailed to students.</li>
          <li> The app was built with test-driven development and has >95% test coverage. </li>
        </ul>
        <p class="proj-links">
          <a href="http://participation.herokuapp.com" target="_blank">Live Site</a>
          <a href="https://github.com/kellylougheed/participation" target="_blank">Github</a>
        </p>
      </div>

    </div>

    <div class="proj">

      <div class="col-lg-6 col-md-6 col-sm-12">
        <br/>
        <h2>Roman Numeral Quiz</h2>
        <p class="tools">
          <span>AngularJS</span>
          <span>JavaScript</span>
          <span>HTML</span>
          <span>CSS</span>
        </p>
        <ul>
          <li> App to quiz students on Roman numerals.</li>
          <li> Students convert Arabic numerals to Roman numerals and receive instant feedback.</li>
          <li> The app tracks the student's history of correct and incorrect answers.</li>
          <li> Includes teacher section with suggestions for classroom use in Latin or math class.</li>
        </ul>
        <p class="proj-links">
          <a href="http://www.kellylougheed.com/roman" target="_blank">Live Site</a>
          <a href="https://github.com/kellylougheed/roman-numeral-quiz" target="_blank">Github</a>
        </p>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12">
        <a href="http://www.kellylougheed.com/roman" target="_blank"><img src="http://www.kellylougheed.com/images/projects/romannumeral.png" class="responsive" alt="AngularJS Roman numeral quiz app"></a>
      </div>

    </div>

    <div class="proj">

      <div class="col-lg-6 col-md-6 col-sm-12">
        <a href="https://chrome.google.com/webstore/detail/cicero-an-italian-to-engl/icmiokglnmhdllhbkcmpclfdhgodjgkc?hl=en" target="_blank"><img src="http://www.kellylougheed.com/images/projects/cicero.png" class="responsive" alt="Italian-to-English dictionary Google Chrome extension"></a>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12">
        <br/>
        <h2>Cicero</h2>
        <p class="tools">
          <span>JavaScript</span>
          <span>APIs</span>
          <span>HTML</span>
          <span>CSS</span>
        </p>
        <ul>
          <li> Italian-to-English dictionary in your browser window as a Chrome extension.</li>
          <li> Consumes the <a href="https://glosbe.com/" target="_blank">Glosbe API</a> to provide translations and grammar help.</li>
          <li> Originally built as an iOS app with Swift (code on <a href="https://github.com/kellylougheed/capisce" target="_blank">GitHub</a>).</li>
          <li> Built to enable immersive reading for Italian language learners.</li>
        </ul>
        <p class="proj-links">
          <a href="https://chrome.google.com/webstore/detail/cicero-an-italian-to-engl/icmiokglnmhdllhbkcmpclfdhgodjgkc?hl=en" target="_blank">Web Store</a>
          <a href="https://github.com/kellylougheed/cicero" target="_blank">Github</a>
        </p>
      </div>

    </div>

    <div class="proj">

      <div class="col-lg-6 col-md-6 col-sm-12">
        <br/>
        <h2>German Word Maker</h2>
        <p class="tools">
          <span>JavaScript</span>
          <span>APIs</span>
          <span>HTML</span>
          <span>CSS</span>
        </p>
        <ul>
          <li> Takes in several English words to form German compound word.</li>
          <li> Consumes the <a href="https://glosbe.com/" target="_blank">Glosbe API</a> to generate individual German words.</li>
          <li> Users can tweet new words with English equivalents.</li>
        </ul>
        <p class="proj-links">
          <a href="http://www.kellylougheed.com/german" target="_blank">Live Site</a>
          <a href="https://github.com/kellylougheed/german-word-maker" target="_blank">Github</a>
        </p>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12">
        <a href="http://www.kellylougheed.com/german" target="_blank"><img src="http://www.kellylougheed.com/images/projects/german.png" class="responsive" alt="German Word Maker"></a>
      </div>

    </div>
    
    <div class="proj">

    <div class="col-lg-6 col-md-6 col-sm-12">
        <a href="http://www.kellylougheed.com/hiit" target="_blank"><img src="http://www.kellylougheed.com/images/projects/hiit.gif" class="responsive" alt="JavaScript HIIT timer"></a>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12">
        <br/>
        <h2>HIIT Timer</h2>
        <p class="tools">
          <span>JavaScript</span>
          <span>HTML</span>
          <span>CSS</span>
        </p>
        <ul>
          <li> Customizable fitness timer that tracks intervals of activity and rest for HIIT workouts.</li>
          <li> Color changes from cyan to pink depending on level of activity.</li>
          <li> Includes pause and reset buttons.</li>
        </ul>
        <p class="proj-links">
          <a href="http://www.kellylougheed.com/hiit" target="_blank">Live Site</a>
          <a href="https://github.com/kellylougheed/hiit-timer" target="_blank">Github</a>
        </p>
      </div>

    </div>

  </div><!-- container -->
</div><!-- work -->

<div class="footer">
  <p>
    © Kelly Lougheed <?php echo date("Y"); ?>. All rights reserved.
    <a href="https://github.com/kellylougheed/portfolio" target="_blank"><i class="fa fa-code" aria-hidden="true"></i></a>
  </p>
</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="http://kellylougheed.com/animatescroll.js"></script>
</body>
</html>
