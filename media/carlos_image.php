<style>
        .carlos_image {
        display: flex;
        position: relative;
        width: 100vh;
        min-height: 100vh;
        transform-origin: center;
        right: 20%;
    }

    .carlos {
        position: absolute;
        max-height: 100vh;
        max-width: 100vh;
        z-index: -1;
        transform-origin: center;
        transform: scale(1.08);
    }
    
    .swirl {
        position: absolute;
        object-fit: cover;
        max-height: 100vh;
        max-width: 100vh;
        z-index: 1;
        transform-origin: center;
        transform: scale(1.08);
    }
</style>

<div class = "carlos_image">
    <img src="./assets/photos/swirls/sprout.png" alt="sprout" class="swirl"> 
    <img src="./assets/photos/swirls/swirl_3.png" alt="swirl3" class="swirl"> 
    <img src="./assets/photos/swirls/swirl_2.png" alt="swirl2" class="swirl"> 
    <img src="./assets/photos/swirls/swirl_1.png" alt="swirl1" class="swirl">
    <img src="./assets/photos/self_image.png" alt="header" class = "carlos">
</div>
