<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Penta Dragon</title>
    <!--Google Fonts-->
    <link
      href="https://fonts.googleapis.com/css?family=Mukta&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />

    <!--fontawesome-->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/bootstrap.min.css"
    />
    <script src="https://kit.fontawesome.com/a54d2cbf95.js"></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      crossorigin="anonymous"
    />
    <!--Material Icons-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <!--Style-->
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
    <div class="overlay">
      <h1>Penta</h1>
      <span>Dragon</span>
    </div>
    <nav>
      <div class="navigation-wrapper">
        <div class="hamburger">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
        <div class="side-menu">
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#Services">Services</a></li>
            <li><a href="#about">About Me</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <div class="side-menu-footer">
            <span class="option">
              <i class="material-icons"> brightness_medium </i>
              <span class="option_text"
                >Dark Theme: <span class="option_val">Off</span></span
              >
            </span>
          </div>
        </div>
      </div>
    </nav>

    <section class="home" id="home">
      <div class="myname">
        <h3>Hello <span>My Name is</span></h3>
        <h1>Hamza Talha</h1>
        <h2>
          And I'm&nbsp;<a
            href=""
            class="typewrite"
            data-period="2000"
            data-type='[ "Web Developer.", "Frontend Developer.", "Backend Developer.", "Freelancer." ]'
          >
            <span class="wrap"></span>
          </a>
        </h2>
      </div>
    </section>
    <section
      class="portfolio-area"
      id="portfolio"
      data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s"
    >
      <div class="cut-text">portfolio</div>
      <h2>My Project</h2>
      <div class="controls">
        <button type="button" data-filter="all">All</button>
        <button type="button" data-filter=".design">Frontend</button>
        <button type="button" data-filter=".develop">Backend</button>
        <button type="button" data-filter=".graphics">Mobile</button>
      </div>
      <div class="portfolio-item">
        <div class="single-item mix design">
          <div class="img-thumbnail">
            <img src="assets/images/1.jpg" alt="" />
          </div>
          <div class="img-content">
            <h2>Web Design</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua
            </p>
          </div>
        </div>
        <div class="single-item mix develop">
          <div class="img-thumbnail">
            <video
              src="assets/videos/apps.mp4"
              preload="auto"
              autoplay
              muted
              loop
              width="100%"
              id="websites"
            ></video>
          </div>
          <div class="img-content">
            <h2>Web Development</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua
            </p>
          </div>
        </div>
        <div class="single-item mix design">
          <div class="img-thumbnail">
            <video
              src="assets/videos/branding.mp4"
              preload="auto"
              autoplay
              muted
              loop
              width="100%"
              id="websites"
            ></video>
          </div>
          <div class="img-content">
            <h2>Web Design</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua
            </p>
          </div>
        </div>
        <div class="single-item mix develop">
          <div class="img-thumbnail">
            <img src="assets/images/4.jpg" alt="" />
          </div>
          <div class="img-content">
            <h2>Web Development</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua
            </p>
          </div>
        </div>
        <div class="single-item mix design">
          <div class="img-thumbnail">
            <img src="assets/images/5.jpg" alt="" />
          </div>
          <div class="img-content">
            <h2>Web Design</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua
            </p>
          </div>
        </div>
        <div class="single-item mix graphics">
          <div class="img-thumbnail">
            <video
              src="assets/videos/video.mp4"
              preload="auto"
              autoplay
              muted
              loop
              width="100%"
              id="websites"
            ></video>
          </div>
          <div class="img-content">
            <h2>Graphics Design</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua
            </p>
          </div>
        </div>
        <div class="single-item mix graphics">
          <div class="img-thumbnail">
            <img src="assets/images/7.jpg" alt="" />
          </div>
          <div class="img-content">
            <h2>Graphics Design</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua
            </p>
          </div>
        </div>
        <div class="single-item mix develop">
          <div class="img-thumbnail">
            <video
              src="assets/videos/websites.mp4"
              preload="auto"
              autoplay
              muted
              loop
              width="100%"
              id="websites"
            ></video>
          </div>
          <div class="img-content">
            <h2>Web Development</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua
            </p>
          </div>
        </div>
      </div>
    </section>
    <div
      class="cv"
      data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s"
    >
      <p>For More Information About Me Download My Cv.</p>
      <button>Download CV</button>
    </div>
    <section
      class="services"
      id="Services"
      data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s"
    >
      <div class="cut-text1">Services</div>
      <h1 class="heading">What I Do ?</h1>

      <!--services-box-container------------------->
      <div class="s-box-container">
        <!--service-box-1---------------->
        <div class="s-box">
          <!--top-bar-------->
          <div class="bar"></div>

          <!--img---------->
          <img alt="1" src="assets/images/coding (2).png" />
          <!--servies-name---------->
          <h6>01</h6>
          <h1>Web Design</h1>
          <!--details------>
          <h2><span>HTML5</span>|<span>CSS3</span>|<span>JS</span></h2>
          <p>
            Track on your all daily expense and make your day to life easier.
          </p>
          <!--btn---------->
          <a class="s-btn" href="#">More</a>
        </div>
        <!--service-box-1---------------->
        <div class="s-box">
          <!--top-bar-------->
          <div class="bar"></div>

          <!--img---------->
          <img alt="2" src="assets/images/programming.png" />
          <!--servies-name---------->
          <h6>02</h6>
          <h1>Web Dev</h1>
          <!--details------>
          <h2><span>PHP</span>|<span>AJAX</span></h2>
          <p>Make a Budget That Fit Right With You And Can Do Most With It</p>
          <!--btn---------->
          <a class="s-btn" href="#">More</a>
        </div>
        <!--service-box-3---------------->
        <div class="s-box">
          <!--top-bar-------->
          <div class="bar"></div>

          <!--img---------->
          <img alt="3" src="assets/images/php-code.png" />
          <!--servies-name---------->
          <h6>03</h6>
          <h1>Full Respnsive</h1>
          <h2><span>PHP</span>|<span>AJAX</span></h2>
          <!--details------>
          <p>
            We Store All Card Info And Money Safe To Make You Relax And Crazy
          </p>
          <!--btn---------->
          <a class="s-btn" href="#">More</a>
        </div>
      </div>
    </section>
    <div
      class="contact-me"
      data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s"
    >
      <p>If You Have Any Project In Your Mind.</p>
      <button><a href="#contact1">Contact Me</a></button>
    </div>

    
    <section class="about-section" id="about">
      <div class="about-container">
        <div class="cut-text2">About Me</div>
        <h2 class="text3">Resume</h2>
      </div>
      <div class="about-row">
        <div class="about-item">
          <div class="about-item-inner">
            <div class="about-portfolio">
              <img src="assets/images/img1.jpg" alt="">
            </div>
          </div>
          
        </div>
          <div class="about-item2">
        <div class="about-item-inner">
          <div class="about-portfolio">
    
            <h2>i'm Hamza Talha</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Commodi dolorum doloribus ut harum quas officiis, </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Commodi dolorum doloribus ut harum quas officiis, </p>
             <button class="act">Hire Me</button>
          </div>
        </div>
      </div>
      </div>
    
    </section>
    <!-- <section
      id="about"
      data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s"
    >
      <div class="cut-text2">About Me</div>
      <div class="about-me">
        <img src="assets/images/img1.jpg" alt="" />
        <div class="about-text">
          <p>Resume</p>
          <p>Developer & Designer</p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis,
            ducimus velit. Impedit quas animi, non unde a in atque architecto
            necessitatibus
          </p>

          <button>Hire Me</button>
        </div>
      </div>
    </section> -->
    <section
      id="contact"
      class="contact"
      data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s"
    >
      <div class="cut-text5">Contact Me</div>
      <h2 class="text2">Get In Touch</h2>
      <div class="contact-wrap" id="contact1">
        <div class="contact-in">
          <h1>Contact Info</h1>
          <h2><i class="fa fa-phone" aria-hidden="true"></i> Phone</h2>
          <p>06-46-71-15-60</p>
          <h2><i class="fa fa-envelope" aria-hidden="true"></i> Email</h2>
          <p>Hamza_ta7@hotmail.com</p>

          <ul>
            <li>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </li>
          </ul>
        </div>
        <div class="contact-in">
          <h1>Send a Message</h1>
          <form>
            <input
              type="text"  id="name"
              placeholder="Full Name"
              class="contact-in-input"
            />
            <input type="email" id="email" placeholder="Email" class="contact-in-input" />
            <input type="text" id="subject" placeholder="Subject" class="contact-in-input" />
            <textarea id="body"
              placeholder="Message"
              class="contact-in-textarea"
            ></textarea>
            <input type="button" onclick="sendEmail()" value="SUBMIT" class="contact-in-btn" />
          </form>
        </div>
      </div>
    </section>
    <footer>
      <div class="text-footer">
        <p>© 2021 Penta Dragon All rights reserved.</p>
      </div>
    </footer>
    <a href="#" class="to-top">
      <i class="fas fa-chevron-up"></i>
    </a>
    <script type="text/javascript">
