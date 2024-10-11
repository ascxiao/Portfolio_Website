<style> 
    .carousel-inner{
        border-radius: 24px !important;
    }
    
    .carousel_portrait {
        width: 280px;
        height: 480px;
    }  

    .carousel_landscape {
        width: 480px;
        height: 232px;
        border-radius: 24px;
    }  

    .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transform-origin: center;
        /* transform: translateX(-50%); */
        transition: 0.5s ease-in-out;
    }

    .carousel-caption{
        font-size: 0.8em;
        z-index: 1;
    }

    .carousel-item img:hover {
        transition: transform 0.5s ease-in-out;
        transform: scale(1.2);
    }

    .carousel-item img:not(hover) {
        transition: transform 1s 0.5s ease-in-out;
    }

    .carousel-item:after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 80%;
        background: linear-gradient(to top, rgba(52, 66, 54, 1),rgba(52, 66, 54, 0.7), rgba(52, 66, 54, 0));
        }

  @media screen and (max-width: 1140px) {

    .picture_container {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 10%;
        width: 100%;
        height:auto;
        transform-origin: center;
    }

  .content_picture {
        width: 256px;
        height: 256px;
        transform-origin: center;
        border-radius: 50%;
    }
    .about_title {
        position: relative;
        display: flex;
        justify-content: center;
        padding-right: 0;
        padding-bottom: 2em;
        }

    .about_text{
        display: flex;
        text-align: justify;
        padding: 3em;
        margin: 10%;
        }
   } 

</style>

<div class = "row">
  <div class = "col-12 d-flex flex-column align-items-center mt-5 pt-3">
    <div class = "header_title">
        <h1 class = "rubik-bold text-white lg-fs border-bottom">ui design</h1>
    </div>
  </div>
</div>

<div class = "row mt-2 " style = "padding-left: 7em">
    <div class = "col-xl-3 col-12 d-flex flex-column">
        <div id="carousel1" class="carousel slide carousel_portrait carousel1" data-bs-ride="false" style = "border-radius: 24px">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                        <img src="assets/photos/ui projects/library system/library1.png" class="d-block" alt="library1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Libary Management System</h5>
                        <p>Project in System Analysis and Design</p>
                    </div>
                </div>

                <div class="carousel-item">
                        <img src="assets/photos/ui projects/library system/library2.png" class="d-block w-100" alt="library2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Libary Management System</h5>
                        <p>Project in System Analysis and Design</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="assets/photos/ui projects/library system/library3.png" class="d-block w-100" alt="library3">
                <div class="carousel-caption d-none d-md-block">
                        <h5>Libary Management System</h5>
                        <p>Project in System Analysis and Design</p>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class = "col-xl-3 col-12 d-flex flex-column">
        <div id="carousel2" class="carousel slide carousel_portrait carousel2" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                        <img src="assets/photos/ui projects/pharmafetch/pharma1.png" class="d-block w-100" alt="pharma1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>PharmaFetch UI</h5>
                        <p>Project in Technopreneurship and DICT Start Up Challenge 9</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="assets/photos/ui projects/pharmafetch/pharma2.png" class="d-block w-100" alt="pharma2">
                <div class="carousel-caption d-none d-md-block">
                        <h5>PharmaFetch UI</h5>
                        <p>Project in Technopreneurship and DICT Start Up Challenge 9</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="assets/photos/ui projects/pharmafetch/pharma3.png" class="d-block w-100" alt="pharma3">
                <div class="carousel-caption d-none d-md-block">
                        <h5>PharmaFetch UI</h5>
                        <p>Project in Technopreneurship and DICT Start Up Challenge 9</p>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class ="col-xl-6 col 12 d-flex flex-column">
        <div class = "row">
            <div class = "col-12 d-flex flex-column">
                <div id="carousel3" class="carousel slide carousel_landscape carousel3" data-bs-ride="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel3" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                                <img src="assets/photos/ui projects/sagup/sagup1.png" class="d-block w-100" alt="sagup1">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Sagup Negros Website</h5>
                                <p>Final project for Usability, HCI, and User Interaction Design</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="assets/photos/ui projects/sagup/sagup2.png" class="d-block w-100" alt="sagup2">
                        <div class="carousel-caption d-none d-md-block">
                                <h5>Sagup Negros Website</h5>
                                <p>Final project for Usability, HCI, and User Interaction Design</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="assets/photos/ui projects/sagup/sagup3.png" class="d-block w-100" alt="sagup3">
                        <div class="carousel-caption d-none d-md-block">
                                <h5>Sagup Negros Website</h5>
                                <p>Final project for Usability, HCI, and User Interaction Design</p>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>   
                </div>
            </div>
        </div>

        <div class = "row mt-3">
            <div class = "col-12 d-flex flex-column">
                <div id="carousel4" class="carousel slide carousel_landscape carousel4" data-bs-ride="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel4" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel4" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                                <img src="assets/photos/ui projects/cocotel/cocotel1.png" class="d-block w-100" alt="cocotel1">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Cocotel Website Revamp</h5>
                                <p>Project in Usability, HCI, and User Interaction Design.</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="assets/photos/ui projects/cocotel/cocotel2.png" class="d-block w-100" alt="cocotel2">
                        <div class="carousel-caption d-none d-md-block">
                                <h5>Cocotel Website Revamp</h5>
                                <p>Project in Usability, HCI, and User Interaction Design.</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="assets/photos/ui projects/cocotel/cocotel3.png" class="d-block w-100" alt="cocotel3">
                        <div class="carousel-caption d-none d-md-block">
                                <h5>Cocotel Website Revamp</h5>
                                <p>Project in Usability, HCI, and User Interaction Design.</p>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel4" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carousel4" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>   
                </div>
            </div>
        </div>
    </div>
</div>