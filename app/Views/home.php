<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom.css'); ?>">
    <title>Home</title>
</head>

<body>
    <header>
        <?php include("components/navbar.php") ?>
    </header>

    <main>
        <section class="main">
            <?php include("components/login.php") ?>
        </section>
    </main>

    <footer>
        <?php include("components/footer.php") ?>
    </footer>

    <script type="text/javascript" src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</body>

</html>