<style> 
  .picture_container {
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    height: 100vh;
    transform-origin: center;
    left: 10%;
  }

  .picture {
    width: 512px;
    height: 512px;
    transform-origin: center;
    border-radius: 50%;
  }

  .about_title {
    position: relative;
    display: flex;
    top: 30%;
    justify-content: end;
    padding-right: 7em
  }

  .about_text{
    display: flex;
    justify-content: end;
    text-align: right;
    padding-right: 7em;
    margin-top: 40%;
    padding-left:4em
  }
</style>

<div class = "row">
  <div class = "col-6" style = "height: 100%">
    <div class = "picture_container">
      <img src = "assets/photos/picture.jpg" class= "picture">
    </div>  
  </div>

  <div class = "col-6">
    <div class = "about_title">
      <h1 class = "rubik-bold lg-fs text-white">about me</h1>
    </div>

    <div class = "about_text">
        <p class = "small-fs text-white">
            I'm Carlos Miguel C. Valderrama, a student at <strong>University of St. La Salle - Bacolod</strong> studying <strong>Bachelor of Science in Computer Science Major in Game Development.</strong>
        </p>
    </div>
  </div>
</div>

<?php include("./layout/gradient_divider.php")?>


    