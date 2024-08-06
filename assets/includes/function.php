<?php


include "connection.php";
session_start();

$limit = 20;
$A = date("Y-m-d");
$B = date("Y-m-d", strtotime("-1 days"));
$C = date("Y-m-d", strtotime("-2 days"));
$DOB = date("Y-m-d", strtotime("-14 years"));
$D7 = date("Y-m-d", strtotime("+7 days"));

function report_in($date, $on, $osn)
{
    ?>
    <div class="row">

        <div class="col-12">

            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Fee Detail</th>
                        <th>Source</th>
                        <th>Income</th>
                        <th>Method</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $condition = array(
                        "f_date" => $date,
                        "f_on" => $on,
                        "f_osn" => $osn
                    );
                    $in_to = 1;
                    $tfee = sum_where("bisa_fee", "f_rs", $condition);
                    $data = display_where("bisa_fee", $condition);
                    if ($data) {
                        foreach ($data as $user) {
                    ?>
                            <tr class="<?php echo $user['f_roll'];
                                        if ($user['edit'] == 1) {
                                            echo " table-warning";
                                        } ?>">
                                <td><?php echo $in_to;
                                    $in_to++; ?></td>
                                <td><?php echo $user['f_detail']; ?></td>
                                <td><?php if ($user['f_co'] == NULL) {
                                        echo "<i class='bi bi-three-dots'></i>";
                                    } else {
                                        echo $user['f_co'];
                                    }; ?></td>
                                <td><?php echo $user['f_rs']; ?></td>
                                <td><?php echo $user['f_meth']; ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3">Total Income</th>
                        <th colspan="2"><?php echo $tfee ?></th>
                    </tr>
                </tfoot>
            </table>

        </div>

        <div class="col-12">

            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Income Detail</th>
                        <th>Income</th>
                        <th>Method</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $condition = array(
                        "io_date" => $date,
                        "io_io" => "In",
                        "io_on" => $on,
                        "io_osn" => $osn
                    );
                    $tin = sum_where("bisa_in_out", "io_rs", $condition);
                    $data = display_where("bisa_in_out", $condition);
                    $in_to = 1;
                    if ($data) {
                        foreach ($data as $user) {
                    ?>
                            <tr class="<?php echo $user['io_id'];
                                        if ($user['edit'] == 1) {
                                            echo 'table-warning';
                                        } ?>">
                                <td><?php echo $in_to;
                                    $in_to++; ?></td>
                                <td><?php echo $user['io_detail']; ?></td>
                                <td><?php echo $user['io_rs']; ?></td>
                                <td><?php echo $user['io_meth']; ?></td>
                                <td>
                                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                                        <i class="bi bi-gear"></i>
                                    </a><!-- End Profile Iamge Icon -->

                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="create-income.php?edit_income=<?php echo $user['io_id']; ?>">
                                                <i class="bi bi-pencil-square"></i>
                                                <span>Edit</span>
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>

                                        <li>
                                            <button class="dropdown-item d-flex align-items-center" onclick="delete_io('<?php echo $user['io_id']; ?>')">
                                                <i class="bi bi-x-circle"></i>
                                                <span>Delete </span>
                                            </button>
                                        </li>

                                    </ul>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="2">Total Income</th>
                        <th colspan="3"><?php echo $tin; ?></th>
                    </tr>
                </tfoot>
            </table>

        </div>

    </div>
 <?php
}

function report_out($date, $on, $osn)
{
    ?>
        <div class="row">

            <div class="col-12">

                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Expense Detail</th>
                            <th>Category</th>
                            <th>Expense</th>
                            <th>Method</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $condition = array(
                            "io_date" => $date,
                            "io_on" => $on,
                            "io_osn" => $osn,
                            "io_io" => "Out"
                        );
                        $in_ex = 1;
                        $tex = sum_where("bisa_in_out", "io_rs", $condition);
                        $data = display_where("bisa_in_out", $condition);
                        if ($data) {
                            foreach ($data as $user) {
                        ?>
                                <tr class="<?php echo $user['io_id'];
                                            if ($user['edit'] == 1) {
                                                echo " table-warning";
                                            } ?>">
                                    <td><?php echo $in_ex;
                                        $in_ex++; ?></td>
                                    <td><?php echo $user['io_detail']; ?></td>
                                    <td><?php echo $user['io_cat']; ?></td>
                                    <td><?php echo $user['io_rs']; ?></td>
                                    <td><?php echo $user['io_meth']; ?></td>
                                    <td>
                                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                                            <i class="bi bi-gear"></i>
                                        </a><!-- End Profile Iamge Icon -->

                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="create-expence.php?edit_expense=<?php echo $user['io_id']; ?>">
                                                    <i class="bi bi-pencil-square"></i>
                                                    <span>Edit</span>
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>

                                            <li>
                                                <button class="dropdown-item d-flex align-items-center" onclick="delete_io('<?php echo $user['io_id']; ?>')">
                                                    <i class="bi bi-x-circle"></i>
                                                    <span>Delete </span>
                                                </button>
                                            </li>

                                        </ul>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3">Total Expence</th>
                            <th colspan="3"><?php echo $tex; ?></th>
                        </tr>
                    </tfoot>
                </table>

            </div>

            <div class="col-12">

                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Expense Category</th>
                            <th>Expence</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>Tea</th>
                            <?php
                            $condition = array(
                                "io_cat" => "Tea",
                                "io_date" => $date,
                                "io_on" => $on,
                                "io_osn" => $osn
                            );
                            $tea = sum_where("bisa_in_out", "io_rs", $condition);
                            ?>
                            <td><?php echo $tea; ?></td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <th>Lunch</th>
                            <?php
                            $condition = array(
                                "io_cat" => "Lunch",
                                "io_date" => $date,
                                "io_on" => $on,
                                "io_osn" => $osn
                            );
                            $lunch = sum_where("bisa_in_out", "io_rs", $condition);
                            ?>
                            <td><?php echo $lunch; ?></td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <th>Rent</th>
                            <?php
                            $condition = array(
                                "io_cat" => "Rent",
                                "io_date" => $date,
                                "io_on" => $on,
                                "io_osn" => $osn
                            );
                            $rent = sum_where("bisa_in_out", "io_rs", $condition);
                            ?>
                            <td><?php echo $rent; ?></td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <th>Teachers Pay</th>
                            <?php
                            $condition = array(
                                "io_cat" => "Teachers Pay",
                                "io_date" => $date,
                                "io_on" => $on,
                                "io_osn" => $osn
                            );
                            $te = sum_where("bisa_in_out", "io_rs", $condition);
                            ?>
                            <td><?php echo $te; ?></td>
                        </tr>
                        <tr>
                            <th>5</th>
                            <th>Sir Abid</th>
                            <?php
                            $condition = array(
                                "io_cat" => "Sir Abid",
                                "io_date" => $date,
                                "io_on" => $on,
                                "io_osn" => $osn
                            );
                            $sir = sum_where("bisa_in_out", "io_rs", $condition);
                            ?>
                            <td><?php echo $sir; ?></td>
                        </tr>
                        <tr>
                            <th>6</th>
                            <th>Others</th>
                            <?php
                            $condition = array(
                                "io_cat" => "Others",
                                "io_date" => $date,
                                "io_on" => $on,
                                "io_osn" => $osn
                            );
                            $oth = sum_where("bisa_in_out", "io_rs", $condition);
                            ?>
                            <td><?php echo $oth; ?></td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    <?php
}

function report_bet($start, $end, $on, $osn)
{
    ?>
        <div class="row">

            <div class="col-12">

                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Fee Detail</th>
                            <th>Source</th>
                            <th>Income</th>
                            <th>Method</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $in_to = 1;
                        $condition = array(
                            "f_on" => $on,
                            "f_osn" => $osn
                        );
                        $tfee = sum_where_bet("bisa_fee", "f_rs", $condition, "f_date", $start, $end);
                        $data = display_where_bet("bisa_fee", $condition, "f_date", $start, $end);
                        if ($data) {
                            foreach ($data as $user) {
                        ?>
                                <tr class="<?php echo $user['f_roll'];
                                            if ($user['edit'] == 1) {
                                                echo " table-warning";
                                            } ?>">
                                    <td><?php echo $in_to;
                                        $in_to++; ?></td>
                                    <td><?php echo $user['f_detail']; ?></td>
                                    <td><?php if ($user['f_co'] == NULL) {
                                            echo "<i class='bi bi-three-dots'></i>";
                                        } else {
                                            echo $user['f_co'];
                                        }; ?></td>
                                    <td><?php echo $user['f_rs']; ?></td>
                                    <td><?php echo $user['f_meth']; ?></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3">Total Income</th>
                            <th colspan="2"><?php echo $tfee ?></th>
                        </tr>
                    </tfoot>
                </table>

            </div>

            <div class="col-12">

                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Expense Detail</th>
                            <th>Category</th>
                            <th>Expense</th>
                            <th>Method</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $in_ex = 1;
                        $condition = array(
                            "io_io" => "Out",
                            "io_on" => $on,
                            "io_osn" => $osn
                        );
                        $tex = sum_where_bet("bisa_in_out", "io_rs", $condition, "io_date", $start, $end);
                        $data = display_where_bet("bisa_in_out", $condition, "io_date", $start, $end);
                        if ($data) {
                            foreach ($data as $user) {
                        ?>
                                <tr class="<?php echo $user['io_id'];
                                            if ($user['edit'] == 1) {
                                                echo " table-warning";
                                            } ?>">
                                    <td><?php echo $in_ex;
                                        $in_ex++; ?></td>
                                    <td><?php echo $user['io_detail']; ?></td>
                                    <td><?php echo $user['io_cat']; ?></td>
                                    <td><?php echo $user['io_rs']; ?></td>
                                    <td><?php echo $user['io_meth']; ?></td>
                                    <td>
                                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                                            <i class="bi bi-gear"></i>
                                        </a><!-- End Profile Iamge Icon -->

                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="create-expence.php?edit_expense=<?php echo $user['io_id']; ?>">
                                                    <i class="bi bi-pencil-square"></i>
                                                    <span>Edit</span>
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>

                                            <li>
                                                <button class="dropdown-item d-flex align-items-center" onclick="delete_io('<?php echo $user['io_id']; ?>')">
                                                    <i class="bi bi-x-circle"></i>
                                                    <span>Delete </span>
                                                </button>
                                            </li>

                                        </ul>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3">Total Expence</th>
                            <th colspan="3"><?php echo $tex; ?></th>
                        </tr>
                    </tfoot>
                </table>

            </div>

            <div class="col-12">

                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Income Detail</th>
                            <th>Income</th>
                            <th>Method</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $in_to = 1;
                        $condition = array(
                            "io_io" => "In",
                            "io_on" => $on,
                            "io_osn" => $osn
                        );
                        $tin = sum_where_bet("bisa_in_out", "io_rs", $condition, "io_date", $start, $end);
                        $data = display_where_bet("bisa_in_out", $condition, "io_date", $start, $end);
                        if ($data) {
                            foreach ($data as $user) {
                        ?>
                                <tr class="<?php echo $user['io_id'];
                                            if ($user['edit'] == 1) {
                                                echo " table-warning";
                                            } ?>">
                                    <td><?php echo $in_to;
                                        $in_to++; ?></td>
                                    <td><?php echo $user['io_detail']; ?></td>
                                    <td><?php echo $user['io_rs']; ?></td>
                                    <td><?php echo $user['io_meth']; ?></td>
                                    <td>
                                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                                            <i class="bi bi-gear"></i>
                                        </a><!-- End Profile Iamge Icon -->

                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="create-income.php?edit_income=<?php echo $user['io_id']; ?>">
                                                    <i class="bi bi-pencil-square"></i>
                                                    <span>Edit</span>
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>

                                            <li>
                                                <button class="dropdown-item d-flex align-items-center" onclick="delete_io('<?php echo $user['io_id']; ?>')">
                                                    <i class="bi bi-x-circle"></i>
                                                    <span>Delete </span>
                                                </button>
                                            </li>

                                        </ul>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">Total Income</th>
                            <th colspan="2"><?php echo $tin; ?></th>
                        </tr>
                    </tfoot>
                </table>

            </div>

            <div class="col-12">

                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Expense Category</th>
                            <th>Expence</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>Tea</th>
                            <?php
                            $condition = array(
                                "io_cat" => "Tea",
                                "io_on" => $on,
                                "io_osn" => $osn
                            );
                            $tea = sum_where_bet("bisa_in_out", "io_rs", $condition, "io_date", $start, $end);
                            ?>
                            <td><?php echo $tea; ?></td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <th>Lunch</th>
                            <?php
                            $condition = array(
                                "io_cat" => "Lunch",
                                "io_on" => $on,
                                "io_osn" => $osn
                            );
                            $lunch = sum_where_bet("bisa_in_out", "io_rs", $condition, "io_date", $start, $end);
                            ?>
                            <td><?php echo $lunch; ?></td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <th>Rent</th>
                            <?php
                            $condition = array(
                                "io_cat" => "Rent",
                                "io_on" => $on,
                                "io_osn" => $osn
                            );
                            $rent = sum_where_bet("bisa_in_out", "io_rs", $condition, "io_date", $start, $end);
                            ?>
                            <td><?php echo $rent; ?></td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <th>Teachers Pay</th>
                            <?php
                            $condition = array(
                                "io_cat" => "Teachers Pay",
                                "io_on" => $on,
                                "io_osn" => $osn
                            );
                            $te = sum_where_bet("bisa_in_out", "io_rs", $condition, "io_date", $start, $end);
                            ?>
                            <td><?php echo $te; ?></td>
                        </tr>
                        <tr>
                            <th>5</th>
                            <th>Sir Abid</th>
                            <?php
                            $condition = array(
                                "io_cat" => "Sir Abid",
                                "io_on" => $on,
                                "io_osn" => $osn
                            );
                            $sir = sum_where_bet("bisa_in_out", "io_rs", $condition, "io_date", $start, $end);
                            ?>
                            <td><?php echo $sir; ?></td>
                        </tr>
                        <tr>
                            <th>6</th>
                            <th>Others</th>
                            <?php
                            $condition = array(
                                "io_cat" => "Others",
                                "io_on" => $on,
                                "io_osn" => $osn
                            );
                            $oth = sum_where_bet("bisa_in_out", "io_rs", $condition, "io_date", $start, $end);
                            ?>
                            <td><?php echo $oth; ?></td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    <?php
}

function Report_fee($date, $on, $osn)
{
    ?>
        <tr>
            <th>Fee Detail</th>
            <th>Course</th>
            <th>Method</th>
            <th>Fee</th>
        </tr>
        <?php

        $condition = array(
            "f_date" => $date,
            "f_on" => $on,
            "f_osn" => $osn
        );
        $in_to = 1;
        $tfee = sum_where("bisa_fee", "f_rs", $condition);
        $data = display_where("bisa_fee", $condition);
        if ($data) {
            foreach ($data as $user) {
        ?>
                <tr>
                    <td><?php echo $user['f_detail']; ?></td>
                    <td><?php echo $user['f_co']; ?></td>
                    <td><?php echo $user['f_meth']; ?></td>
                    <td><?php echo $user['f_rs']; ?></td>
                </tr>
        <?php
            }
        }
        ?>
        <tr>
            <th colspan="2">Total Fee</th>
            <th colspan="2"><?php echo $tfee ?></th>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th colspan="3" style="color: red; font-size: 20px;">Income Details</th>
        </tr>
        <tr>
            <th>Income Detail</th>
            <th>Method</th>
            <th>Income</th>
        </tr>
        <?php
        $condition = array(
            "io_date" => $date,
            "io_io" => "In",
            "io_on" => $on,
            "io_osn" => $osn
        );
        $tin = sum_where("bisa_in_out", "io_rs", $condition);
        $data = display_where("bisa_in_out", $condition);
        $in_to = 1;
        if ($data) {
            foreach ($data as $user) {
        ?>
                <tr>
                    <td><?php echo $user['io_detail']; ?></td>
                    <td><?php echo $user['io_meth']; ?></td>
                    <td><?php echo $user['io_rs']; ?></td>
                </tr>
        <?php
            }
        }
        ?>
        <tr>
            <th colspan="2">Total Income</th>
            <th><?php echo $tin; ?></th>
        </tr>
    <?php
}

function Report_ex($date, $on, $osn)
{
    ?>
    <tr>
        <th>Expense Detail</th>
        <th>Category</th>
        <th>Method</th>
        <th>Expense</th>
    </tr>
    <?php
    $condition = array(
        "io_date" => $date,
        "io_on" => $on,
        "io_osn" => $osn,
        "io_io" => "Out"
    );
    $in_ex = 1;
    $tex = sum_where("bisa_in_out", "io_rs", $condition);
    $data = display_where("bisa_in_out", $condition);
    if ($data) {
        foreach ($data as $user) {
    ?>
            <tr>
                <td><?php echo $user['io_detail']; ?></td>
                <td><?php echo $user['io_cat']; ?></td>
                <td><?php echo $user['io_meth']; ?></td>
                <td><?php echo $user['io_rs']; ?></td>
            </tr>
    <?php
        }
    }
    ?>
    <tr>
        <th colspan="3">Total Expence</th>
        <th><?php echo $tex; ?></th>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th colspan="2" style="color: red; font-size: 20px;">Expence Category Wise</th>
    </tr>
    <tr>
        <th>Expense Category</th>
        <th>Expence</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <th>Tea</th>
            <?php
            $condition = array(
                "io_cat" => "Tea",
                "io_date" => $date,
                "io_on" => $on,
                "io_osn" => $osn
            );
            $tea = sum_where("bisa_in_out", "io_rs", $condition);
            ?>
            <td><?php echo $tea; ?></td>
        </tr>
        <tr>
            <th>Lunch</th>
            <?php
            $condition = array(
                "io_cat" => "Lunch",
                "io_date" => $date,
                "io_on" => $on,
                "io_osn" => $osn
            );
            $lunch = sum_where("bisa_in_out", "io_rs", $condition);
            ?>
            <td><?php echo $lunch; ?></td>
        </tr>
        <tr>
            <th>Rent</th>
            <?php
            $condition = array(
                "io_cat" => "Rent",
                "io_date" => $date,
                "io_on" => $on,
                "io_osn" => $osn
            );
            $rent = sum_where("bisa_in_out", "io_rs", $condition);
            ?>
            <td><?php echo $rent; ?></td>
        </tr>
        <tr>
            <th>Teachers Pay</th>
            <?php
            $condition = array(
                "io_cat" => "Teachers Pay",
                "io_date" => $date,
                "io_on" => $on,
                "io_osn" => $osn
            );
            $te = sum_where("bisa_in_out", "io_rs", $condition);
            ?>
            <td><?php echo $te; ?></td>
        </tr>
        <tr>
            <th>Sir Abid</th>
            <?php
            $condition = array(
                "io_cat" => "Sir Abid",
                "io_date" => $date,
                "io_on" => $on,
                "io_osn" => $osn
            );
            $sir = sum_where("bisa_in_out", "io_rs", $condition);
            ?>
            <td><?php echo $sir; ?></td>
        </tr>
        <tr>
            <th>Others</th>
            <?php
            $condition = array(
                "io_cat" => "Others",
                "io_date" => $date,
                "io_on" => $on,
                "io_osn" => $osn
            );
            $oth = sum_where("bisa_in_out", "io_rs", $condition);
            ?>
            <td><?php echo $oth; ?></td>
        </tr>
    <?php
}

function report_bet_in($start, $end, $on, $osn)
{
    ?>
        <tr>
            <th>Fee Detail</th>
            <th>Source</th>
            <th>Method</th>
            <th>Income</th>
            <th>Date</th>
        </tr>
        <?php
        $condition = array(
            "f_on" => $on,
            "f_osn" => $osn
        );
        $tfee = sum_where_bet("bisa_fee", "f_rs", $condition, "f_date", $start, $end);
        $data = display_where_bet("bisa_fee", $condition, "f_date", $start, $end);
        if ($data) {
            foreach ($data as $user) {
        ?>
                <tr>
                    <td><?php echo $user['f_detail']; ?></td>
                    <td><?php echo $user['f_co']; ?></td>
                    <td><?php echo $user['f_meth']; ?></td>
                    <td><?php echo $user['f_rs']; ?></td>
                    <td><?php echo $user['f_date']; ?></td>
                </tr>
        <?php
            }
        }
        ?>
        <tr>
            <th colspan="3">Total Fee</th>
            <th colspan="2"><?php echo $tfee ?></th>
        </tr>

        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th colspan="4" style="color: red; font-size: 20px;">Income Details</th>
        </tr>
        <tr>
            <th>Income Detail</th>
            <th>Method</th>
            <th>Income</th>
            <th>Date</th>
        </tr>
        </thead>
    <tbody>
        <?php
        $in_to = 1;
        $condition = array(
            "io_io" => "In",
            "io_on" => $on,
            "io_osn" => $osn
        );
        $tin = sum_where_bet("bisa_in_out", "io_rs", $condition, "io_date", $start, $end);
        $data = display_where_bet("bisa_in_out", $condition, "io_date", $start, $end);
        if ($data) {
            foreach ($data as $user) {
        ?>
                <tr>
                    <td><?php echo $user['io_detail']; ?></td>
                    <td><?php echo $user['io_meth']; ?></td>
                    <td><?php echo $user['io_rs']; ?></td>
                    <td><?php echo $user['io_date']; ?></td>
                </tr>
        <?php
            }
        }
        ?>
        <tr>
            <th colspan="2">Total Income</th>
            <th colspan="2"><?php echo $tin; ?></th>
        </tr>
    <?php
}

function report_bet_ex($start, $end, $on, $osn)
{
    ?>
        <tr>
            <th>Expense Detail</th>
            <th>Category</th>
            <th>Method</th>
            <th>Expense</th>
            <th>Date</th>
        </tr>
        <?php
        $in_ex = 1;
        $condition = array(
            "io_io" => "Out",
            "io_on" => $on,
            "io_osn" => $osn
        );
        $tex = sum_where_bet("bisa_in_out", "io_rs", $condition, "io_date", $start, $end);
        $data = display_where_bet("bisa_in_out", $condition, "io_date", $start, $end);
        if ($data) {
            foreach ($data as $user) {
        ?>
                <tr>
                    <td><?php echo $user['io_detail']; ?></td>
                    <td><?php echo $user['io_cat']; ?></td>
                    <td><?php echo $user['io_meth']; ?></td>
                    <td><?php echo $user['io_rs']; ?></td>
                    <td><?php echo $user['io_date']; ?></td>
                </tr>
        <?php
            }
        }
        ?>
        <tr>
            <th colspan="3">Total Expence</th>
            <th colspan="2"><?php echo $tex; ?></th>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th colspan="2" style="color: red; font-size: 20px;">Expence Category Wise</th>
        </tr>
        <tr>
            <th>Expense Category</th>
            <th>Expence</th>
        </tr>
        </thead>
    <tbody>
        <tr>
            <th>Tea</th>
            <?php
            $condition = array(
                "io_cat" => "Tea",
                "io_on" => $on,
                "io_osn" => $osn
            );
            $tea = sum_where_bet("bisa_in_out", "io_rs", $condition, "io_date", $start, $end);
            ?>
            <td><?php echo $tea; ?></td>
        </tr>
        <tr>
            <th>Lunch</th>
            <?php
            $condition = array(
                "io_cat" => "Lunch",
                "io_on" => $on,
                "io_osn" => $osn
            );
            $lunch = sum_where_bet("bisa_in_out", "io_rs", $condition, "io_date", $start, $end);
            ?>
            <td><?php echo $lunch; ?></td>
        </tr>
        <tr>
            <th>Rent</th>
            <?php
            $condition = array(
                "io_cat" => "Rent",
                "io_on" => $on,
                "io_osn" => $osn
            );
            $rent = sum_where_bet("bisa_in_out", "io_rs", $condition, "io_date", $start, $end);
            ?>
            <td><?php echo $rent; ?></td>
        </tr>
        <tr>
            <th>Teachers Pay</th>
            <?php
            $condition = array(
                "io_cat" => "Teachers Pay",
                "io_on" => $on,
                "io_osn" => $osn
            );
            $te = sum_where_bet("bisa_in_out", "io_rs", $condition, "io_date", $start, $end);
            ?>
            <td><?php echo $te; ?></td>
        </tr>
        <tr>
            <th>Sir Abid</th>
            <?php
            $condition = array(
                "io_cat" => "Sir Abid",
                "io_on" => $on,
                "io_osn" => $osn
            );
            $sir = sum_where_bet("bisa_in_out", "io_rs", $condition, "io_date", $start, $end);
            ?>
            <td><?php echo $sir; ?></td>
        </tr>
        <tr>
            <th>Others</th>
            <?php
            $condition = array(
                "io_cat" => "Others",
                "io_on" => $on,
                "io_osn" => $osn
            );
            $oth = sum_where_bet("bisa_in_out", "io_rs", $condition, "io_date", $start, $end);
            ?>
            <td><?php echo $oth; ?></td>
        </tr>
    <?php
}

function bread($B1, $B2)
{
    ?>
        <div class="pagetitle">
            <h1><?php echo $B1; ?></h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard-today-report.php">Home</a></li>
                    <li class="breadcrumb-item active"><?php echo $B1; ?></li>
                    <li class="breadcrumb-item active"><?php echo $B2; ?></li>
                </ol>
            </nav>
        </div>
    <?php
}

function insert($table, $data)
{
    $response = 0;
    include "connection.php";
    $query = "INSERT INTO " . $table . " ( " . implode(" , ", array_keys($data)) . ")  VALUES ('" . implode("','", array_values($data)) . "')";
    $q_run = mysqli_query($connect, $query);
    echo mysqli_error($connect);
    if ($q_run) {
        $response = 1;
    } else {
        $response = 0;
    }
    return $response;
}

function update($table, $data, $where)
{
    include "connection.php";
    $sets = "";
    foreach ($data as $ind => $val) {
        $sets .= $ind . " = '" . $val . "', ";
    }
    $sets = substr($sets, 0, -2);
    $wh = "";
    foreach ($where as $ind => $val) {
        $wh .= $ind . " = '" . $val . "' AND ";
    }
    $wh = substr($wh, 0, -5);
    $q = "UPDATE " . $table . " SET " . $sets . " WHERE " . $wh;
    $q_run = mysqli_query($connect, $q);
    //echo mysqli_error($con);
    return $q_run;
}

function update_income($table, $data, $where)
{
    include "connection.php";
    $sets = "";
    foreach ($data as $ind => $val) {
        $sets .= $ind . " = '" . $val . "', ";
    }
    $sets = substr($sets, 0, -2);
    $q = "UPDATE " . $table . " SET " . $sets . " WHERE CONCAT(`bisa_fee`.`f_roll`) = " . $where;
    $q_run = mysqli_query($connect, $q);
    //echo mysqli_error($con);
    return $q_run;
}

function del($table, $condition)
{
    $where = "";
    include "connection.php";
    foreach ($condition as $ind => $val) {
        $where .= $ind . " = " . $val . " AND ";
    }
    $where = substr($where, 0, -5);
    $q = "DELETE FROM " . $table . " WHERE " . $where;
    $q_run = mysqli_query($connect, $q);
    return $q_run;
}

function display_between($table, $column, $start, $end)
{
    include "connection.php";
    $query = "SELECT * FROM `" . $table . "` WHERE " . $column . " BETWEEN '" . $start . "' AND '" . $end . "'";
    $results = mysqli_query($connect, $query);
    $ar = array();
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $ary[] = $data;
        }
        return $ary;
    } else {
        return false;
    }
    //mysqli_free_result($results);
}

function display_between_where($table, $column, $start, $end, $condition)
{
    include "connection.php";
    $where = "";
    include "connection.php";
    foreach ($condition as $ind => $val) {
        $where .= $ind . " = " . $val . " AND ";
    }
    $where = substr($where, 0, -5);
    $query = "SELECT * FROM " . $table . " WHERE " . $where . " AND " . $column . " BETWEEN '" . $start . "' AND '" . $end . "'";
    $results = mysqli_query($connect, $query);
    $ar = array();
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $ary[] = $data;
        }
        return $ary;
    } else {
        return false;
    }
    //mysqli_free_result($results);
}

function display($table)
{
    include "connection.php";
    $q = "SELECT * FROM " . $table;
    $results = mysqli_query($connect, $q);
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $ary[] = $data;
        }
        return $ary;
    } else {
        return false;
    }
    //mysqli_free_result($results);
}

function display_bet($table, $column, $start, $end)
{
    include "connection.php";
    $q = "SELECT * FROM " . $table . " WHERE " . $column . " BETWEEN '" . $start . "' AND '" . $end . "'";
    $results = mysqli_query($connect, $q);
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $ary[] = $data;
        }
        return $ary;
    } else {
        return false;
    }
    //mysqli_free_result($results);
}

function display_bet_order($table, $column, $start, $end, $order)
{
    include "connection.php";
    $q = "SELECT * FROM " . $table . " WHERE " . $column . " BETWEEN '" . $start . "' AND '" . $end . "' ORDER BY " . $order;
    $results = mysqli_query($connect, $q);
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $ary[] = $data;
        }
        return $ary;
    } else {
        return false;
    }
    //mysqli_free_result($results);
}

function display_order($table, $sort)
{
    include "connection.php";
    $q = "SELECT * FROM " . $table . " ORDER BY " . $sort;
    $results = mysqli_query($connect, $q);
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $ary[] = $data;
        }
        return $ary;
    } else {
        return false;
    }
    //mysqli_free_result($results);
}

