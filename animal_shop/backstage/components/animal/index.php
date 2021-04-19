<?php

require "../../conn.php";

// 判断是否登录
@session_start();
if(!isset($_SESSION['aname'])) {
	header("location: login.php");die;
}

$res = mysqli_query($conn, "select * from animal order by id desc");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<style>
		table {
			width: 100%;
		}
		table tr td {
			padding: 5px 10px;
			height: 40px;
			line-height: 40px;
			border: 1px solid #eee;
		}
		table tr th {
			padding: 5px 10px;
			height: 40px;
			line-height: 40px;
			border: 1px solid #eee;
		}
	</style>
</head>

<body>

<div class="layui-card">
    <div class="layui-card-header">Information list</div>
    <div class="layui-card-body">
        <table cellpadding="0" cellspacing="0">
			<tr>
				<th>AmountPaid</th>
				<th>TicketNumber</th>
				<th>ItemsBought</th>
				<th>ItemPrice</th>
				<th>ItemName</th>
				<th>AmountBought</th>
				<th>EmergencyContact</th>
				<th>FinanceEarnings</th>
			</tr>
			<?php while($row = mysqli_fetch_array($res)): ?>
			<tr>
				<td><?php echo $row['AmountPaid']; ?></td>
				<td><?php echo $row['TicketNumber']; ?></td>
				<td><?php echo $row['ItemsBought']; ?></td>
				<td><?php echo $row['ItemPrice']; ?></td>
				<td><?php echo $row['ItemName']; ?></td>
				<td><?php echo $row['AmountBought']; ?></td>
				<td><?php echo $row['EmergencyContact']; ?></td>
				<td><?php echo $row['FinanceEarnings']; ?></td>
				
			</tr>
			<?php endWhile; ?>
			
		</table>

        <link rel="stylesheet" href="../../../plugin/layui/css/layui.css">
        <script src="../../../plugin/layui/layui.js"></script>
        <script type="text/javascript" src="../../../js/jquery.js" ></script>

        <script type="text/javascript">
            layui.use(['table'], function(){
                var table = layui.table

                layui.table.render({
                    elem: '#layTable'
                    ,height: 500
                    ,page: false
                    ,cols: [[
                        { field: 'Amount_Paid', title: 'AmountPaid'},
                        { field: 'Ticket_Number', title: 'TicketNumber'},
                        { field: 'Items_Bought', title: 'ItemsBought'},
                        { field: 'Item_price', title: 'ItemPrice'},
                        { field: 'Item_name', title: 'ItemName'},
                        { field: 'Amount_bought', title: 'AmountBought'},
                        { field: 'Emergency_contact', title: 'EmergencyContact'},
                        { field: 'Finance_Earnings', title: 'FinanceEarnings'},
                        { title: 'operation', templet: '<div><button type="button" class="layui-btn layui-btn-danger layui-btn-sm"  ><i class="layui-icon">&#xe640;</i></button></div>'},
                    ]]
                    ,data: [
                        {
                            Amount_Paid: 'null',
                            Ticket_Number: 'null',
                            Items_Bought: 'null',
                            Item_price: 'null',
                            Item_name: 'null',
                            Amount_bought: 'null',
                            Emergency_contact: 'null',
                            Finance_Earnings: 'null',
                        }
                    ]
                })
            });

        </script>

    </div>
</div>


</body>
</html>
