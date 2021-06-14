<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>

</head>
<body>
    <div class="container">
        <form action="<?php echo base_url() ?>forgot_password" method="POST" class="w-25">
            <label for="email">email</label>
            <input type="text" name="email" class="form-control">
            <input type="submit" value="send" class="btn btn-block">
            <?php
                
            ?>
        </form>
    </div>    
</body>
</html>