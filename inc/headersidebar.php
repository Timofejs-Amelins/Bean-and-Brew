</head>
<!--close the head tag automatically for less code in other pages-->

<body>
    <!--navigation bar containing branding and responsive navigation, we are using tables for everything to align vertically to the middle-->
    <table id="Header">
        <tr>
        <!--brand image and name will take people to the homepage-->
        <td id="BrandImage">
            <a href="Home.php">
            <!--company image-->
                <img src="pix/logo.png" width="60%" />
            </a>
        </td>
        <td id="BrandName">
            <a href="Home.php" width="100%">
                Bean & Brew
            </a>
        </td>
        <!--navigation bar starts here, below is navigation buttons-->
        <td id="Navigation">
            <a href="Contact.php">
                Contact
            </a>
            <a href="Event.php">
                Event
            </a>
            <a href="About.php">
                About
            </a>
            <a href="Register.php">
                Register
            </a>
            <a href="Login.php">
                Login
            </a>
            </td>
            <!--more buttons on the bottom of the webpage-->
        </tr>
    </table>
    <!--div is the easiest way of ensuring the table inside renders content on the top of the div, #Lsidebar stores social media links to Timofej's Facebook, Twitter, and YouTube page-->
    <div id="Lsidebar">
        <table id="SidebarLinks">
            <!--Facebook image and link-->
            <tr id="Facebook">
                <td>
                    <a href="https://www.facebook.com/tima.amelins.1">
                    <!--this is svg image so width and height are set to 50%-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                    </a>
                </td>
                <td>
                    <!--the same href is used as link text-->
                    <a href="https://www.facebook.com/tima.amelins.1!">
                        Facebook
                    </a>
                </td>    
            </tr>
            <!--Twiiter/X image and link-->
            <tr id="Twitter">
                <td>
                    <a href="https://twitter.com/A95573Amelins">
                    <!--this is svg image so width and height are set to 50%-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                        </svg>
                    </a>
                </td>
                <td>
                    <!--the same href is used as link text-->
                    <a href="https://twitter.com/A95573Amelins">
                        Twitter
                    </a>
                </td>
            </tr>
            <!--YouTube image and link-->
            <tr id="Youtube">
                <td>
                    <a href="https://www.youtube.com/channel/UCxRate9u6-rxbZfAxZ4ZjtA">
                    <!--this is svg image so width and height are set to 50%-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                        </svg>
                    </a>
                </td>
                <td>
                    <!--the same href is used as link text-->
                    <a href="https://www.youtube.com/channel/UCxRate9u6-rxbZfAxZ4ZjtA">
                        YouTube
                    </a>
                </td>    
            </tr>
        </table>   
    </div>
