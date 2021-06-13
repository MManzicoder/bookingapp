<?php include("header.php") ?>
<style>
    .sidebar {
        background-color: #0E7FD5;
        height: 100vh;
        width: 210px;
    }

    .sidebar .link {
        color: white;
        margin-top: 20px;
        text-decoration: none;
        margin-left: 16px;
        font-size: 15px;
        font-family: poppins;
        /* margin-top: 120px; */

    }

    .nav {
        display: flex;
        flex-direction: column;
    }

    .profile {
        border-radius: 50%;
        background-color: white;
        height: 80px;
        width: 80px;
        background-color: rgb(55, 55, 243);
    }

    .links {
        height: 50px;
    }

    .sidebar img {
        height: 80px;
        width: 80px;
        border: 50%;
        border-radius: 50%;
        margin-left: 30px;
    }

    .sidebar span {
        font-size: 14px;
        color: white;
        display: inline;
        margin-left: 5px;
    }

    .sidebar .links:hover {
        background-color: #9ad0fb;
    }
</style>
<div class="main">
    <div class="sidebar">
        <div class="nav">
            <!-- <div class="profile"> -->
            <img src="<?php echo base_url() ?>/images/aguero.jpg" alt="" class="about-img">
            <!-- </div> -->
            <div class="links"><span><i class="fas fa-home"></i></span><?php echo anchor('home', 'Home', ['class' => 'link']) ?></div>
            <div class="links"><span><i class="fas fa-bars"></i></span><?php echo anchor('home', 'Orders', ['class' => 'link']) ?></div>
            <div class="links"><span><i class="far fa-bell"></i></span><?php echo anchor('home', 'Notifications', ['class' => 'link']) ?></div>
            <div class="links"><span><i class="fas fa-cog"></i></span> <?php echo anchor('home', 'settings', ['class' => 'link']) ?></div>
        </div>
    </div>
    <div class="form">
        <style>
            legend {
                margin-left: 110px;
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
        </style>
        <legend class="legend">Onomo hotel Kigali</legend>
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
            <?php echo form_input(['name' => 'firstname', 'placeholder' => 'Phone', 'class' => 'form-control', 'value' => set_value('firstname')]) ?>
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
            <?php echo form_dropdown('room', $options) ?>
            <div class='col-lg-6'>
                <?php echo form_error('room'); ?>
            </div>
        </div>
        <div class="content">
            <label for="">your arrival time</label>
            <p><span><i class="fas fa-clock" style="color: white;"></i></span>your rooms will be ready for checkin between 14:00 and 23:30</p>
            <p>24-hours front desk- Help whenever you need it</p>
        </div>
        <?php echo form_submit(['value' => 'Book', 'class' => 'btn btn-primary col-lg-5']) ?>
        <?php echo form_close() ?>
    </div>
</div>