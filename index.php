<?php
$nameErr = "";
$noerror = true;
    if (isset($_REQUEST['submit'])) {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $message = $_REQUEST['message'];
        $to = "To: php2.department@gmail.com";
        $subject = "From Clients " . "$name";
        $headers = "From: " . "$email";
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed"; 
            $noerror = false;
        }

        if ($noerror) {
            mail($to, $subject, $message, $headers);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cypherox technologies pvt ltd</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" type="image/png" href="img/logo2.png"/>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


    <!-- Latest compiled JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
</head>
<body>

<!-- -------- Header -------- -->
<div class="menu">
    <div class="container">
        <div class="navbar">
            <div class="col-md-2">
                <a href="#home"><img src="img/logo2.png" alt="logo" class="logo"></a>
            </div>
            <div class="menu-right col-md-10 ">
                <a href="#home">HOME</a>
                <a href="#about">ABOUT</a>
                <a href="#work">WORK</a>
                <a href="#blog">BLOG</a>
                <a href="#contact">CONTACT</a>
            </div>
        </div>
    </div>
</div>
<div class="head" id="home">
    <div class="container">
        <div class="heading">
            <h2>Hi there! We are the new kids on the block <br> and we build awesome website and mobile apps.</h2>
        </div>
    
        <div class="head-btn">
            <a href="#contact" class="btn btn-warning center-aline">WORK WITH US!</a>
        </div>
    </div><br><br><br>
</div>
<!-- -------- //Header -------- -->


<!-- -------- Services -------- -->
<div class="services">
    <div class="container">
        <div class="heading">
            <h2>SERVICES WE PROVIDE</h2>
        </div>

        <div class="about-srvcs">
            <p>We are working with both individuals and businesses from all over the globe <br> to create awesome website and apps.</p>
        </div>
        
        <div class="col-md-3 col-sm-6">
            <div class="srvcs-img">
                <img src="img/branding1.png" alt="BRANDING">
            </div>
            <div class="srvcs-contain">
                <h4>BRANDING</h4>
                <p>Lorem ipsum dolor sit amet,<br> consectetuer adipiscing elit,<br> sed diam nonummy nibh.</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="srvcs-img">
                <img src="img/design.png" alt="DESIGN">
            </div>
            <div class="srvcs-contain">
                <h4>DESIGN</h4>
                <p>Sed ut perspiciatis unde <br> omnis iste natus error sit <br> voluptatem  </p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="srvcs-img">
                <img src="img/development.png" alt="DEVELOPMENT">
            </div>
            <div class="srvcs-contain">
                <h4>DEVELOPMENT</h4>
                <p>At vero eos et accusamus et <br> iusto odio dignissimos qui <br> blanditiis praesentium.</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="srvcs-img">
                <img src="img/rocket.png" alt="ROCKET SCIENCE">
            </div>
            <div class="srvcs-contain">
                <h4>ROCKET SCIENCE</h4>
                <p>Et harum quidem rerum est <br> et expedita distinctio. Nam <br> libero tempore.</p>
            </div>
        </div>
    </div> <br><br><br>
</div>
<!-- -------- //Services -------- -->


<!-- -------- Team ---------- -->
<div class="team" id="about">
    <div class="container">
        <div class="heading-bk">
            <h2 class="bk-heading">MEET OUR BEAUTIFUL TEAM</h2>
        </div>
        <div class="about-team">
            <p>We are a small team of designers and developers, who help brands with big ideas.</p>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="team-img">
                <img src="img/p1.png" alt="">
            </div>
            <div class="team-contain">
                <div class="name">
                    <h4>ANNE HATHAWAY</h4>
                    <P>CEO / Marketing Guru</P>
                </div>
                <div>
                    <p>Lorem ipsum dolor sit amet, <br>consectetuer adipiscing elit, <br> sed diam nonummynibh <br> euismod tincidunt ut laoreet <br> dolore magna.</p>
                </div>
                <div class="social-media">
                    <a href=""> <i class="fa fa-facebook"></i></a>
                    <a href=""> <i class="fa fa-twitter"></i></a>
                    <a href=""> <i class="fa fa-linkedin"></i></a>
                    <a href=""> <i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="team-img">
                <img src="img/p1.png" alt="">
            </div>
            <div class="team-contain">
                <div class="name">
                    <h4>ANNE HATHAWAY</h4>
                    <P>CEO / Marketing Guru</P>
                </div>
                <div>
                    <p>Lorem ipsum dolor sit amet, <br>consectetuer adipiscing elit, <br> sed diam nonummynibh <br> euismod tincidunt ut laoreet <br> dolore magna.</p>
                </div>
                <div class="social-media">
                    <a href=""> <i class="fa fa-facebook"></i></a>
                    <a href=""> <i class="fa fa-twitter"></i></a>
                    <a href=""> <i class="fa fa-linkedin"></i></a>
                    <a href=""> <i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="team-img">
                <img src="img/p1.png" alt="">
            </div>
            <div class="team-contain">
                <div class="name">
                    <h4>ANNE HATHAWAY</h4>
                    <P>CEO / Marketing Guru</P>
                </div>
                <div>
                    <p>Lorem ipsum dolor sit amet, <br>consectetuer adipiscing elit, <br> sed diam nonummynibh <br> euismod tincidunt ut laoreet <br> dolore magna.</p>
                </div>
                <div class="social-media">
                    <a href=""> <i class="fa fa-facebook"></i></a>
                    <a href=""> <i class="fa fa-twitter"></i></a>
                    <a href=""> <i class="fa fa-linkedin"></i></a>
                    <a href=""> <i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="team-img">
                <img src="img/p1.png" alt="">
            </div>
            <div class="team-contain">
                <div class="name">
                    <h4>ANNE HATHAWAY</h4>
                    <P>CEO / Marketing Guru</P>
                </div>
                <div>
                    <p>Lorem ipsum dolor sit amet, <br>consectetuer adipiscing elit, <br> sed diam nonummynibh <br> euismod tincidunt ut laoreet <br> dolore magna.</p>
                </div>
                <div class="social-media">
                    <a href="#"> <i class="fa fa-facebook"></i></a>
                    <a href="#"> <i class="fa fa-twitter"></i></a>
                    <a href="#"> <i class="fa fa-linkedin"></i></a>
                    <a href="#"> <i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div><br><br><br>
</div>
<!-- -------- //Team ---------- -->


<!-- Skills -->
<div class="skills" id="work">
    <div class="container">
        <div class="heading-skills">
            <h2 class="bk-heading">WE GOT SKILLS!</h2>
        </div>
        <div class="about-skills">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
</div>
<!--  //skills -->


<!-- Protfolio -->
<div class="protfolio">
    <div class="container">
        <div class="heading-protfolio">
            <h2 class="bk-heading">OUR PORTFOLIO</h2>
        </div>
        <div class="about-protfolio">
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet <br> consectetur, adipisci velit, sed quia non numquam</p>
        </div>
        <div class="tab">
            <a href="#">ALL</a>
            <a href="#web">WEB</a>
            <a href="#apps">APPS</a>
            <a href="#icon">ICONS</a>
        </div>
        <div class="protfolio-img">
            <div class="" id="web">
                <div class="col-md-6 col-sm-12" id="icon">
                    <div class="image">
                        <img src="img/img3.png" alt="#">
                    </div>
                    <div class="detail">
                        <p>Isometric Perspective Mock-Up</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="image">
                        <img src="img/img3.png" alt="#">
                    </div>
                    <div class="detail">
                        <p>Time Zone App UI</p>
                    </div>
                </div>
            </div>
            <div class="" id="apps">
                <div class="col-md-6 col-sm-12" id="icon">
                    <div class="image">
                        <img src="img/img3.png" alt="#">
                    </div>
                    <div class="detail">
                        <p>VIRO MEDIA PLAYERS UI</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" id="icon">
                    <div class="image">
                        <img src="img/img3.png" alt="#">
                    </div>
                    <div class="detail">
                        <p>BLOG MAGAZINE FLAT UI KIT</p>
                    </div>
                </div>
            </div>
            <div class="protfolio-btn">
                <button class="btn btn-success center-aline">LOAD MORE PROJECTS</button>
            </div>
        </div>
    </div><br><br><br>
</div>
<!-- //Protfolio -->


<!-- about-us -->
<div class="about-us" id="about">
    <div class="container">
        <div class="heading">
            <h2>WHAT POEPLE SAY ABOUT US</h2>
        </div>
        <div class="about-p">
            <p>Our clients love US!</p>
        </div>
        <div class="clients">
            <div class="col-md-6 col-sm-12">
            <div class="clnts">
                <div class="col-md-3">
                    <div class="client-img"><img src="img/p1.png" alt=""></div>
                </div>
                <div class="col-md-9">
                    <div class="clnt-say">
                        <q>Nullam dapibus blandit orci, viverra <br> gravida dui lobortis eget. Maecenas <br> fringilla urna eu nisl scelerisque.</q>
                    </div>
                    <div class="clnt-name">
                        <h4>CHANEL IMAN</h4>
                        <P>CEO of Pinterest</P>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-6 col-sm-12">
            <div class="clnts">
                <div class="col-md-3">
                    <div class="client-img"><img src="img/p1.png" alt=""></div>
                </div>
                <div class="col-md-9">
                    <div class="clnt-say">
                        <q>Nullam dapibus blandit orci, viverra <br> gravida dui lobortis eget. Maecenas <br> fringilla urna eu nisl scelerisque.</q>
                    </div>
                    <div class="clnt-name">
                        <h4>CHANEL IMAN</h4>
                        <P>CEO of Pinterest</P>
                   </div>
                </div>
            </div>
            </div>
            <div class="col-md-6 col-sm-12">
            <div class="clnts">
                <div class="col-md-3">
                    <div class="client-img"><img src="img/p1.png" alt=""></div>
                </div>
                <div class="col-md-9">
                    <div class="clnt-say">
                        <q>Nullam dapibus blandit orci, viverra <br> gravida dui lobortis eget. Maecenas <br> fringilla urna eu nisl scelerisque.</q>
                    </div>
                    <div class="clnt-name">
                        <h4>CHANEL IMAN</h4>
                        <P>CEO of Pinterest</P>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-6 col-sm-12">
            <div class="clnts">
                <div class="col-md-3">
                    <div class="client-img"><img src="img/p1.png" alt=""></div>
                </div>
                <div class="col-md-9">
                    <div class="clnt-say">
                        <q>Nullam dapibus blandit orci, viverra <br> gravida dui lobortis eget. Maecenas <br> fringilla urna eu nisl scelerisque.</q>
                    </div>
                    <div class="clnt-name">
                        <h4>CHANEL IMAN</h4>
                        <P>CEO of Pinterest</P>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div><br><br><br>
</div>
<!-- //about-us -->


<!-- contact -->
<div class="contact" id="contact">
    <div class="container">
        <div class="heading">
            <h2>GET IN TOUCH</h2>
        </div>
        <div class="contact-p">
            <p>1600 Pennsylvania Ave NW, Washington, DC 20500, United States of America. Tel: (202) 456-1111</p>
        </div>
        <div class="form form-group">
            <form action="" method="post">
                <div class="row"><div class="col-md-6 col-sm-12">
                    <input type="text" name="name" placeholder="Your Name*" class="form-control" required>
                </div>
                <div class="col-md-6 col-sm-12">
                    <input type="email" name="email" placeholder="Your Email*" class="form-control" required>
                </div></div><br>
                <div class="row"><div class="col-md-12 col-sm-12">
                    <textarea name="message" placeholder="Your Mesasage*" rows="6" class="form-control" required></textarea>
                </div></div><br>
                <div class="row">
                    <center><input type="submit" name="submit" value="SEND MESSAGE" class="btn btn-primary"></center>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- //contact -->


<!-- footer -->
<div class="footer">
    <div class="link">
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>
        <a href="#">Google+</a>
        <a href="#">Linkedin</a>
        <a href="#">Behance</a>
        <a href="#">Dribbble</a>
        <a href="#">GitHub</a>
    </div>
</div>
<!-- //footer -->
</body>
</html>