function display_order_2($table, $sort1, $sort2)
{
    include "connection.php";
    $q = "SELECT * FROM " . $table . " ORDER BY " . $sort1 . " DESC , " . $sort2 . " DESC ";
    $results = mysqli_query($connect, $q);
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $ary[] = $data;
        }
        return $ary;
    } else {
        return false;
    }
    //mysqli_free_result($results);
}

function display_count($table)
{
    include "connection.php";
    $q = "SELECT * FROM " . $table;
    $results = mysqli_query($connect, $q);
    if (mysqli_num_rows($results) > 0) {
        $count = mysqli_num_rows($results);
    } else {
        $count = 0;
    }
    return $count;
}

function display_count_bet($table, $column, $start, $end)
{
    include "connection.php";
    $q = "SELECT * FROM " . $table . " WHERE " . $column . " BETWEEN '" . $start . "' AND '" . $end . "'";
    $results = mysqli_query($connect, $q);
    if (mysqli_num_rows($results) > 0) {
        $count = mysqli_num_rows($results);
    } else {
        $count = 0;
    }
    return $count;
}

function display_count_where($table, $condition)
{
    include "connection.php";
    $where = "";
    foreach ($condition as $ind => $val) {
        $where .= $ind . " = '" . $val . "' AND ";
    }
    $where = substr($where, 0, -5);
    $q = "SELECT * FROM " . $table . " WHERE " . $where;
    $results = mysqli_query($connect, $q);
    if (mysqli_num_rows($results) > 0) {
        $count = mysqli_num_rows($results);
    } else {
        $count = 0;
    }
    return $count;
}

