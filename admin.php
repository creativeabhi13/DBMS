<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartment Management System</title>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!-- Font  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <!---carousel  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/admin.css">

</head>

<body>
    <div class="nav">
        <nav class="navbar">

            <div class="logo">
                <a href="index.php">Abhishek & Aditya Group</a>
            </div>

            <ul class="nav-links">

                <input type="checkbox" id="checkbox_toggle" />
                <label for="checkbox_toggle" class="hamburger">&#9776;</label>

                <div class="menu">
                    <li><a href="admin.php">ADDTENANT</a></li>
                    <li><a href="client.php">ADDDEPENDENT</a></li>
                    <li><a href="pricing.php">FINANCE</a></li>
                    <li class="services">
                        <a href="apartment.php">Apartment</a>
                  </li>
                    
                    <li><a href="#contact">Contact Us</a></li>
                </div>
    </div>
    </ul>
    </nav>
    </div>

    <hr style="color:red; display: block;    overflow: hidden; border-style: inset; border-width: 7px;">
    <h1 class="heading">Add New Tenant </h1>
    <hr style="color:red; display: block;    overflow: hidden; border-style: inset; border-width: 7px;">
<div class="col-md-6 col-12 mx-auto contact_form p-3">
                            <h1 class="heading">Enter New Tenant Details</h1>
                            <form action=connect.php method=post>
                                <div class="form-group">
                                    <label for="tname">Name</label>
                                    <input type="name" class="form-control" id="name" name="tname" placeholder="Enter the Tenant Name">
                                </div>
                                <div class="form-group">
                                    <label for="aptno">Apartment Number</label>
                                    <input type="number" class="form-control" id="name" name="aptno" placeholder="Enter The Apartment Number" >
                                </div>
                                <div class="form-group">
                                    <label for="tphone">Phone</label>
                                    <input type="number" class="form-control" id="email" name="tphone" placeholder="Enter The Phone Number">
                                </div>
                                <div class="form-group">
                                    <label for="type">Type</label>
                                    <input type="text" class="form-control" id="subject" name="type" placeholder="Enter The Type ">
                                </div>
                                <div class="form-group">
                                    <label for="block">Block</label>
                                    <input type="number" class="form-control" id="subject" name="block" placeholder="Enter The Block">
                                </div>
                                <div class="form-group">
                                    <label for="rent">Rent</label>
                                    <input type="text" class="form-control" id="subject" name="rent" placeholder="Enter The Rent ">
                                </div>
                                <div class="form-group">
                                    <label for="date">Date (DD-MM-YYYY</label>
                                    <input type="text" class="form-control" id="subject" name="date" placeholder="Enter The Date(DD-MM-YYYY) ">
                                </div>
                                <button>Submit</button>
                            </form>
                        </div>





    <!-- Contact  -->
    <section id="contact">

        <hr style="color:red; display: block;    overflow: hidden; border-style: inset; border-width: 7px;">
        <h1 class="heading">Contact Us</h1>
        <hr style="color:red; display: block;    overflow: hidden; border-style: inset; border-width: 7px;">

        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-md-12 col-12 mx-auto">
                    <div class="row">
                        <div class="col-md-6 col-12 mx-auto">
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                                        marginheight="0" marginwidth="0"
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14306.47724495984!2d84.1872534!3d26.3064385!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1ac8d21b370de87d!2sCreativeabhi13!5e0!3m2!1sen!2sin!4v1635618923096!5m2!1sen!2sin"></iframe>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 mx-auto contact_form p-3">
                            <h1 class="heading">Let us know</h1>
                            <form action=connect3.php method=post>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="name" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter The Subject">
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" cols="30" rows="10"
                                        name="message" placeholder="Enter The Message"></textarea>
                                </div>
                               <a href="admin.php"><button>Submit</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
    <!--footer-->
    <footer>
        <section id="footer">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-10 col-11 mx-auto">
                        <div class="row text-center">
                            <div class="col-md-4 col-11">
                                <h5>Office Address</h5>
                                <ul>
                                    <li>Abhishek&AdityaGroup</li>
                                    <li>3516/3517 80 Feet Road</li>
                                    <li>BENGALURU KARNATAKA</li>
                                    <li>INDIA 560062</li>

                                </ul>
                            </div>
                            <div class="col-md-4 col-11">
                                <h5>Follow US</h5>
                                <ul>
                                    <a href="https://www.facebook.com/creativeabhi13" target="blank">
                                        <img src="image/fb.png" width="30px" height="30px" alt="">
                                    </a>
                                    <a href="https://www.instagram.com/creativeabhi13" target="blank">
                                        <img src="image/insta.png" width="30px" height="30px" alt="">
                                    </a>
                                    <a href="https://www.youtube.com/creativeabhi13" target="blank">
                                        <img src="image/youtube.png" width="40px" height="40px" alt="">
                                    </a>
                                    <a href="https://www.linkedin.com/in/creativeabhi13/" target="blank">
                                        <img src="image/linkedin.png" width="40px" height="40px" alt="">
                                    </a>
                                    <a href="https://wa.me/+918603944898" target="blank">
                                        <img src="image/wha.png" width="40px" height="40px" alt="">
                                    </a>
                                </ul>
                            </div>
                            <div class="col-md-4 col-11">
                                <h5>Contact US</h5>
                                <ul>
                                    <li>+91-8603944898</li>
                                    <li>Abhishek&AdityaGroup@skype</li>
                                    <li>enquiry@Abhishek&AdityaGroup.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <h2> &copy; 2021 Copyright All Right Reserved By <strong>
                        <span>&#169;Abhishek&AdityaGroup </span>
                    </strong>
                </h2>
            </div>
            <div class="credits">
                <h3> Designed By <a href="https://en.wikipedia.org/wiki/India"
                        style="text-decoration: none; color:white;">
                        INDIA </a>

                </h3>
            </div>
        </section>
    </footer>

    <script src="/index.js"></script>
</body>
<style>
  .form-group{
    font-weight:bold;
    font-style:sans-serif;
  }
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
hr {
  display: block;
  margin-before: 0.5em;
  margin-after: 0.5em;
  margin-start: auto;
  margin-end: auto;
  overflow: hidden;
  border-style: inset;
  border-width: 1px;
}
body {
  font-family: cursive;
}
a {
  text-decoration: none;
}
li {
  list-style: none;
}
.heading {
  text-decoration: none;
  font-size: 3.5rem;
  font-family: "Rubik", sans-serif;
  font-weight: 600;
  text-align: center;
}
.navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 1920px;
  height: 100px;
  text-decoration: none;
  background-color: teal;
  color: #fff;
}
.nav-links a {
  color: #fff;
}

