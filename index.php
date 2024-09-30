<html lang="en">

<head>
    <?php include "variables.php"?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title; ?></title>

    <meta name="description" content="">
    <meta name="author" content="Carlos Valderrama">
    <!-- Change icon later -->
    <link rel="icon" href="./assets/icon-transparent.png"> 
    
    <link href = "style.css" rel = "stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<body class="d-flex flex-column" style="overflow-x: hidden; overflow-y:auto; margin: 0; height: auto">

    <main class="container-fluid m-0 p-0">

            <div class="row m-0 p-0">
                <div class="col-lg-2 col-12 m-0 p-0">
                    <?php include('menu.php'); ?>
                </div>

                <div class="col-lg-10 col-12 m-0 p-0 g-0">
                    <div class>
                        <div class="content_container">
                            <div class="row m-0">
                                <div class = "col-6">
                                    <div class = "header_title">
                                        <h1>Hello, (visitor name)!</h1>
                                        <p class = "greetings">I'm Carlos Miguel C. Valderrama</p>
                                        <p class = "greetings">and welcome to my student portfolio!</p>
                                    </div>
                                </div>

                                <div class="col-5">
                                    <div class = "carlos_image">
                                        <img src="./assets/photos/swirls/sprout.png" alt="sprout" class="swirl"> 
                                        <img src="./assets/photos/swirls/swirl_3.png" alt="swirl3" class="swirl"> 
                                        <img src="./assets/photos/swirls/swirl_2.png" alt="swirl2" class="swirl"> 
                                        <img src="./assets/photos/swirls/swirl_1.png" alt="swirl1" class="swirl">
                                        <img src="./assets/photos/self_picture.png" alt="header" class = "carlos">
                                    </div>
                                </div>
                            </div>
                        </div>

                                    <div class = "gradient_container">
                                        <div class = "gradient_divider"> </div>
                                    </div>
                                    
                        <div class="content_container">
                            <div class="row m-0">
                                PUT CONTENT HERE
                            </div>
                        </div>

                    </div>

                    <footer class="footer">
                    <?php include('footer.php'); ?> 
                    </footer>
                </div>
            </div>
    </main>
    

    <script src="./ie-emulation-modes-warning.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>