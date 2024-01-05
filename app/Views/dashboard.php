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
    <header>
        <?php include("components/navbar.php") ?>
    </header>

    <main>
        <div class="container-fluid">
            <div class="row mx-5">
                <aside class="col-md-2 my-5">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">
                            Students
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Lecturers
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Courses
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Attendances
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Payments
                        </a>
                    </div>
                </aside>

                <section id="login" class="col-md-10 my-5">
                    <div class="container bg-secondary w-100 h-100 d-flex flex-column 
                justify-content-center align-items-center p-5">
                        <h4 class="text text-dark">Dashboard</h4>
                    </div>
                </section>
            </div>
        </div>

    </main>

    <footer>
        <?php include("components/footer.php") ?>
    </footer>

    <script type="text/javascript" src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</body>

</html>