<link rel="stylesheet" href="./assets/css/navStyle.css">
<!--
<section class="top-bar">
    <div class="top-bar-container">
        <div class="social-icons-wrapper">
            <a href="#" class="social-icon"> <i class="fa fa-twitter"></i> </a>
            <a href="#" class="social-icon"> <i class="fa fa-facebook"></i> </a>
            <a href="#" class="social-icon"> <i class="fa fa-linkedin"></i> </a>
            <a href="#" class="social-icon"> <i class="fa fa-instagram"></i> </a>
        </div>
        <div class="contact-wrapper">
            <a href="#" class="contact-items"> <i class="fa fa-phone"></i> <span>+91 990 9211 234</span> </a>
            <a href="#" class="contact-items"> <i class="fa fa-envelope"></i> <span>supportlathex@gmail.com</span>  </a>
        </div>
    </div>
</section> -->
<nav class="nav-bar">
    <div class="nav-container">
        <div class="logo-wrapper">
            <a href="index.php">
                <h1 class="nav-logo" id="nav-logo">Lathex <span id="hidden-logo">Mechanical Solutions</span> </h1>
            </a>
        </div>
        <div class="menu-wrapper" id="menu-wrapper">
            <ul class="menu">
                <li> <a href="index.php" class="menu-item">HOME</a> </li>
                <li> <a href="company.php" class="menu-item">COMPANY</a> </li>

                <li class="dropdown">
                    <a class="menu-item dropbtn">REQUEST <i class="fa fa-angle-down"></i> </a>
                    <div class="dropdown-content">
                        <a href="request_brochure.php">Brochure</a>
                        <a href="join_us.php">Join us</a>
                    </div>
                </li>

                <li> <a href="services.php" class="menu-item">SERVICES</a> </li>
                <li> <a href="contact.php" class="menu-item">CONTACT</a> </li>
            </ul>
        </div>
        <div class="mobile-menu-hamburger" id="mobile-menu-hamburger">
            <a id="open-bars" onclick="showMobile()"> <i class="fa fa-bars"></i> </a>
            <a id="close-button" onclick="hideMobile()"> <i class="fa fa-close"></i> </a>
        </div>
    </div>
</nav>


<div class="mobile-menu-wrapper" id="mobile-menu-wrapper">
    <ul class="mobile-menu">
        <li> <a href="index.php" class="mobile-menu-item">HOME</a> </li>
        <li> <a href="company.php" class="mobile-menu-item">COMPANY</a> </li>

        <li class="dropdown">
            <a class="menu-menu-item dropbtn">REQUEST <i class="fa fa-angle-down"></i> </a>
            <div class="dropdown-content">
                <a href="request_brochure.php">Brochure</a>
                <a href="join_us.php">Join us</a>
            </div>
        </li>

        <li> <a href="services.php" class="mobile-menu-item">SERVICES</a> </li>
        <li> <a href="contact" class="mobile-menu-item">CONTACT</a> </li>
    </ul>
    <p class="powerd-text">Designed by <span>STPDNP</span> </p>
</div>
<script src="../assets/js/main.js" charset="utf-8"></script>
