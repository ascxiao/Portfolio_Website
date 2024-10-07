<style> 
  .me_picture {
    width: 512px;
    height: 512px;
    transform-origin: center;
    border-radius: 50%;
  }

  .about_title {
    justify-content: end;
    padding-right: 7em
  }

  .about_text{
    justify-content: end;
    text-align: right;
    padding-right: 7em;
    padding-left:4em
  }

  .contact_button {
    position: relative;
    left: 65%;
    top: 15%;
    margin: 0;
  }

  @media screen and (max-width: 1140px) {

    .imahge_container {
      display: none;
    }

    .picture_container {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10%;
    width: 100%;
    height:auto;
    transform-origin: center;
  }
  
  .me_picture {
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
  <div class = "col-xl-6 col-12" style = "height: 100%">
    <div class = "image_container picture_container" style = "left: 10%">
      <img src = "assets/photos/picture.jpg" class= "me_picture">
    </div>  
  </div>

  <div class = "col-xl-6 col-12">
    <div class = "about_title">
      <h1 class = "rubik-bold lg-fs text-white">about me</h1>
    </div>

    <div class = "about_text small-fs text-white">
        <p class = "small-fs text-white">
            I'm <?= $name?>, a <?= $yearLevel?> student at 
            <strong> <?= $school?></strong> studying <strong> <?= $course?></strong>.
            I'm <?= $age?> years old and my nickname is <strong> <?= $nickname?></strong>.
        </p>
    </div>

      <a href ="#contact_me"><button type="button" class="btn btn-success btn-md contact_button">Contact me!</button></a>
  </div>
</div>

<?php include("./layout/gradient_divider.php")?>


    