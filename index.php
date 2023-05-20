 <?php
include("database.php");
echo '<script defer src="js/script.js"></script>'
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/queries.css" />
    <link rel="icon" href="img/logo.png">
    <script defer src="js/script.js"></script>
    <title>CS COMPUTERS</title>
  </head>
  <body>

    <header class="header">
      <a href="#">
        <img class="logo" alt="cs logo" src="img/logo.png" />
      </a>
      <nav class="main-nav">
        <ul class="main-nav-list">
          <li>
            <a class="main-nav-link" href="#">Home</a>
          </li>
          <li>
            <a class="main-nav-link" href="#about-us">About Us</a>
          </li>
          <li>
            <a class="main-nav-link" href="#services">Services</a>
          </li>
          <li>
            <a class="main-nav-link" href="#contact-us">Contact Us</a>
          </li>
        </ul>
      </nav>
      <button class="btn-mobile-nav">
        <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
        <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
      </button>
    </header>
    <main>
      <section class="slideshow-container">
        <div id="slideshow">
          <img src="img/repair1.jpg" id="slideimage" />
       <div class="overlay">
        <h1 class="tagline">Giving Futures To Your Tech</h1>
       </div>
        </div>
      </section>

      <section class="section-about-us container" id="about-us">
        <div>
          <h2 class="heading-secondery">ABOUT US</h2>
        </div>
        <div class="grid grid--2-cols">
        <div class="about-us-content">
          C S COMPUTERS is one of the top system integrator partners offering an
          entire range of IT integrated products and services. Incorporated in
          the year 2011, C S COMPUTERS has traversed an enriching journey of
          more than 12 YEARS and has emerged as one of the largest IT
          Infrastructure Solution provider supporting customers from small and
          medium businesses to blue chip clients and also providing a specialist
          service for the educational institutes. C S COMPUTERS has extensive
          experience in delivering high-quality IT Infrastructure services for
          all kinds of verticals and technology environments. Driven by a
          customer oriented approach with focus on absolute standards of
          operational excellence,
           technology and operational elements in great detail. 
           C S COMPUTERS
          professionally managed, process and technology driven, skill based
          System & Network Integrator, focused in
          <strong
            >LAN, MAN, WAN, WIRELESS, NETWORK MANAGEMENT, STORAGE, SECURITY AND
            CONVERGEDVOICE– DATA-VIDEO, SERVERS, DEKTOP and PHYSICAL SECURITY &
            SURVEILLANCE SERVER LAVEL Solutions domains.</strong
          >Our highly committed and skilled set of professionals will add value
          by proposing technically superior and commercially competitive
          solutions. We are confident to position
          <strong>
            C S COMPUTERS as “Single Stop Enterprise Solutions
            Provider”.</strong
          >
        </div>
        <img class="abt-us-img" alt="office" src="img/repair4.jpg">
        </div>
      </section>

      <section class="section-services container" id="services">
        <div>
          <h2 class="heading-secondery service">OUR SERVICES</h2>
        </div>
        <div class="grid grid--4-cols">
          <div class="services">
            <img
              class="service-img"
              alt="computer repair"
              src="img/hardware.jpg"
            />
            <p class="heading-tertiary">HARDWARE AND SOFTWARE</p>
            <p class="service-content">
              As security has been a major concern of the IT industry, C S
              COMPUTERS has come up with solutions that can fight all threats.
              Our focus is to maximize the network performance, integrate
              technologies and deliver cost-effective solutions. <span id="firstTarget" class="read-more-text">C S COMPUTERS,S
              solutions encompass an array of client’s needs right from
              strategic planning, hardware and software solution to
              web-application hosting and network management.</span>
              <span class="read-more" data-target="firstTarget"> Read more...</span>
            </p>
          </div>
          <div class="services">
            <img class="service-img" alt="network" src="img/network.jpg" />
            <p class="heading-tertiary">LAN & NETWORKING</p>
            <p class="service-content">
              At c s computers, coupled with robust performances we provide
              flexibility and reliable stability in our networking services. Our
              aim is to deliver simple yet consistent solutions which are
              flexible and can be molded as per client requirements.<span id="secondTarget" class="read-more-text"> We deliver
              secure and scalable IP network that can be custom-made based on
              the varying business needs.</span>
              <span class="read-more" data-target="secondTarget"> Read more...</span>
            </p>
          </div>
          <div class="services">
            <img
              class="service-img"
              alt="elctrical work"
              src="img/electrical-work.jpeg"
            />
            <p class="heading-tertiary">ELECTRICAL WORK</p>
            <p class="service-content">
              Over the years, c s computer& Teams laying the cable in industries
              hospitals Government sectors& as per Client Requirement we are
              laying All types of Network cable telephone cable Fiber optic
              cable and many more 
              <span class="read-more" data-target="third-target"> Read more...</span>
            </p>  
          </div>
          <div class="services">
            <img class="service-img" alt="cctv camera" src="img/cctv.jpeg" />
            <p class="heading-tertiary">CCTV CAMERA</p>
            <p class="service-content">
              Our years of experiences have helped us reach a wide number of
              clients all across the globe. Cctv security system solution is
              exclusively designed to meet your company’s needs. We Install and
              maintain cctv security systems for<span id="forthTarget" class="read-more-text"> both medium and small companies
              and big Institutions as well. To meet your business needs we
              design the best security system.</span>
              <span class="read-more" data-target="forthTarget"> Read more...</span>
            </p> 
          </div>
        </div>
      </section>

      <section class="contact-us-section container" id="contact-us">
        <div class="heading-secondery">CONTACT US</div>
        <p class="contact-us-text">GET IN TOUCH</p>
        <hr />
        <div class="grid grid--2-cols">
          <form method="post" action="#contact-us" class="contact-us-form" name="sign-up">
            <label for="name">Full Name</label>
            <div class="flex-name">
              <input
                id="name"
                type="text"
                name="fname"
                placeholder="Enter Your first Name"
                required
              />
              <input
                id="name"
                type="text"
                name="lname"
                placeholder="Enter Your Last Name"
                required
              />
            </div>
            <div>
              <label for="email">Email address</label>
              <input
                id="email"
                type="email"
                name="email"
                placeholder="Enter your mail address"
                required
              />
            </div>
            <div>
              <label for="number">Number</label>
              <input
                id="number"
                type="tel"
                name="number"
                placeholder="Enter your mobile number"
                required
              />
            </div>
            <div>
              <label for="message">Comment or Message </label>
              <textarea name="comment" placeholder="Enter your comment here" rows="5">
              </textarea>
            </div>
            <input type="submit" name="submit" class="btn" value="SUBMIT"/>
          </form>
          <div class="contact-us-img">
            <img alt="contact-us-img" src="img/contact-us.jpg" />
          </div>
        </div>
      </section>
    </main>

    <footer class="footer-section">
      <div class="footer">
        <div class="grid grid--3-cols">
          <div class="address-col">
            <a href="#">
              <img class="footer-logo" alt="cs logo" src="img/logo.png" />
            </a>
            <h3>RAJ SHUKLA</h3>
          </div>
          <div class="social-links">
            <ul class="footer-nav-list">
              <li class="footer-heading">Useful Links</li>
              <li class="footer-nav-link">
                <a href="#about-us">ABOUT US</a>
              </li>
              <li class="footer-nav-link"><a href="#services">SERVICES</a></li>
              <li class="footer-nav-link">
                <a href="#contact-us">CONTACT US </a>
              </li>
            </ul>
          </div>
          <div class="shop-details">
            <div class="location">
              <svg
                class="icon"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"
                />
              </svg>
              <a class="footer-nav-link" href="tel:9574215912"
                >9574215912, 0265-6999950</a
              >
            </div>
            
            <div class="location">
              <svg
                class="icon"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
                />
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
                />
              </svg>
              <span class="footer-nav-link"
                >G4 GREEN WOOD COMPLEX NR SHELL PETROL PUMP MAKARPURA ROAD,
                Vadodara</span
              >
            </div>
            <div class="location">
              <svg
                class="icon"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
                />
              </svg>
              <a class="footer-nav-link" href="mailto:c.s.computers22@gmail.com"
                >c.s.computers22@gmail.com</a
              >
            </div>
          </div>
        </div>
        <div class="sub-footer">
          <p class="copyright">
            coyright &copy; <span class="year">2027</span> by C S Computers, Inc All Rights Reserved.
          </p>
          <p>Site Developed by<a class="year" href="https://mamotechnolabs.com/"> MAMO TECHNOLABS LLP</a></P>
        </div>
      </div>
    </footer>
  </body>