function display_count_where_bet($table, $condition, $column, $start, $end)
{
    include "connection.php";
    $where = "";
    foreach ($condition as $ind => $val) {
        $where .= $ind . " = '" . $val . "' AND ";
    }
    $where = substr($where, 0, -5);
    $q = "SELECT * FROM " . $table . " WHERE " . $where . " AND " . $column . " BETWEEN '" . $start . "' AND '" . $end . "'";
    $results = mysqli_query($connect, $q);
    if (mysqli_num_rows($results) > 0) {
        $count = mysqli_num_rows($results);
    } else {
        $count = 0;
    }
    return $count;
}

function logout()
{
    if (isset($_GET['logout'])) {
        session_destroy();
    ?>
        <script>
            setTimeout(function() {
                window.location = "index.php";
            }, 0)
        </script>
    <?php
    }
}

function display_where($table, $condition)
{
    include "connection.php";
    $where = "";
    foreach ($condition as $ind => $val) {
        $where .= $ind . "='" . $val . "' AND ";
    }
    $where = substr($where, 0, -5);
    $query = "SELECT * FROM " . $table . " WHERE " . $where;
    $results = mysqli_query($connect, $query);
    $ar = array();
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $ary[] = $data;
        }
        return $ary;
    } else {
        return false;
    }
    //mysqli_free_result($results);
}

