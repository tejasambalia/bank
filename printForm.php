<html>
<head>
<title>
	Print From
</title>
<link rel="stylesheet" type="text/css" href='css/bootstrap.min.css'>
<script type="text/javascript">
// @media print {
//   body * {
//     visibility: hidden;
//   }
//   #printData * {
//     visibility: visible;
//   }
//   #printData {
//     position: absolute;
//     left: 0;
//     top: 0;
//   }
// }
</script>
<style>
    .equalDivide25 { width:25%; }
    .equalDivide50 { width:50%; }
    .equalDivide12 { width:12%; }
    .equalDivide13 { width:13%; }
</style>
</head>

<!-- <body onload="window.print();"> -->
<body>
<div class="container">
  <h2>Print From</h2>


<?php include '_Layout.php'; 
    include_once "db.php";
    if(isset($_GET['id'])&&$_GET['id']!='0'){
?>

<table class="table table-bordered" id="printData">
	<tr>
		<td class="text-center" colspan="4">FORM-16</td>
	</tr>
	<tr>
		<td class="text-center" colspan="4">[See rule 31(1) (a)]</td>
	</tr>
	<tr>
		<td class="text-center" colspan="4">PART A</td>
	</tr>
	<tr>
		<td class="text-center" colspan="4">Certificate under section 203 of the income-tax Act,1961 for Tax deducted at source on Salary</td>
	</tr>
	<tr>
		<td class="text-center equalDivide50" colspan="2">Name and address of the Employer</td>
		<td class="text-center equalDivide50" colspan="2">Name and Designation of the Employee</td>
	</tr>
	<tr>
		<td class="text-center equalDivide50" colspan="2" style="text-transform: uppercase;">The Gujarat State Co-operative Bank Limited (apex bank)</td>
		<td class="text-center equalDivide50" colspan="2" rowspan="2">TEJAS RAMESHBHAI AMBALIA</td>
	</tr>
	<tr>
		<td class="text-center" colspan="2" style="text-transform: uppercase;">p.b. no. 302, sahakar bhavan, tilak road,</td>
	</tr>
	<tr>
		<td class="text-center" colspan="2" style="text-transform: uppercase;">ahmedabad - 380001</td>
		<td class="text-center" colspan="2" style="text-transform: uppercase;">DIRECTOR</td>
	</tr>
	<tr>
		<td class="text-center">PAN Of the Deductor</td>
		<td class="text-center">TAN Of the Deductor</td>
		<td class="text-center" colspan="2">PAN Of the Employee</td>
	</tr>
	<tr>
		<td class="text-center">PAN Of the Deductor</td>
		<td class="text-center">TAN Of the Deductor</td>
		<td class="text-center" colspan="2">PAN Of the Employee</td>
	</tr>
	<tr>
		<td class="text-center" colspan="2">CIT (TDS)</td>
		<td class="text-center equalDivide25">Assessment Year</td>
		<td class="text-center equalDivide25">Period</td>
	</tr>
	<tr>
		<td class="text-center" colspan="2" rowspan="2">Asst.commisioner of Income-Tax,<br>TDS Circle-4, Ahmedabad-380014</td>
		<td class="text-center" rowspan="2">2016-2017</td>
		<td class="text-center">
			<table class="table table-bordered">
				<tr>
					<td class="text-center">FROM</td>
					<td class="text-center">TO</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td class="text-center">
			<table class="table table-bordered">
				<tr>
					<td class="text-center">01-04-2017</td>
					<td class="text-center">31-03-2018</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td class="text-center" colspan="4">Summary of Tax deducted at source</td>
	</tr>
	<tr>
		<td>Quarter</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>

<?php
    }
 ?>

</div>
</body>
</html>