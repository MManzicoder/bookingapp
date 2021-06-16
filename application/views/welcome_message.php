<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
     <h2 class="text-center">Register with rdev</h2>
     <form action="<?=base_url();?>register/validation">
        <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" value="<?=set_value('username');?>" name="username">
        <span class="text-danger"><?=form_error('username');?></span>
        </div>     
        <div class="form-group">
        <label for="email">email</label>
        <input type="text" class="form-control" value="<?=set_value('email');?>" name="email">
        <span class="text-danger"><?=form_error('email');?></span>
        </div>     
        <div class="form-group">
        <label for="password">password</label>
        <input type="text" class="form-control" value="<?=set_value('password');?>" name="password">
        <span class="text-danger"><?=form_error('password');?></span>
        </div>     
        <button class="btn btn-primary btn-outlined">Register</button>
     </form>
    </div>
</body>
</html>