function display_where_bet($table, $condition, $column, $start, $end)
{
    include "connection.php";
    $where = "";
    foreach ($condition as $ind => $val) {
        $where .= $ind . "='" . $val . "' AND ";
    }
    $where = substr($where, 0, -5);
    $query = "SELECT * FROM " . $table . " WHERE " . $where . " AND "  . $column . " BETWEEN '" . $start . "' AND '" . $end . "'";
    $results = mysqli_query($connect, $query);
    $ar = array();
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $ary[] = $data;
        }
        return $ary;
    } else {
        return false;
    }
    //mysqli_free_result($results);
}

function display_where_order($table, $condition, $sort1, $sort2)
{
    include "connection.php";
    $where = "";
    foreach ($condition as $ind => $val) {
        $where .= $ind . "='" . $val . "' AND ";
    }
    $where = substr($where, 0, -5);
    $query = "SELECT * FROM " . $table . " WHERE " . $where . "ORDER BY " . $sort1 . " DESC , " . $sort2 . " DESC";
    $results = mysqli_query($connect, $query);
    $ar = array();
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $ary[] = $data;
        }
        return $ary;
    } else {
        return false;
    }
    //mysqli_free_result($results);
}

function display_where_order_a($table, $condition, $sort1, $sort2)
{
    include "connection.php";
    $where = "";
    foreach ($condition as $ind => $val) {
        $where .= $ind . "='" . $val . "' AND ";
    }
    $where = substr($where, 0, -5);
    $query = "SELECT * FROM " . $table . " WHERE " . $where . "ORDER BY " . $sort1 . " , " . $sort2;
    $results = mysqli_query($connect, $query);
    $ar = array();
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $ary[] = $data;
        }
        return $ary;
    } else {
        return false;
    }
    //mysqli_free_result($results);
}

