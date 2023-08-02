<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "login";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) 
  {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "select * from user_details where email ='".$_SESSION['email']."' and pwd ='".$_SESSION['pwd']."';";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    $uid = $row["user_id"];
    $name = $row["name"];
    $a = $row["age"];
    $pn = $row["phone_no"];
    $em = $row["email"];
  }
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>User profile</title>

    <meta name="author" content="Codeconvey" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
</head>
<style>
  body {
    background: #67B26F;  
    padding: 0;
    margin: 0;
    align-items: center;
    font-family: 'Lato', sans-serif;
    color: #000;
    
}

  </style>
<body>
    <center>
		
<div class="ScriptTop">
    <div class="rt-container">
        <div class="col-rt-4" id="float-right">
            
        </div>
        <div class="col-rt-2">
            <ul>
                <li><a href="loginpage.php" >Back to login</a></li>
            </ul>
        </div>
    </div>
</div>

<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1><center>Welcome <?php echo $name; ?>!</center></h1>
                
            </div>
        </div>
    </div>
</header>

      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Your details</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Name</th>
                <td width="2%">:</td>
                <td><?php echo $name?></td>
              </tr>
              <tr>
                <th width="30%">Email_ID	</th>
                <td width="2%">:</td>
                <td><?php echo $em?></td>
              </tr>
              <tr>
                <th width="30%">Phone</th>
                <td width="2%">:</td>
                <td><?php echo $pn?></td>
              </tr>
              <tr>
                <th width="30%">Age</th>
                <td width="2%">:</td>
                <td><?php echo $a?></td>
              </tr>
            </table>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>           
    		</div>
		</div>
    </div>
</section>
</center>
	</body>
</html>