<?php
    session_start();
    $pwdErr = "";
    $_SESSION['email'] = $_SESSION['pwd'] = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION['email'] = test_input($_POST["email"]);
        $_SESSION['pwd']= test_input($_POST["pwd"]);
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "login";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "select * from user_details where email ='".$_SESSION['email']."' and pwd ='".$_SESSION['pwd']."';";
        $result = $conn->query($sql);
        if ($result->num_rows == 0) {
            $pwdErr = "Incorrect email or Password";
        }
        else
        {
            header("Location:http://localhost/internship/details.php");
        }
        $conn->close();        
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<!DOCTYPE html>
<html lang="en">
<style>
    @import url("https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap");
body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: #9900cc;
  font: 1rem 'Fira Sans', sans-serif;
}
.center {
  position: relative;
  padding: 50px 50px;
  background: #fff;
  border-radius: 10px;
}
.center h1 {
  font-size: 2em;
  border-left: 5px solid #9900cc;
  padding: 10px;
  color: #000;
  letter-spacing: 5px;
  margin-bottom: 60px;
  font-weight: bold;
  padding-left: 10px;
}
.center .inputbox {
  position: relative;
  width: 300px;
  height: 50px;
  margin-bottom: 50px;
}
.center .inputbox input {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  border: 2px solid #000;
  outline: none;
  background: none;
  padding: 10px;
  border-radius: 10px;
  font-size: 1.2em;
}
.center .inputbox:last-child {
  margin-bottom: 0;
}
.center .inputbox span {
  position: absolute;
  top: 14px;
  left: 20px;
  font-size: 1em;
  transition: 0.6s;
  font-family: sans-serif;
}
.center .inputbox input:focus ~ span,
.center .inputbox input:valid ~ span {
  transform: translateX(-13px) translateY(-35px);
  font-size: 1em;
}
.center .inputbox [type="submit"] {
  width: 50%;
  background: #9900cc;
  color: #fff;
  border: #fff;
}
.center .inputbox:hover [type="submit"] {
  background: #ffb3ff;
}

</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<head>
<div class="center">
  <h1>Sign in</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <p>Email</p>
    <div class="inputbox">
    <input type="text" name = "email" required="required">
    </div>
    <p>Password</p>
    <div class="inputbox">
      <input type="password" name = "pwd" required="required">  
    </div>
    <span class="error">* <?php echo $pwdErr;?></span>
    <div class="inputbox">
    <input  type="submit" name="" value="login">
    </div>
    
  </form>
</div>
</body>
</html>