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

<body class="d-flex flex-column" style="overflow-x: hidden; margin: 0">

    <main class="container-fluid m-0 p-0">

            <div class="row m-0 p-0">
                <div class="col-lg-3 col-12 m-0 p-0">
                    <?php include('menu.php'); ?>
                </div>
                <div class="col-lg-9 col-12 m-0 p-0 g-0">
                    <div class="flex-grow-1 p-3 " style = "width: 100%">
                        <div class = "header_title">
                            <h1>Hello, (visitor name)! Welcome to my portfolio!</h1>
                        </div>

                        <div class = "carlos-image">
                            <img src="./assets/photos/swirls/sprout.png" alt="sprout" class="swirl"> 
                            <img src="./assets/photos/swirls/swirl_3.png" alt="swirl3" class="swirl"> 
                            <img src="./assets/photos/swirls/swirl_2.png" alt="swirl2" class="swirl"> 
                            <img src="./assets/photos/swirls/swirl_1.png" alt="swirl1" class="swirl">
                            <img src="./assets/photos/self_picture.png" alt="header" class = "carlos">
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