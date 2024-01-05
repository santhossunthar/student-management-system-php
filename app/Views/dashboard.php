<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom.css'); ?>">
    <title>Dashboard</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg-primary vh-100">
                <?php include("components/dashboard/sidebar.php") ?>
            </div>

            <div class="col-md-9 p-0">
                <?php include("components/dashboard/header.php") ?>
                <main class="main-dashboard">
                    <section id="login">
                        <div class="container bg-secondary w-100 h-100 d-flex flex-column 
                                justify-content-center align-items-center p-5 m-3">
                            <h4 class="text text-dark">Dashboard</h4>
                        </div>
                    </section>

                    <section id="login">
                        <div class="container bg-secondary w-100 h-100 d-flex flex-column 
                                justify-content-center align-items-center p-5 m-3">
                            <h4 class="text text-dark">Dashboard</h4>
                        </div>
                    </section>

                    <section id="login">
                        <div class="container bg-secondary w-100 h-100 d-flex flex-column 
                                justify-content-center align-items-center p-5 m-3">
                            <h4 class="text text-dark">Dashboard</h4>
                        </div>
                    </section>

                    <section id="login">
                        <div class="container bg-secondary w-100 h-100 d-flex flex-column 
                                justify-content-center align-items-center p-5 m-3">
                            <h4 class="text text-dark">Dashboard</h4>
                        </div>
                    </section>

                    <section id="login">
                        <div class="container bg-secondary w-100 h-100 d-flex flex-column 
                                justify-content-center align-items-center p-5 m-3">
                            <h4 class="text text-dark">Dashboard</h4>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>

    <footer>
        <?php include("components/footer.php") ?>
    </footer>

    <script type="text/javascript" src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</body>

</html>