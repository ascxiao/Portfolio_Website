<html lang="en">
    <head>
        <?php include "variables.php"?>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php echo $homepage_title; ?></title>

        <meta name="description" content="">
        <meta name="author" content="Carlos Valderrama">

        <link rel="icon" href="./assets/icon-transparent.png"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://unpkg.com/scrollreveal"></script>
        <script>ScrollReveal({ reset: true });</script>

        <link href = "style.css" rel = "stylesheet">

        <?php include "./assets/fonts.php"?>

        <style><?php include ("./assets/fonts.css")?></style>

    </head>
    <body>
        <!-- <main class = "test"> -->
            <div class="row no-gutters m-0 p-0">
                <div class="col-xl-2 col-12 p-0">
                    <?php include('pages/menu.php'); ?>
                </div>

                <div class="col-xl-10 col-12 m-0">
                    <div class="content_container" id = "landing_page">
                        <?php include('pages/homepage/welcome_greetings.php')?>

                        <div class="row">
                            <div class = "content_container" style = "background-color: #4e6151;" id = "about_me">
                                <div class = "col-12" height = "100%">
                                    <?php include('pages/homepage/about_me.php'); ?>
                                </div>
                            </div>
                        </div>

                        
                        <div class="row">
                            <div class = "content_container" id = "contact_me">
                                <div class = "col-12" height = "100%">
                                    <?php include('pages/homepage/contact_me.php'); ?>
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
            </div>

    
        <script src="./ie-emulation-modes-warning.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src = "script.js"></script>
        <script>
            // ScrollReveal().reveal('.content_container');

            // const scrollRevealOption = {
            //     distance: "50px",
            //     origin: "bottom",
            //     duration: 1000,
            // };

            // ScrollReveal().reveal(".swirl", {
            //     ...scrollRevealOption,
            //     origin: "right",
            // });
        </script>
    </body>
</html>