function display_page($table, $offset, $limit)
{
    include "connection.php";
    $q = "SELECT * FROM " . $table . " LIMIT " . $offset . "," . $limit;
    $results = mysqli_query($connect, $q);
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $ary[] = $data;
        }
        return $ary;
    } else {
        return false;
    }
    //mysqli_free_result($results);
}

function display_page_order($table, $offset, $limit, $sort1, $sort2)
{
    include "connection.php";
    $q = "SELECT * FROM " . $table . " ORDER BY " . $sort1 . " DESC , " . $sort2 . " DESC LIMIT " . $offset . "," . $limit;
    $results = mysqli_query($connect, $q);
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $ary[] = $data;
        }
        return $ary;
    } else {
        return false;
    }
    //mysqli_free_result($results);
}

function display_where_page($table, $condition, $offset, $limit)
{
    include "connection.php";

    $where = "";
    foreach ($condition as $ind => $val) {
        $where .= $ind . "='" . $val . "' AND ";
    }
    $where = substr($where, 0, -5);
    $query = "SELECT * FROM " . $table . " WHERE " . $where . " LIMIT " . $offset . "," . $limit;
    $results = mysqli_query($connect, $query);
    $ar = array();
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $ary[] = $data;
        }
        return $ary;
    } else {
        return false;
    }
    //mysqli_free_result($results);
}

