<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
<body class="mt-5">

<nav class="navbar navbar-expand-md navbar-dark bg-info fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Laundry Roket</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="btn btn-info" href="<?= site_url('auth/login') ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-info" href="<?= site_url('auth/register') ?>">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4">" " " Laundry Roket " " "</h1>
            <h7 class="display-4">Laundry cepat seperti Roket yang Meluncur Pshuuuu</h7>
        </div>
    </div>

    <div class="content" id="content">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-4">
                    <img src="<?= base_url('assets'); ?>/l3.jpg" width="100%" class="image">
                </div>
                <div class="col-md-5">
                    <h4>Males ke tempat laundry? Tenang bisa di Anter-Jemput Kok Dan gaa di depan gang</h4>
                </div>
            </div>

            <div class="row justify-content-center mb-5">
                <div class="col-md-4">
                    <img src="<?= base_url('assets'); ?>/l2.jpg" width="100%" class="image">
                </div>
                <div class="col-md-5">
                    <h4>Namanya aja Laundry roket jadiii gapake lama</h4>
                </div>
            </div>

            <div class="row justify-content-center mb-5">
                <div class="col-md-4">
                    <img src="<?= base_url('assets'); ?>/l1.jpg" width="100%" class="image">
                </div>
                <div class="col-md-5">
                    <h4>Baju jadi Bersih dan Wangi POLLLLL</h4>
                </div>
            </div>
        </div>
    </div>
    
    <div class="portfolio bg-light pb-3" id="portfolio">
        <div class="container">
            <div class="row mb-2 pt-2">
                <div class="col text-center">
                    <h3>About We</h3>
                </div>
            </div>
            <div class="row mb-3 text-center">
                <div class="col-md">
                    <div class="card">
                        <img src="<?= base_url('assets'); ?>/foto3.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Front End</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card">
                        <img src="<?= base_url('assets'); ?>/foto4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Database</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card">
                        <img src="<?= base_url('assets'); ?>/foto1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Back End</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card">
                        <img src="<?= base_url('assets'); ?>/foto2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Back End</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="contact pt-3 bg-light">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3>Contact We</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card text-dark bg-light mb-3 text-center">
                        <div class="card-body">
                            <h5 class="card-title">Address</h5>
                            <p class="card-text">Jl. Melati gg Mawar No. 10</p>
                        </div>
                    </div>
                    <ul class="list-group text-center">
                        <li class=" list-group-item">
                            <h4>Social Media</h4>
                        </li>
                        <li class="list-group-item">Email : laudryroket@gmail.com</li>
                        <li class="list-group-item">Instagram : laudryroket</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="notelp">Nomor telpon</label>
                            <input type="text" class="form-control" id="notelp">
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea type="text" class="form-control" id="pesan"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</head>
<footer class="text-center bg-light pt-5">
    <div class="container">
        <div class="row pt-2">
            <div class="col">
                <p>@Copyright by Laundry Rocket.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>