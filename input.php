<?php
    $database_host='secret';
    $database_user='secret';
    $database_password='secret';
    $database_name='secret';


	$connect = mysqli_connect($database_host, $database_user, $database_password, $database_name, 3306);

    // if (!$connect) {
    //     die("Connection failedMEWMEW" );
    // } else {
    //     echo "<script>console.log('Debug Objects');</script>";
    // };

    // $sql = "CREATE TABLE IF NOT EXISTS `receipts` (`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, `username` VARCHAR(255) NOT NULL, `phone` VARCHAR(255) NOT NULL, `receiptnumber` VARCHAR(255) NOT NULL, `receiptdate` VARCHAR(255) NOT NULL, `receiptsum` VARCHAR(255) NOT NULL)";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $i = $_POST["user"];
        echo $i;
        
}
    // if(($_POST["user"])){
    //     $i = $_POST["user"];
    //     //    $result = json_encode($_POST);
    //        echo "<script>console.log('useyrr');</script>";
    //     }else{
    //         echo "<script>console.log('userName');</script>";
    //     }


// if(isset($_POST["user_name"]) && isset($_POST["phone"]) && 
//     isset($_POST["receiptnumber"]) && isset($_POST["receiptdate"]) && 
//     isset($_POST["receiptsum"])) 
// {
//     $user_name = $_POST["user_name"];
//     $user_phone = $_POST["phone"];
//     $user_receiptnumber = $_POST["receiptnumber"];
//     $user_receiptdate = $_POST["receiptdate"];
//     $user_receiptsum = $_POST["receiptsum"];


//     $sql = mysql_query($connect, "INSERT INTO receipts (username, phone, receiptnumber, receiptdate, receiptsum) VALUES ('$user_name', '$user_phone', '$user_receiptnumber', '$user_receiptdate', '$user_receiptsum');");
//     if ($sql) {
//         echo '<p>Данные успешно введены</p>';
//         mysql_close();
//       } else {
//         echo '<p>Произошла ошибка: ' . mysql_error($link) . '</p>';
//       };
    
// }
// else
// {   
//     echo "Введенные данные некорректны";
// };

?> 