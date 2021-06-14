<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="<?php echo base_url() ?>forgot_password/change_password" method="POST" class="w-25">
            <label for="newPassword">New password</label>
            <input type="text" name="password" id="password" class="form-control">
            <input type="hidden" name="id" value="<?php $this -> uri->segment(3) ?>">
            <input type="submit" class="btn btn-block btn-primary" value="submit" value="submit">
        </form>
    </div>
</body>
</html>