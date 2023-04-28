<?php
    ob_start();
    //Include pagination class file
    include('../phpclasses/pagination.php');

    include('../inc/header.php');

    $action = mysqli_real_escape_String($db_connect, $_POST['action']);

    if($action == "retrieve"){    
        $record_id = mysqli_real_escape_String($db_connect, $_POST['record_id']);
        
        $getinfo = mysqli_query($db_connect, "SELECT * FROM client WHERE id = '$record_id' ");
        $getinfocount = mysqli_num_rows($getinfo);

        if($getinfocount == 1){
            if($fetch = mysqli_fetch_assoc($getinfo)){
                $name = $fetch['Name'];
                $password = $fetch['Password'];
                $dob = $fetch['D_O_B'];
                $pan_name = $fetch['Pancard_name'];
                $pan_no = $fetch['Pan_Number'];
                $aadhar_no= $fetch['Aadhar_no'];
                $mobileno_1 = $fetch['Mobile_no'];
                $mobileno_2 = $fetch['Mobile_no_Alt'];
                $email_1 = $fetch['Email_Prim'];
                $father = $fetch['Father_name'];
                $address = $fetch['Address'];
                $remarks = $fetch['Remarks'];
                

                echo '<table class="table">
                        <tr class="table_row logo">
                            <td class="table_column logo">
                                <img src="../images/logo.png"/>
                                <p>Employee Records</p>
                            </td>
                        </tr>
                        <tr class="table_row table_part">
                            <td class="table_column">
                                DETAILS
                            </td>
                        </tr>
                        <tr class="table_row">
                            <td class="table_column table_head m-column">
                                Name
                            </td>
                            <td class="table_column m-column">
                                '.$name.'
                            </td><br>
                        </tr>
                        <tr class="table_row">
                            <td class="table_column table_head m-column">
                                Password
                            </td>
                            <td class="table_column m-column">
                                '.$password.'
                            </td>
                        </tr>
                        <tr class="table_row clearfix">
                            <td class="table_column table_head s-column">
                                Date of birth
                            </td>
                            <td class="table_column table_head s-column">
                                Pan Name
                            </td>
                            <td class="table_column table_head s-column">
                                Pan Number
                            </td>
                            <td class="table_column s-column">
                               '.$dob.'
                            </td>
                            <td class="table_column s-column">
                                '.$pan_name.'
                            </td>
                            <td class="table_column s-column">
                                '.$pan_no.'
                            </td>
                        </tr>
                        <tr class="table_row clearfix">
                            <td class="table_column table_head s-column">
                                Aadhar number
                            </td>
                            <td class="table_column table_head s-column">
                                Primary Mobile Number
                            </td>
                            <td class="table_column table_head s-column">
                                Alternative Mobile Number
                            </td>
                            <td class="table_column s-column">
                                '.$aadhar_no.'
                            </td>
                            <td class="table_column s-column">
                                '.$mobileno_1.'
                            </td>
                            <td class="table_column s-column">
                                '.$mobileno_2.'
                            </td>
                        </tr>
                        <tr class="table_row clearfix">
                            <td class="table_column table_head s-column">
                                Primary Email
                            </td>
                            <td class="table_column table_head s-column">
                                Father Name
                            </td>
                            <td class="table_column s-column">
                                '.$email_1.'
                            </td>
                            <td class="table_column s-column">
                                '.$father.'
                            </td>
                        </tr>
                        <tr class="table_row clearfix">
                            <td class="table_column table_head l-column">
                                Address
                            </td>
                            <td class="table_column l-column">
                                '.$address.'
                            </td>
                        </tr>
                        <tr class="table_row kin_row clearfix">
                            <td class="table_column table_head m-column">
                                Remarks
                            </td>
                            <td class="table_column m-column">
                                '.$remarks.'
                            </td>
                        </tr>
                        </table>

                ';
            }
        } else {
            echo '

                 <tr class="table_row clearfix">
                    <td class="table_column l-column">
                        No Records Found in the system.
                    </td>
                </tr>
            ';
        }
    }

    if($action == "delete"){    
        $record_id = mysqli_real_escape_String($db_connect, $_POST['record_id']);

        $getinfo = mysqli_query($db_connect, "DELETE FROM `client` WHERE `client`.`id` = '$record_id' ");

        ob_end_clean();
        if($getinfo){
            echo json_encode(array("status"=>"success"));
            exit();
        } else {
            echo json_encode(array("status"=>"failed"));
            exit();
        }
    }

?>