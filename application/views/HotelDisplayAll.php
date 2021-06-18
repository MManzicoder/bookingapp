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

    <title>E-hotel</title>
</head>
<body>
        <div class="container_fluid d-flex">
            <div class="sidebar text-white bg-primary d-flex position-fixed">
                <div class="userprofile">
                    <img src="<?=base_url();?>images/booker.jpg" alt="profile">
                    <h3 style="position: absolute; left: 25px;"><?=$this->session->user["username"];?></h3>
                </div>
                <ul class="links text-light">
                    <li class="active"><a href="<?=site_url("user/dashboard")?>" class="text-decoration-none text-light"><i class="fa fa-tachometer" aria-hidden="true"></i> 
        Dashboard</a></li>

                    <li><a href="#" class="text-decoration-none text-light"><i class="fa fa-bell" aria-hidden="true"></i> 
        Notifications</a></li>
                    <li><a href="" class="text-decoration-none text-light"><i class="fa fa-cog" aria-hidden="true"></i>
        Settings</a></li>
                </ul>
                <div class="logout">
                <a href="<?=site_url("Dashboard/logout")?>" class="text-decoration-none text-light"><i class="fa fa-sign-out" aria-hidden="true"></i>
        Logout</a>
                </div>

                </div>
    <div class="container" style="margin-left: 15%;">
    <div class="table-wrapper mx-xl-5 px-md-5">
    <div class="table-title">
    <div class="row">
     <div class="col-sm-8"><h3 class="mt-3">Hotels</h3></div>
     <div class="col-sm-4">
     <a href="<?php echo base_url('Provinces/index')?>" class="btn btn-info add-new" type="button"><i class="fa fa-plus"></i>Add New</a>
     </div>
    </div>
    </div>
    <?php
    // $db= $this->load->database();
    // $query= $db->query('SELECT h.hId, h.name, h.manager, d.districtName, p.provinceName, location, description FROM hotels h, districts d, provinces p WHERE h.districtId= d.districtId AND h.provinceId= p.provinceId');
    // $row= $query->getRowArray();
    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Hotel Name</th>
                <th>Manager</th>
                <th>Sector</th>
                <th>Province</th>
                <th>Location</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <?php
        foreach($h->result() as $row){
        ?>
        <tbody>
            <tr>
                <td><?=$row->hId?></td>
                <td><?=$row->name?></td>
                <td><?=$row->manager?></td>
                <td><?=$row->sectorName?></td>
                <td><?=$row->provinceName?></td>
                <td><?=$row->location?></td>
                <td><?=$row->description?></td>
                <td>
                    <a class="edit" title="Edit" data-toggle="tooltip" href='updatehotel/<?=$row->hId?>'><i class="material-icons">&#xE254;</i></a>
                    <a class="delete" title="Delete" data-toggle="tooltip" href='deletedata/<?=$row->hId?>'><i class="material-icons">&#xE872;</i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
    </div>
</body>
</html>