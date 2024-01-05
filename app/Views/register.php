<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom.css'); ?>">
    <title>Register</title>
</head>

<body>
    <header>
        <?php include("components/navbar.php") ?>
    </header>

    <main>
        <section id="login">
            <div class="container bg-secondary w-25 h-100 d-flex flex-column 
                justify-content-center align-items-center my-5 p-5">
                <h4 class="text text-dark">Create an Account</h4>
                <form>
                    <div class="form-group my-2">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group my-2">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="form-group my-2">
                        <label for="password">Confirm Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 my-3">Sign Up</button>
                    <div class="form-alert text-center">
                        <small id="authAlert" class="form-text text-danger">Account creation failed!</small>
                    </div>
                    <div class="login mt-3">
                        <a href="<?php echo base_url('login'); ?>" class="btn btn-primary w-100">Login</a>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <?php include("components/footer.php") ?>
    </footer>

    <script type="text/javascript" src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</body>

</html>