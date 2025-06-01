<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="styles/home.css">
</head>
<body>
    
    <!-- Sticky Header-->
    <header>

        <div class="leftHeader">
            <div class="leftHeader-left">
                <p>Kven();</p>  
            </div>
            <div class="leftHeader-right">
                <button>
                    <img src="imgFolder/menu.png" alt="">
                </button>
            </div>

        </div>


        <nav>
            <table>
                <tr>
                    <td><a href="#">Home</a></td>
                    <td><a href="#">About</a></td>
                    <td><a href="#">Resume</a></td>
                    <td><a href="#">Portfolio</a></td>
                </tr>
            </table>
        </nav>

        <div class="rightHeader">
            <button><img src="imgFolder/25231.png" alt=""></button>
        </div>

    </header>



    <div class="modalContactContainer" id="modalContactContainer">

    <div class="modalContact">
        <div class="leftContact-container">
            <h1>Get in Touch </h1>
            <p>Have a project in mind or just want to say hello?<br>
            I'd love to hear from you.
            </p>
            <input type="text" name="" id="" placeholder="Enter your name" required>
            <input type="text" name="" id="" placeholder="Enter your email address" required>
            <textarea name="" id="" placeholder="Message..." required></textarea>
            <button class="send">Send</button>
            <button class="close" id="closeBtnwhite" onclick="closeModal()">Close</button>


        </div>

        <div class="rightContact-Container">
            <div class="closeBtn" id="closeBtn">
                <button id="closeBtn"><img src="imgFolder/close.png" alt=""></button>
            </div>
            <div class="imgContact">
                <img src="imgFolder/Layer 0 copy.png" alt="">
            </div>
            <div class="rightContact-info">

                <div class="infoContact">
                    <img src="imgFolder/gmail.png" alt="">
                    <p>kyldedelaria@icloud.com</p>
                </div>

                <div class="infoContact">
                    <img src="imgFolder/phone-call.png" alt="">
                    <p>639-960-903-9839</p>
                </div>

                <div class="infoContact">
                    <img src="imgFolder/maps-and-flags.png" alt="">
                    <p>Nueva Ecija, Philippines</p>
                </div>

                <div class="socialLinks">
                    <a href=""><img src="imgFolder/facebook (1).png" alt=""></a>
                    <a href=""><img src="imgFolder/social.png" alt=""></a>
                    <a href=""><img src="imgFolder/linkedin.png" alt=""></a>
                    <a href=""><img src="imgFolder/upwork.png" alt=""></a>
                </div>
            </div>


        </div>
    </div>

    </div>


    <!-- Fixed Position Contact Button -->
    <div class="contactBtn-container">
        
        <button id="showBtn">Contact Us</button>
    </div>

    <!-- Intro -->

    <div class="intro">
         <div class="introContainer">
            <div class="introleftPanel">

                <div class="introleftPanel-container">

                    <div class="introleftPanel-upper">
                    <p>Web Developer & <br>
                    Graphics Designer</p>
                    </div>

                    <div class="introleftPanel-middle">
                        <button>View Project</button>
                        <button>Resume</button>
                    </div>
                
                    <div class="introleftPanel-bottom">
                        <button><img src="imgFolder/socials/facebook (1).png" alt=""></button>
                        <button><img src="imgFolder/socials/social.png" alt=""></button>
                        <button><img src="imgFolder/socials/linkedin.png" alt=""></button>
                        <button><img src="imgFolder/socials/upwork.png" alt=""></button>
                    </div>

                </div>
                
            </div>

        <div class="introrightPanel">
            <div class="introrightPanel-middle">
                <img src="imgFolder/2x2.png" alt="">
            </div>
        </div>

        </div>
                <div class="learnMore-container">
                    <div>
                        <p>Learn more about me</p>
                    </div>
                    <div>
                        <img src="imgFolder/arrow.png" alt="">
                    </div>
                </div>
    </div>

    

    <script src="script.js" defer></script>

</body>
</html>