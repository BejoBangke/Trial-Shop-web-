<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Yellow Tamu</title>
    <link rel="stylesheet" href="<?= base_url('/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/LogReg/LogReg.css') ?>">
</head>
<body>
    <div class="login-page">
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <h4>Periksa Entrian Form</h4>
                <hr>
                <?php echo session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
        <div class="form">
            <form method="POST" class="register-form" action="<?= base_url(); ?>/register/process">
                <?= csrf_field(); ?>
                <input type="text" placeholder="Username" id="username" name="username" />
                <input type="password" placeholder="Pasword" id="password" name="password" />
                <input type="password" placeholder="Confirm Password" id="password_conf" name="password_conf" />
                <input type="text" placeholder="Name" id="name" name="name" />
                <button>create</button>
                <p class="message">Udah Ada? <a href="#">Gass</a></p>
            </form>
            <form method="POST" class="login-form" action="<?= base_url(); ?>/login/process">
                <?= csrf_field(); ?>
                <input type="text" placeholder="username" id="username" name="username" />
                <input type="password" placeholder="password" id="password" name="password" />
                <button>login</button>
                <p class="message">Blom Daftar? <a href="#">Skuy Buat Baru</a></p>
            </form>
        </div>
    </div>

    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('LogReg/LogReg.js') ?>"></script>

</body>

</html>