<?php
    include_once('./config.php');
    session_start();
    $tas_id = $_GET['u'];
    if(isset($_SESSION['men_id'])){
        $mentee = $_SESSION['men_id'];
        $query1 = "SELECT * FROM assignment where t_id=".$tas_id."";
        $result = mysqli_query($con,$query1);
        echo '<div class="tabpanel">';
        $row = mysqli_fetch_assoc($result);
        $title = $row["title"];
        $deadline = $row["deadline"];
        $desc = $row["description"];
        $pos = $row["timestamp"];
    }
    else{
        header("Location: ../login/index.html");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
 
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
   
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    font-family: 'Montserrat';

}
.header{
    width: 100%;
    height: 140px;
    background-color: #1C7730;
    
}
.title{
    float: left;
    color: white;
    font-size: 64px;
}
img{
    float: left;
}
.back{
    float: right;
    padding-top: 50px;
    padding-right: 50px;
    color: white;
    cursor: pointer;
    font-size: 30px;
}
.head
{
    padding: auto;
    margin-top: 67px;
    font-size: 35px;
    padding-left: 85px;
}
.headhr
{
    width: 1100px;
    height: 20px;
    left: 80px;
    top: 233px;
    border: 2px solid #000000;
    transform: rotate(-0.19deg);
/* Inside auto layout */
    flex: none;
    order: 0;
    flex-grow: 0;
}
.assignimg
{
    position: absolute;
    left: 85px;
    top: 145px;

}
.missimg{
    position: absolute;
    left: 85px;
    top: 145px;
    width: 100px;
    height: 60px;
}

.content
{
    /* box-sizing: border-box;
    width: 1100px;
    height: 75px;
    margin: auto;
    padding: 180px;
    background-color: #70ec8b;
    /* margin-left: 7%; */
    /* border-radius: 20px;    
    border: 1px solid black;
    flex: none;
    order: 0;
    flex-grow: 0; */ 
    /* Task */
    box-sizing: border-box;
    /* Auto layout */
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 51px 40px 51px 36px;
    gap: 12px;

    position: absolute;
    width: 1100px;
    height: 495px;
    left: 80px;
    top: 280px;

    background: #DFF4D7;
    border: 1px solid #000000;
    border-radius: 20px;
}
.content .tasktitle
{
    /* padding: 2px; */
    /* position: absolute;
    left: 100px;
    top: 300px;
    width: 900px;
     */
    /* background-color: aliceblue; */
    /* Today’s Task */


    position: absolute;
    width: 280.52px;
    height: 44px;
    left: 36px;
    top: 81px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;
    color: #000000;

}
.spookysticker{
    /* Spooky Stickers Chunky Bat */


    position: absolute;
    width: 85.14px;
    height: 65px;
    left: 140px;
    top: 51px;

    background: url(.png);
}
.graduateimg{
    /* Hands Graduate */


    position: absolute;
    width: 51.35px;
    height: 50px;
    left: 1000px;
    top: 60px;

    background: url(.png);
}
hr{

    position: absolute;
    width: 1020px;
    height: 0px;
    left: 36.38px;
    top: 100px;

    border: 3px solid black;
    transform: matrix(1, 0, 0, 1, 0, 0);
}
.topic
{
    position: absolute;
    width: 644px;
    height: 35px;
    left: 40px;
    top: 137px;

    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;

    color: #000000;
}
.date{
    color: red;
}
/* .youtubeimg
{
    position: absolute;
    width: 110px;
    height: 49px;
    left: 26px;
    top: 142px;

    background: url(image.png);
    border-radius: 20px;
} */
.youtubelink
{
    
    position: absolute;
    width: 630px;
    height: 29px;
    left: calc(50% - 765px/2 - 124px);
    top: 195px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;

    color: #000000;
}


.date
{
    position: absolute;
    width: 125px;
    height: 20px;
    left: 900px;
    top: 231px;

    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;

    color: #000000;
}

.date2
{
    position: absolute;
    width: 125px;
    height: 20px;
    left: 860px;
    top: 231px;

    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;
}

