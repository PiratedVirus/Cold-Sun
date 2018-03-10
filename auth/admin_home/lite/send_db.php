<?php
	// include 'helpers/sessions.php';
	include '../../dbconnect.php';
//	include '../auth/admin_home/lite/send_db.php';
    // include 'helpers/sql_functions.php';
    
    $status = $_POST['btnClicked'];

    if($status = 'updateRD'){
        $sr_no = $_POST['sr_no'];
        $roi = $_POST['roi'];
        $mat_amt = $_POST['mat_amt'];
        $queryRD = mysqli_query($conn, "UPDATE rd SET rate_of_intrest = '$roi', maturity_amount = '$mat_amt' WHERE sr_no = '$sr_no'");
        if($queryRD){echo 'Success';}else{echo 'Failed';}
    }
    if($status = 'printRD'){
        $getRD = mysqli_query($conn, "SELECT * FROM rd");
        $i = 1;
        if (mysqli_num_rows($getRD) > -1) {
            while ($row = mysqli_fetch_assoc($getRD)) {

                echo '<tr>';
                echo "<td>" . $i . "</td>";
                echo "<td>" . ($i * 6) . " Months</td>";
                echo '<td><input type="text" id="roi_' . $i . '" placeholder="Enter rate of intrest" class="form-control form-control-line" value="'.$row['rate_of_intrest'].'"></td>';
                echo '<td><input type="text" id="mat_amt_' .$i. '" placeholder="Enter maturity amount" class="form-control form-control-line" value="'.$row['maturity_amount'].'"></td>';
                echo '</tr>';
                $i++;
            }
        }

    }





?>