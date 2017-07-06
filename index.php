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
      <p><a class="contact" href="http://www.kellylougheed.com/blog" target="_blank"><i class="fa fa-wordpress" aria-hidden="true"></i></a> <a class="contact" href="https://medium.com/@kellylougheed" target="_blank"><i class="fa fa-medium" aria-hidden="true"></i></a> <a class="contact" href="https://github.com/kellylougheed" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a> <a class="contact" href="https://www.linkedin.com/in/kellylougheed/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a> <a class="contact" href="http://www.twitter.com/kellylougheed" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a class="contact" href="mailto:hello@kellylougheed.com?Subject=Hello"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></p>
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
        <li> The app was built with TDD and has >95% test coverage. </li>
      </ul>
      <p class="proj-links">
        <a href="http://participation.herokuapp.com" target="_blank">Live Site</a>
        <a href="https://github.com/kellylougheed/participation" target="_blank">Github</a>
        <a href="http://kellylougheed.com/blog/participation-points-real/" target="_blank">Blog Post</a>
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
        <a href="http://kellylougheed.com/blog/angularjs-ever-done/" target="_blank">Blog Post</a>
      </p>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
      <a href="http://www.kellylougheed.com/roman" target="_blank"><img src="http://www.kellylougheed.com/images/projects/romannumeral.png" class="responsive" alt="AngularJS Roman numeral quiz app"></a>
    </div>

    </div>

    <div class="proj">

    <div class="col-lg-6 col-md-6 col-sm-12">
      <a href="https://chrome.google.com/webstore/detail/cicero-an-italian-to-engl/icmiokglnmhdllhbkcmpclfdhgodjgkc?hl=en" target="_blank"><img src="http://www.kellylougheed.com/images/projects/cicero.jpg" class="responsive" alt="Italian-to-English dictionary Google Chrome extension"></a>
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
        <li> Originally built as an iOS app with Swift (<a href="https://github.com/kellylougheed/capisce" target="_blank">github</a> &amp; <a href="http://kellylougheed.com/blog/3-lessons-i-learned-from-calling-an-api-in-swift/" target="_blank">blog post</a>).</li>
        <li> Built to enable immersive reading for Italian language learners.</li>
      </ul>
      <p class="proj-links">
        <a href="https://chrome.google.com/webstore/detail/cicero-an-italian-to-engl/icmiokglnmhdllhbkcmpclfdhgodjgkc?hl=en" target="_blank">Web Store</a>
        <a href="https://github.com/kellylougheed/cicero" target="_blank">Github</a>
        <a href="http://kellylougheed.com/blog/a-browser-extension-to-improve-my-italian/" target="_blank">Blog Post</a>
      </p>
    </div>

    </div>

    <div class="proj">

    <div class="col-lg-6 col-md-6 col-sm-12">
      <br/>
      <h2>This Is Just To Say</h2>
      <p class="tools">
        <span>PHP</span>
        <span>JavaScript</span>
        <span>HTML</span>
        <span>CSS</span>
      </p>
      <ul>
        <li> Generates a poem to apologize for eating your roommate's food.</li>
        <li> Emails the poem to a recipient of your choice.</li>
        <li> Can be used in the English classroom to teach William Carlos Williams.</li>
      </ul>
      <p class="proj-links">
        <a href="http://www.kellylougheed.com/this-is-just-to-say" target="_blank">Live Site</a>
        <a href="https://github.com/kellylougheed/this-is-just-to-say" target="_blank">Github</a>
        <a href="http://kellylougheed.com/blog/says-computers-cant-write-poetry/" target="_blank">Blog Post</a>
      </p>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
      <a href="http://www.kellylougheed.com/this-is-just-to-say" target="_blank"><img src="http://www.kellylougheed.com/images/projects/thisisjusttosay.png" class="responsive" alt="PHP poetry-writing app"></a>
    </div>

    </div>

    <div class="proj">

    <div class="col-lg-6 col-md-6 col-sm-12">
      <a href="http://www.kellylougheed.com/teaching" target="_blank"><img src="http://www.kellylougheed.com/images/projects/teaching.png" class="responsive" alt="Computer science and Latin teaching portfolio"></a>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
      <br/>
      <h2>Teaching Portfolio</h2>
      <p class="tools">
        <span>PHP</span>
        <span>Bootstrap</span>
        <span>HTML</span>
        <span>CSS</span>
      </p>
      <ul>
        <li> Sample lessons and projects in Computer Science and Latin.</li>
        <li> Narratives of my teaching experience and education in Computer Science and Latin.</li>
        <li> Student reviews.</li>
        <li> Website design inspired by the computer terminal and code text editors.</li>
      </ul>
      <p class="proj-links">
        <a href="http://www.kellylougheed.com/teaching" target="_blank">Live Site</a>
        <a href="https://github.com/kellylougheed/teaching-portfolio" target="_blank">Github</a>
      </p>
    </div>

    </div>

  </div><!-- container -->
</div><!-- work -->

<h1>About</h1>
<div class="container">
  <div class="col-lg-3 col-md-4 col-sm-12">
    <img src="http://www.kellylougheed.com/images/prof-agrigento.jpg" class="responsive" id="profile" alt="Kelly Lougheed"/>
  </div>
  <div class="col-lg-9 col-md-8 col-sm-12">
    <p class="about">
    	I'm a Los Angeles-based computer science teacher and software developer. I started making websites to advertise <a href="https://www.goodreads.com/author/show/4486062.Kelly_Lougheed" target="_blank">my books</a>, and now I build full-stack web applications. As a Classics (Latin &amp; Greek) graduate of Brown University and former Latin teacher, I particularly enjoy building applications that relate to education and the humanities.
    </p>
    <p class="about">
      I have worked as a software developer using JavaScript, Python, and PHP and have also built apps in Ruby on Rails and Swift. Most recently, I've been pursing a certificate in Computer Science Education at the College of St. Scholastica.
    </p>
    <p class="about">
      I believe that computer science has a place in every student's education and that the CS skillset can be applied to any field. Beyond programming, I'm also interested in technology history, digital humanities, and the social and ethical issues surrounding tech.
    </p>
  </div>
</div>

<?php 
$skills = array(
  "JavaScript" => "devicon-javascript-plain",
  "Ruby" => "devicon-ruby-plain",
  "Rails" => "devicon-rails-plain",
  "Python" => "devicon-python-plain",
  "Java" => "devicon-java-plain",
  "Swift" => "devicon-swift-plain",
  "PHP" => "devicon-php-plain",
  "HTML5" => "devicon-html5-plain-wordmark",
  "CSS3" => "devicon-css3-plain-wordmark",
  );
?>

<div id="skills" class="container">
<?php
foreach ($skills as $name => $class) {
  echo '<div class="col-lg-2 col-md-2 col-sm-3">';
  echo '<i class="' . $class . '"></i><br/><br/>';
  echo $name;
  echo '</div>';
}
?>
</div>

<div class="footer">
  <p>
    Made with <a href="http://www.philzcoffee.com/" target="_blank"><i class="fa fa-coffee" aria-hidden="true"></i></a> and <a href="https://www.google.com/search?q=weather%20los%20angeles%20ca" target="_blank"><i class="fa fa-sun-o" aria-hidden="true"></i></a> by Kelly. © Kelly Lougheed 2016-17. All rights reserved.
    <a href="https://github.com/kellylougheed/portfolio" target="_blank"><i class="fa fa-code" aria-hidden="true"></i></a>
  </p>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="animatescroll.js"></script>
</body>
</html>
