<?php
  include_once('./config.php'); 
  $query1 = "select * FROM mentee_table where assigned_mentor_id=".$_SESSION['user_id'].";";
  $result = mysqli_query($conn,$query1);

if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class="card-body">
        <a class="card" href="../mentee_profile/index.php?user='.$row["mentee_id"].'" style = "text-decoration:none;">
          <img
            class="dp"
            src="graduated_3135810.png"
            alt=""
          />
          <h3>'.$row["mentee_name"].'</h3>
          <p>Desire Group</p>
          <p>Christ School Chapter</p>
          </a>
        </div>
      ';           
    }
  
}
?>