<?php include ("sessionCheck.php");?>

<html lang="en">

    <head>
        <?php include "variables.php"?>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php echo $gallery_title; ?></title>

        <meta name="description" content="">
        <meta name="author" content="Carlos Valderrama">

        <?php include('links.php')?>

    </head>

    <body class="d-flex flex-column">
        <div class="row no-gutters m-0 p-0">
            <div class="col-xl-2 col-12 p-0">
                <?php include('pages/menu.php') ?>
            </div>

            <div class="col-xl-10 col-12">
                <div class="content_container m-0 g-0 p-0">
                    <div class="row">
                        <div class = "content_container" id = "project_page">                    
                            <div class = "col-12" height = "100%">
                                <?php include('pages/gallery/gallery_landing.php')?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-flex align-items-center align-content-center justify-content-center">
                    <div class = "content_container" style = "background-color: #4e6151;" id = "volunteer">
                        <div class = "col-12" height = "100%">
                            <?php include('pages/gallery/volunteer.php'); ?>
                        </div>
                    </div>
                </div>

                <div class="row d-flex align-items-center align-content-center justify-content-center">
                    <div class = "content_container" id = "org">
                        <div class = "col-12" height = "100%">
                            <?php include('pages/gallery/org.php'); ?>
                        </div>
                    </div>
                </div>

                <div class="row m-0 p-0">
                    <div class="col-xl-12 col-12 m-0 p-0 g-0">
                        </div>
                            <footer class="footer">
                            <?php include('pages/footer.php'); ?> 
                            </footer>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        <?php include('script.php')?>
        <script src="./ie-emulation-modes-warning.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    </body>
</html>