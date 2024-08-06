<div class='col-md-12 text-center'><br />
    <hr />
    <table class='table table-light table-striped table-bordered table-primary d-none' id='excel-table' style="border:2px solid black; margin-top:50px;">
        <tr>
            <th colspan="2" style="color: red; font-size: 20px">This Month detail</th>
            <td></td>
            <th colspan="2" style="color: red; font-size: 20px">Total Fee Recieved</th>
        </tr>
        <?php
        $ad_con = array(
            "a_on" => $on,
            "a_osn" => $osn
        );
        $inq_con = array(
            "inq_on" => $on,
            "inq_osn" => $osn
        );
        $f_con = array(
            "f_on" => $on,
            "f_osn" => $osn
        );
        $in_con = array(
            "io_io" => "In",
            "io_on" => $on,
            "io_osn" => $osn
        );
        $ex_con = array(
            "io_io" => "Out",
            "io_on" => $on,
            "io_osn" => $osn
        );
        $noa = display_count_where_bet("bisa_admission", $ad_con, "a_date", $start, $end);
        $noi = display_count_where_bet("bisa_inquiry", $inq_con, "inq_date", $start, $end);
        $tf = sum_where_bet("bisa_fee", "f_rs", $f_con, "f_date", $start, $end);
        $ti = sum_where_bet("bisa_in_out", "io_rs", $in_con, "io_date", $start, $end);
        $te = sum_where_bet("bisa_in_out", "io_rs", $ex_con, "io_date", $start, $end);
        $admission = display_where_bet("bisa_admission", $ad_con, "a_date", $start, $end);
        $fee = sum_where_bet("bisa_admission",  "a_tfee", $ad_con, "a_date", $start, $end);
        $dis = sum_where_bet("bisa_admission",  "a_dis", $ad_con, "a_date", $start, $end);
        $fee1 = sum_where_bet_2("bisa_admission", "a_fee1", $ad_con, "a_date", $start, $end, "a_fee1_date", $start, $end);
        $fee2 = sum_where_bet_2("bisa_admission", "a_fee2", $ad_con, "a_date", $start, $end, "a_fee2_date", $start, $end);
        $fee3 = sum_where_bet_2("bisa_admission", "a_fee3", $ad_con, "a_date", $start, $end, "a_fee3_date", $start, $end);
        ?>
        <tr>
            <th>Total Visitors</th>
            <td><?php echo $noa + $noi; ?></td>
            <td></td>
            <th>Total Fee Recieved</th>
            <td><?php echo $tf; ?></td>
            <td></td>
            <th></th>
            <td></td>
        </tr>
        <tr>
            <th>Total Admission</th>
            <td><?php echo $noa; ?></td>
            <td></td>
            <th>Fee Recieved of Previous Months</th>
            <td><?php echo $tf - $fee1 - $fee2 - $fee3; ?></td>
            <th></th>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th>Total Pending Inquiries</th>
            <td><?php echo $noi; ?></td>
            <td></td>
            <th></th>
            <td></td>
            <td></td>
            <th></th>
            <td></td>
        </tr>
        <tr>
            <th>Total Income</th>
            <td><?php echo $ti; ?></td>
            <td></td>
            <th></th>
            <td></td>
            <td></td>
            <th></th>
            <td></td>
        </tr>
        <tr>
            <th>Total Expence</th>
            <td><?php echo $te; ?></td>
            <td></td>
            <th></th>
            <td></td>
            <td></td>
            <th></th>
            <td></td>
        </tr>
        <tr>
            <th>Total Fee Expected</th>
            <td><?php echo $fee; ?></td>
            <td></td>
            <th></th>
            <td></td>
            <td></td>
            <th></th>
            <td></td>
        </tr>
        <tr>
            <th>Total DIscount</th>
            <td><?php echo $dis; ?></td>
            <td></td>
            <th></th>
            <td></td>
            <td></td>
            <th></th>
            <td></td>
        </tr>
        <tr>
            <th>Total Fee After Discount</th>
            <td><?php echo $fee - $dis; ?></td>
            <td></td>
            <th></th>
            <td></td>
            <td></td>
            <th></th>
            <td></td>
        </tr>
        <tr>
            <th>Total Recieved</th>
            <td><?php echo $fee1 + $fee2  + $fee3; ?></td>
            <td></td>
            <th></th>
            <td></td>
            <td></td>
            <th></th>
            <td></td>
        </tr>
        <tr>
            <th>Pending Dues</th>
            <td><?php echo $fee - $dis - $fee1 - $fee2 - $fee3; ?></td>
            <td></td>
            <th></th>
            <td></td>
            <td></td>
            <th></th>
            <td></td>
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
        <th colspan="2" style="color: red; font-size: 20px">Admission Details Course Wise</th>
        </tr>
        <?php
        $data = display("bisa_course");
        if ($data) {
            $count = 1;
            foreach ($data as $user) {
                $con = array(
                    "a_course" => $user['co_name'],
                    "a_on" => $on,
                    "a_osn" => $osn
                );
                $co = display_count_where_bet("bisa_admission", $con, "a_date", $start, $end);
        ?>
                <tr <?php if ($co > 0) {
                        echo "style='color: red;'";
                    } ?>>
                    <th><?php echo $user['co_name']; ?></th>
                    <td><?php echo $co; ?></td>
                </tr>
        <?php
            }
        }
        ?>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th colspan="2" style="color: red; font-size: 20px"> Admission Details User Wise</th>
        </tr>
        <?php
        $condition = array(
            "u_on" => $on,
            "u_osn" => $osn
        );
        $data = display_where("bisa_user", $condition);
        if ($data) {
            $count = 1;
            foreach ($data as $user) {
                $con = array(
                    "a_user" => $user['u_name'],
                    "a_on" => $on,
                    "a_osn" => $osn
                );
                $co = display_count_where_bet("bisa_admission", $con, "a_date", $start, $end);
        ?>
                <tr>
                    <th><?php echo $user['u_name']; ?></th>
                    <td><?php echo $co; ?></td>
                </tr>
        <?php
            }
        }
        ?>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th colspan="5" style="color: red; font-size: 20px;">Fee Details</th>
        </tr>
        <?php report_bet_in($start, $end, $on, $osn); ?>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th colspan="5" style="color: red; font-size: 20px;">Expence Details</th>
        </tr>
        <?php report_bet_ex($start, $end, $on, $osn); ?>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th colspan="29" style="color: red; font-size: 20px;">Students Details</th>
        </tr>
        <tr>
            <th>Name</th>
            <th>Roll NO</th>
            <th>Father Name</th>
            <th>Course</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Method</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>User</th>
            <th>Admission Date</th>
            <th>Total Fee</th>
            <th>Discount</th>
            <th>1st Fee</th>
            <th>1st Fee Date</th>
            <th>1st Fee Method</th>
            <th>2nd Fee</th>
            <th>2nd Fee Date</th>
            <th>2nd Fee Method</th>
            <th>3rd Fee</th>
            <th>3rd Fee Date</th>
            <th>3rd Fee Method</th>
            <th>Refund</th>
            <th>Refund Date</th>
            <th>Refund Method</th>
            <th>Institute</th>
            <th>Campus</th>
        </tr>
        <?php
        if ($admission) {
            foreach ($admission as $user) {
        ?>
                <tr>
                    <td><?php echo $user['a_name']; ?></td>
                    <td><?php echo $user['a_rollno']; ?></td>
                    <td><?php echo $user['a_fname']; ?></td>
                    <td><?php echo $user['a_course']; ?></td>
                    <td><?php echo $user['a_phone']; ?></td>
                    <td><?php echo $user['a_email']; ?></td>
                    <td><?php echo $user['a_area']; ?></td>
                    <td><?php echo $user['a_method']; ?></td>
                    <td><?php echo $user['a_sex']; ?></td>
                    <td><?php echo $user['a_dob']; ?></td>
                    <td><?php echo $user['a_user']; ?></td>
                    <td><?php echo $user['a_date']; ?></td>
                    <td><?php echo $user['a_tfee']; ?></td>
                    <td><?php echo $user['a_dis']; ?></td>
                    <td><?php echo $user['a_fee1']; ?></td>
                    <td><?php echo $user['a_fee1_date']; ?></td>
                    <td><?php echo $user['a_fee1_meth']; ?></td>
                    <td><?php echo $user['a_fee2']; ?></td>
                    <td><?php echo $user['a_fee2_date']; ?></td>
                    <td><?php echo $user['a_fee2_meth']; ?></td>
                    <td><?php echo $user['a_fee3']; ?></td>
                    <td><?php echo $user['a_fee3_date']; ?></td>
                    <td><?php echo $user['a_fee3_meth']; ?></td>
                    <td><?php echo $user['a_refund']; ?></td>
                    <td><?php echo $user['a_re_date']; ?></td>
                    <td><?php echo $user['a_re_meth']; ?></td>
                    <td><?php echo $user['a_on']; ?></td>
                    <td><?php echo $user['a_osn']; ?></td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</div>
<div class="text-center pb-4">

    <button type="button" class="btn btn-success rounded-pill px-4" onclick="tableToExcel('excel-table', 'British Institute Daily Report')"><img src="assets/img/xls-file.png" width="40px" alt="">&nbsp Export to Excel</button>
</div>