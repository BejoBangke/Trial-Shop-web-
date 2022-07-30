<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('/css/bootstrap.min.css') ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a href="" class="navbar-brand" href="<? base_url('/home') ?>">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toogle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <?php if (session()->has('logged_in')) { ?>
                        <li class="nav-item">
                            <a href="<?= base_url('penerima') ?>" class="nav-link">Server</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="<?= base_url(); ?>/logout">
                                <?= csrf_field(); ?>
                                <div class="mb-3 top-0 start-100">
                                    <button type="submit" class=" btn btn-danger nav-link ">Logout</button>
                                </div>
                            </form>

                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a href="<?= base_url('login') ?>" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('register') ?>" class="nav-link">Register</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <head class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <h1 class="h3 ">Welcome My to Website 😁 😁 😁</h1>
                </div>
            </div>
        </div>
    </head>

    <div class="container">
        <div class="row">
            <div class="col-md-12 my-2 card bg-secondary text-white">
                <div class="card-body">
                    <h5 class="h5">
                        Yey
                    </h5>
                    <p>Selamat anda berhasil masuk website Ku</p>
                    <a title="Edit" href="<?= base_url("/penerima"); ?>" class="btn btn-info">Server</a>
                </div>
            </div>
        </div>
    </div>
    <!-- jquery dan bootstrap -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>
<footer class="jumbotron jumbotron-fluid fixed-bottom mt-5 mb-0">
    <div class="container text-center">
        Copyright &copy <?= Date('Y') ?> Project
    </div>
</footer>

</html>