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

    <main class="container-fluid">

            <div class="row">
            
                    <?php include('menu.php'); ?>
                

                <div class="col-9 d-flex flex-column ">
                    <div class="flex-grow-1 p-3" style = "width: 100%">
                        <header class="header_container">
                            <div class="header_image">
                                <img src="./assets/photos/self_picture.png" alt="header" width="512px" height="512px" class = "image">
                            </div>
                        </header>

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