<?php
    include '../auth/dbconnect.php';

    $status = $_POST['btnClicked'];

    function printRD($conn){
        $getRD = mysqli_query($conn, "SELECT * FROM rd");
        if (mysqli_num_rows($getRD) > -1) {
            while ($row = mysqli_fetch_assoc($getRD)) {
                echo '<tr class=\'rowTable\'>
                                        <td>' . $row['period'] . ' Months </td>
                                        <td>' . $row['rate_of_intrest'] . '%</td>
                                        <td>' . $row['maturity_amount'] . '</td>
                                    </tr>';
            }
        }
    }
    if($status = 'showGallery'){
        $dir    = '../auth/admin_home/lite/uploads/';
        $files = scandir($dir);
        $count = count($files);
//        $count = $count;
        for($i = 2; $i < $count; $i++){
            echo '<li><img alt="Image Slider Image" src="auth/admin_home/lite/uploads/'.$files[$i].'"></li>';
        }
    }

    ?>