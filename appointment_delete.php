<?php
include('connections.php');
 
// Check if the database connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['Id']) && is_numeric($_GET['Id'])) {
    $stu_id = intval($_GET['Id']); // Cast to integer for safety

    // Prepare the delete statement
    $sql = "DELETE FROM add_appointment WHERE ID = ?";
    $stmt = $con->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $stu_id);

        if ($stmt->execute()) {
            echo "<script>alert('Deleted Successfully'); window.location.href='home.php';</script>";
        } else {
            echo "Error executing query: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $con->error;
    }
} else {
    echo "Invalid ID.";
}

mysqli_close($con);
?>