.logo a {
  font-size: 32px;
  color: white;
}
.logo a:hover {
  background-color: black;
  border-radius: 5px;
  transition: 0.3s ease;
  text-decoration: none;
}
.menu {
  display: flex;
  gap: 1em;
  font-size: 18px;
  justify-content: space-between;
  padding: 20px;
  text-decoration: none;
}
.menu li:hover {
  background-color: black;
  border-radius: 5px;
  transition: 0.3s ease;
  text-decoration: none;
}

.menu li {
  padding: 5px 14px;
}

.services {
  position: relative;
}
.dropdown {
  background-color: rgb(1, 139, 139);
  padding: 1rem;
  position: absolute;
  display: none;
  border-radius: 8px;
  top: 35px;
  text-decoration: none;
}
.dropdown li + li {
  margin-top: 10px;
}
.dropdown li {
  padding: 0.5em 1em;
  width: 8em;
  text-align: center;
  text-decoration: none;
}
.dropdown li:hover {
  background-color: black;
  text-decoration: none;
}
.services:hover .dropdown {
  display: block;
  text-decoration: none;
}

input[type="checkbox"] {
  display: none;
  text-decoration: none;
}

.hamburger {
  display: none;
  font-size: 24px;
  user-select: none;
}

@media (max-width: 768px) {
  .menu {
    display: 100%;
    position: absolute;
    background-color: teal;
    right: 0;
    left: 0;
    text-align: center;
    padding: 16px 0;
    text-decoration: none;
  }
  .heading {
    font-size: 3.5rem;
    font-family: "Rubik", sans-serif;
    font-weight: 600;
    text-align: center;
    text-decoration: none;
  }
  .navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 1920px;
    height: 100px;

    border: 1px solid blue;
    text-decoration: none;
    background-color: teal;
    color: #fff;
  }
  .menu li:hover {
    display: inline-block;
    background-color: #4c9e9e;
    transition: 0.3s ease;
    text-decoration: none;
  }
  .menu li + li {
    margin-top: 12px;
  }
  input[type="checkbox"]:checked ~ .menu {
    display: block;
  }
  .hamburger {
    display: block;
  }
  .dropdown {
    left: 50%;
    top: 30px;
    transform: translateX(35%);
  }
  .dropdown li:hover {
    background-color: #4c9e9e;
  }
}

/*CONTACT US*/
.mapouter {
  position: relative;
  text-align: right;
  width: 100%;
  height: 65rem;
}

.gmap_canvas {
  overflow: hidden;
  background: none;
  width: 100%;
  height: 65rem;
}

.gmap_iframe {
  height: 65rem;
}

#contact .contact_form {
  background: yellowgreen;
}

#contact form label {
  font-size: 1.6rem;
  font-weight: 600;
}

#contact form input,
#contact form textarea {
  font-size: 1.8rem;
  padding: 1rem 2rem;
  border: none;
  outline: none;
}

#contact form button {
  background: #82589f;
  color: #fff;
  font-weight: 600;
}
.copyright {
  text-align: center;
}
.credits {
  text-align: center;
  text-decoration: none;
}
#footer {
  color: white;
  background-color: black;
}
@media (max-width: 768px) {
  .card_container .social_icons #footer {
    left: 3.2rem;
  }
}

@media (max-width: 768px) {
  .card_container .social_icons {
    left: 15.2rem;
  }
}

@media (max-width: 768px) {
  .card_container:hover .social_icons {
    opacity: 0;
  }
}

@import url("https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Poppins&family=Reem+Kufi&family=Rubik&display=swap");

* {
  box-sizing: border-box;
}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active,
.dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {
    opacity: 0.4;
  }
  to {
    opacity: 1;
  }
}

@keyframes fade {
  from {
    opacity: 0.4;
  }
  to {
    opacity: 1;
  }
}

    </style>



</html>