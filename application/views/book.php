<?php include("header.php") ?>
<?php if ($error = $this->session->flashdata('response')) : ?>
    <div class='alert alert-dismissible alert-success'>
        <?php echo $error; ?>
    </div>
<?php endif ?>
<style>
    .container_fluid {
        width: 100%;
        height: 100vh;
    }
    .sidebar {
        width: 15%;
        height: 100%;
        position: fixed;
        flex-direction: column;
    }

    .links {
        width: 100%;
        list-style: none;
        padding: 0%;
        color: white !important;
    }
    .links>li {
        padding: 0 15px;
        width: 100%;
        line-height: 50px;
    }

    a {
        color: #fff;
        text-decoration: none;
        font-size: 16px;
    }

    i {
        padding-right: 5px;
        font-size: 17px;
    }

    .userprofile {
        width: 100%;
        height: 20vh;
        margin: 20px;
        margin-left: 60px;
    }

    .userprofile>img {
        height: 60px;
        width: 60px;
        border-radius: 50%;
    }

    .active {
        background: #000066;
    }

    .logout {
        margin-top: 150px;
        padding: 0 20px;
    }

    .logout>a {
        color: #fff;
    }

    .dash {
        background: #ffffff;
        width: 85%;
        height: 100%;
    }

    .search {
        width: 93%;
        margin: 0 auto;
        /* border: 1px groove; */
        height: 8em;
    }

    .popularplaces {
        width: 73%;
        height: 69vh;
        margin-left: 41px;
        /* border: 1px groove; */
    }

    .popular {
        width: 100%;
        display: flex;
        list-style: none;
    }

    .popular li:nth-of-type(1) {
        width: 90%;
        font-weight: bold;
        font-size: 17px;
    }

    .popular li:nth-of-type(2) {
        font-size: 17px;
        font-weight: bold;
    }

    .places {
        display: flex;

    }

    .card-hotel {
        height: 18em;
        margin-left: 30px;
        width: 27%;
        background: lightgray;
        border-radius: 7px;
        position: relative;
    }

    .card-hotel img {
        width: 100%;
        height: 100%;
        border-radius: 5px;
    }

    .hotel h5 {
        font-size: 15px;
    }

    .hotel {
        position: absolute;
        width: 80%;
        height: 70px;
        font-size: 15px;
        background: #fff;
        bottom: 13px;
        left: 18px;
        border-radius: 5px;
        padding: 10px;
    }

    .favorite {
        font-size: 15px;
        margin-left: 30px;
        padding-top: 15px;
    }

    .fav-hotel {}

    .stars {
        color: #ffcc00;
        font-weight: bold;
    }

    a {
        color: #fff;
    }
    legend {
        margin-left: 10px;
        font-weight: bolder;
        font-family: 'poppins';
    }

    .content {
        margin-left: 10px;
    }

    .content label {
        /* color: red; */
        display: block;
        font-family: 'poppins';
        font-size: 16px;
        font-weight: 400;
    }

    input {
        font-size: 15px;
        font-family: poppins;
    }

    input [type='radio'] {
        font-size: 10px;
        display: inline;
    }

    select {
        font-size: 16px;
        font-family: poppins;
    }

    input [type] p {
        /* color: red; */
        margin-left: 10px;
        font-size: 15px;
        font-family: poppins;
    }

    .container {
        margin-left: 12px;
    }

    .left-icon {
        font-size: 443px;
        color: black;
        margin-left: 134px;
    }

    p span {
        color: #126D5C;
        font-size: 25px;
        margin-right: 7px;
        margin-top: 5px;
    }
    .main{
        height: 100vh;
    }
    .form{
        margin-left: 15%;
    }
    .btn{
        margin: 3px;
    }
