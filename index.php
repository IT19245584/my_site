<?php include "head.php" ?>
<?php
include 'config.php';
$sql = "select * from comments";
$result = $conn->query($sql);
$COUNT = 0;
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    $COUNT = $COUNT + 1;
  }
}
?>

<?php
include 'config.php';
$sql = "select * from likes";
$result = $conn->query($sql);
$likecount = 0;
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    $likecount = $likecount + 1;
  }
}
?>

<?php

$sql = "select * from comments where type='Possitive'";
$result = $conn->query($sql);
$Possitive = 0;
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    $Possitive = $Possitive + 1;
  }
}
if ($COUNT == 0) {
  $Possitive = 0;
} else {
  $tPossitive = (100 * $Possitive) / $COUNT;
  $tPossitive = round($tPossitive);
}

?>
<?php

$sql = "select * from comments where type='Negative'";
$result = $conn->query($sql);
$Negative = 0;
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    $Negative = $Negative + 1;
  }
}

if ($COUNT == 0) {
  $Negative = 0;
} else {
  $tNegative = (100 * $Negative) / $COUNT;
  $tNegative = round($tNegative);
}
?>


<body>
  <!--==========================
  Header
  ============================-->

  <?php include "nav.php" ?>

  <!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Hello! I AM<br /><span>NADUN SANDEEPA</span></h2>
          <div id="topbar">
            <div class="container">
              <div class="social-links">
                <span>Visitt My Social Media Profiles<br /></span>
                <a href="https://github.com/IT19245584" class="twitter"><i class="fa fa-git"></i></a>
                <a href="https://www.facebook.com/nadun.sanadeepa" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/nadun-sandeepa-official-62aba9194/" class="linkedin"><i class="fa fa-linkedin"></i></a>
                <a href="https://www.instagram.com/nadun_sanadeepa/" class="instagram"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>
          <div>
            <form>
              <a href="#about" class="btn-get-started scrollto">DO appointment</a>
              <a href="like.php"><button type="button" name="submit" class="btn btn-primary">LIKE ME <span style="font-weight:600;color:yellow;">( <?php echo $likecount ?> Likes) </span></button></a>
            </form>
          </div>
        </div>

        <div class="col-md-6 intro-img order-md-last order-first">
          <img width="1200%" src="img/my.webp" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="img/about-myimg.webp" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2 class="text-uppercase">About Me</h2>
              <ul style="margin-bottom:0%;">
                <li><i class="ion-android-checkmark-circle"></i>Name : M.M.A.D. Nadun Sandeepa</li>
                <li><i class="ion-android-checkmark-circle"></i>Birth Day : 1999 Octomber 14 &nbsp; &nbsp;(Age <?php echo date('Y') - 1999 ?>) </li>
                <li><i class="ion-android-checkmark-circle"></i>Home Town : Delgoda, Sri Lanka</li>
                <li><i class="ion-android-checkmark-circle"></i>Nationality : Sinhala</li>
                <li><i class="ion-android-checkmark-circle"></i>Religious : Buddhism</li>
                <li><i class="ion-android-checkmark-circle"></i>Political View: Not Special Political View</li>
                <li><i class="ion-android-checkmark-circle"></i>Language Skills</li>
                <li style="padding-left:10%;">
                  <p style="margin: 0%;">Sinhala - 100%</p>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
                <li style="padding-left:10%;">
                  <p style="margin: 0%;">English - 80%</p>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
              </ul>
              <p>I work as Web Designer, Graphic Designer, Digital Marketor and Content Creator. Nowadays, I am studing for my degree . I have been to three schools.In school life I have done a lot of different outdoor activities. Such as Scout, Astrology, Aircraft Technology, Media Unit</p>
              <button type="button" class="btn btn-info">More Details</button>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->


    <!--==========================
      education Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 style="text-transform:uppercase;">EDUCATION</h3>
          <p style="text-transform: capitalize;">These days i am following Software Engineering degree in sri lanka institute of information technology, malabe.</p>
        </header>

        <div class="row">
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ionicons ion-edit" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">WP/ K/ Udupila Primery College</a></h4>
              <p class="description">
                <center>Grade 01 to 05 (2005 - 2009)</center>
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ionicons ion-document-text" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="">Sri Dherananda Vidyayathena Pirivena</a></h4>
              <p class="description">
                <center>Grade 06 to 11 (2010 - 2015)</center>
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="ionicons ion-edit" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">WP/ G/ Thakshila Collage, Gampaha</a></h4>
              <p class="description">
                <center>Grade 12 to 13 (2016- 2018)</center>
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="ionicons ion-university" style="color: #2282ff;"></i></div>
              <h4 class="title"><a href="">Esoft Metro Campus</a></h4>
              <p class="description">
                <center>Diploma In English(Person)<br />Diploma In Information Technology<br />(2016)</center>
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="ionicons ion-university" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">University Of Kelaniya</a></h4>
              <p class="description">
                <center>Diploma In Web Design<br />Diploma In Graphic Design<br />(2018)</center>
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #FBD3E6;"><i class="ionicons ion-university" style="color: #F95CA6;"></i></div>
              <h4 class="title"><a href="">SLIIT</a></h4>
              <p class="description">
                <center>B.Sc. Special (Hons) <BR /> (Specialization – Software Engineering) - (2019 - 2023)</center>
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #ecebff;"><i class="ionicons ion-university" style="color: #8660fe;"></i></div>
              <h4 class="title"><a href="">SLAIE - Udara Uswaththage
                </a></h4>
              <p class="description">
                <center>Certificate Course in Java <BR /> (2019)</center>
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #D3FBF1;"><i class="ionicons ion-university" style="color: #08E4AD;"></i></div>
              <h4 class="title"><a href="">Sololearn</a></h4>
              <p class="description">
                <center>Certificate Course in Java, CSS, PHP And 17 courses - (2019)</center>
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #FBF68A;"><i class="ionicons ion-university" style="color: #D9D017;"></i></div>
              <h4 class="title"><a href="">Tuition Classes</a></h4>
              <p class="description">
                <center>Nanara - Udupila, SAGA - Weliweriya, Indeepa - Gampaha</center>
              </p>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="services" class="section-bg2">
      <div class="container">

        <header class="section-header">
          <h4 class="text-center text-uppercase" style="color: #413e66; font-size:170%;font-weight:700;">Goverment And Private Examinations</h4>
        </header>

        <div class="row">
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ionicons ion-edit" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Scholarship Exam - 2009</a></h4>
              <p class="description">
                <center><span class="text-danger">Status : Fail</span><br />Result : 133/144</center>
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ionicons ion-document-text" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="">Ordinary Level - 2015</a></h4>
              <p class="description">
                <center><span class="text-success">Status : Pass</span><br />Result : A7 C2</center>
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="ionicons ion-university" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Advanced Level - 2018</a></h4>
              <p class="description">
                <center><span class="text-success">Status : Pass (Only First Shy)</span><br />Result : C2 S1</center>
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="ionicons ion-university" style="color: #2282ff;"></i></div>
              <h4 class="title"><a href="">University Of Kelaniya - 2018</a></h4>
              <p class="description">
                <center>Diploma In Web Design -<span class="text-success"> A</span><br />Diploma In Graphic Design - <span class="text-success">B+</span></center>
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="ionicons ion-university" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Esoft Metro Campus - 2016</a></h4>
              <p class="description">
                <center>Diploma In English<span class="text-success"> - Pass</span><br />Diploma In IT<span class="text-success"> - Pass</span></center>
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #FBD3E6;"><i class="ionicons ion-university" style="color: #F95CA6;"></i></div>
              <h4 class="title text-uppercase"><a href="">SLAIE - 2019</a></h4>
              <p class="description">
                <center>Certificate Course In Java <BR /> <span class="text-success">Status : Pass</span></center>
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #education -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container-fluid">

        <header class="section-header">
          <h3 style="text-transform:uppercase;">My Technical Skills</h3>
          <p>Programming Technologies / Tools And Softwares / Others Skrills</p>
        </header>

        <div class="row">

          <div class="col-lg-6 ">
            <div class="why-us-content p-2  bg-light">
              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-diamond" style="color: #f058dc;"></i>
                <h4 class="mb-3">Programming Technologies</h4>
                <?php

                $language = array(
                  array("Java", 75),
                  array("c", 90),
                  array("c++", 70),
                  array("c#", 80),
                  array("html", 100),
                  array("css", 100),
                  array("js", 90),
                  array("note js", 20),
                  array("Go", 20),
                  array("python", 50),
                  array("php", 100)
                );

                sort($language);

                $languagelength = count($language);
                for ($x = 0; $x < $languagelength; $x++) {
                  echo "<div class='star-div' >";
                  echo "<span class='text-dark star-div-text'>" . $language[$x][0] . " - <span style='font-weight:400;'>" . $language[$x][1] . "%</span></span>";
                  echo "<div class='progress bg-secondary'>
                      <div class='progress-bar bg-warning' role='progressbar' style='width: " . $language[$x][1] . "%' aria-valuenow='" . $language[$x][1] . "' aria-valuemin='0' aria-valuemax='100'></div>
                      </div></div>";
                }
                ?>
                <hr class="bg-light" style="width: 80%;">
                <center>
                  <span class="text-center margin:0;  text-muted" style='font-weight:600; font-size:20px;'>Data Bases</span>
                </center>
                <?php
                $db = array(
                  array("MySql", 100),
                  array("SQLite", 60),
                  array("Firebase", 70),
                  array("Mongo DB", 30)
                );
                $dblength = count($db);
                for ($x = 0; $x < $dblength; $x++) {
                  echo "<div class='star-div' >";
                  echo "<span class='text-dark star-div-text'>" . $db[$x][0] . " - <span style='font-weight:400;'>" . $db[$x][1] . "%</span></span>";
                  echo "<div class='progress bg-secondary'>
                      <div class='progress-bar progress-bar-striped bg-warning' role='progressbar' style='width: " . $db[$x][1] . "%' aria-valuenow='" . $db[$x][1] . "' aria-valuemin='0' aria-valuemax='100'></div>
                      </div></div>";
                }
                ?>
                <hr class="bg-light" style="width: 80%;">
                <center>
                  <span class="text-center margin:0;  text-muted" style='font-weight:600; font-size:20px;'>Frameworks</span>
                </center>
                <?php
                $Frameworks = array(
                  array("Boostrap", 100),
                  array("jQuery", 55),
                  array("Cascade", 20),
                  array("Gumby", 20)
                );
                $Frameworkslength = count($Frameworks);
                for ($x = 0; $x < $Frameworkslength; $x++) {
                  echo "<div class='star-div' >";
                  echo "<span class='text-dark star-div-text'>" . $Frameworks[$x][0] . " - <span style='font-weight:400;'>" . $Frameworks[$x][1] . "%</span></span>";
                  echo "<div class='progress bg-secondary'>
                      <div class='progress-bar bg-warning' role='progressbar' style='width: " . $Frameworks[$x][1] . "%' aria-valuenow='" . $Frameworks[$x][1] . "' aria-valuemin='0' aria-valuemax='100'></div>
                      </div></div>";
                }
                ?>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="why-us-content  p-2 bg-light">
              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-diamond" style="color: #f058dc;"></i>
                <h4 class="mb-3">Tools And Softwares
                  <span class="text-left margin:0;  text-muted" style='font-weight:600; font-size:20px;'> - Coding Tools</span></h4>
                <?php
                $software = array(
                  array("Visual Code", 100),
                  array("Android Studio", 90),
                  array("Indellij IDE", 70),
                  array("Dreamweaver", 80),
                  array("atom", 100),
                  array("fedora", 90),
                  array("visual studio", 60),
                  array("netbeans ide", 40),
                  array("eclipse", 50),
                  array("Qt Creator", 80)
                );

                sort($software);

                $softwarelength = count($software);
                for ($x = 0; $x < $softwarelength; $x++) {
                  echo "<div class='star-div' >";
                  echo "<span class='text-dark star-div-text'>" . $software[$x][0] . " - <span style='font-weight:400;'>" . $software[$x][1] . "%</span></span>";
                  echo "<div class='progress bg-secondary'>
                      <div class='progress-bar bg-success' role='progressbar' style='width: " . $software[$x][1] . "%' aria-valuenow='" . $software[$x][1] . "' aria-valuemin='0' aria-valuemax='100'></div>
                                     </div></div>";
                }
                ?>
                <hr class="bg-light" style="width: 80%;">
                <center>
                  <span class=" margin:0;  text-muted" style='font-weight:600; font-size:20px;'>Content Creation</span>
                </center>
                <?php
                $Creation = array(
                  array(" Photoshop", 100),
                  array(" Illustrator", 90),
                  array("Premiere pro", 100),
                  array("adobe audition", 70),
                  array(" lightroom cc", 100),
                  array(" After Effect cc", 70),
                  array("corel draw", 100),
                  array("shotcut", 100)
                );
                $creationlength = count($Creation);
                for ($x = 0; $x < $creationlength; $x++) {
                  echo "<div class='star-div' >";
                  echo "<span class='text-dark star-div-text'>" . $Creation[$x][0] . " - <span style='font-weight:400;'>" . $Creation[$x][1] . "%</span></span>";
                  echo "<div class='progress bg-secondary'>
                      <div class='progress-bar progress-bar-striped bg-success' role='progressbar' style='width: " . $Creation[$x][1] . "%' aria-valuenow='" . $Creation[$x][1] . "' aria-valuemin='0' aria-valuemax='100'></div>
                      </div></div>";
                }
                ?>
                <hr class="bg-light" style="width: 80%;">
                <center>
                  <span class=" margin:0;  text-muted" style='font-weight:600; font-size:20px;'>Other</span>
                </center>
                <?php
                $Other = array(
                  array("R-Studio", 100)
                );
                $Otherlength = count($Other);
                for ($x = 0; $x < $Otherlength; $x++) {
                  echo "<div class='star-div' >";
                  echo "<span class='text-dark star-div-text'>" . $Other[$x][0] . " - <span style='font-weight:400;'>" . $Other[$x][1] . "%</span></span>";
                  echo "<div class='progress bg-secondary'>
                      <div class='progress-bar progress-bar-striped bg-success' role='progressbar' style='width: " . $Other[$x][1] . "%' aria-valuenow='" . $Other[$x][1] . "' aria-valuemin='0' aria-valuemax='100'></div>
                      </div></div>";
                }
                ?>
              </div>
            </div>

            <!--<div class="features wow bounceInUp clearfix">
                <i class="fa fa-object-group" style="color: #ffb774;"></i>
                <h4>Eum ut aspernatur</h4>
                <p>Molestias eius rerum iusto voluptas et ab cupiditate aut enim. Assumenda animi occaecati. Quo dolore fuga quasi autem aliquid ipsum odit. Perferendis doloremque iure nulla aut.</p>
              </div>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-language" style="color: #589af1;"></i>
                <h4>Voluptates dolores</h4>
                <p>Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur. Totam dolores ut enim ullam voluptas distinctio aut.</p>
              </div>-->

          </div>

        </div>

      </div>

      </div>

      <div class="container">
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $languagelength ?></span>
            <p>Programming Language</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $softwarelength + $Otherlength + $creationlength ?></span>
            <p>Total Softwares</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $Frameworkslength ?></span>
            <p>Total Frameworks</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $dblength ?></span>
            <p>Total Databases</p>
          </div>

        </div>

      </div>
    </section>

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title text-transform:uppercase;">my certificates</h3>
            <p class="cta-text">For visit my acedemic and non acedemic certificates, first of all you must submit your name, email and Professional. </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="certificate.php">Watch Certificates</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Services Section
    ============================-->


    <!--==========================
      Features Section
    ============================-->
    <section id="portfolio">
      <div class="container">
        <div class="section-header">
          <h3 style="padding-bottom:4%; text-transform:uppercase;">My Services</h3>
        </div>
        <div class="row feature-item">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/slknowledgeschool.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h3 style="font-weight:600;">SL Knowledge School &nbsp;
              <a href="https://www.facebook.com/SLKnowledgeSchool/" class="facebook"><i class="fa fa-facebook"></i><span class="font-weight-normal" style="font-size:15px;">&nbsp;Visit Page</span></a></h3>

            <p>I like to share my knowledge with people and also like to be a content creator. According to that concept i created a facebook page on 8 May 2020. It is SL Knowledge School Facebook Page. I update it every day.</p>
            <p style="padding:0%;">
              The main purpose of SL Knowledge School is to create an intelligent and virtuous society. We are mainly talking about,
            </p>
            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Technology And Science Related Issues</li>
              <li><i class="ion-android-checkmark-circle"></i> Luxury Lifestyle</li>
              <li><i class="ion-android-checkmark-circle"></i> Sports, Society And General Knowledge</li>
            </ul>
          </div>
        </div>

        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/prom.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h3 style="font-weight:600;"> &nbsp; Pro&nbsp; -&nbsp; M &nbsp;Advertising &nbsp;
              <a href="https://www.facebook.com/ProMMarketings/" class="facebook"><i class="fa fa-facebook"></i><span class="font-weight-normal" style="font-size:15px;">&nbsp;Visit Page</span></a></h3>

            <p>
              We Provide Best Service For Our Customers. We have create low budget advertising and marketing plans for you. Also we create post for ad campaign freely. We provide our service for local and international Customers.
            </p>
            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Total Completed Ad Campaigns : 300+</li>
              <li><i class="ion-android-checkmark-circle"></i> Total Facebook Posts : 3000+</li>
              <li><i class="ion-android-checkmark-circle"></i> We Maintain 23+ Facebook Pages</li>
            </ul>
            <p>
              Our Designs : <a href="https://www.facebook.com/PRO-M-WORK-104519147754712/?epa=SEARCH_BOX"> <span>Pro M Works</span></a>
            </p>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Portfolio Section
    ============================
    <section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">OUR PORTFOLIO</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Facebook Post</li>
              <li data-filter=".filter-card">Advertising Post </li>
              <li data-filter=".filter-web">Projects</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/app2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>Facebook Post</p>
                <div>
                  <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="portfolio">
      <div class="container">
        <div class="row feature-item">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/whyus.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h2 style="font-weight:900; font-family:FMGemunu;">
              සෑම පුද්ගලයෙකුටම සහ ව්‍යාපාරයක් සඳහාම වෙබ් අඩවියක්‍.‍.&nbsp;</h2>

            <p>
              ඔබ සම්මුඛ පරීක්ෂණයට යන විට කොල කෑල්ලක ලියපු CV එකක් රැගෙන යන එක කොතරම් පරණ ක්‍රමයක්ද ? විශේෂයෙන් ඔබ තොරතුරු තාක්ෂණික ක්ෂේත්‍රයේ ශිෂ්‍යයෙක් නම් එය ඔබට සුදුසු නොවේ. ඉතින් අපි ඔබේම වෙබ් අඩවියක් නිර්මාණය කිරීමට සූදානම්. අප හා සම්බන්ධ වීමට ඉඩ දෙන්න.අඩු මුදලමකට ඔබේම කියා වෙබ් අඩවියක් නිර්මාණය කර ගන්න දැන්ම අපව අමතන්න.
            </p>
            <p style="padding:0%;">
              ඔබ ව්‍යාපාරිකයෙක්ද? ඔබේ ව්‍යාපාරය වැඩි දියුණු කර ගෙන ලාභය වැඩි කර ගැනීමට ඔබ කැමතිද? දැන් පවතින නවීන තාක්ෂණය සමග ගැටී ඔබේ ලාභය වැඩි කර ගැනීමට ඕනේ නම් වෙබ් අඩවියක් ඔබට තිබියම යුතු වෙන්වා </p>
            <a href="tel:+94711044609"><button type="button" class="btn btn-primary">Contact US : +9471-10-44-609</button></a>
          </div>
        </div>

      </div>
      </div>
    </section>
    <!--==========================
      Team Section
    ============================-->

    <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3 style="padding-bottom:2%;text-transform:uppercase;">My Team</h3>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Manjitha Wijesekara</h4>
                  <span>Social Media Consultant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100006236954730"><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/manjitha-wijesekara-b09a8b1b4/"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-2.webp" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Dulanga Methsara</h4>
                  <span>Assistance / Content Creator</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/dulanga.methsara.54"><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-3.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Hansinie Sulakshi</h4>
                  <span>Systems Developer </span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-4.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Pavitra Anjali</h4>
                  <span>Accountant And Assistance</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Clients Section
    ============================
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section>#clients -->


    <!--==========================
      Pricing Section
    ============================-->
    <hr style="margin: 0%; opacity:0.6;" class="bg-light">
    <section id="pricing" class="wow fadeInUp section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="text-uppercase">My Pricing</h3>
          <p>Marketing And Advertising / Graphic Design / Web Design / Video Production</p>
        </header>

        <div class="row flex-items-xs-middle flex-items-xs-center">

          <!-- Basic Plan  -->
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency"><span class="period">Up to</span>$</span>15<span class="period">/Week (LKR.2000)</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title">
                  Marketing Plans
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">Low Budget</li>
                  <li class="list-group-item">Free Facebook Post</li>
                  <li class="list-group-item">Facebook Page Maintaince</li>
                  <li class="list-group-item">24/7 Support System</li>
                </ul>
                <a href="#" class="btn">Choose Plan</a>
              </div>
            </div>
          </div>

          <!-- Regular Plan  -->
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency"><span class="period">Up to</span> $</span>6<span class="period">/Per One (LKR.500)</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title">
                  Graphic Design Plan
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">Modern Design</li>
                  <li class="list-group-item">Unlimited Rivision</li>
                  <li class="list-group-item">No Extra Charges</li>
                  <li class="list-group-item">24/7 Support System</li>
                </ul>
                <a href="#" class="btn">Choose Plan</a>
              </div>
            </div>
          </div>

          <!-- Premium Plan  -->
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency"><span class="period">Up to</span>$</span>25<span class="period">/Per One (LKR.4000)</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title">
                  Web Design
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">Customize Design</li>
                  <li class="list-group-item">Monthly Maintain</li>
                  <li class="list-group-item">Hosting & Domain Services</li>
                  <li class="list-group-item">24/7 Support System</li>
                </ul>
                <a href="#" class="btn">Choose Plan</a>
              </div>
            </div>
          </div>

        </div>
      </div>

    </section><!-- #pricing -->

    <!--==========================
      Frequently Asked Questions Section
    ============================-->
    <section id="features">
      <div class="container">
        <div class="row feature-item ">
          <div class="col-lg-6 wow fadeInUp" style="padding:10% 10%  0% 0%;">
            <img src="img/1.webp" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4 class="text-uppercase">Give A Comment For Me</h4>
            <form class="bg-light" style="padding: 5%;" action="comments_action.php" method="POST">
              <div class="form-group">
                <label for="exampleFormControlInput1">Your Name</label>
                <input class="form-control" name="name" type="text" placeholder=""> </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Your Professional</label>
                <input class="form-control" name="role" type="text" placeholder=""> </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Your Comment Type</label>
                <select class="form-control" name="type">
                  <option value="Possitive">Possitive Comment</option>
                  <option value="Negative">Negative Comment</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Your Comment</label>
                <textarea class="form-control" name="Comment" id="exampleFormControlTextarea1" rows="4"></textarea>
              </div>
              <button type="submit" name="submit" class="btn btn-info">Submit Your Comments</button>
            </form>
          </div>
        </div>
      </div>
    </section><!-- #faq -->
    <div class="bg-light" id="COMMENTS">
      <header class="section-header p-3">
        <h3 class="text-dark mt-2 text-uppercase">Visitor' s Comments</h3>
      </header>
      <div class="card-deck" style="margin: 0%;padding-bottom:5%;">
        <div class="card  bg-light " style="border: none;">

          <div class="doghnutChartGroup displayInlineBlock prec_circle_padding">
            <div class="circular-progress" data-percent="100" data-text="<?php echo $COUNT ?>"></div>
          </div>

          <p class="text-center font-weight-bold" style="padding-left:20%;">&nbsp;&nbsp;&nbsp;Total Comments</p>
        </div>
        <div class="card bg-light" style="border: none;">
          <div class="doghnutChartGroup displayInlineBlock" style="padding-left:17%;">
            <div class="circular-progress" data-percent="<?php echo $tPossitive ?>" data-text="<?php echo $Possitive ?>"></div>
          </div>
          <p class="font-weight-bold" style="padding-left:28%;">Possitive Comments</p>
        </div>
        <div class="card bg-light" style="border: none;">
          <div class="doghnutChartGroup displayInlineBlock">
            <div class="circular-progress" data-percent="<?php echo $tNegative ?>" data-text="<?php echo $Negative ?>"></div>
          </div>
          <p class="font-weight-bold" style="padding-left:11%;">Negative Comments</p>
        </div>
      </div>
      <div class="alert " role="alert">
        <ul class="list-unstyled">
          <?php
          include 'config.php';
          $sql = "select * from comments";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
              $date = $row["date"];
              $name = $row["name"];
              $type = $row["type"];
              $role = $row["role"];
              $comment = $row["comment"];
              if ($type == 'Possitive') {
          ?>

                <li class="media p-3  mb-2" style="background-color: #C9FEDC;">
                  <img src="img/male.png" class="mr-3" alt="...">
                  <div class="media-body">
                    <?php echo $type . ' Comment' ?>
                    <h5 class="mt-0 mb-1" style="font-weight:500;"><?php echo $name ?> <span style="font-size:14px;font-weight:400;"> - <?php echo $role ?></span></h5>
                    <span style="font-weight:400;"><?php echo $date ?></span><BR />
                    <?php echo $comment ?>
                  </div>
                </li>
              <?php } else { ?>
                <li class="media p-3  mb-2" style="background-color: #FEC9C9;">
                  <img src="img/male.png" class="mr-3" alt="...">
                  <div class="media-body">
                    <?php echo $type . ' Comment' ?>
                    <h5 class="mt-0 mb-1 text-capitalize" style="font-weight:500;"><?php echo $name ?> <span style="font-size:14px;font-weight:400;"> - <?php echo $role ?></span></h5>
                    <span style="font-weight:400;"><?php echo $date ?></span><BR />
                    <?php echo $comment ?>
                  </div>
                </li>

            <?php }
            }
          } else { ?>
            <li class="media alert-dark p-3  mb-2">
              <div class="media-body">
                <center><img width='10%' src='img/nodata.gif'><br />
                  <span class="font-weight-bold  text-muted">No Visitor's Comments</span>
                </center>
              </div>
            </li>
          <?php }
          mysqli_close($conn);
          ?>
        </ul>
      </div>
  </main>

  <!--==========================
    Footer
  ============================-->

  <?php include "footer.php" ?>
  <script>
    // Draw Circle dashboard
    var doghnutCharts = document.querySelectorAll('.doghnutChartGroup .circular-progress');

    for (var h = 0; h < doghnutCharts.length; h++) {
      var percent = doghnutCharts[h].getAttribute('data-percent');
      console.log(percent);
      var degree = 90 + ((360 / 100) * Number(percent));
      console.log(degree);

      if (percent > 0 && percent <= 25) {
        doghnutCharts[h].style.background = 'linear-gradient(90deg, #E0E0E0 50%, transparent 50%, transparent), linear-gradient(' + degree + 'deg , #FF70A6 50%, #E0E0E0 50%, #E0E0E0)';
      } else if (percent > 25 && percent <= 50) {
        doghnutCharts[h].style.background = 'linear-gradient(90deg, #E0E0E0 50%, transparent 50%, transparent), linear-gradient(' + degree + 'deg , #FF70A6 50%, #E0E0E0 50%, #E0E0E0)';
      } else if (percent > 50 && percent <= 75) {
        doghnutCharts[h].style.background = 'linear-gradient(-90deg, #FF70A6 50%, transparent 50%, transparent), linear-gradient(' + degree + 'deg , #FF70A6 50%, #E0E0E0 50%, #E0E0E0)';
      } else if (percent > 75 && percent <= 100) {
        doghnutCharts[h].style.background = 'linear-gradient(-90deg, #FF70A6 50%, transparent 50%, transparent), linear-gradient(' + degree + 'deg , #FF70A6 50%, #E0E0E0 50%, #E0E0E0)';
      } else {
        doghnutCharts[h].style.background = 'linear-gradient(90deg, #E0E0E0 50%, transparent 50%, transparent), linear-gradient(90deg , #FF70A6 50%, #E0E0E0 50%, #E0E0E0)';
      }

      //doghnutCharts[h].style.background = 'linear-gradient(90deg, #E0E0E0 50%, transparent 50%, transparent), linear-gradient(' + degree + 'deg , #FF70A6 50%, #E0E0E0 50%, #E0E0E0)';
      console.log(doghnutCharts[h].style.background);
    }
  </script>
</body>

</html>