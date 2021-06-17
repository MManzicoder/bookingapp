<?php include("header.php") ?>
<style>
    .banner {
        display: flex;
        position: relative;
    }

    .banner img {
        height: 90vh;
    }

    .banner .heading {
        position: absolute;
        top: 30%;
        left: 30%;
        /* width: 00px; */
        /* background-color: red; */
    }

    .banner .heading h2 {
        z-index: 10;
        font-family: 'Poppins';
        font-size: 50px;
    }

    .heading h2 span {
        /* color: red; */
        display: block;
        margin-left: 143px;
    }

    .banner .white {
        background-color: white;
        height: 170px;
        width: 75%;
        position: absolute;
        left: 10%;
        top: 80%;
        right: 10%;
        border-radius: 5px;
        box-shadow: 2px 2px 2px gray;
    }

    .banner .btn {
        position: absolute;
        top: 58%;
        left: 44%;
    }

    .btn .sign {
        background-color: transparent;
        padding: 10px 20px;
        text-decoration: none;
        color: white;
        font-size: 18px;
        font-family: poppins;
        /* border: 2px solid rgb(251, 232, 232); */
        border-radius: 5px;
        background-color: #0291ff;
    }

    .btn .sign:hover {
        /* border: 2px solid white; */
        border-radius: 4px;
        background-color: #0E7FD5;
        font-size: 20px;
    }

    .main {
        display: flex;
        flex-direction: row;
    }

    .about {
        margin-left: 45px;
        margin-top: 98px;
        width: 100%;
        display: flex;
        flex-direction: row;
    }

    .about .image {
        flex: 4;
    }

    .about .image img {
        width: 450px;
        height: 210px;
    }

    .about .text {
        flex: 2;
        font-family: poppins;
    }

    .about .text p {
        font-size: 19px;
        font-weight: bold;
        width: 190px;
    }

    .about .text div {
        background-color: #0291ff;
        height: 3px;
        width: 75px;
        margin-top: -6px;
        margin-left: 23px;
        text-decoration: 2px 2px 2px;
    }

    .about .text h2 {
        font-size: 17px;
    }

    .cards-text {
        margin-top: 32px;
        width: 200px;
        margin-left: 45px;
    }

    .cards-text p {
        font-weight: bold;
        font-size: 19px;
    }

    .cards {
        display: flex;
        flex-direction: row;
        margin-left: 45px;
    }

    .cards .images {
        flex: 2;
        position: relative;
    }

    .cards .images img {
        height: 230px;
        width: 350px;
    }

    .cards .images-text {
        position: absolute;
        background-color: #b1ddff;
        opacity: 0.9;
        width: 240px;
        height: 60px;
        top: 210px;
        left: 80px;
        text-align: center;
    }

    .cards .images-text h2 {
        font-size: 15px;
        font-family: poppins;
        margin-top: 19px;
        opacity: 1;
    }
</style>
<div class="banner">
    <img src="<?php echo base_url()?>/images/hotels.jpg" alt="" class="col-lg-12 col-md-6">
    <div class="heading">
        <h2 class="font-weight-bolder text-light">Make your self at home <span>in our hotel</span></h2>
    </div>
    <div class="btn">
        <?php echo anchor('home/signup', 'Get started', ['class' => 'sign']) ?>
    </div>
    <div class="white">
    </div>
</div>
<div class="about">
    <div class="image">
        <img src="<?php echo base_url() ?>/images/aboutus2.jpg" alt="" class="about-img">
    </div>
    <div class="text">
        <h2>About us</h2>
        <div></div>
        <p>The best holidays start here!</p>
    </div>
</div>
<div class="cards-text">
    <p>The most memorable rest time starts here</p>
</div>
<div class="cards">
    <div class="images">
        <img src="<?php echo base_url() ?>/images/aboutus2.jpg" alt="" class="about-img">
        <div class="images-text">
            <h2>Duplex Room</h2>
        </div>
    </div>
    <div class="images">
        <img src="<?php echo base_url() ?>/images/aboutus2.jpg" alt="" class="about-img">
        <div class="images-text">
            <h2>classic Room</h2>
        </div>
    </div>
    <div class="images">
        <img src="<?php echo base_url() ?>/images/aboutus2.jpg" alt="" class="about-img">
        <div class="images-text">
            <h2>Double Room</h2>
        </div>
    </div>
</div>
</body>
</html>