function sendEmail() {
    var name = $("#name");
    var email = $("#email");
    var subject = $("#subject");
    var body = $("#body");

    if (
        isNotEmpty(name) &&
        isNotEmpty(email) &&
        isNotEmpty(subject) &&
        isNotEmpty(body)
    ) {
        $.ajax({
            url: "sendEmail.php",
            method: "POST",
            dataType: "json",
            data: {
                name: name.val(),
                email: email.val(),
                subject: subject.val(),
                body: body.val(),
            },
            success: function(response) {
                if (response.status == "success") alert("Email Has Been Sent!");
                else {
                    alert("Please Try Again!");
                    console.log(response);
                }
            },
        });
    }
}

function isNotEmpty(caller) {
    if (caller.val() == "") {
        caller.css("border", "1px solid red");
        return false;
    } else caller.css("border", "");

    return true;
}
</script>
    <script>
      var tl = gsap.timeline();
      //sequenced one-after-the-other
      tl.to(".myname", { duration: 4, x: 200 }); //notice that there's no semicolon!
    </script>
    <script>
      TweenMax.to(".overlay h1", 2, {
        opacity: 0,
        y: -60,
        ease: Expo.easeInOut,
      });

      TweenMax.to(".overlay span", 2, {
        delay: 0.3,
        opacity: 0,
        y: -60,
        ease: Expo.easeInOut,
      });

      TweenMax.to(".overlay", 2, {
        delay: 1,
        top: "-100%",
        ease: Expo.easeInOut,
      });
      tl = new TimelineMax({ paused: true });
    </script>
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <!-- Mixitup js -->
    <script src="assets/js/mixitup.min.js" type="text/javascript"></script>
    <!-- Active js -->
    <script src="assets/js/active.js" type="text/javascript"></script>
  </body>
  <!--Script-->
</html>
