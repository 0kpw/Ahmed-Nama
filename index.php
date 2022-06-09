<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="master.css">
    <script src="https://kit.fontawesome.com/807e28881c.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>

<body dir="rtl">
    <?php 
    $host = 'localhost';
    $user ='root';
    $pass ='';
    $db ='farmers';
    $conn= mysqli_connect($host,$user,$pass,$db);
    $res= mysqli_query($conn,"SELECT * FROM info");

    
    ?>
    <table class="content-table">
        <thead>
            <tr>
                <th>ت</th>
                <th>اسم المزارع</th>
                <th>نوع المادة</th>
                <th>الكمية</th>
                <th>السعر</th>
                <th>النقد</th>
                <th>الاقساط</th>
                <th>المتبقي</th>
                <th>الملاحظات</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                    while ($row = mysqli_fetch_array($res)){
                        echo "<tr>";
                        echo "<th>".$row['id']."</th>";
                        echo "<th>".$row['farmerName']."</th>";
                        echo "<th>".$row['materialType']."</th>";
                        echo "<th>".$row['quantity']."</th>";
                        echo "<th>".$row['price']."</th>";
                        echo "<th>".$row['cash']."</th>";
                        echo "<th>".$row['installment']."</th>";
                        echo "<th>".$row['remaining']."</th>";
                        echo "<th>".$row['notes']."</th>";
                        echo "</tr>";
                    }
                    ?>
        </tbody>
    </table>
    <div class="add">
        <a href="send.php"><i class="fa-solid fa-plus"></i></a>
    </div>

</body>

</html>