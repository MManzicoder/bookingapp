<?php 
defined('BASEPATH;');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo base_url('/assets/style.css')?>>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<div class="container_fluid d-flex ">
            <div class="sidebar text-white bg-primary d-flex position-fixed">
                <div class="userprofile">
                    <img src="<?=base_url();?>images/booker.jpg" alt="profile">
                </div>
                <ul class="links text-light">
                    <li class="active"><a href="#" class="text-decoration-none text-light"><i class="fa fa-tachometer" aria-hidden="true"></i> 
        Dashboard</a></li>
                    <li><a href="#" class="text-decoration-none text-light"><i class="fa fa-address-card" aria-hidden="true"></i>
        Orders</a></li>
                    <li><a href="#" class="text-decoration-none text-light"><i class="fa fa-bell" aria-hidden="true"></i> 
        Notifications</a></li>
        <li><a href="#" class="text-decoration-none text-light"><i class="fa fa-bed" aria-hidden="true"></i>
        Hotels</a></li>
                    <li><a href="#" class="text-decoration-none text-light"><i class="fa fa-cog" aria-hidden="true"></i>
        Settings</a></li>
                </ul>
                <div class="logout">
                <a href="#" class="text-decoration-none text-light"><i class="fa fa-sign-out" aria-hidden="true"></i>
        Logout</a>
                </div>

                </div>
    <div class="m-5 w-50">

    <form action="<?php echo base_url('index.php/Display/update_hot') ?>" method="post" class="form">
    <h3 class="card-title">Update Hotel</h3>
    <?php
    $i=1;
    foreach ($data as $row) {
    ?>
    <!-- <div class="mb-3">
    <label for="id" class="form-label">Hotel Id:</label>
    <input type="text" name="hId" id="id" class="form-control" value="<?=$row->hId?>" readonly>
    </div> -->
    <div class="mb-3">
    <label for="name" class="form-label">Hotel Name:</label>
    <input type="text" class="form-control" name="name" value="<?=$row->name?>">
    </div>
    <div class="mb-3">
    <label for="manager" class="form-label">Manager:</label>
    <input type="text" name="manager" id="manager" class="form-control" value="<?=$row->manager?>">
    </div>
    <div class="mb-3">
    <label for="province" class="form-label">Province:</label>
    <!-- <input type="text" name="provinceId" id="provinces" class="form-control"> -->
    <select name="provinceId" id="province" class="form-select">
    <option value="">No Selected</option>
    <?php
    foreach($provinces as $row){
    ?>
    <option value="<?=$row->provinceId?>"><?= $row->provinceName?></option>
    <?php }?>
    </select>
    </div>
    <div class="mb-3">
    <label for="sector" class="form-label">Sector:</label>
    <!-- <input type="text" name="sectorId" id="sector" class="form-control"> -->
    <select name="sectorId" id="sectors" class="form-select">
    <option value="">No select</option>
    <?php
    foreach($sectors as $row){
    ?>
    <option value="<?=$row->sectorId?>"><?= $row->sectorName?></option>
    <?php }?>
    </select>
    </div>
    <div class="mb-3">
    <label for="location" class="form-label">Location</label>
    <input type="text" name="location" id="location" class="form-control" value="<?=$row->location?>">
    </div>
    <!-- <div class="mb-3">
    <label for="profile" class="form-label">Hotel Profile</label>
    <input type="file" name="hotel_profile" id="hotel" class="form-control">
    </div> -->
    <div class="mb-3">
    <label for="description" class="form-label">Description:</label>
    <textarea type="text" name="description" id="description" class="form-control" rows="3" value="<?=$row->description?>"></textarea>
    </div>  
    <?php }?>
    <input type="submit" value="Update" class="btn btn-primary mb-5" name="update" id="update_data">
    </form>
    </div>
</body>
</html>