.instruction
{
    position: absolute;
    width: 280.87px;
    height: 30.42px;
    left: 40px;
    top: 263px;

    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;

    color: #000000;
}
.Insthr
{
    position: absolute;
    width: 554.1px;
    height: 0px;
    left: 36px;
    top: 280px;

    border: 1px solid #000000;
}
.desc
{
    position: absolute;
    width: 500px;
    height: 101px;
    left: 37px;
    top: 305px;
    
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 22px;
    
    color: #000000;
}
.done
{
    position: absolute;
    width: 205px;
    height: 29px;
    left: 70px;
    top: 430px;

    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 24px;
    line-height: 20px;
/* identical to box height */
    color: #000000;
}
label{
    padding-left: 27px;
}
.done input:checked ~ .Done {
    background-color: #1C7730;
  }
.done input
{
    position: absolute;
    cursor: pointer;
    height: 22px;
    width: 22px;
}
.btn
{      
    position: absolute;
    width: 200px;
    height: 50px;
    left: 500px;
    top: 510px;
    overflow: hidden;
    border: 2px solid #1C7730;  
    font-size: 1rem;
    text-align: center;
    color: #1C7730;
    background: none;
    cursor: pointer;
    margin: 15px 30px;
    outline: none;
    position: relative;
    transition: all 0.3s;
    border-radius: 4rem;
    font-weight:700;
}
.btn:after{
    content: '';
    position: absolute;
    z-index: -1;
    transition: all 0.3s;
   box-sizing: border-box;
}
.btn-02:after {
  width: 100%;
  height: 0;
  top: 0;
  left: 0;
  background: #1C7730;
}
.btn-02:hover,
.btn-02:active {
  color: #ffffff;
}
.btn-02:hover:after,
.btn-02:active:after 
{
    height:100%;
}
@media screen and (max-width: 600px) {
    .header{
      position: relative;
      width: 100%;
      height: 140px;
  }

  .title{
      float: left;
      font-size: 32px;
  }
  .back{
    position: unset;
    font-size: 20px;
    float: right;
    padding-top: 100px;
    padding-right: 15px;
    font-size: 20px;
}
.head
{
    padding: auto;
    margin-top: 80px;
    font-size: 25px;
    padding-left: 35px;
}
.headhr
{
    width: 1100px;
    height: 20px;
    left: 35px;
}
.assignimg
{
    position: absolute;
    left: 35px;
    top: 150px;

}
.content
{ 
    width: 1100px;
    height: 495px;
    left: 35px;
    top: 280px;
}   
}
    </style>
</head>
<body>
    <div class="header pd-0">
        <img src="Dreams B.png" width="130px" height="130px">
        <h1 class="title ps-3 pt-4">DREAMS</h1>
        <h2 class="logout">Logout</h2>
    </div>  
    <img class="missimg" src="missing_img.jpeg">        
    <h2 class="head">MISSING</h2>
    <hr class="headhr"> 
    <div class="content">
        <img  class="spookysticker" src="Spooky Stickers Chunky Bat.png">
        <img class="graduateimg" src="icons8-error-16.png">
        <h2 class="tasktitle">Task</h2>
        <hr>
        
        <div class="topic"><?php echo $title; ?>
        <br><div class="date2" style="color: red;"> Due on:<?php echo $deadline; ?>
            </div>
        </div>
        
        <div class="instruction">Instruction :</div>
        <div class="date">Posted on :<?php echo $pos; ?></div>
        <hr class="Insthr">
        <div class="desc">
            <?php echo $desc; ?>
        </div>
    </div>
    <?php
        $sql = "select * from completed where mentee_id = ".$mentee." and task_id=".$tas_id.";";
        $res = $con->query($sql);
        if($res->num_rows > 0){
            echo "Status: completed";
        }
        else{
            echo '<button class="btn btn-02" name="submit" onclick ="disalert()">Mark as completed</button>';
        }
    ?>
    <script>
    function disalert() {
        alert("Assignment marked as completed");
        location.replace("./comp.php?u="+<?php echo $mentee ?>+"&t="+<?php echo $tas_id ?>);
    }
</script>

    
</body>
</html>