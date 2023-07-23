<?php
    include "./config.php";

    $sql = "SELECT * FROM announcement order by  t_id desc limit 0,4";
    $result = $conn->query($sql);
    // Display names in a select tag
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            ?><div class="details">
                <p><?php echo $row["title"]; ?></p>
                <h1><?php echo date("d-m-Y",strtotime($row["deadline"])); ?></h1><br>
                <h3><?php echo $row["description"]; ?></h3><br>
                <h2>Chapter Coordinator</h2>
                <hr style="border-style: inset; border-width: 3px; width:100%; text-align:left; margin-left:0">
                
            <?php
        }
        ?></div><br><?php
    } else {
    echo "No announcements for now.";
    }
?>