<!doctype html>
<html lang="en">
  <head>

    <style>
      .async-hide{
        opacity: 0!important;
      }
    </style>

    <script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
    h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
    (a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
    })(window,document.documentElement,'async-hide','dataLayer',4000,
    {'GTM-MR44ZGZ':true});</script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    
    <title>Bootstrap</title>

    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom styles for site -->
    <link rel="stylesheet" href="boot.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <!-- Devicon stylesheet --> 
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="home">
    <?php 
      ob_start();
      require 'index.php';
      $data = ob_get_clean();
    ?>
    <nav class="navbar navbar-expand-lg" id="navbar">
       <div class="img-with-text">
          <a class="navbar-brand" href="#"><img src="static/logo.png" class="navbar-logo" alt="Yellow play button"></a>
       </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="flase" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <span class="typing-span">
        <h3 class="typing">Robert Clarkson</h3>
        <h4 class="typing">Aspiring <span id="word"></span></h4>
      </span>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav menu">
          <li class="nav-item active">
            <a class="nav-link g-drop" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link g-drop" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link g-drop" href="#" id="navbarDropdown" role="button" " aria-haspopup="true" aria-expanded="flase">
              Dropdown<i class="material-icons" id="drop-arrow">arrow_drop_down</i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another Action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Another Action Still</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link g-drop" href="#">Disabled</a>
          </li>
        </ul>
      </div>
    </nav>
      <div class="content">
        <div class="banner">
          <img src="static/home-banner.jpg" alt="Developer's desk" class="headerImage">
        </div>
        <div class="page container">
          <div class="hi">
            <h1 class="greeting">Hi <?php echo ucfirst($name);?>!</h1>
            <h1 class="wave" alt="waving hand">👋</h1>
            <hr class="divider"> 
          </div> 
        </div>
        <div id="professionalSummary" class="container summary">
          <h1>Professional Summary</h1>
          <br>
          <h3 class="summaryText">Service-oriented Web Developer, with 3 year background in wordpress development. 
              Core competencies include programming, troubleshooting and adminstering office 365 
              enviroments including sharepoint, powerapps, power automate and microsoft azure,
              as well excellent communication and time-management skills. 
              Handles tasks with accuracy and efficiency
          </h3>
          <hr class="divider">
        </div>
        <div class="container skills" id="skills">
          <h1>Skills</h1>
          <br>
          <div class="row">
            <div class="col">
              <ul class="column1">
                <li><h2>HTML5<i class="devicon-html5-plain"></i></h2></li>
                <li><h2>CSS3<i class="devicon-css3-plain"></i></h2></li>
                <li><h2>PHP<i class="devicon-php-plain"></i></h2></li>
                <li><h2>Javascript<i class="devicon-javascript-plain"></i></h2></li>
                <li><h2>Python<i class="devicon-python-plain"></i></h2></li>
              </ul>
            </div>
            <div class="col">
              <ul class="column2">
                <li><h2>Critical Thinking<i class="devicon-html5-plain"></i></h2></li>
                <li><h2>Active Listening<i class="devicon-css3-plain"></i></h2></li>
                <li><h2>Problem Solving<i class="devicon-php-plain"></i></h2></li>
                <li><h2>Communication<i class="devicon-javascript-plain"></i></h2></li>
                <li><h2>Vendor Management<i class="devicon-python-plain"></i></h2></li>
              </ul>
            </div>
          </div>
          <hr class="divider">
        </div>
        <div class="experience container">
          <h1 class="title">Experience</h1>
          <br>
          <h5>Web Developer - April 2016 to Present <b>Roswell IT Sevices Ltd - East Kilbride</b></h5>
          <br>
          <ul>
            <li><h5>Manage all domains and DNS held within the company for 3rd party companies</h5></li>
            <li><h5>Develop Websites inline with key stakeholders</h5></li>
            <li><h5>Manage all domains and DNS held within the company for 3rd party companies</h5></li>
            <li><h5>Develop Websites inline with key stakeholder requirements</h5></li>
            <li><h5>Maintain and update websites</h5></li>
            <li><h5>Meet with clients for scoping and update meetings</h5></li>
            <li><h5>Provide training to clients with regards to use and management</h5></li>
            <li><h5>Configured and deployed Windows Deployment Server</h5></li>
            <li><h5>Configure and deployed internal test web server with LAMPP stack</h5></li>
            <li><h5>Provide 1st/2nd line IT support to clients</h5></li>
            <li><h5>Test software for internal use</h5></li>
            <li><h5>Identify problems uncovered by testing or customer feedback, and correct problems or refer problems to appropriate personnel for correction</h5></li>
            <li><h5>Back up files from web sites to local directories for instant recovery in case of problems,as well as configuring off site backups in case the full server is irrecoverable</h5></li>
            <li><h5>Manage various company social media accounts</h5></li>
            <li><h5>Create dashboards and reports from google analytics</h5></li>
            <li><h5>Writing documentation</h5></li>
          </ul>
          <hr class="divider">
        </div>
      </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.bundle.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/required.js"></script>
  </body>
</html>