function display_where_page_order($table, $condition, $offset, $limit, $sort1, $sort2)
{
    include "connection.php";
    $where = "";
    foreach ($condition as $ind => $val) {
        $where .= $ind . "='" . $val . "' AND ";
    }
    $where = substr($where, 0, -5);
    $query = "SELECT * FROM " . $table . " WHERE " . $where . " ORDER BY " . $sort1 . " DESC , " . $sort2 . " DESC  LIMIT " . $offset . "," . $limit;
    $results = mysqli_query($connect, $query);
    $ar = array();
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $ary[] = $data;
        }
        return $ary;
    } else {
        return false;
    }
    //mysqli_free_result($results);
}

function sum($table, $column)
{
    include "connection.php";
    $q = "SELECT " . $column . " FROM " . $table;
    $results = mysqli_query($connect, $q);
    $r = 0;
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $r = $r + $data[$column];
        }
        return $r;
    } else {
        return 0;
    }
}

function sum_bet($table, $column1, $column2, $start, $end)
{
    include "connection.php";
    $q = "SELECT " . $column1 . " FROM " . $table . " WHERE " . $column2 . " BETWEEN '" . $start . "' AND '" . $end . "'";
    $results = mysqli_query($connect, $q);
    $r = 0;
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $r = $r + $data[$column1];
        }
        return $r;
    } else {
        return 0;
    }
}

