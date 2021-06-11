<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All available users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container b-2 d-flex" style="width: 90%; flex-wrap: wrap; height: 70vh; margin: 10 auto;">
      <?php foreach($users as $user) { ?>
      <div class="card h-30 p-5 b-3 m-2" style="width: 30%;">
         <h2><?=$user["firstname"]." ".$user["lastname"]?></h2>
          <p><?=$user["username"]?></p>
          <p><?=$user["email"]?></p>
      </div>
      <?php } ?>
    </div>
</body>
</html>