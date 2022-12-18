<?php
echo '<a href="index.php">Home<br /></a>';
$content = file_get_contents('php://input'); //Receives the JSON Result from safaricom
$res = json_decode($content, true); //Convert the json to an array
$dataToLog = array(
    date("Y-m-d H:i:s"), //Date and time
    " MerchantRequestID: ".$res['Body']['stkCallback']['MerchantRequestID'],
    " CheckoutRequestID: ".$res['Body']['stkCallback']['CheckoutRequestID'],
    " ResultCode: ".$res['Body']['stkCallback']['ResultCode'],
    " ResultDesc: ".$res['Body']['stkCallback']['ResultDesc'],
);
$data = implode(" - ", $dataToLog);
$data .= PHP_EOL;
file_put_contents('transaction_log', $data, FILE_APPEND); //Logs the results to our log file
//Saves the result to the database
$conn = new mysqli("localhost","root","","mpesa");
$stmt = "SELECT * FROM orders ORDER BY id DESC LIMIT 1";
$result=$conn->query($stmt);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
//$rows=$result->fetch_assoc();
foreach($rows as $row){
    $ID = $row['id'];
    $reply1="success";
    $reply2="cancelled";
    if($res['Body']['stkCallback']['ResultCode'] == '1032'){
        $sql = "UPDATE orders SET `status` = '{$reply2}' WHERE `id` = '{$ID}'";
        $result=$conn->query($sql);
        if($result==true){
            $_SESSION['message']="Request Not Successful";
            header('location:index.php');



        }
     }else{
        $sql = "UPDATE orders SET `status` = '{$reply1}' WHERE `id` = '{$ID}'";
        $result=$conn->query($sql);
        if($result==true){
            $_SESSION['message']="Request Successful";
            header('location:index.php');


        }
     }
    if($res){
        file_put_contents('error_log', "Records Inserted", FILE_APPEND);;
    }else{
        file_put_contents('error_log', "Failed to insert Records", FILE_APPEND);
    }
}
?>