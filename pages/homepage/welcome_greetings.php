<style>
    .aboutme_button {
        position: relative;
        margin: 0;
        padding: 3em;
        -ms-transform: translateY(-50%);
        transform: translateY(-80%);
    }

    @media screen and (max-width: 1140px){
        .title-fs{
            font-size: 3em !important;
        } 
        
    }
</style>

<div class="row">
        <div class = "col-6 p-5">
            <div class = "welcome_container">
                    <div class = "header_title" style = "padding-left: 2em;">
                        <h1 class = "rubik-bold text-green title-fs"> welcome!</h1>
                    </div>

                    <div class = "greetings_container mb-5">
                        <p class = "inter-regular greetings text-green">
                            I'm 
                            <strong class = "md-fs"> Carlos Miguel C. Valderrama </strong>
                        </p>
                        <p class = " inter-regular greetings text-green">and welcome to my student portfolio, <strong class = "md-fs">[visitor_name]!</strong></p>
                    </div>

                    <div class = "aboutme_button">
                        <a href ="#about_me"><button type="button" class="btn btn-success btn-lg">Get to know me!</button></a>
                    </div>
                </div>
        </div>

        <div class="col-6 p-0">
                <?php include("pages/homepage/carlos_image.php")?>
        </div>
    </div>