function sum_where($table, $column, $condition)
{
    include "connection.php";
    $where = "";
    foreach ($condition as $ind => $val) {
        $where .= $ind . "='" . $val . "' AND ";
    }
    $where = substr($where, 0, -5);
    $query = "SELECT " . $column . " FROM " . $table . " WHERE " . $where;
    $results = mysqli_query($connect, $query);
    $r = 0;
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $r = $r + $data[$column];
        }
        return $r;
    } else {
        return 0;
    }
}

function sum_where_bet($table, $column1, $condition, $column2, $start, $end)
{
    include "connection.php";
    $where = "";
    foreach ($condition as $ind => $val) {
        $where .= $ind . "='" . $val . "' AND ";
    }
    $where = substr($where, 0, -5);
    $query = "SELECT " . $column1 . " FROM " . $table . " WHERE " . $where . " AND " . $column2 . " BETWEEN '" . $start . "' AND '" . $end . "'";
    $results = mysqli_query($connect, $query);
    $r = 0;
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $r = $r + $data[$column1];
        }
        return $r;
    } else {
        return 0;
    }
}


function sum_where_bet_2($table, $column1, $condition, $column2, $s1, $e1, $column3, $s2, $e2)
{
    include "connection.php";
    $where = "";
    foreach ($condition as $ind => $val) {
        $where .= $ind . "='" . $val . "' AND ";
    }
    $where = substr($where, 0, -5);
    $query = "SELECT " . $column1 . " FROM " . $table . " WHERE " . $where . " AND " . $column2 . " BETWEEN '" . $s1 . "' AND '" . $e1 . "' AND " . $column3 . " BETWEEN '" . $s2 . "' AND '" . $e2 . "'";
    $results = mysqli_query($connect, $query);
    $r = 0;
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $r = $r + $data[$column1];
        }
        return $r;
    } else {
        return 0;
    }
}

