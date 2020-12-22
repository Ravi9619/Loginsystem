<html>
    <body>
        
<?php
include 'dbconnect.php';
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user where emailid='$email' and password='$password'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);


if($num > 0){
    while($row = $result->fetch_assoc()) {
    echo "hello ".$row['firstname']." ";?><img src="<?php echo $row['image']?>" width="200px" alt="hi there"> ;
    <?php


    
}}



echo "<br>";
$sql1 = "SELECT * FROM user ";

    $result1 = mysqli_query($conn, $sql1);
    while($row = $result1->fetch_assoc()) {
        echo "hello ".$row['firstname']." ".$row['lastname']." ".$row['email']." ".$row['age']." "?><img src="<?php echo $row['image']?>" width="200px" alt="hi there"> ;
        <?php
        echo "<br>";
    }

?>


</body>
</html>