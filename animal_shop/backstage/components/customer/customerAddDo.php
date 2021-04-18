<?php

require '../../conn.php';
@$AmountPaid = $_POST['AmountPaid'];
@$TicketNumber = $_POST['TicketNumber'];
@$ItemsBought = $_POST['ItemsBought'];
@$ItemPrice = $_POST['ItemPrice'];
@$ItemName = $_POST['ItemName'];
@$AmountBought = $_POST['AmountBought'];
@$EmergencyContact = $_POST['EmergencyContact'];
@$FinanceEarnings = $_POST['FinanceEarnings'];
mysqli_query($conn, "insert into customer(AmountPaid,TicketNumber,ItemsBought,ItemPrice,ItemName,AmountBought,EmergencyContact,FinanceEarnings) values('$AmountPaid','$TicketNumber','$ItemsBought','$ItemPrice','$ItemName','$AmountBought','$EmergencyContact','$FinanceEarnings')");
echo "<script>alert('success');window.location.href='editor.html';</script>"

?>