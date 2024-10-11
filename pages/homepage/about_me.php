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

</style>

<div class = "row">
  <div class = "col-xl-6 col-12">
    <div class = "image_container picture_container" style = "padding-left: 7em">
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


    