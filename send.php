<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'farmers';
$conn = mysqli_connect($host, $user, $pass, $db);
$res = mysqli_query($conn, "SELECT * FROM farmersinfo");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="masterSend.css">
    <title>Add</title>

</head>

<body>
    <div id="container">
        <h1>&bull; اضافة مزارع &bull;</h1>
        <div class="underline">
        </div>

        <form action="send.php" method="post" id="contact_form">
            <div class="telephone">
                <label for="name"></label>
                <input type="text" placeholder="اسم المزارع" name="farmerName" id="farmerName">
            </div>
            <div class="email">
                <label for="email"></label>
                <input type="text" placeholder="نوع المادة" name="materialType" id="materialType">
            </div>
            <div class="name">
                <label for="name"></label>
                <input type="text" placeholder="الكمية" name="quantity" id="quantity">
            </div>
            <div class="name">
                <label for="name"></label>
                <input type="text" placeholder="السعر" name="price" id="price">
            </div>
            <div class="email">
                <label for="email"></label>
                <input type="text" placeholder="النقد" name="cash" id="cash">
            </div>
            <div class="name">
                <label for="name"></label>
                <input type="text" placeholder="الاقساط" name="installment" id="installment">
            </div>
            <div class="email">
                <label for="email"></label>
                <input type="text" placeholder="المتبقي" name="remaining" id="remaining">
            </div>


            <div class="message">
                <label for="message"></label>
                <textarea name="notes" placeholder="ملاحظات" id="notes" cols="30" rows="5"></textarea>
            </div>
            <div class="submit">
                <input type="submit" value="Send Message" id="submit" name="submit" />
            </div>
            <?php

            $name = $_POST['farmerName'];
            $type = $_POST['materialType'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $cash = $_POST['cash'];
            $installments = $_POST['installment'];
            $left = $_POST['remaining'];
            $notes = $_POST['notes'];

            if (isset($_POST['submit'])) {
                $sql = "INSERT INTO info(farmerName, materialType, quantity, price, cash, installment, remaining, notes) 
                            VALUES('$name','$type','$quantity','$price','$cash','$installments','$left','$notes')";
                mysqli_query($conn, $sql);
            }

            header("Location: index.php");
            exit;

            ?>
        </form>
        <!-- // End form -->
    </div>
    <!-- // End #container -->
</body>

</html>