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
    <div class="container pt-5">
        <div class="w-50 m-auto border rounded border-dark p-5">
            <form action="<?php echo base_url() ?>Welcome/validate_form" method="POST">
                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="username" value="<?php echo set_value('username') ?>">
                    <span class="text-danger"><?php echo(form_error('username')); ?></span>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="password" value="<?php echo set_value('password') ?>">
                    <span class="text-danger"><?php echo(form_error('password')); ?></span>
                </div>
                <div class="form-group">
                    <?php if($this -> session -> flashdata('message')){
                        ?>
                            <div class="alert alert-danger">
                                <?php echo $this -> session ->flashdata('message') ?>
                            </div>
                        <?php
                    } ?>
                </div>
                <a href="<?php echo base_url()?>forgot_password/form">forgot password?</a>
                <div class="submit">
                    <input type="submit" value="login" class="btn btn-primary btn-block">
                </div>
            </form>
        </div>
    </div>
</body>
</html>