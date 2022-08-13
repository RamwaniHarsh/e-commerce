<?php

// $phone = array(
//     "id" => $_GET['id'],
//     "name" => $_GET['name'],
//     "company" => $_GET['company'],
//     "amount" => $_GET['amount']
// );
// print_r($phone);

$customerid = base64_decode($_GET['customerid']);
$id = $_GET['id'];
$phone = $_GET['name'];
$company = $_GET['company'];
$amount = $_GET['amount'];
$orderid = base64_decode($_GET['orderid']);
echo "Order Id = ". $orderid ."<br> Customer Id = ". $customerid ."<br> Mobile Name = ". $phone ."<br> Company = ". $company ."<br> Price = ". $amount."<br> <br>";

?>

<form action="paytm_kit/pgRedirect.php" method="post">
    <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo $orderid; ?>">
    <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $customerid; ?>">
    <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
    <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
    <input type="hidden" title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="<?php echo $amount; ?>">
    <input type="submit" value="CheckOut" style="margin-top: 10px; width: 150px; height: 30px; cursor: pointer; border: none;" >
    
</form>