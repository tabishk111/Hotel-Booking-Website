<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" type="image/x-icon" href="Icon.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Contact Us</title>
</head>
<body>

    <!-- Navigation bar -->
    <nav>
        <img src="Logo.png" alt="" class="logo" height="70" width="auto">

        <input type="checkbox" id="hamburger-toggle">
        <label for="hamburger-toggle" class="hamburger">
            <i class="fas fa-bars" id="iconopen" onClick="buttonopenclose()"></i>
            <i class="fas fa-times" id="iconclose" onClick="buttonopenclose()"></i>
        </label>

        <ul class="nav__list">
            <li class="navbar__item"><a href="index.php" class="navbar__itemLink">Hotel</a></li>
            <li class="navbar__item"><a href="rooms.php" class="navbar__itemLink">Rooms</a></li>
            <li class="navbar__item"><a href="dining.php" class="navbar__itemLink">Dining</a></li>
            <li class="navbar__item"><a href="login.php" class="navbar__itemLink">Book Your Stay</a></li>
            <li class="navbar__item"><a href="contact.php" class="navbar__itemLink  active">Contact Us</a></li>
        </ul>
    </nav>

    <!-- Contact Image -->
    <img src="Images/carousel.jpeg" alt="" class="contact__image">

    <!-- Location -->
    <div class="offers">
        <h2 class="offers__heading">Contact Us</h2>
        <div class="rowcontact">
            <h1><span>City Palace - Heritage Hotel</span></h1>
            <h2><span>Udaipur (313001), Rajasthan INDIA</span></h2><br/>
            <h2><span>Phone</span> :- ( 91 ) - 151 - 2540207</h2>
            <h2><span>Fax</span> :- ( 91 ) - 151 - 2523963</h2>
            <h2><span>E-mail</span> :- info@citypalace.web.app</h2>
        </div>
    </div>

    <!-- Location -->
    <div class="offers">
        <h2 class="offers__heading">Location</h2>
        <div class="row">
            <iframe  id="googlemap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3628.3697555282356!2d73.68132221701492!3d24.576432343119166!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9257af76faeaab0e!2sCity%20Palace!5e0!3m2!1sen!2sin!4v1619080123297!5m2!1sen!2sin&zoom=15" width="95%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

    <!-- Foooter -->
    <div class="footer">

        <!-- Footer Logo -->
        <div class="footer__image">
            <a href="index.php" class="footer__link">
                <img src="Logo2.png" alt="City Palace Logo" class="footer__logo"/> 
                <img src="Images/design2.png" alt="Design" class="welcome__image">
            </a>
        </div>

        <!-- Social Media -->
        <ul class="footer__socialMedia">
            <li class="footer__socialMediaItems">
                <a href="" class="socialMedia__Links" target="_blank" rel="noreferrer">
                    <i class="fab fa-twitter fa-2x"></i>
                </a>
            </li>
            <li class="footer__socialMediaItems">
                <a href="" class="socialMedia__Links" target="_blank" rel="noreferrer">
                    <i class="fab fa-github fa-2x"></i>
                </a>
            </li>
            <li class="footer__socialMediaItems">
                <a href="" class="socialMedia__Links" target="_blank" rel="noreferrer">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
            </li>
            <li class="footer__socialMediaItems">
                <a href="" class="socialMedia__Links" target="_blank" rel="noreferrer">
                    <i class="fab fa-linkedin-in fa-2x"></i>
                </a>
            </li>
        </ul>

        <!-- Copyright Information -->
        <div class="copyright">
            <div class="copyright__info">
                © 2021 Copyright: 
                <a href="index.php" class="copyright__infoLink"> CityPalace</a>
            </div>
        </div>
    </div>

    <script src="index.js"></script>
</body>
</html>