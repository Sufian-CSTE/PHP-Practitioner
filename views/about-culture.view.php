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
        <a href="/about/culture" class="w3-bar-item w3-button w3-padding-large w3-black">
            <i class="fa fa-eye w3-xxlarge"></i>
            <p>PHOTOS</p>
        </a>
        <a href="/contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-envelope w3-xxlarge"></i>
            <p>CONTACT</p>
        </a>
    </nav>
    <!-- Page Content -->
    <div class="w3-padding-large" id="main">
        <!-- About Section -->
        <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
            <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
            <p class="w3-wide">Photography</p>
            <div class="w3-white">
                <div class="w3-dark-grey" style="height:28px;width:95%"></div>
            </div>
            <p class="w3-wide">Web Design</p>
            <div class="w3-white">
                <div class="w3-dark-grey" style="height:28px;width:85%"></div>
            </div>
            <p class="w3-wide">Photoshop</p>
            <div class="w3-white">
                <div class="w3-dark-grey" style="height:28px;width:80%"></div>
            </div>
            <br>
            <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
                <div class="w3-quarter w3-section">
                    <span class="w3-xlarge">11+</span>
                    <br> Partners
                </div>
                <div class="w3-quarter w3-section">
                    <span class="w3-xlarge">55+</span>
                    <br> Projects Done
                </div>
                <div class="w3-quarter w3-section">
                    <span class="w3-xlarge">89+</span>
                    <br> Happy Clients
                </div>
                <div class="w3-quarter w3-section">
                    <span class="w3-xlarge">150+</span>
                    <br> Meetings
                </div>
            </div>
            <!-- End About Section -->
        </div>
    </div>
</body>

</html>