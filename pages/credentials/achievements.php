<style> 
  .achievement_container {
    overflow: hidden;
    width: 240px;
    height: 360px;
    border-radius: 24px;
    background-size: cover
  }

  .achievement_container:hover {
    overflow: hidden;
    width: 300px;
    height: 400px;
    border-radius: 12px;
  }

  .achievement_title {
    font-size: 1em;
    font-weight: 600;
    margin-top: 1em;
    text-align: center;
  }

  .achievement_text{
    text-align: center;
    margin: 5%;
    font-size: 0.9em;
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
    <p class = "text-green p-2">(some)</p>
    <div class = "header_title">
        <h1 class = "rubik-bold text-green lg-fs">achievements</h1>
    </div>
  </div>
</div>

<div class = "row mt-2">
  <div class = "col-lg-4 col-12 d-flex flex-column align-items-center transform-origin-center pl-5 ml-5" style = "padding-left: 6em;">
    <div class = "achievement_container image_container" style = "background-image: linear-gradient(rgba(52, 80, 54, 0%),rgba(52, 66, 54, 80%)),url('assets/photos/achievements/cde.jpg');"></div>

    <div class = "achievement_text text-green d-flex flex-column align-items-center justify-content-center inter-body">
      <h4 class = "achievement_title">Most Outstanding Student in Visual Arts 2024</h4>
      <p class = "achievement_text">
        Awarded during the Corps d'Elite 2024 on May 2024
      </p>
    </div>
  </div>

  <div class = "col-lg-4 col-12 d-flex flex-column align-items-center transform-origin-center pl-5 ml-5">
  <div class = "achievement_container image_container" style = "background-image: linear-gradient(rgba(52, 80, 54, 0%),rgba(52, 66, 54, 80%)),url('assets/photos/achievements/laurier.jpg');"></div>

    <div class = "achievement_text text-green d-flex flex-column align-items-center justify-content-center inter-body">
      <h4 class = "achievement_title">Most Outstanding President and Most Outstanding Student in Culture and Arts</h4>

      <p class = "achievement_text">
        Awarded during the Laurier de La Salle 2022 on May 2022
      </p>
    </div>
  </div>

  <div class = "col-lg-4 col-12 d-flex flex-column align-items-center transform-origin-center pl-5 ml-5" style = "padding-right: 6em;">
  <div class = "achievement_container image_container" style = "background-image: linear-gradient(rgba(52, 80, 54, 0%),rgba(52, 66, 54, 80%)),url('assets/photos/achievements/eagle.jpg');"></div>

    <div class = "achievement_text text-green d-flex flex-column align-items-center justify-content-center inter-body">
      <h4 class = "achievement_title">Eagle Scout Rank Achievement</h4>

      <p class = "achievement_text">
        Top 5 during the Eagle Scout Board of Review 2019. Awarded during Virtual Court of Honor on April 2020.
      </p>
    </div>
  </div>
</div>

  

    