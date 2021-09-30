<?= $this->extend('layout') ?>
<?= $this->section('content') ?>    
    <?php
        $username = [
            'name' => 'username',
            'id' => 'username',
            'value' => null,
            'class' => 'form-control'
    ];
        $password = [
            'name' => 'password',
            'id' => 'password',
            'class' => 'form-control'
    ];

    $session = session();
    $errors = $session->getFlashData('errors');
    ?>
    <?= form_open('Auth/login') ?>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-transparent mb-0">
                <h5 class="text" align="center">
                    <span class="font-weight-bold text">LOGIN FORM</span></h5>
                </div>
                <?php if($errors != null): ?>
        <div class="alert alert-danger" align="center" role="alert">
            <h4 class="alert-heading">Terjadi Kesalahan</h4>
            <hr>
            <p class="mb-0">
                <?php
                    foreach($errors as $err){
                        echo $err.'<br>';
                    }
                    ?>
            </p>
        </div>
    <?php endif ?>
        <div class="card-body">
          <form action="">
        <div class="form-group">
            <?= form_label("Username","username") ?>
            <?= form_input($username) ?>
        </div>
        <div class="form-group">
            <?= form_label("Password","password") ?>
            <?= form_password($password) ?>
        </div>
        <div class="text-right">
            <?= form_submit('submit','Submit',['class'=>'btn btn-primary']) ?>
        </div>
    <?= form_close() ?>
<?= $this->endSection() ?>