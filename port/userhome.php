<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Site</title>
    <link rel="stylesheet" href="userhome.css">
    <script src="https://kit.fontawesome.com/a5b6877a9b.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="images/logo.png" class="logo">
                <ul>
                    <li><a href="#header">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#services">SERVICES</a></li>
                    <li><a href="#candidate">CANDIDATE</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    <li><a href="Profile.html">PROFILE</a></li>
                </ul>
            </nav>
            <div class="header-text">
                <P>
                <H1>WELCOME TO THE PORTFOLIO SITE</H1>
                </P>
                <h2><span>Where talent meets your qualificational needs.</span></h2>
            </div>
        </div>
    </div>
    <!----------about------------>
    <div id="about">
        <div class="container">
            <div class="row1">
                <div class="about-col-1">
                    <h1 class="sub-title">About</h1>
                    <p>
                    <h3>Welcome to the portfolio site,
                        <br> where we help you find a suitable candidate to match your qualificational needs.
                        <br>The site helps candidates display their porfolios and come in contact with new employers.
                    </h3>
                    </p>
                </div>
            </div>
        </div>
    </div>
       <!------------services---------->
       <div id="services">
        <div class="container">
            <h1 class="sub-title">Our Services</h1>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-users"></i>
                    <h2>UI/UX </h2>
                    <p>User interface (UI) and user experience (UX) are two words that you might hear mentioned
                        frequently in tech circles (and sometimes interchangeably).</p>
                </div>
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Web Development</h2>
                    <p>the work involved in developing a website for the Internet (World Wide Web) or an intranet (a
                        private network).</p>
                </div>
                <div>
                    <i class="fa-brands fa-slack"></i>
                    <h2>Digital Illustrations</h2>
                    <p>Digital illustration involves the use of digital tools to generate art directly from the artist's
                        hand, through an interface that translates that movement into a digital display. </p>
                </div>
                <div>
                    <i class="fa-solid fa-feather"></i>
                    <h2>Creative Writing </h2>
                    <p>Creative writing is a form of writing where creativity is at the forefront of its purpose through
                        using imagination, creativity, and innovation in order to tell a story through strong written
                        visuals with an emotional impact, like in poetry writing, short story writing, novel writing,
                        and more.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--candidate-->
    <div id="candidate">
        <div class="container">
            <h1 class="sub-title"> CANDIDATES</h1>
            <div class="candidatelist">
                <div class="candidate">
                    <img src="images/images 1.jpg">
                    <div class="layer">
                        <h3>candidate1 </h3>
                        <p>candidate info</p>
                        <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="candidate">
                    <img src="images/images3.png">
                    <div class="layer">
                        <h3>candidate2</h3>
                        <p>candidate info</p>
                        <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
            </div>
            <a href class="btn">See More</a>
        </div>
    </div>
    <!-- contact-->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">CONTACT ME</h1>
                    <p> <i class="fa-solid fa-paper-plane"></i>contact@example.com</p>
                    <p> <i class="fa-sharp fa-solid fa-square-phone"></i>0123456789</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.linkedin.com"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                    <a href="images/Ishanee_Kossambe_Resume_31-07-2022-22-06-27.pdf" download class="btn btn2">Download
                        ISHANEE'S CV</a>
                </div>
                <div class="contact-right">
                    <form>
                        <input type="text" name="Name" placeholder="Your Name" required>
                        <input type="email" name="Email" placeholder="Your Email" required>
                        <textarea name="Message" rows="6" placeholder="Your Message "></textarea>
                        <button type="submit" class="btn btn2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>