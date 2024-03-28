<?php

include_once "../includes/connection.php";


session_start();
if(isset($_GET['pidx'])) {
    
    $pidx = $_GET['pidx'];
    $_SESSION['pid']= $pidx;
    


$url = 'http://example.com/epayment/lookup/';


$request_data = [
    "pidx" => "HT6o6PEZRWFJ5ygavzHWd5"
];


$json_data = json_encode($request_data);


$ch = curl_init($url);


curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);


curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($json_data)
));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);


$pidx = $_GET['pidx'] ?? null;
$transaction_id = $_GET['transaction_id'] ?? null;
$tidx = $_GET['tidx'] ?? null;
$amount = $_GET['amount'] ?? null;
$total_amount = $_GET['total_amount'] ?? null;
$mobile = $_GET['mobile'] ?? null;
$status = $_GET['status'] ?? null;
$purchase_order_id = $_GET['purchase_order_id'] ?? null;
$purchase_order_name = $_GET['purchase_order_name'] ?? null;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
            color: #333;
        }

        .payment-details {
            margin-bottom: 20px;
        }

        .payment-details p {
            margin: 5px 0;
        }

        .payment-details p span {
            font-weight: bold;
        }
        button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Payment Details</h2>
        <div class="payment-details">
            
       
         
            <p><span>Mobile:</span> <?php echo $mobile; ?></p>
            <p><span>Status:</span> <?php echo $status; ?></p>
            <p><span>Purchase Order ID:</span> <?php echo $purchase_order_id; ?></p>
            
            <form action="all_action.php" method="POST">
                <button type="submit" name="order_store"> Back</button>
            </form>
        </div>
    </div>
</body>
</html>