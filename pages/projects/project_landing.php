<style>
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
                <h1 class = "rubik-bold text-green title-fs">projects</h1>
            </div>

            <div class = "greetings_container mb-5">
                <p class = "greetings text-green">
                    This is some of what I have done so far, <strong class = "md-fs"><?= $_SESSION["firstname"];?>!</strong>
                    <br>
                    Select the buttons to navigate easily :3
                </p>
            </div>

            <div class = "navigation_buttons">
                <a href = "#ui" data-toggle="tooltip" data-bs-animation="false" title="UX Design">
                    <button class="btn btn-primary round-button">
                        <i class="bi-grid-1x2"></i>
                    </button>
                </a>

                <a href = "#art" data-toggle="tooltip" data-bs-animation="false" title="Artworks">
                    <button class="btn btn-primary round-button">
                        <i class="bi-brush"></i>
                    </button>
                </a>

                <a href="#game" data-toggle="tooltip" data-bs-animation="false" title="Game Art and Development">
                    <button class="btn btn-primary round-button">
                        <i class="bi bi-controller"></i>
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="col-6 p-0 image_container">
        <img src = "assets/photos/decoration/doodle_check.png" class = "doodle">
    </div>
</div>
