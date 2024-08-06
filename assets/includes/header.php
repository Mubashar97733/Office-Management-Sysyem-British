<?php $page = basename($_SERVER['PHP_SELF']); ?>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="<?php if($_SESSION['status'] == "Admin"){
            echo "admin-generate-report.php";
        }else{
            echo "dashboard-today-report.php";
        } ?>" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <?php
            if ($_SESSION['status'] == "Admin") {
            ?>
                <span class="d-none d-lg-block"><?php echo $_SESSION['status']; ?></span>
            <?php
            } else {
            ?>
                <span class="d-none d-lg-block"><?php echo $_SESSION['office']; ?> (<span style="text-transform: uppercase;"><?php echo $_SESSION['srname']; ?></span>)</span>
            <?php
            }
            ?>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="post" action="search.php">
            <input type="tel" maxlength="13" minlength="10" name="search" placeholder="Search Phone Number" title="Enter Phone Number" list="phone">
            <datalist id="phone" aria-setsize="5">
                <?php
                $data = display("bisa_inquiry");
                if ($data) {
                    foreach ($data as $data) {
                ?>
                        <option value="<?php echo $data['inq_phone']; ?>">
                        <?php
                    }
                }
                $data = display("bisa_admission");
                if ($data) {
                    foreach ($data as $data) {
                        ?>
                        <option value="<?php echo $data['a_phone']; ?>">
                    <?php
                    }
                }
                    ?>
            </datalist>
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                    <li class="nav-item">

                        <a class="nav-link nav-icon" href="dashboard-today-task.php">
                            <i class="bi bi-bell"></i>
                            <span class="badge bg-primary badge-number ">
                                <?php
                                if ($_SESSION['status'] == "Admin") {
                                    $num = dcl("bisa_inquiry");
                                } else {
                                    $condition = array(
                                        "inq_on" => $_SESSION['office'],
                                        "inq_osn" => $_SESSION['srname']
                                    );
                                    $num= dclw('bisa_inquiry', $condition);
                                }
                                echo $num;
                                ?>
                            </span>
                        </a><!-- End Notification Icon -->

                    </li><!-- End Notification Nav -->

                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <img src="assets/img/profile-img.png" alt="Profile" class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['name']; ?></span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6><?php echo $_SESSION['name']; ?></h6>
                                <span><?php echo $_SESSION['status']; ?></span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="change-password.php?pass=<?php echo $_SESSION['id']; ?>">
                                    <i class="bi bi-gear"></i>
                                    <span>Change Password</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="?logout">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                    <?php logout(); ?>
                                </a>
                            </li>

                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->

                </ul>
            </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <?php
        if ($_SESSION['status'] != "Admin") {
        ?>
            <li class="nav-item">
                <a class="nav-link <?php if ($page != "dashboard-today-report.php") {
                                        echo "collapsed";
                                    } ?>" href="dashboard-today-report.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->
        <?php
        }
        ?>

        <li class="nav-item">
            <a class="nav-link <?php if ($page != 'record-inquiry.php' && $page != 'record-admission.php') {
                                    echo "collapsed";
                                } ?>" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Records</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse <?php if ($page == 'record-inquiry.php' || $page == 'record-admission.php') {
                                                                    echo " show";
                                                                } ?>" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="record-admission.php" class="<?php if ($page == 'record-admission.php') {
                                                                echo " active";
                                                            } ?>">
                        <i class="bi bi-circle"></i><span>Admissions</span>
                    </a>
                </li>
                <li>
                    <a href="record-inquiry.php" class="<?php if ($page == 'record-inquiry.php') {
                                                            echo " active";
                                                        } ?>">
                        <i class="bi bi-circle"></i><span>Inquiries</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link <?php if ($page != 'account-daily-report.php'  && $page != 'create-expence.php' && $page != 'create-income.php') {
                                    echo "collapsed";
                                } ?>" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Accounts</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse <?php if ($page == 'account-daily-report.php' || $page == 'create-expence.php' || $page == 'create-income.php') {
                                                                echo "show";
                                                            } ?> " data-bs-parent="#sidebar-nav">
                <?php
                if ($_SESSION['status'] != "Admin") {
                ?>
                    <li>
                        <a href="account-daily-report.php" class="<?php if ($page == 'account-daily-report.php') {
                                                                        echo " active";
                                                                    } ?>">

                            <i class="bi bi-circle"></i><span>Accounts Report</span>
                        </a>
                    </li>
                <?php
                }
                ?>
                <li>
                    <a href="create-income.php" class="<?php if ($page == 'create-income.php') {
                                                            echo " active";
                                                        } ?>">
                        <i class="bi bi-circle"></i><span>Create Income</span>
                    </a>
                </li>
                <li>
                    <a href="create-expence.php" class="<?php if ($page == 'create-iexpence.php') {
                                                            echo " active";
                                                        } ?>">
                        <i class="bi bi-circle"></i><span>Create Expence</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <?php
        if ($_SESSION['status'] == 'Admin') {
        ?>
            <li class="nav-item">
                <a class="nav-link <?php if ($page != 'admin-user.php' && $page != 'admin-course.php' && $page != 'admin-generate-report.php') {
                                        echo ' collapsed';
                                    } ?>" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-person"></i><span>Admin</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse <?php if ($page == 'admin-user.php' || $page == 'admin-inquiry.php' || $page == 'admin-course.php' || $page == 'admin-generate-report.php') {
                                                                    echo ' show';
                                                                } ?>" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="admin-course.php" class="<?php if ($page == 'admin-course.php') {
                                                                echo ' active';
                                                            } ?>">
                            <i class="bi bi-circle"></i><span>Courses</span>
                        </a>
                    </li>
                    <!--<li>
                        <a href="admin-inquiry.php" class="<?php if ($page == 'admin-inquiry.php') {
                                                                echo ' active';
                                                            } ?>">
                            <i class="bi bi-circle"></i><span>Inquiry Methods</span>
                        </a>
                    </li>-->
                    <li>
                        <a href="admin-user.php" class="<?php if ($page == 'admin-user.php') {
                                                            echo ' active';
                                                        } ?>">
                            <i class="bi bi-circle"></i><span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin-generate-report.php" class="<?php if ($page == 'admin-generate-report.php') {
                                                                        echo ' active';
                                                                    } ?>">
                            <i class="bi bi-circle"></i><span>Generate Report</span>
                        </a>
                    </li>
                </ul>
            </li>
        <?php
        }
        ?>

        <li class="nav-item">
            <a class="nav-link <?php if ($page != 'exam-booking.php' && $page != 'record-exam.php' && $page != 'exam-generate-report.php') {
                                    echo ' collapsed';
                                } ?>" data-bs-target="#exam-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-card-list"></i><span>Exam</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="exam-nav" class="nav-content collapse <?php if ($page == 'exam-booking.php' || $page == 'record-exam.php' || $page == 'exam-generate-report.php') {
                                                                echo ' show';
                                                            } ?>" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="exam-booking.php" class="<?php if ($page == 'exam-booking.php') {
                                                            echo " active";
                                                        } ?>">
                        <i class="bi bi-circle"></i><span>Exam Booking</span>
                    </a>
                </li>
                <li>
                    <a href="record-exam.php" class="<?php if ($page == 'record-exam.php') {
                                                            echo " active";
                                                        } ?>">
                        <i class="bi bi-circle"></i><span>Exam Booked</span>
                    </a>
                </li>
                <li>
                    <a href="exam-generate-report.php" class="<?php if ($page == 'exam-generate-report.php') {
                                                                    echo ' active';
                                                                } ?>">
                        <i class="bi bi-circle"></i><span>Generate Report</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="?logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
            </a>
        </li><!-- End Login Page Nav -->

    </ul>

</aside><!-- End Sidebar-->