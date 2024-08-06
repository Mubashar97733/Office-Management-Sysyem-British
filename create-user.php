<?php include "assets/includes/function.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>British Institute</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <main>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-12 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-5">
                        <a class="logo d-flex align-items-center w-auto">
                            <img src="assets/img/logo.png" alt="">
                            <span class="d-none d-lg-block">British Institute</span>
                        </a>
                    </div><!-- End Logo -->

                    <?php
                    if (isset($_REQUEST['edit_user'])) {
                        $condition = array(
                            "u_id" => $_REQUEST['edit_user']
                        );
                        $data = display_where("bisa_user", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                            ?>
                                <div class="card mb-3">

                                    <div class="card-body">

                                        <div class="pt-4 pb-4">
                                            <h5 class="card-title text-center pb-0 fs-4">Update User</h5>
                                        </div>

                                        <form class="row g-3" id="update-user">
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="text" value="<?php echo $user['u_name']; ?>" class="form-control u_name" id="u_name" placeholder="Name" required>
                                                    <label for="u_name">Name <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="text" value="<?php echo $user['u_username']; ?>" class="form-control u_username" id="u_username" placeholder="UserName" required>
                                                    <label for="u_username">UserName <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="tel" value="<?php echo $user['u_phone']; ?>" class="form-control u_phone" id="u_name" placeholder="Phone" required>
                                                    <label for="u_phone">Phone <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <select name="" id="u_status" class="form-control u_status" required>
                                                        <option value="Admin" <?php if ($user['u_status'] == 'Admin') {
                                                                                    echo 'selected';
                                                                                } ?>>Admin</option>
                                                        <option value="Data Operator" <?php if ($user['u_status'] == 'Data Operator') {
                                                                                            echo 'selected';
                                                                                        } ?>>Data Operator</option>
                                                        <option value="Supervissor" <?php if ($user['u_status'] == 'Supervissor') {
                                                                                        echo 'selected';
                                                                                    } ?>>Supervisor</option>
                                                    </select>
                                                    <label for="u_status">Status <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input type="password" value="<?php echo $user['u_pass']; ?>" class="form-control u_pass" id="u_pass" placeholder="Password" required>
                                                    <label for="u_pass">Password <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <?php
                                            $d = display("bisa_office");
                                            ?>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <select name="u_on" class="form-control u_on" id="u_on">
                                                        <?php
                                                        if ($d) {
                                                            foreach ($d as $u) {
                                                        ?>
                                                                <option value="<?php echo $u['o_name']; ?>" <?php if($user['u_on']==$u['o_name']){ echo "selected"; } ?>><?php echo $u['o_name']; ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                    <label for="u_on">Institute <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <select name="u_osn" class="form-control u_osn" id="u_osn">
                                                        <option value="" selected disabled>Select</option>
                                                        <?php
                                                        if ($d) {
                                                            foreach ($d as $u) {
                                                            ?>
                                                                <option value="<?php echo $u['o_srname']; ?>" <?php if($user['u_osn']==$u['o_srname']){ echo "selected"; } ?>><?php echo $u['o_srname']; ?></option>
                                                            <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                    <label for="u_osn">Branch <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="update-user"></div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                        <script>
                                            const update = document.getElementById('update-user');
                                            update.addEventListener('submit', (event) => {
                                                event.preventDefault();
                                                update_user(<?php echo $user['u_id']; ?>);
                                            })
                                        </script>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                    } else {
                        ?>
                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-4">
                                    <h5 class="card-title text-center pb-0 fs-4">Create User</h5>
                                </div>

                                <form class="row g-3" id="create-user">
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control u_name" id="u_name" placeholder="Name" required>
                                            <label for="u_name">Name <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control u_username" id="u_username" placeholder="UserName" required>
                                            <label for="u_username">UserName <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control u_phone" id="u_name" placeholder="Phone" required>
                                            <label for="u_phone">Phone <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <select name="" id="u_status" class="form-control u_status" required>
                                                <option value="" selected disabled>Select</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Data Operator">Data Operator</option>
                                                <option value="Supervisor">Supervisor</option>
                                            </select>
                                            <label for="u_status">Status <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <input type="password" class="form-control u_pass" id="u_pass" placeholder="Password" required>
                                            <label for="u_pass">Password <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <?php
                                    $d = display("bisa_office");
                                    ?>
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <select name="u_on" class="form-control u_on" id="u_on">
                                                <?php
                                                if ($d) {
                                                    foreach ($d as $u) {
                                                ?>
                                                        <option value="<?php echo $u['o_name']; ?>"><?php echo $u['o_name']; ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <label for="co_on">Institute <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <select name="u_osn" class="form-control u_osn" id="u_osn">
                                                <option value="" selected disabled>Select</option>
                                                <?php
                                                if ($d) {
                                                    foreach ($d as $u) {
                                                ?>
                                                        <option value="<?php echo $u['o_srname']; ?>"><?php echo $u['o_srname']; ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <label for="co_osn">Branch <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="create-user"></div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    <?php
                    }
                    ?>

                    <div class="d-flex justify-content-center py-3">
                        <a href="admin-user.php" class="d-flex align-items-center btn btn-secondary">Back</a>
                    </div><!-- End Logo -->

                </div>
            </div>

        </div>
    </main>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/sweetalert.js"></script>
    <script src="js/validation.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        const cr = document.getElementById('create-user');
        cr.addEventListener('submit', (event) => {
            event.preventDefault();
            create_user();
        })
    </script>
</body>

</html>