function display_where_opps($table, $condition)
{
    include "connection.php";
    $where = "";
    foreach ($condition as $ind => $val) {
        $where .= $ind . "!='" . $val . "' AND ";
    }
    $where = substr($where, 0, -5);
    $query = "SELECT * FROM " . $table . " WHERE " . $where;
    $results = mysqli_query($connect, $query);
    $ar = array();
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $ar[] = $data;
        } //while
    } else {
        $ar["error"] = 0;
    }
    return $ar;
}

function dcl($table)
{
    include "connection.php";
    $q = "SELECT * FROM " . $table . " WHERE inq_remind_date <= '" . date("Y-m-d") . "'";
    $results = mysqli_query($connect, $q);
    if (mysqli_num_rows($results) > 0) {
        $count = mysqli_num_rows($results);
    } else {
        $count = 0;
    }
    return $count;
}

function dclw($table, $condition)
{
    include "connection.php";
    $where = "";
    foreach ($condition as $ind => $val) {
        $where .= $ind . " = '" . $val . "' AND ";
    }
    $where = substr($where, 0, -5);
    $q = "SELECT * FROM " . $table . " WHERE " . $where . " AND inq_remind_date <= '" . date("Y-m-d") . "'";
    $results = mysqli_query($connect, $q);
    if (mysqli_num_rows($results) > 0) {
        $count = mysqli_num_rows($results);
    } else {
        $count = 0;
    }
    return $count;
}

function dle($table)
{
    include "connection.php";
    $q = "SELECT * FROM " . $table . " WHERE inq_remind_date <= '" . date("Y-m-d") . "'";
    $results = mysqli_query($connect, $q);
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $ary[] = $data;
        }
        return $ary;
    } else {
        return false;
    }
    //mysqli_free_result($results);
}

function dlw($table, $condition)
{
    include "connection.php";
    $where = "";
    foreach ($condition as $ind => $val) {
        $where .= $ind . "='" . $val . "' AND ";
    }
    $where = substr($where, 0, -5);
    $query = "SELECT * FROM " . $table . " WHERE " . $where . " AND inq_remind_date <= '" . date("Y-m-d") . "'";
    $results = mysqli_query($connect, $query);
    $ar = array();
    if (mysqli_num_rows($results) > 0) {
        while ($data = mysqli_fetch_array($results)) {
            $ary[] = $data;
        }
        return $ary;
    } else {
        return false;
    }
    //mysqli_free_result($results);
}
