<?php session_start(); ?>
<html lang="en">
    <head>
        <?php include "variables.php"?>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php echo $homepage_title; ?></title>

        <meta name="description" content="">
        <meta name="author" content="Carlos Valderrama">

        <?php include('links.php')?>

    </head>

    <body>
        <div class = "row" style = "background-color: #4e6151">
            <div class = "col-lg-6 col-12 overflow-hidden m-0 p-0 g-0">
                <div class = "image_container object-fit-cover" style = "background-color:#fafff6">
                    <img src = "assets/sprout.png">
                </div>  
            </div>

            <div class = "col-lg-6 col-12 d-flex flex-column align-items-center align-content-center justify-content-center m-0 p-0 g-0">
                <div class = "header_title">
                    <h1 class = "rubik-bold text-white lg-fs">growing...</h1>
                </div>       
                     
                <div class = "login_container">
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                        <div class="mb-3">
                            <label for="name1" class="form-label"><strong>Hi! What's your name?</strong></label>
                            <input type="text" class="form-control" id="nameID" name="firstname" placeholder="Enter your first name" required>
                            <div id="nameToolTip" class="form-text">We want to know what to call you!</div>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>

                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $_SESSION["firstname"] = $_POST["firstname"];

                    header("Location: index.php");
                    exit;
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>