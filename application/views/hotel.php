<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI4</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/dashboard.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
       .container_fluid{
           width: 100%;
           height: 100vh;
           
           
       }
       .sidebar{
           width: 15%;
           height: 100%;
           flex-direction: column;
       }
       .links{
           width: 100%;
           list-style: none;
           padding: 0%;
           color: white !important;
    
       }
       .links>li{
           padding: 0 15px;
           width: 100%;
           line-height: 50px;
       }
       a{
           color: #fff;
           text-decoration: none;
       }
       i{
           padding-right: 5px;
           font-size: 10px;
       }
       .userprofile {
           width: 100%;
           height: 20vh;
           margin: 20px;
           margin-left: 60px;
           position: relative;
       }
       .userprofile>img{
           height: 60px;
           width: 60px;
           border-radius: 50%;
       }
       .active{
           background: #000066;
       }
       .logout{
          margin-top: 150px;
          padding: 0 20px;
       }
       .logout > a{
           color: #fff;
       }
       .dash{
           background: #ffffff;
           width: 85%;
           height: 100%;
       }
       .search{
           width: 93%;
           margin: 0 auto;
           /* border: 1px groove; */
           height: 8em;
       }
       .popularplaces{
           width: 73%;
           height: 69vh;
           margin: 50px 0 0 30px;
           position: relative;
       }
       .back{
           color: black;
       }
       .popularplaces h2{
           margin: 0 0 20px 30px;
           font-size: 25px;
       }
       .hotelview{
           margin: 0%;
           width: 100%;
       }
       .popular{
           width: 100%;
           display: flex;
           list-style: none;
       }
       .popular li:nth-of-type(1){
          width: 90%;
          font-weight: bold;
          font-size: 17px;
       }
       .popular li:nth-of-type(2){
            font-size: 17px;
            font-weight: bold;
       }
       .places{
           display: flex;

       }
       .card-hotel{
           height: 15em;
           margin-left: 30px;
           width: 40%;
           background: lightgray;
           border-radius: 7px;
           position: relative;
           color: black;
       }
       .card-hotel img{
           width: 100%;
           height: 100%;
           border-radius: 5px;
       }
       .hotel h5{
           font-size: 15px;
       }
       .hotel{
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
       .favorite{
           font-size: 15px;
           margin-left: 30px;
           padding-top: 15px;
       }
       .fav-hotel p span:nth-of-type(2){
           opacity: 0.5;
           font-weight: bold;
       }
       .stars{
           color: #ffcc00;
           font-weight: bold;
       }
       a{
           color: #fff;
       }
       .desc{
           width: 100%;
           height: 5em;
           border-top : 1px solid gray;
       }
       .desc h3{
           font-size: 20px;
       }    
       .book{
           color: #fff;
           padding: 7px 25px;
           background: #0d6efd;
           border-radius: 5px;
       }
       .book:hover{
           opacity: 0.7;
           /* background: #fff; */
           color: #fff;
       }
       .userprofile h3{
           position: absolute;
           text-align: left;
           left: -20px;
           font-size: 20px;
       }
    </style>
</head>
<?php

 $hId = $hotel[0]["hId"];
?>
<body>
    <div class="container_fluid d-flex">
    <div class="sidebar text-white bg-primary d-flex">
           <div class="userprofile">
               <img src="<?=base_url();?>images/booker.jpg" alt="profile">
               <h3><?=$this->session->user["username"];?></h3>
           </div>
           <ul class="links">
              <li class="active"><a href="<?=site_url("user/dashboard")?>"><i class="fa fa-tachometer" aria-hidden="true"></i> 
Dashboard</a></li>
<?php $username = $this->session->user["username"];?>
<?php if($username=="mmanzicd") { ?>

    <li><a href="<?=site_url("user/orders/admin");?>"><i class="fa fa-address-card" aria-hidden="true"></i>
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
        <div class="dash">
        <!-- <a href="<?=site_url("book/$hId")?>"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a> -->

          <div class="popularplaces">
            <a class="back" href="<?=site_url("user/dashboard")?>"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>
                 <?php foreach($hotel as $hotel) { ?>
                 <div class="hotelview">
                    <h2><?=$hotel["name"]?></h2>
                    <div href="<?=site_url("dashboard/viewhotel")?>" class="card-hotel">
                        <img src='<?=base_url();?>images/<?=$hotel["hotel_image"]?>' alt="onomo">
                    </div>
                <?php } ?>

                 </div>
                              <div class="favorite">
              <div class="fav-hotel">
                 <p><span class="stars"><i class="fa fa-star" aria-hidden="true"></i>
 4.4 stars</span><span> - 250 reviews</span></p>
              </div>
              <div class="desc">
              <h3>Description</h3>
               <p><?=$hotel["description"]?></p>
              </div>
            <?=anchor("book/$hId", "Book Now", "class='book'")?>
             </div>
          </div>
        </div>
    </div>
</body>
</html>