<!DOCTYPE html>
<html>

<head>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif
        }

        .w3-row-padding img {
            margin-bottom: 12px
        }

        .w3-sidebar {
            width: 120px;
            background: #222
        }

        #main {
            margin-left: 120px
        }

        @media only screen and (max-width: 600px) {
            #main {
                margin-left: 0
            }
        }
    </style>
</head>

<body class="w3-black">
    <!-- Icon Bar (Sidebar - hidden on small screens) -->
    <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
        <!-- Avatar image in top left corner -->
        <img src="https://www.w3schools.com/w3images/man_smoke.jpg" style="width:100%">
        <a href="/" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>HOME</p>
        </a>
        <a href="/about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-user w3-xxlarge"></i>
            <p>ABOUT</p>
        </a>
        <a href="/about/culture" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-eye w3-xxlarge"></i>
            <p>Culture</p>
        </a>
        <a href="/contact" class="w3-bar-item w3-button w3-padding-large w3-black">
            <i class="fa fa-envelope w3-xxlarge"></i>
            <p>CONTACT</p>
        </a>
    </nav>
    <!-- Page Content -->
    <div class="w3-padding-large" id="main">
        <!-- Contact Section -->
        <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
            <h2 class="w3-text-light-grey">Contact Me</h2>
            <hr style="width:200px" class="w3-opacity">
            <div class="w3-section">
                <p>
                    <i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Chicago, US
                </p>
                <p>
                    <i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +00 151515
                </p>
                <p>
                    <i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Email: mail@mail.com
                </p>
            </div>
            <br>
            <p>Let's get in touch. Send me a message:</p>
            <form action="/action_page.php" target="_blank">
                <p>
                    <input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name">
                </p>
                <p>
                    <input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email">
                </p>
                <p>
                    <input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject">
                </p>
                <p>
                    <input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message">
                </p>
                <p>
                    <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                        <i class="fa fa-paper-plane"></i> SEND MESSAGE </button>
                </p>
            </form>
            <!-- End Contact Section -->
        </div>
    </div>
</body>

</html>