<div class="row">
    <div class = "col-6 p-5">
        <div class = "welcome_container">
            <div class = "header_title" style = "padding-left: 2em;">
                <h1 class = "rubik-bold text-green title-fs"> credentials</h1>
            </div>

            <div class = "greetings_container mb-5">
                <p class = "greetings text-green">
                    This is what I have learned and earned so far, <strong class = "md-fs"><?= $_SESSION["firstname"];?>!</strong>.
                    <br>
                    Select the buttons to navigate easily :3
                </p>
            </div>

            <div class = "navigation_buttons">
                <a href = "#education" data-toggle="tooltip" data-bs-animation="false" title="Education">
                    <button class="btn btn-primary round-button">
                        <i class="bi-book"></i>
                    </button>
                </a>

                <a href = "#achievements" data-toggle="tooltip" data-bs-animation="false" title="Achievements">
                    <button class="btn btn-primary round-button">
                        <i class="bi-trophy"></i>
                    </button>
                </a>

                <a href="#affiliations" data-toggle="tooltip" data-bs-animation="false" title="Affiliation">
                    <button class="btn btn-primary round-button">
                        <i class="bi bi-people"></i>
                    </button>
                </a>

                <a href="#certifications" data-toggle="tooltip" data-bs-animation="false" title="Certification">
                    <button class="btn btn-primary round-button">
                        <i class="bi bi-file-earmark-check"></i>
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="col-6 p-0 image_container">
        <img src = "assets/photos/decoration/doodle_book.png" class = "doodle">
    </div>
</div>
