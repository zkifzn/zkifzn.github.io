<?
  include "include/header.php";
?>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <?
    include "include/menu.php";
  ?>  

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Zaky Fauzan</h1>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>Web Developer with 4+ years of experience in designing, developing user interface, maintenance a website. Proven ability in optimizing web functionalities that improve data retrieval and workflow efficiencies.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/zf_foto.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Web Developer.</h3>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 3 Maret 1994</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 29</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +6289654659488</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Half-time:</strong> Available</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Diploma</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> zakiifauzan@gmail.com</li>
                  <li><i class="icofont-rounded-right"></i> <strong>City:</strong> Depok, Indonesia</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <!-- <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">232</span>
              <p><strong>Happy Clients</strong> consequuntur quae</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">521</span>
              <p><strong>Projects</strong> adipisci atque cum quia aut</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">1,463</span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">15</span>
              <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Facts Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="skills" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Programming Languages, Tools and Framework.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
            </ul>
          </div>
        </div>

        <div class="row skills-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <center>
                <img src="assets/img/skills/html5.png" class="img-fluid" alt="">
              </center>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <center>
                <img src="assets/img/skills/php.png" style="margin-top: 40px" class="img-fluid" alt="">
              </center>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <center>
                <img src="assets/img/skills/codeigniter.png" class="img-fluid" alt="">
              </center>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <center>
                <img src="assets/img/skills/mysql.png" class="img-fluid" alt="">
              </center>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <center>
                <img src="assets/img/skills/phpmyadmin.png" class="img-fluid" alt="">
              </center>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <center>
                <img src="assets/img/skills/sql_server.png" class="img-fluid" alt="">
              </center>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/skills/javascript.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <center>
                <img src="assets/img/skills/bootstrap.png" class="img-fluid" alt="">
              </center>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <center>
                <img src="assets/img/skills/sublime.png" class="img-fluid" alt="">
              </center>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Politeknik LP3I Jakarta</h4>
              <h5>2013 - 2016</h5>
              <p><em>Management Informatics</em></p>
              <p>High School Diploma, Management dan Administration Technology Information / Computer.</p>
            </div>
            <!-- <div class="resume-item">
              <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
              <h5>2010 - 2014</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
            </div> -->
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Experience</h3>
            <div class="resume-item">
              <h4>PT. Nusa Rizki Persada</h4>
              <h5>Maret 2016 - Oktober 2021</h5>
              <p><em>Web Developer</em></p>
              <ul>
                <li>Updating, develop and maintenance a website.</li>
              </ul>
            </div>
            <!-- <div class="resume-item">
              <h4>Graphic design specialist</h4>
              <h5>2017 - 2018</h5>
              <p><em>Stepping Stone Advertising, New York, NY</em></p>
              <ul>
                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
              </ul>
            </div> -->
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <!-- <li data-filter="*" class="filter-active">All</li> -->
              <!-- <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li> -->
              <!-- <li data-filter=".filter-web">Web</li> -->
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/mis.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/baak.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/dosen.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/dosen2.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/keu.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/pmb_admin.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/pmb_online.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/siskamaya.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/SAS_login.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/SAS_pertemuan.png" class="img-fluid" alt="">
            </div>
          </div>
          
          

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

<?
  include "include/footer.php";
?>
