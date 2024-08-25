<html lang="en">
<head>
    <?php
    include "variables.php";
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $certificates ?></title>
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
            <h2><?= $certificates ?></h2>
            <p>This section shows my official certifications through the years</p>
            <br>
        </div>

        <div id = "certificates">
            <div id = "usls">
                <h3>University of St. La Salle</h3>
                <hr>
                    <ul>
                        <li>
                            <strong>Lasallian Leaders Training Seminar 2024</strong> <br>
                            <p>Conducted on July 23-24, 2024. Training for upcoming Lasallian leaders for SY 2024-2025.</p>
                            <img src="./assets/certificates/llts.jpg" alt="LLTS Certificate">
                        </li>
                        <hr>
                    </ul>
            </div>

            <div id = "google">
                <h3>Google</h3>
                <hr>
                    <ul>
                        <li>
                            <strong>Google UX Design</strong> <br>
                            <p>Received on July 1, 2024. Course teaching the foundation of UX research from diagramming, prototyping, and to UX job interviews.</p>
                            <img src="./assets/certificates/googleUX.jpeg" alt="Google UX Design Certificate">
                        </li>
                        <hr>
                    </ul>
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