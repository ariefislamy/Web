
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>/assets/images/ksop.png">
    <title>Arsip Lala</title>
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/bootstrap/css/bootstrap.min.v4.css">
<link href="<?php echo base_url() ?>/css/bg.css" rel="stylesheet">

</head>
<body>

<br><br><br><br><br><br>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-transparent mb-0"><h5 class="text-center">
            <span class="font-weight-bold text-primary"><img width="120px" src="<?php echo base_url() ?>/assets/images/nama.png" alt="homepage" class="dark-logo" /></span></h5></div>
            <div class="card-body">
            <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
            <?php endif;?>
              <form action="/login/auth" method="post">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="Username" id="InputForEmail" value="<?= set_value('email') ?>">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Password" id="InputForPassword">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block" >Masuk</button>                 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url() ?>/js/bootstrap.v4/jquery.js"></script> 
    <script src="<?php echo base_url() ?>/js/bootstrap.v4/popper.js"></script> 
    <script src="<?php echo base_url() ?>/js/bootstrap.v4/bootstrap.js"></script>
</body>