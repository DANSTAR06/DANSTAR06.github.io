<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DANSTAR</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/MPofolio/mecontactavatar.png" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <a href="https://danstar06.github.io" target="_self"><img src="./assets/MPofolio/meLenovo.jpg" alt="DANSTAR" width="80"></a>
        </figure>

        <div class="info-content">
          <h1 class="name" title="DANSTAR"><a href="https://danstar06.github.io" target="_self" style="color: rgb(240, 17, 17);">DAN WAMUYU</a></h1>

          <p class="title">Software Engineer based in Meru, KENYA.</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="danwamuyu06@gmail.com" class="contact-link">danwamuyu06@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:+254721666815" class="contact-link">+254721666815</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Undergraduate-Second class Honors_UPPER DIVISION</p>

              <time datetime="1982-06-23">October 14, 2023</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Nyeri, Nakuru, Mombasa, Nairobi, Meru and Kericho</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="https://www.linkedin.com/in/daniel-wamuyu-7404b01a2?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BQPNvFCc5RDi3bR7jayE%2BBg%3D%3D" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://www.twitter.com/danstar_dj" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
            
          </li>

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>


    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

       <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>
          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

        </ul>

      </nav> 

      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">About</h2>
        </header>

        <section class="about-text">
          <p>
            I'm Enthusiast and Creative Software Engineer based in Nairobi KENYA, working remotely as a freelancer.
            I enjoy
            solving complex problems reducing them into simple, beautiful and working software application, For sure I love being infront of computers making things happen.
          </p>

          <p>
            My job is to build you Software applications that is of high quality,functional and user-friendly as well as attractive.
            Moreover, I
            add personal touch to your product and make sure that is eye-catching and easy to use. My aim is to enable you solve
            your daily routine task with just click/tap of a button in the most creative way. I create websites, Stand alone systems and Mobile application for my clients.
          </p>
        </section>


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">What I Offer</h3>

          <ul class="service-list">


            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/MPofolio/projdocumentation.jpg
                " alt="design icon" width="60">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Online Academics</h4>

                <p class="service-item-text">
                  I help Students across the globe to sucessfully and timely complete their school tech(programming)assignments.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/MPofolio/flowchat.jpg
                " alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Database design And Development</h4>

                <p class="service-item-text">
                  I do MariaDB and Firebase Database design and development for client projects.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/MPofolio/merepair.jpg" alt="Web testing icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Software Testing</h4>

                <p class="service-item-text">
                 I do software testing using Selenium tool for web applications.
                </p>
              </div>
            </li>

            


            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-dev.svg" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web development</h4>

                <p class="service-item-text">
                  High-quality Website development at the professional level.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-app.svg" alt="mobile app icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Mobile apps</h4>

                <p class="service-item-text">
                  Professional development of Mobile applications for iOS and Android using flutter framework.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/MPofolio/merepaircpu.jpg" alt="camera icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">IT Support Technician</h4>

                <p class="service-item-text">
                  I competently help resolve tech related issues including Repair and maintenance issues with Integrity and confidentiality.
                </p>
              </div>

            </li>
            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-design.svg" alt="programming icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Programming</h4>

                <p class="service-item-text">
                  Besides Software development, I do mathematics Programming tasks.
                </p>
              </div>
            </li>


          </ul>

        </section>


        <!--
          - testimonials
        -->

        <section class="testimonials">

          <h3 class="h3 testimonials-title">Testimonials</h3>

          <ul class="testimonials-list has-scrollbar">

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-1.png" alt="Douglous Nderitu" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Douglous Nderitu</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Danstar was ask to develope Ihururu HMS. We were very pleased with the system He developed. he has a
                    lot of skills
                    and is very concerned about the needs of clients.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-2.png" alt="Hildah Wambui" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Hildah Wambui</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    I Requested Danstar a website for Online academic writers. I was very impressed with the work done.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </section>


        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-1.png" alt="Douglous Nderitu" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Douglous Nderitu</h4>

              <time datetime="2022-04-20">20 April, 2022</time>

              <div data-modal-text>
                <p>
                  Dan was ask to develope Ihururu Health Management system. We were very pleased with the system He developed. he has a
                    lot of skills
                    and is very concerned about the needs of clients.
                </p>
              </div>

            </div>

          </section>

        </div>


        <!--
          - clients
        -->

        <section class="clients">

          <h3 class="h3 clients-title">Clients</h3>

          <ul class="clients-list has-scrollbar">

            <li class="clients-item">
              <a href="https://www.ultimateexcellence.co.ke">
                <img src="./assets/MPofolio/ultimate.jpg" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="https://bellamywriters.wixsite.com/bellamywriters">
                <img src="./assets/MPofolio/bellamy.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/MPofolio/mecontactavatar.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/MPofolio/certifiedlifecoach.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/MPofolio/DANSTAR.jpg" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/MPofolio/flowchat.jpg" alt="client logo">
              </a>
            </li>

          </ul>

        </section>

      </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">My Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Kenya Methodist University</h4>

              <span>2018 — 2023</span>

              <p class="timeline-text">
                Graduated with a Second Class honours upper division.
                Bachelors of science in Mathematics And Computer Science Major in Software Engineer
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Kiandu High School</h4>

              <span>2013 — 2017</span>

              <p class="timeline-text">
                Graduated with mean Grade of B.
              </p>

            </li>
          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Freelancer</h4>

              <span>— Present</span>

              <p class="timeline-text">
                I Work remotely, IT Support and as a Freelancer at <strong>DANSTARCYBERTEC</strong>
              </p>

            </li>
            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Intern</h4>

              <span>2023 Nov — 2024 Mar</span>

              <p class="timeline-text">
                Worked as IT support Technician at Sauti Call Center
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Intern</h4>

              <span>2022 Feb — 2022 May</span>

              <p class="timeline-text">
                Worked as An Intern at Postal Corporation of Kenya
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Developer</h4>

              <span>2018— 20223</span>

              <p class="timeline-text">
                Was Involved in student peer-groups to design and develope various software for learning and for fun
                I also helped my course-mates delevoping their school project apps at a fee
              </p>

            </li>

          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card">
            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">ZOHO Products</h5>
                <data value="95">95%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 95%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Database Design And Development | MariaDB, Firebase</h5>
                <data value="98">98%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 98%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Flutter Android & iOS Development | Dart</h5>
                <data value="90">90%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 90%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Web Development and design | HTML, TS, JS,PHP, CSS</h5>
                <data value="80">80%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 80%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Mobile Apps Development | Java</h5>
                <data value="85">85%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 85%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Programming | python, C++</h5>
                <data value="70">70%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 70%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Software Testing</h5>
                <data value="50">50%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 50%;"></div>
              </div>

            </li>
            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Cloud Computing</h5>
                <data value="60">60%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 60%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Devops</h5>
                <data value="65">65%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 65%;"></div>
              </div>

            </li>

          </ul>

        </section>

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">My Projects</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>

            <!--<li class="filter-item">
              <button data-filter-btn>Web design</button>
            </li>-->

            <li class="filter-item">
              <button data-filter-btn>Applications</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web development</button>
            </li>

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

             <!-- <li class="select-item">
                <button data-select-item>Web design</button>
              </li>-->

              <li class="select-item">
                <button data-select-item>Applications</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web development</button>
              </li>

            </ul>

          </div>

          <ul class="project-list">

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="https://bellamywriters.wixsite.com/bellamywriters">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/MPofolio/bellamy.png" alt="Bellamy" loading="lazy">
                </figure>

                <h3 class="project-title">Bellamy Writers Online Academic Writing</h3>

                <p class="project-category">Websites</p>
              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="http://danstar.lovestoblog.com/?i=1">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/MPofolio/daraja.png" alt="Daraja2.0 App" loading="lazy">
                </figure>

                <h3 class="project-title">Lipa na Mpesa Integration</h3>

                <p class="project-category">Web Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/MPofolio/hosipital.png" alt="Hospital Management System" loading="lazy">
                </figure>

                <h3 class="project-title">Hospital Management System</h3>

                <p class="project-category">Desktop Applications</p>

              </a>
            </li>
            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/MPofolio/flutterapp.jpg" alt="Flutter" loading="lazy">
                </figure>

                <h3 class="project-title">Flutter App UI</h3>

                <p class="project-category">Mobile Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/MPofolio/crud.jpg" alt="Employee Crud" loading="lazy">
                </figure>

                <h3 class="project-title">Employee Crud</h3>

                <p class="project-category">Desktop Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/MPofolio/restaurant.png" alt="Hotel Management System" loading="lazy">
                </figure>

                <h3 class="project-title">Hotel Management System</h3>

                <p class="project-category">Desktop Applications</p>

              </a>
            </li>
            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/MPofolio/applogin.jpg" alt="Androidapp" loading="lazy">
                </figure>

                <h3 class="project-title">Java android app</h3>

                <p class="project-category">Mobile Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="Web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/MPofolio/webadmininterface.png" alt="webadmin" loading="lazy">
                </figure>

                <h3 class="project-title">PHP-Firebase web Admin</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/MPofolio/ecomm.jpg" alt="Androidapp" loading="lazy">
                </figure>

                <h3 class="project-title">E-commerce site</h3>

                <p class="project-category">Mobile Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/MPofolio/web.jpg" alt="Online" loading="lazy">
                </figure>

                <h3 class="project-title">Online Store</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>


            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/MPofolio/lampshade.jpeg" alt="Online" loading="lazy">
                </figure>

                <h3 class="project-title">Service Booking and Inventory Management</h3>

                <p class="project-category">Mobile Application</p>

              </a>
            </li>

            

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/MPofolio/website2.png" alt="E-commerce" loading="lazy">
                </figure>

                <h3 class="project-title">E-commerce 2</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/MPofolio/chatapp.png" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">Php-MYSQL Chat Application</h3>

                <p class="project-category">Web Application</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/MPofolio/appUI.jpg" alt="ui" loading="lazy">
                </figure>

                <h3 class="project-title">UI Design</h3>

                <p class="project-category">Mobile Application</p>

              </a>
            </li>

          </ul>

        </section>

      </article>

      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">
        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>
      
        <section class="mapbox" data-mapbox>
          <figure>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1214606.466538413!2d36.20850057655186!3d-0.4761267745640137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x178821590baf3dd7%3A0x2dfb5ea9cbd6038b!2sKenya%20Methodist%20University-Meru%20Campus!5e0!3m2!1sen!2ske!4v1683751991959!5m2!1sen!2ske" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="400" height="300" loading="lazy"></iframe>
          </figure>
        </section>
      
        <section class="contact-form">
          <h3 class="h3 form-title">Send me an Email</h3>
          <form action="#" class="form" id="contactForm">
            <div class="input-wrapper">
              <input type="text" id="fullname" name="fullname" class="form-input" placeholder="Full name" required>
              <input type="email" id="email" name="email" class="form-input" placeholder="Email address" required>
            </div>
            <textarea id="message" name="message" class="form-input" placeholder="Your Message" required></textarea>
            <button class="form-btn" type="submit" id="sendMessageBtn">
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Email</span>
            </button>
          </form>
               <!-- Message Display -->
  <div id="formMessage" class="form-message"></div>
        </section>
        
      </article>      

    </div>


  </main>
 

  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>
    <!--
    - emailjs link
  -->
  <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
  <script type="text/javascript">
  (function(){
    //emailjs.init("YOUR_USER_ID");
    emailjs.init("4WYelSSzt2DOZmZzY");
  })();
</script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!--Footer Section-->
<footer class="footer">
  <p>social links</p>
  <div class="social-icons">
    <a href="https://wa.me/+254721666815" target="_blank" title="WhatsApp">
      <i class="fab fa-whatsapp"></i>
    </a>
    <a href="https://www.linkedin.com/in/daniel-wamuyu-7404b01a2?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BQPNvFCc5RDi3bR7jayE%2BBg%3D%3D" class="social-link" target="_blank" title="linkedin">
      <i class="fab fa-linkedin"></i>
    </a>
    <a href="https://www.twitter.com/danstar_dj" class="social-link" target="_blank" title="Twitter">
      <i class="fab fa-twitter"></i>
    </a>
    <a href="https://t.me/VDJ_DANSTAR" target="_blank" title="Telegram">
      <i class="fab fa-telegram"></i>
    </a>
    <a href="tel:+254721666815" target="_blank" title="Mobile">
      <i class="fab fa-weixin"></i>
    </a>
  </div>
  <a href="#" class="backtoTop" id="bact-to-top">Back to Top</a>
</footer>

</body>
</html>