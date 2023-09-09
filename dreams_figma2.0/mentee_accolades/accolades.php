<?php
session_start();
  if(isset($_SESSION['email']) && isset($_SESSION['name'])){
    $name=$_SESSION['name'];
  }
  else{
    header("Location: ../login/index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accolades</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Montserrat"
    />
    <link rel="stylesheet" href="accolades.css" />
  </head>
  <body>
      <div class="header">
        <img src="Dreams B.png" width="120px" height="120px" />
        <h1 class="title ps-3 pt-4">DREAMS</h1>
        <h2 class="logout"><button type="button" onclick = "location.href ='../mentee_home/index.php';">Back</button></h2>
    </div>
    <h2 class="accheader">You Are Doing Great, Keep Rocking!!</h2>
    <div class="body">
      <div>
        <div class="desc">Activity</div>
        <a href="activity.php">
          <img class="bodyimage" src="activity.gif" alt="activity" />
        </a>
      </div>

      <div>
        <div class="desc">Certificate</div>
        <a href="certificates.php">
          <img class="bodyimage" src="certificates.png" alt="activity" />
        </a>
      </div>

      <div>
        <div class="desc">Appreciation</div>
        <a href="appreciation.php">
          <img class="bodyimage" src="appreciation.jpg" alt="activity" />
        </a>
      </div>
    </div>
  </body>
</html>
