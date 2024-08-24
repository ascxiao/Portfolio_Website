<html lang="en">

<head>
    <?php
    include "variables.php";
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $projects ?> </title>
</head>

<body>
    <header id="top">
            <div class="left">
                <a href = "index.php"><img src="./assets/icon.png" alt="Kaluroos Linnaeus Logo"></a>
                <div class="titleLogo">
                    <h1><?php echo $title; ?></h1>
                    <h3>Portfolio of <?php echo $name; ?></h3>
                    <p>Click the logo to go back to homepage</p>
                </div>
            </div>

            <div class="right">
                <a href="projects.php"><?php echo $projects; ?> |</a>
                <a href="certificates.php"><?php echo $certificates; ?> |</a>
                <a href="awards.php"><?php echo $awards; ?> |</a>
                <a href="#contact"><?php echo $contacts; ?> <a>
            </div>
            <hr>
    </header>

    <div id = "content">
        <div id = "description">
            <h2><?= $projects ?></h2>
                <p>This is a collection of all projects that I've initiated as well as those that I'm involved with.</p>
                <p>This collection ranges from simple HTML/CSS/JavaScript projects, UI/UX case studies, game concepts, to actual games.</p>
            <br>
        </div>

        <div id = "html projects">
            <h3>HTML/CSS/JavaScript</h3>
                <ul>
                <hr>
                    <li>
                        <strong>Digital Clock </strong><br>
                        This is a simple digital clock made in HTML/CSS/JavaScript <br>
                        <img src = "./assets/digital clock.png" alt="Digital Clock">
                    </li>

                    <li>
                        <strong>Stopwatch</strong><br>
                        This is a simple stopwatch with the play, stop, and reset functionality <br>
                        <img src = "./assets/stopwatch.png" alt = "Stopwatch">
                    </li>

                    <li>
                        <strong>Temperature Converter</strong> <br>
                        This is a temperature converter of Celcius and Fahrenheit. <br>
                        <img src = "./assets/temperature converter.png" alt= "Temperature Converter">
                    </li>
                <hr>
                </ul>
            <br>
        </div>
        
        <div id = "ux projects">
            <h3>UI/UX Design</h3>
                <ul>
                <hr>
                    <li>
                        <strong>Library Mobile Management System</strong> <br>
                        A project for System Analysis and Design.
                        <ul>
                            <li><img src="./assets/ui projects/library system/library1.png" alt="Library Screenshot 1"></li>
                            <li><img src="./assets/ui projects/library system/library2.png" alt="Library Screenshot 2"></li>
                            <li><img src="./assets/ui projects/library system/library3.png" alt="Library Screenshot 3"></li>                        
                        </ul>
                        <hr>
                    </li>

                    <li>
                        <strong>Pizza Ordering App</strong> <br>
                        A simple pizza ordering application.
                        <ul>
                            <li><img src="./assets/ui projects/pizza/pizza1.png" alt="Pizza Screenshot 1"></li>
                            <li><img src="./assets/ui projects/pizza/pizza2.png" alt="Pizza Screenshot 2"></li>
                        </ul>
                        <hr>
                    </li>
                    
                    <li>
                        <strong>Sagup Negros Website</strong> <br>
                        A website for Sagup Negros as a project for User Interaction and HCI.
                        <ul>
                            <li><img src="./assets/ui projects/sagup/sagup1.png" alt="Sagup Screenshot 1"></li>
                            <li><img src="./assets/ui projects/sagup/sagup2.png" alt="Sagup Screenshot 2"></li>
                            <li><img src="./assets/ui projects/sagup/sagup3.png" alt="Sagup Screenshot 3"></li>
                        </ul>
                        <hr>
                    </li>

                    <li>
                        <strong>Cocotel Refurbished Website</strong> <br>
                        A redesigning the official website of Cocotel Hotel and Resorts.
                        <ul>
                            <li><img src="./assets/ui projects/cocotel/cocotel1.png" alt="Cocotel Screenshot 1"></li>
                            <li><img src="./assets/ui projects/cocotel/cocotel2.png" alt="Cocotel Screenshot 2"></li>
                            <li><img src="./assets/ui projects/cocotel/cocotel3.png" alt="Cocotel Screenshot 3"></li>
                        </ul>
                    </li>         
                <hr>       
                </ul>
        </div>

        <div id = "game projects">
            <h3>Games</h3>
                <ul>
                    <hr>
                    <li>
                        <strong>La-um's Conquest</strong><br>
                        An adventure game that revolves around Filipino mythology and culture.
                        <ul>
                            <li><img src="./assets/game projects/laum/laum1.png" alt="La-um Screenshot 1"></li>
                            <li><img src="./assets/game projects/laum/laum2.png" alt="La-um Screenshot 2"><li>
                        </ul>
                        <hr>
                    </li>

                    <li>
                        <strong>The Diver</strong><br>
                        A game submission to itch.io game jam <br>
                        <a href = "https://itsgon.itch.io/the-diver" target = "_blank"><mark>Click here!!</mark></a>
                        <br>

                        <ul>
                            <li><img src="./assets/game projects/diver/diver2.gif" alt="Diver Game GIF"></li>
                            <li><img src="./assets/game projects/diver/diver1.png" alt="Diver Game Screenshot"></li>
                        </ul>
                    </li>

                </ul>
        </div>
    </div>

    <footer>
        <hr>

        <div>
            <div>
                <h3 id="contact"><?= $contacts ?></h3>
                <p>Contact me!</p>
            </div>

            <div>
                <ul>
                    <li>Email: cmcvldz231@gmail.com </li>
                    <li>Phone: (+63) 995 091 7183</li>
                    <li>Address: Mabini St., Barangay Zone 3, Cadiz City, Negros Occidental</li>
                </ul>
            </div>

            <a href="#top">Back to top</a>
        </div>
    </footer>
</body>

</html>