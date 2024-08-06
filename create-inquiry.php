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
                    $course = display_order("bisa_course", "co_name");
                    if (isset($_REQUEST['edit_inquiry'])) {
                        $condition = array(
                            "inq_id" => $_REQUEST['edit_inquiry']
                        );
                        $data = display_where("bisa_inquiry", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                    ?>
                                <div class="card mb-3">

                                    <div class="card-body">

                                        <div class="pt-4 pb-4">
                                            <h5 class="card-title text-center pb-0 fs-4">Update Inquiry</h5>
                                        </div>

                                        <form class="row g-3" id="update-inquiry">
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="text" value="<?php echo $user['inq_name']; ?>" class="form-control inq_name" id="inq_name" placeholder="Name" required>
                                                    <label for="inq_name">Name <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <select name="" id="inq_course" class="form-control inq_course" required>
                                                        <option value="" selected disabled>Select</option>
                                                        <?php
                                                        if ($course) {
                                                            foreach ($course as $course) {
                                                        ?>
                                                                <option value="<?php echo $course['co_name']; ?>" <?php if ($user['inq_course'] == $course['co_name']) {
                                                                                                                        echo "selected";
                                                                                                                    } ?>><?php echo $course['co_name']; ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                    <label for="inq_course">Status <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input type="tel" value="<?php echo $user['inq_phone']; ?>" class="form-control inq_phone" id="inq_phone" placeholder="Phone" required>
                                                    <label for="inq_phone">Phone <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 <?php if ($_SESSION['status'] == "Admin") {
                                                                    echo "col-md-3";
                                                                } else {
                                                                    echo "col-md-4";
                                                                } ?>">
                                                <div class="form-floating">
                                                    <input type="text" value="<?php echo $user['inq_area']; ?>" class="form-control inq_area" id="inq_area" placeholder="Address">
                                                    <label for="inq_area">Address</label>
                                                </div>
                                            </div>
                                            <div class="col-12 <?php if ($_SESSION['status'] == "Admin") {
                                                                    echo "col-md-3";
                                                                } else {
                                                                    echo "col-md-4";
                                                                } ?>">
                                                <div class="form-floating">
                                                    <input type="date" value="<?php echo $user['inq_remind_date']; ?>" class="form-control inq_date_com" id="inq_date_com" placeholder="Commited Date" required>
                                                    <label for="inq_date_com">Commeted Date <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 <?php if ($_SESSION['status'] == "Admin") {
                                                                    echo "col-md-3";
                                                                } else {
                                                                    echo "col-md-4";
                                                                } ?>">
                                                <div class="form-floating">
                                                    <input type="text" value="<?php echo $user['inq_comment']; ?>" class="form-control inq_comment" id="inq_comment" placeholder="Comments">
                                                    <label for="inq_comment">Comments</label>
                                                </div>
                                            </div>
                                            <div class="col-12 <?php if ($_SESSION['status'] == "Admin") {
                                                                    echo "col-md-3";
                                                                } else {
                                                                    echo "col-md-4";
                                                                } ?>">
                                                <div class="form-floating">
                                                    <input type="date" value="<?php echo $user['inq_date']; ?>" name="inq_date" id="inq_date" class="form-control inq_date" required>
                                                    <label for="inq_date">Date of Inquiry <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 <?php if ($_SESSION['status'] == "Admin") {
                                                                    echo "col-md-3";
                                                                } else {
                                                                    echo "col-md-4";
                                                                } ?>">
                                                <div class="form-floating">
                                                    <select name="inq_method" onchange="inq_th(this.value)" class="form-control inq_method" id="inq_method" required>
                                                        <option value="Message" <?php if ($user['inq_method'] == "Message") {
                                                                                    echo "selected";
                                                                                } ?>>Message</option>
                                                        <option value="Call" <?php if ($user['inq_method'] == "Call") {
                                                                                    echo "selected";
                                                                                } ?>>Call</option>
                                                        <option value="Whatsapp" <?php if ($user['inq_method'] == "Whatsapp") {
                                                                                        echo "selected";
                                                                                    } ?>>Whatsapp</option>
                                                        <option value="Social-Media" <?php if ($user['inq_method'] == "Socia Media") {
                                                                                            echo "selected";
                                                                                        } ?>>Social Media</option>
                                                        <option value="Visited" <?php if ($user['inq_method'] == "Visted") {
                                                                                    echo "selected";
                                                                                } ?>>Visited</option>
                                                    </select>
                                                    <label for="inq_method">Inquiry Through <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <?php
                                            if ($_SESSION['status'] == "Admin") {
                                                $c = array(
                                                    "im_method" => $user['inq_method']
                                                );
                                            } else {
                                                $c = array(
                                                    "im_method" => $user['inq_method'],
                                                    "im_on" => $_SESSION['office'],
                                                    "im_osn" => $_SESSION['srname']
                                                );
                                            }
                                            $d = display_where("bisa_inq_method", $c);
                                            ?>
                                            <div class="col-12 <?php if ($_SESSION['status'] == "Admin") {
                                                                    echo "col-md-3";
                                                                } else {
                                                                    echo "col-md-4";
                                                                } ?>">
                                                <div class="form-floating">
                                                    <select name="inq_detail" class="form-control inq_detail" id="inq_detail" required>
                                                        <?php
                                                        if ($d) {
                                                            foreach ($d as $u) {
                                                        ?>
                                                                <option value="<?php echo $u['im_meth_detail']; ?>" <?php if ($user['inq_detail'] == $u['im_meth_detail']) {
                                                                                                                        echo "selected";
                                                                                                                    } ?>><?php echo $u['im_meth_detail']; ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                    <label for="inq_detail">Inquiry Through <span style="color: red;">*</span></label>
                                                </div>
                                            </div>
                                            <?php
                                            if ($_SESSION['status'] == "Admin") {
                                                $d = display("bisa_office");
                                            ?>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <select name="inq_on" id="inq_on" class="form-control inq_on" required>
                                                            <?php
                                                            if ($d) {
                                                                foreach ($d as $u) {
                                                            ?>
                                                                    <option value="<?php echo $u['o_name']; ?>" <?php if ($u['o_name'] == $user['inq_on']) {
                                                                                                                    echo "selected";
                                                                                                                } ?>><?php echo $u['o_name']; ?></option>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                        <label for="inq_on">Institute <span style="color: red;">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-floating">
                                                        <select name="inq_osn" id="inq_osn" class="form-control inq_osn" required>
                                                            <?php
                                                            if ($d) {
                                                                foreach ($d as $u) {
                                                            ?>
                                                                    <option value="<?php echo $u['o_srname']; ?>" <?php if ($u['o_srname'] == $user['inq_osn']) {
                                                                                                                        echo "selected";
                                                                                                                    } ?>><?php echo $u['o_srname']; ?></option>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                        <label for="inq_osn">Branch <span style="color: red;">*</span></label>
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                            <div class="update-inquiry"></div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <script>
                                            const update = document.getElementById('update-inquiry');
                                            update.addEventListener('submit', (event) => {
                                                event.preventDefault();
                                                <?php
                                                if ($_SESSION['status'] == "Admin") {
                                                ?>
                                                    update_inquiry_admin(<?php echo $user['inq_id']; ?>);
                                                <?php
                                                } else {
                                                ?>
                                                    update_inquiry(<?php echo $user['inq_id']; ?>);

                                                <?php
                                                }
                                                ?>
                                            })
                                        </script>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                    } else if (isset($_REQUEST['phone'])) {
                        $phone = $_REQUEST['phone'];
                        ?>
                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-4">
                                    <h5 class="card-title text-center pb-0 fs-4">Create Inquiry</h5>
                                </div>

                                <form class="row g-3" id="create-inquiry" method="post">
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control inq_name" id="inq_name" placeholder="Name" required>
                                            <label for="inq_name">Name <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <select name="" id="inq_course" class="form-control inq_course" required>
                                                <option value="" selected disabled>Select</option>
                                                <?php
                                                if ($course) {
                                                    foreach ($course as $course) {
                                                ?>
                                                        <option value="<?php echo $course['co_name']; ?>"><?php echo $course['co_name']; ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <label for="inq_course">Course <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="tel" value="<?php echo $phone; ?>" class="form-control inq_phone" id="inq_phone" placeholder="Phone" required>
                                            <label for="inq_phone">Phone <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-12 <?php if ($_SESSION['status'] == "Admin") {
                                                            echo "col-md-3";
                                                        } else {
                                                            echo "col-md-4";
                                                        } ?>">
                                        <div class="form-floating">
                                            <select name="inq_method" onchange="inq_th(this.value)" class="form-control inq_method" id="inq_method" required>
                                                <option value="">Select</option>
                                                <option value="Call">Call</option>
                                                <option value="Visited">Visited</option>
                                                <option value="Whatsapp">Whatsapp</option>
                                                <option value="Message">Message</option>
                                                <option value="Social-Media">Social Media</option>
                                            </select>
                                            <label for="inq_method">Inquiry Method <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-12 <?php if ($_SESSION['status'] == "Admin") {
                                                            echo "col-md-3";
                                                        } else {
                                                            echo "col-md-4";
                                                        } ?>">
                                        <div class="form-floating">
                                            <select name="inq_detail" class="form-control inq_detail" id="inq_detail" required>
                                                <option value="">Select</option>
                                            </select>
                                            <label for="inq_detail">Inquiry Method <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <?php
                                    if ($_SESSION['status'] == "Admin") {
                                        $d = display("bisa_office");
                                    ?>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                <select name="inq_on" id="inq_on" class="form-control inq_on" required>
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
                                                <label for="inq_on">Institute <span style="color: red;">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                <select name="inq_osn" id="inq_osn" class="form-control inq_osn" required>
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
                                                <label for="inq_osn">Branch <span style="color: red;">*</span></label>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control inq_area" id="inq_area" placeholder="Address">
                                            <label for="inq_area">Address</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="date" value="<?php echo date("Y-m-d", strtotime("+4days")); ?>" class="form-control inq_date_com" min="<?php echo $A; ?>" id="inq_date_com" placeholder="Commited Date" required>
                                            <label for="inq_date_com">Commeted Date <span style="color: red;">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control inq_comment" id="inq_comment" placeholder="Comments">
                                            <label for="inq_comment">Comments</label>
                                        </div>
                                    </div>
                                    <div class="create-inquiry"></div>
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
        const cr = document.getElementById('create-inquiry');
        cr.addEventListener('submit', (event) => {
            event.preventDefault();
            <?php
            if ($_SESSION['status'] == "Admin") {
            ?>
                create_inquiry_admin();
            <?php
            } else {
            ?>
                create_inquiry();
            <?php
            }
            ?>
        })
    </script>
</body>

</html>