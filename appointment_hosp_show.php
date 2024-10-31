<?php
include('header.php');
include('connection.php');

// Query to fetch appointment details
$q="SELECT add_appointment.ID, add_user.USER_NAME, add_child.CHILD_NAME, add_hospital.HOSPITALS_NAME, add_vaccine.VAC_NAME, add_appointment.DATE, add_appointment.STATUS, add_appointment.TIME, add_appointment.REMARK
    FROM `add_appointment`
    JOIN add_user ON add_user.ID = add_appointment.USER_ID
    JOIN add_child ON add_child.ID = add_appointment.CHILD_ID
    JOIN add_hospital ON add_hospital.ID = add_appointment.HOSPITAL_ID
    JOIN add_vaccine ON add_vaccine.ID = add_appointment.VACCINE_ID";

$res=mysqli_query($con,$q);
?>

<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="QA_section">
                    <div class="white_box_tittle list_header">
                        <h4>Appointments</h4>
                        <div class="box_right d-flex lms_block">
                            <div class="serach_field_2">
                                <div class="search_inner">
                                    <form Active="#">
                                        <div class="search_field"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="add_button ms-2"></div>
                        </div>
                    </div>
                    <div class="QA_table mb_30">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" style="background-color: #ce1212;">Parent Name</th>
                                    <th scope="col" style="background-color: #ce1212;">Child Name</th>
                                    <th scope="col" style="background-color: #ce1212;">Hospital</th>
                                    <th scope="col" style="background-color: #ce1212;">Vaccine</th>
                                    <th scope="col" style="background-color: #ce1212;">Date</th>
                                    <th scope="col" style="background-color: #ce1212;">Status</th>
                                    <th scope="col" style="background-color: #ce1212;">Time</th>
                                    <th scope="col" style="background-color: #ce1212;">Remarks</th>
                                    <th scope="col" style="background-color: #ce1212;">Delete/Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($data = mysqli_fetch_assoc($res)) { ?>
                                    <tr>
                                        <td><?php echo $data['USER_NAME']; ?></td>
                                        <td><?php echo $data['CHILD_NAME']; ?></td>
                                        <td><?php echo $data['HOSPITALS_NAME']; ?></td>
                                        <td><?php echo $data['VAC_NAME']; ?></td>
                                        <td><?php echo $data['DATE']; ?></td>
                                        <td><?php echo $data['STATUS']; ?></td>
                                        <td><?php echo $data['TIME']; ?></td>
                                        <td><?php echo $data['REMARK']; ?></td>
                                        <td>
                                            <!-- Use $data['ID'] instead of $data1['ID'] -->
                                            <a href="appointment_delete.php?id=<?php echo $data['ID']; ?>"><i class="ti-trash"></i></a>
                                            <a href="appointment_form_update.php?id=<?php echo $data['ID']; ?>"><i class="ti-pencil"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
