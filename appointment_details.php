<?php
include('header.php');
include('connections.php'); 

$id = isset($_GET['id']) ? $_GET['id'] : '';

// Prepare the SQL statement to prevent SQL injection
$q = "SELECT add_user.USER_NAME, add_child.CHILD_NAME, add_hospital.HOSPITALS_NAME, add_vaccine.VAC_NAME,
       add_appointment.DATE, add_appointment.STATUS, add_appointment.TIME, add_appointment.REMARK,
       add_appointment.ID
       FROM `add_appointment`
       JOIN add_user ON add_user.ID = add_appointment.USER_ID
       JOIN add_child ON add_child.ID = add_appointment.CHILD_ID
       JOIN add_hospital ON add_hospital.ID = add_appointment.HOSPITAL_ID
       JOIN add_vaccine ON add_vaccine.ID = add_appointment.VACCINE_ID
       WHERE add_user.USER_NAME = ?";

$stmt = $con->prepare($q);
$stmt->bind_param("s", $id); 
$stmt->execute();
$res = $stmt->get_result();

?>

<section class="st-shape-wrap section light-background" id="contact">
    <div class="container">
        <div class="st-section-heading st-style1">
            <h2 class="st-section-heading-title">Appointments</h2>
            <div class="st-seperator">
                <div class="st-seperator-left"></div>
                <div class="st-seperator-center">
                    <img src="assets/img/front/icon.png" alt="icon" style="width: 20px; height: 20px;">
                </div>
                <div class="st-seperator-right"></div>
            </div>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Parent Name</th>
                    <th>Child Name</th>
                    <th>Hospital</th>
                    <th>Vaccine</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Time</th>
                    <th>Remarks</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    <?php while ($data = $res->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($data['USER_NAME']); ?></td>
                            <td><?php echo htmlspecialchars($data['CHILD_NAME']); ?></td>
                            <td><?php echo htmlspecialchars($data['HOSPITALS_NAME']); ?></td>
                            <td><?php echo htmlspecialchars($data['VAC_NAME']); ?></td>
                            <td><?php echo htmlspecialchars($data['DATE']); ?></td>
                            <td><?php echo htmlspecialchars($data['STATUS']); ?></td>
                            <td><?php echo htmlspecialchars($data['TIME']); ?></td>
                            <td><?php echo htmlspecialchars($data['REMARK']); ?></td>
                            <td>
                                <a href='appointment_delete.php?Id=<?php echo $data['ID']; ?>' class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="st-height-b120 st-height-lg-b80"></div>
        </div>
        <div class="st-height-b120 st-height-lg-b80"></div>
    </div>
    <div class="st-height-b120 st-height-lg-b80"></div>
</section>

<?php include('footer.php'); ?>
