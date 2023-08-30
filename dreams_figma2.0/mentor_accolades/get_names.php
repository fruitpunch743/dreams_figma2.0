<?php
include "./config.php";

$sql = "SELECT * FROM mentee_table where assigned_mentor_id = ".$_SESSION['user_id']."; ";
$result = $conn->query($sql);

// Display names in a select tag
if ($result->num_rows > 0) {
  echo "<select name='names' class='form-select' aria-label='Default select example' required><option selected>Select Mentee</option>";
  while($row = $result->fetch_assoc()) {
    // echo "<option selected>Select Mentee</option>";
    echo "<option value='" . $row["mentee_id"] . "'>" . $row["mentee_name"] . "(".$row["mentee_id"].")</option>";
  }
  echo "</select>";
} else {
  echo "No names found.";
}