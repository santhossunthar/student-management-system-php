<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom.css'); ?>">
    <title>Students</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg-primary p-0 vh-100">
                <?php include("components/main/sidebar.php") ?>
            </div>

            <div class="col-md-9 p-0">
                <div class="container-fluid bg-light p-2 ps-3 pe-3 d-flex justify-content-between">
                    <h5>Students</h5>
                    <h5>Logout</h5>
                </div>

                <main class="main-dashboard">
                    <section id="add">
                        <div class="container bg-light w-100 h-100 p-3 m-3">
                            <div class="row d-flex flex-column">
                                <div class="col-md-6 w-100">
                                    <h5 class="text-dark">Add Student</h5>
                                </div>
                                <div class="col-md-6 w-100 px-4">
                                    <form action="<?php echo base_url('students/add') ?>" method="$_POST">
                                        <div class="row my-2">
                                            <div class="col-md-6">
                                                <div class="form-group d-flex gap-3">
                                                    <label class="w-25" for="studentid">Student ID:</label>
                                                    <input class="form-control form-input w-75" type="text" name="studentid" id="studentid" />
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group d-flex gap-3">
                                                    <label class="w-25" for="studentid">First Name:</label>
                                                    <input class="form-control form-input w-75" type="text" name="studentid" id="studentid" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row my-2">
                                            <div class="col-md-6">
                                                <div class="form-group d-flex gap-3">
                                                    <label class="w-25" for="studentid">Last Name:</label>
                                                    <input class="form-control form-input w-75" type="text" name="studentid" id="studentid" />
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group d-flex gap-3">
                                                    <label class="w-25" for="studentid">Date of Birth:</label>
                                                    <input class="form-control form-input w-75" type="text" name="studentid" id="studentid" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row my-2">
                                            <div class="col-md-6">
                                                <div class="form-group d-flex gap-3">
                                                    <label class="w-25" for="studentid">Location:</label>
                                                    <input class="form-control form-input w-75" type="text" name="studentid" id="studentid" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="form-group d-flex gap-3">
                                                    <button type="submit" class="btn btn-primary form-btn text-center">Add</button>
                                                    <button type="reset" class="btn btn-primary form-btn text-center">Clear</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="view">
                        <div class="container bg-light w-100 h-100 p-3 m-3">
                            <div class="row d-flex flex-column">
                                <div class="col-md-6 w-100">
                                    <h5 class="text-dark">Students Details</h5>
                                </div>

                                <div class="col-md-6 w-100 px-4">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Student ID</th>
                                                <th scope="col">Full Name</th>
                                                <th scope="col">Location</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>
                                                    <a href="#" class="bg-danger px-2 py-1 text-light text-decoration-none ds-cursor">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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