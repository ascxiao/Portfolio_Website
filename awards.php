<html lang="en">
<head>
    <?php
        include "variables.php";
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $awards ?></title>
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
            <h2><?= $awards ?></h2>
            <p>This section shows my awards and achievement in recent years.</p>
        </div>

        <div id = "awards">
            <div id = "usls">
                <br>
                    <div id = "cde">
                        <h3>Corps d'Elite - USLS</h3>
                        <p>The Corps d'Elite is the prestigious annual awarding event of the Office of Student <br>Affairs of USLS in finding the best of the best students in various category.</p>
                        <hr>
                            <ul>
                                <li>
                                    <strong>Most Outstanding Student in Visual Arts Awardee 2024</strong><br>
                                    <img src="./assets/awards/cdeVis.jpg" alt="CDE Visual Arts">
                                </li>
                                <li>
                                    <strong>Most Outstanding Student in Print Arts Finalist 2023</strong><br>
                                    <img src="./assets/awards/cdePrint.jpg" alt="CDE Print Arts">
                                </li>
                                <hr>
                            </ul>
                    </div>

                    <div id = "laurier">
                        <h3>Laurier De La Salle - Liceo De La Salle</h3>
                        <p>The Laurier De La Salle is the annual awarding event of Liceo de La Salle <br>in finding the excelling students in various fields.</p>
                        <hr>
                            <ul>
                                <li><strong>Most Outstanding Student in Culture and Arts Awardee 2022</strong><br></li>
                                <li><strong>Most Outstanding Club President Awardee 2022</strong></li>
                                <li><strong>Most Outstanding Club Member Nominee 2022</strong></li>
                                <img src="./assets/awards/laurier.jpg" alt="Laurier">
                                <hr>
                            </ul>
                    </div>

                    <div id = "google">
                        <h3>GDSC - Google Awards</h3>
                        <p>These accolades honor outstanding individuals who have demonstrated exceptional skills and qualities in various aspects of the tech industry. </p>
                        <hr>
                            <ul>
                                <li><strong>Leader Excellence Award Nominee, Google Awards (2023)</strong></li>
                                <li><strong>Role Model of the Year Nominee, Google Awards (2023)</strong></li>
                                <li><strong>Google Fellow of the Year Nominee, Google Awards (2023)</strong></li>
                                <li><strong>Artist of the Year Nominee, Google Awards (2023)</strong></li>
                                <li><strong>Leader of the Year Nominee, Google Awards (2023)</strong></li>
                                <hr>
                            </ul>
                    </div>
                    
                    <div id = "spectrum">
                        <h3>The Spectrum - Truth Beyond Knowing</h3>
                        <p>Truth Beyond Knowing (TBK) is an annual journalism seminar and workshop hosted by The Spectrum that is open to all junior <br>and senior high school publications in Bacolod City, as well as invited college publications from the University of St. La Salle - Bacolod.  </p>
                        <hr>
                            <ul>
                                <li><strong>Promising Editorial Cartoonist 2022</strong></li>
                                <hr>
                            </ul>
                    </div>
            </div> 
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