<html lang="en">

<head>
    <?php
    include "variables.php"
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title><?php echo $title; ?></title>
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

    <div id = "about me">
        <h2><?= $about ?></h2>
        <img src='.\assets\carlos podium.jpg' alt="Carlos Picture">
        <h3>Hi! My name is <?= $name ?> .</h3>

        <p>
            I am <?= $age ?> years old from the <?= $school ?>.<br>
            I am a <?= $yearLevel ?> student taking up <?= $course ?> with the student id <?= $id ?>. 
        </p>
        <hr>
    </div>

    <div id = "skills">
        <h4>Skills </h4>
        <ul>
            <li>Illustrating</li>
            <li>Project Management</li>
            <li>Programming</li>
            <li>UX Research</li>
            <li>Game Asset Creation</li>
            <li>Multimedia Arts</li>
            <li>Graphic Design</li>
        </ul>
        <hr>
    </div>

    <div id = "interests">
        <h4>Interests </h4>
        <ul>
            <li>Casual Gaming</li>
            <li>Biology</li>
            <li>Visual Arts</li>
        </ul>
        <hr>
    </div>

    <div id = "my work">
        <h3>Look at my work!</h3>
        <ul>
            <li><a href="projects.php"><?php echo $projects; ?></a></li>
            <li><a href="certificates.php"><?php echo $certificates; ?></a></li>
            <li><a href="awards.php"><?php echo $awards; ?></a></li>
        </ul>
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