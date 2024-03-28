<?php
include '../includes/connection.php';
session_start();

if(isset($_POST['register'])){
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    if(trim($_POST['password'])===trim($_POST['password_confirmation'])){
        $password = trim($_POST['password']);

    }
 

    if(empty($name) || empty($phone) || empty($email) || empty($password)) {
        header('Location: ../user/register.php');
        exit;
    }

    $qry = "INSERT INTO users (Name, Phone, Email, Password) VALUES ('$name', '$phone', '$email', '$password')";
    
    if ($conn->query($qry) === TRUE) {
        header('Location: ../user/login.php');
        $_SESSION['status']='<p>Registration Successful<p>';
        exit;
    } else {
        echo "Error: " . $qry . "<br>" . $conn->error;
    }
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $result = $result->fetch_assoc();

  
        $_SESSION['user'] = $result['Name'];
        $_SESSION['email'] = $result['Email'];
        $_SESSION['phone'] = $result['Phone'];
        $_SESSION['u_id'] = $result['UserID'];
        

        header('Location: ../pages/shop.php');
        exit();
    } else {
        

        header('Location: ../user/login.php?error=Invalid credentials');
        exit();
    }

   
}
if (isset($_POST['orderProduct'])) {
    $_SESSION['id'] = $_POST['id'];
    $_SESSION['name']= $_POST['name'];
    $_SESSION['price'] = $_POST['price'];
    $_SESSION['quantity'] = $_POST['quantity'];
    $_SESSION['photo'] = $_POST['photo'];
    
    header('Location: ../pages/order.php');
    exit();


  
   
}
if (isset($_POST['order'])) {
   $u_id= $_SESSION['u_id'] ;
   $b_name=$_POST['name'];
   $b_phone=$_POST['phone'];
   $b_locality=$_POST['locality'];
   $b_city=$_POST['city'];
   $b_country=$_POST['country'];
   $b_price=$_SESSION['quantity']*$_SESSION['price'];

   $_SESSION['city']= $b_city;


   //payment

   $curl = curl_init();
   curl_setopt_array($curl, array(
       CURLOPT_URL => 'https://a.khalti.com/api/v2/epayment/initiate/',
       CURLOPT_RETURNTRANSFER => true,
       CURLOPT_ENCODING => '',
       CURLOPT_MAXREDIRS => 10,
       CURLOPT_TIMEOUT => 0,
       CURLOPT_FOLLOWLOCATION => true,
       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
       CURLOPT_CUSTOMREQUEST => 'POST',
       CURLOPT_POSTFIELDS => json_encode(array(
           "return_url" => "http://localhost/brocade/controller/payment.php",
           "website_url" => "http://localhost/brocade/pages/home.php",
           "amount" => $b_price*100,
           "purchase_order_id" => $_SESSION['id'],
           "purchase_order_name" => 'Sachin Order',
           "customer_info" => array(
               "name" => $_SESSION['user'],
               "email" => $_SESSION['email'],
               "phone" => $_SESSION['phone']
           )
       )),
       CURLOPT_HTTPHEADER => array(
           'Authorization: key live_secret_key_68791341fdd94846a146f0457ff7b455',
           'Content-Type: application/json',
       ),
   ));
   
   $response = curl_exec($curl);
   
   curl_close($curl);
   
   $response_data = json_decode($response, true); 
    if ($response_data && isset($response_data['payment_url'])) {
        $payment_url = $response_data['payment_url'];
        header("Location: $payment_url");
        exit();
    } else {
       
        echo "Error: Invalid response from Khalti API.";
        
    }
    
   exit();
   

  
   
}
if (isset($_POST['order_store'])){
     $address=$_SESSION['city'];
    $user_id=$_SESSION['u_id'];
    $product_id=$_SESSION['id'];
    $pidx=$_SESSION['pid'];

    $sql = "INSERT INTO orders ( product_id, user_id, payment_id, deliver_place) 
    VALUES ($product_id, $user_id, '$pidx', '$address')";

    if (mysqli_query($conn, $sql)) {
        header('Location: ../user/profile.php');
        exit(); 
    } 
}




?>
