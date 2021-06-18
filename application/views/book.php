<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo  base_url("/resources/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.min.js"></script>
</head>
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

    .links li a,
    .logout a {
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

        text-decoration: none;
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

    .main {
        height: 100vh;
    }

    .form {
        margin-left: 15%;
    }

    .btn {
        margin: 3px;
    }
</style>
<div class="main">
    <!-- <?php print_r($data) ?> -->
    <div class="sidebar text-white bg-primary d-flex">
        <div class="userprofile">
            <img src="<?= base_url(); ?>images/aguero.jpg" alt="profile">

        </div>
        <ul class="links">
            <li class="active"><a href="<?= site_url("user/dashboard") ?>"><i class="fa fa-tachometer" aria-hidden="true"></i>
                    Dashboard</a></li>
            <?php $username = $this->session->user["username"]; ?>
            <?php if ($username == "mmanzicd") { ?>

                <li><a href="<?= site_url("user/orders/admin"); ?>"><i class="fa fa-address-card" aria-hidden="true"></i>
                        Orders</a></li>
            <?php } ?>
            <?php if ($username != "mmanzicd") { ?> <li><a href=""><i class="fa fa-address-card" aria-hidden="true"></i>
                        Orders</a></li>
            <?php } ?>
            <li><a href=""><i class="fa fa-bell" aria-hidden="true"></i>
                    Notifications</a></li>
            <li><a href=""><i class="fa fa-cog" aria-hidden="true"></i>
                    Settings</a></li>
        </ul>
        <div class="logout">
            <a href="<?= site_url("Dashboard/logout") ?>"><i class="fa fa-sign-out" aria-hidden="true"></i>
                Logout</a>
        </div>
        <!-- </div> -->
    </div>
    <style>
        .form-main{
            display: flex;

        }
        .form {
            margin-top: 10px;
            margin-left: 16%;
            background-color: white;
            width: 47%;
            border-radius: 0px 2px 0px;
            /* height: 80vh; */
            box-shadow: 5px 5px 2px gray;
        }

        .input {
            /* display: flex;
            flex-direction: column; */
            margin-bottom: 20px;
        }

        .input span {
            font-size: 15px;
            font-family: poppins;
            margin-right: 10px;
            margin-left: 2px;
        }

        .input label {
            font-size: 15px;
            font-family: poppins;
            opacity: 0.7;
            font-weight: lighter;
            color: black;
            display: block;
        }

        .input input[type=date],
        input[type=number],
        select {
            height: 40px;
            width: 66%;
            font-size: 14px;
            font-family: poppins;
        }

        textarea {
            /* width: auto; */
            width: 66%;
        }

        /* .image {} */

        img {
            margin-top: 10px;
            margin-left: 10px;
            width: 540px;
            height: 660px;
        }
    </style>
    <div class="form-main">
        <div class='form'>
            <!-- <?php echo ($this->session->userdata['user']['id']) ?> -->
            <legend><?= $data["hotel"][0]["name"]; ?></legend>
            <!-- <?php print_r($data); ?> -->
            <form action="<?php echo site_url() ?>home/save" class='form-group' method="POST">
                <div class='input'>
                    <label for="checkin">Checkin date</label>
                    <input type="date" name="checkin" value="<?php set_value('checkin') ?>"><span><?php echo form_error('checkin'); ?></span>
                </div>
                <div class='input'>
                    <label for="checkin">Checkout Date</label>
                    <input type="date" name="checkout" value="<?php set_value('checkout') ?>"><?php echo form_error('checkout'); ?>
                </div>
                <div class='input'>
                    <label for="guests">Number of guests</label>
                    <input type="number" name="guests" value="<?php set_value('guests') ?>"><?php echo form_error('guests'); ?>
                </div>
                <div class='input'>
                    <label for="room">Room</label>
                    <select name="roomId" id="room">
                        <?php foreach ($data["model"] as $room) { ?>
                            <option value="<?= $room["roomId"] ?>"><?= $room["roomName"] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class='input'>
                    <label for="pickup">Free PickUp?</label>
                    <input type="radio" name="pickup" id="pick" value="yes"><span>Yes</span><?php echo form_error('pickup'); ?>
                    <input type="radio" name="pickup" id="pick" value="no">No
                </div>
                <div class='input'>
                    <label for="special">special service</label>
                    <input type="text" name="special_request" value="<?php set_value('special_request') ?>" style="height: 95px; width: 66%;;"><?php echo form_error('special'); ?>
                </div>
                <button class='btn btn-danger col-lg-3'>Book</button>
            </form>
        </div>
        <div class='image'>
            <img src="<?= base_url(); ?>images/svg.jpg" alt="profile">
        </div>
    </div>
    
</div>