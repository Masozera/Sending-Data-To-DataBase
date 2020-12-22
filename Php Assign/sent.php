<?php
$servername = "localhost";
$user = "root";
$pass = "";
$db = "student";

$conn = new mysqli($servername,$user,$pass,$db);

if($conn->error){
    echo "DB error ".$conn->error."";
}
else{
    echo "Connection successful";
}

//inserting data into our database
// isset_POST['submit']

if(isset($_POST['save'])){
    echo "<br>";
    
    // $first = $_POST['firstname'];
    // $last = $_POST['lastname'];
    $name = $_POST['name'];
    $age  = $_POST['age'];
    $message = $_POST['body'];

    $sql = "insert into message (Firstname,Lastname) values ('$name,'$age', '$message')";

    if($conn->query($sql)){
        echo "USER INSERTED SUCCESSFULLY!!!!";
    }
    else{
        echo "Error is here: ".$conn->error;
    }

}

if(isset($_POST['show'])){


    $sql = "select * from bscs";

    $myquery = $conn->query($sql);
    
    while($result = $myquery->fetch_assoc()){
        echo "<br>";
        echo $result['Firstname']." ".$result['Lastname'];
        echo "<br>";
    }

    // echo "<br>";
    // echo "Showing data";
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
        <div class="text-center">
            <h1>MASOZERA VICTOR</h1>
            <P>BSCS 2</P>
        </div>
  </div>

  <div class="main">

    <div class="thanks-message">Thanks for contacting us!</div>
    <div class="display-contact">

      <div class="form-title">Submitted</div>

      <!-- Content sent using the POST method  in the index.html will be received by the sent.php page. -->

      <div class="form-item">■ Name</div>
      <!-- Print the name received from the form -->
      <?php echo $_POST['name']; ?>

      <div class="form-item">■ Age</div>
      <!-- Print the age received from the form --> 
      <?php echo $_POST['age']; ?>

      
      


      <div class="form-item">■ Message</div>
      <!-- Print the body received from the form -->
      <?php echo $_POST['body']; ?>

    </div>

  </div>

  <div class="footer">
        <div class="social-div">
            <span class="social-text-header">2020 &#169; SirMasozera</span>
            <span><a href="https://www.facebook.com/login/" target="blank"><i class="fa fa-facebook footer_icon float-right"></i></a></span>
            <span><a href="https://www.instagram.com/accounts/login/" target="blank"><i class="fa fa-twitter footer_icon float-right"></i></a></span>
            <span><a href="https://twitter.com/login?lang=en" target="blank"><i class="fa fa-instagram footer_icon float-right facebook-padding"></a ></i></span>
        </div>
  </div>
</body>
</html>