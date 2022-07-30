<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
    <link rel="stylesheet" href="<?= base_url('/css/bootstrap.min.css') ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a href="" class="navbar-brand" href="<? base_url('home') ?>">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toogle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?= base_url('penerima') ?>" class="nav-link">Server</a>
                    </li>
                    <?php if (session()->has('logged_in')) { ?>
                        <li class="nav-item">
                            <form method="POST" action="<?= base_url(); ?>/logout">
                                <?= csrf_field(); ?>
                                <div class="mb-3">
                                    <button type="submit" class=" btn btn-danger nav-link">Logout</button>
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

    <head class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <h1 class="h3">Server Global</h1>
                </div>
            </div>
        </div>
    </head>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>List Negara</p>
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Negara</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Indonesia</td>
                            <td>ID123</td>
                            <td>Kalimantan Timur</td>
                            <td>
                                <a title="Edit" href="<?= base_url("/indo"); ?>" class="btn btn-info">View</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Thailand</td>
                            <td>TH123</td>
                            <td>Bangkok</td>
                            <td>
                                <a title="Edit" href="<?= base_url("/thai"); ?>" class="btn btn-info">View</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Vietnam</td>
                            <td>VI123</td>
                            <td>Hanoi</td>
                            <td>
                                <a title="Edit" href="<?= base_url("/viet"); ?>" class="btn btn-info">View</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Singapura</td>
                            <td>SI123</td>
                            <td>Johor</td>
                            <td>
                                <a title="Edit" href="<?= base_url("/sing"); ?>" class="btn btn-info">View</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
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