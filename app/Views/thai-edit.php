<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="<?= base_url('/css/bootstrap.min.css') ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a href="" class="navbar-brand" href="<? base_url('/home') ?>">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toogle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
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
                    <h1 class="h3">Edit Product</h1>
                </div>
            </div>
        </div>
    </head>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Silahkan isi form dibawah ini untuk menambahkan product</p>
                <hr>
                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        <hr>
                        <?php echo session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="<?= base_url('thai/update/' . $product->id_barang); ?>">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" value="<?= $product->nama_barang; ?>" name="nama_barang">
                    </div>
                    <div class="mb-3">
                        <label for="penerima" class="form-label">Penerima</label>
                        <input type="text" class="form-control" id="penerima" value="<?= $product->penerima; ?>" name="penerima">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" value="<?= $product->alamat; ?>" name="alamat">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- jquery dan bootstrap -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>
<footer class="jumbotron jumbotron-fluid mt-5 mb-0">
    <div class="container text-center">
        Copyright &copy <?= Date('Y') ?> Project
    </div>
</footer>

</html>