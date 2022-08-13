<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    $conn = new mysqli($hostname,$username,$password,$dbname);

    // $query1 = "select * from mobiles where ";
    // $result1 = mysqli_query($conn, $query1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="order.php" method="GET">
    


        <table>
            <tr>
                <th><?php $apple="select * from mobiles where company='Apple'";?>Apple</th>
                <?php $result1 = $conn->query($apple); ?>
                <th>Apple</th>
                <th>Apple</th>
                <th>Apple</th>
            </tr>
            <tr>    
                <?php
                    $custid = base64_encode("cust".rand(1,100));
                    $orderid = base64_encode("order".rand(1,100));
                    if($result1->num_rows > 0){
                        while($row1 = $result1->fetch_assoc()){
                            $id = $row1['id'];
                            $mobile = $row1['name'];
                            $company = $row1['company'];
                            $amount = $row1['amount'];

                        ?><td><?php echo $mobile; ?><br><?php echo $amount; ?></td><button><a href="order.php?customerid=<?php echo $custid; ?>&id=<?php echo $id; ?>&name=<?php echo $mobile; ?>&company=<?php echo $company; ?>&amount=<?php echo $amount; ?>&orderid=<?php echo $orderid; ?>">Order Now</a></button><?php
                        }
                    }else{
                        echo "0 results";
                    }

                ?>
                <!-- <td><br>₹ 1,50,000</td><button><a href="order.php?name=iphone13">Buy Now</a></button>
                <td>Samsung S22 Ultra<br>₹ 1,20,000</td><button><a href="order.php?name=s22ultra">Buy Now</a></button>
                <th>Oneplus 10 Pro<br>₹ 80,000</th><button><a href="order.php?name=oneplus10pro">Buy Now</a></button> -->
            </tr>
        </table>
    </form>
</body>
</html>