<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["mobile"]; ?>
<?php
include '../db/connection.php';
include '../utils/logs.php';

$query = file_get_contents("../db/sqlQueries/insertNewRegistration.sql");
wh_log($query);
echo $query;

$conn = OpenCon();

$stmt = $conn->prepare($query);
if ($stmt->execute()){
  wh_log("success");
     echo "Success";
}else{
  wh_log(" Query Fail");
     echo "Fail";
}
CloseCon($conn);
?>
</body>
</html>