</style>
<div class="main">
        <div class="sidebar text-white bg-primary d-flex">
            <div class="userprofile">
                <img src="<?= base_url(); ?>images/aguero.jpg" alt="profile">
                
            </div>
            <ul class="links">
                <li class="active"><a href="<?=site_url("user/dashboard")?>"><i class="fa fa-tachometer" aria-hidden="true"></i>
                        Dashboard</a></li>
                        <?php $username = $this->session->user["username"];?>
            <?php if($username=="mmanzicd") { ?>

                <li><a href="<?=site_url("user/orders/admin");?>"><i class="fa fa-address-card" aria-hidden="true"></i>
            Orders</a></li>
            <?php } ?>
              <?php if($username !="mmanzicd") { ?> <li><a href=""><i class="fa fa-address-card" aria-hidden="true"></i>
                        Orders</a></li>
                        <?php } ?>
                <li><a href=""><i class="fa fa-bell" aria-hidden="true"></i>
                        Notifications</a></li>
                <li><a href=""><i class="fa fa-cog" aria-hidden="true"></i>
                        Settings</a></li>
            </ul>
            <div class="logout">
                <a href=""><i class="fa fa-sign-out" aria-hidden="true"></i>
                    Logout</a>
            </div>
        </div>
        <div class="form">
            <div class="container">
                <i class="fas fa-arrow-left" id="left-icon"></i>
                <legend class="legend"><?=$hotel[0]["name"];?></legend>
                <!-- <form action=""> -->
                <?php echo form_open('home/save') ?>
                <div class="content">
                    <label for="work">Are you travelling for work</label>
                    <?php echo form_radio(['name' => 'work'], 'yes', 'false') ?>Yes
                    <?php echo form_radio(['name' => 'work'], 'no', 'false') ?>No
                    <!-- <input type="radio" name="work" value="yes">yes
            <input type="radio" name="work" value="no">no -->
                    <div class='col-lg-6'>
                        <?php echo form_error('work'); ?>
                    </div>
                </div>
                <div class="content">
                    <label for="first">Firstname</label>
                    <?php echo form_input(['name' => 'firstname', 'placeholder' => 'Firstname', 'class' => 'form-control', 'value' => set_value('firstname')]) ?>
                    <div class='col-lg-6'>
                        <?php echo form_error('firstname'); ?>
                    </div>
                </div>
                <div class="content">
                    <label for="last">lastname</label>
                    <?php echo form_input(['name' => 'lastname', 'placeholder' => 'lastname', 'class' => 'form-control', 'value' => set_value('lastname')]) ?>
                    <div class='col-lg-6'>
                        <?php echo form_error('lastname'); ?>
                    </div>
                </div>
                <div class="content">
                    <label for="first">E-mail address</label>

                    <?php echo form_input(['name' => 'email', 'placeholder' => 'E-mail', 'class' => 'form-control', 'value' => set_value('email')]) ?>
                    <div class='col-lg-6'>
                        <?php echo form_error('email'); ?>
                    </div>
                </div>
                <div class="content">
                    <label for="first">comfirm email</label>

                    <?php echo form_input(['name' => 'comfemail', 'placeholder' => 'comfirm-email', 'class' => 'form-control', 'value' => set_value('comfemail')]) ?>
                    <div class='col-lg-6'>
                        <?php echo form_error('comfemail'); ?>
                    </div>
                </div>
                <div class="content">
                    <label for="work">whom are you booking for</label>
                    <?php echo form_radio(['name' => 'booker'], 'guest', 'false') ?>I am the guest
                    <?php echo form_radio(['name' => 'booker'], 'another', 'false') ?>I am booking for someone
                    <div class='col-lg-6'>
                        <?php echo form_error('booker'); ?>
                    </div>
                </div>
                <div class="content">
                    <label for="room">Room</label>
                    <?php
                    $options = [
                        'room1' => 'room1',
                        'room2' => 'room2',
                        'room3' => 'room3'
                    ]
                    ?>

                    <!-- <select name="room" id="room"> -->
                    <?php echo form_dropdown(['name' => 'room', 'class' => 'form-select'], $options) ?>
                    <div class='col-lg-6'>
                        <?php echo form_error('room'); ?>
                    </div>
                </div>
                <div class="content">
                    <label for="">your arrival time</label>
                    <p><span><i class="fas fa-clock"></i></span>your rooms will be ready for checkin between 14:00 and 23:30</p>
                    <p>24-hours front desk- Help whenever you need it</p>
                </div>
                <?php echo form_submit(['value' => 'Book', 'class' => 'btn btn-primary col-lg-5']) ?>
                <?php echo form_close() ?>
            </div>
        </div>
    <!-- </div> -->
</div>