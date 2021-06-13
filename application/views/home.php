<?php include("header.php") ?>
<div class="banner">
    <img src="<?php echo base_url() ?>/images/hotels.jpg" alt="" class="col-lg-12 col-md-6">
    <div class="heading">
        <h2 class="font-weight-bolder text-light">Make your self at home <span>in our hotel</span></h2>
    </div>
    <div class="btn">


        <!-- <a class="effect effect-1" href="#" title="Learn More">Learn More</a> -->
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