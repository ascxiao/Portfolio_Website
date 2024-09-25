<html lang="en">

<head>
    <?php
    include "variables.php"
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title; ?></title>

    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Change icon later -->
    <link rel="icon" href="./assets/favicon.ico"> 
    
    <link href = "style.css" rel = "stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<body>
    <?php include('menu.php')?>

  
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

    <script src="./ie-emulation-modes-warning.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>