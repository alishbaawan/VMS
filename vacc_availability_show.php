<?php
// Include necessary files
include ('header.php');
include('connection.php');

// SQL query to fetch vaccine availability details along with the ID for updating and deleting
$q = "SELECT available_vaccine.ID, add_user.USER_NAME, add_vaccine.VAC_NAME, available_vaccine.STATUS, available_vaccine.HOSPITAL 
      FROM available_vaccine 
      JOIN add_user ON add_user.ID = available_vaccine.USER_ID
      JOIN add_vaccine ON add_vaccine.ID = available_vaccine.VACCINE_ID";
$res = mysqli_query($con, $q);
?>

<div class="main_content_iner">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="QA_section">
                    <div class="white_box_tittle list_header">
                        <h4>Vaccine Availability</h4>
                        <div class="box_right d-flex lms_block">
                            <div class="serach_field_2">
                                <div class="search_inner">
                                    <form active="#">
                                        <div class="search_field">
                                            <!-- You can add search functionality here if needed -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="add_button ms-2">
                                <!-- Add new vaccine availability button if needed -->
                            </div>
                        </div>
                    </div>

                    <div class="QA_table mb_30">
                        <table class="table lms_table_active">
                            <thead>
                                <tr>
                                    <th scope="col" style="background-color: #ce1212;">USER NAME</th>
                                    <th scope="col" style="background-color: #ce1212;">VACCINE</th>
                                    <th scope="col" style="background-color: #ce1212;">STATUS</th>
                                    <th scope="col" style="background-color: #ce1212;">HOSPITAL</th>
                                    <th scope="col" style="background-color: #ce1212;">UPDATE</th>
                                    <th scope="col" style="background-color: #ce1212;">DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($data = mysqli_fetch_assoc($res)) { ?>
                                <tr>
                                    <td><?php echo $data['USER_NAME']; ?></td>
                                    <td><?php echo $data['VAC_NAME']; ?></td>
                                    <td><?php echo $data['STATUS']; ?></td>
                                    <td><?php echo $data['HOSPITAL']; ?></td>
                                    <td>
                                        <a href="vacc_availability_update_form.php?id=<?php echo $data['ID']; ?>"><i class="ti-pencil"></i></a>
                                    </td>
                                    <td>
                                        <a href="vacc_availability_delete.php?id=<?php echo $data['ID']; ?>"><i class="ti-trash"></i></a>
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

<?php include ('footer.php'); ?>
