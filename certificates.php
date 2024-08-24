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
        <div>
            <h2>Certificates</h2>
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
                            <strong>Lasallian Leaders Training Seminar 2024</strong> <br>
                            <p>Conducted on July 23-24, 2024. Training for upcoming Lasallian leaders for SY 2024-2025.</p>
                            <img src="./assets/certificates/llts.jpg" alt="LLTS Certificate">
                        </li>
                        <hr>
                    </ul>
            </div>
        </div>
    </div>


</body>
</html>