<html>
<head>
<title>
	Print From
</title>
<link rel="stylesheet" type="text/css" href='css/bootstrap.min.css'>
<script type="text/javascript">
@media print {
  body * {
    visibility: hidden;
  }
  #printData * {
    visibility: visible;
  }
  #printData {
    position: absolute;
    left: 0;
    top: 0;
  }
}
</script>
</head>

<body onload="window.print();">
<div class="container">
  <h2>Print From</h2>


<?php include '_Layout.php'; 
    include_once "db.php";
    if(isset($_GET['id'])&&$_GET['id']!='0'){
?>

<table class="table table-bordered" id="printData">
	<tr>
		<td class="text-center" colspan="4">PART B(Annexure)</td>
	</tr>
	<tr>
		<td colspan="4">Details of Salary as per and any other income and tax deduced</td>
	</tr>
	<tr>
		<td>1. Gross Salary</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>(a) Salary as per provisions contained in section 17(1)</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>(b) Value of perquisites under section 17(2) (as per Form No 12BA,
wherever applicable)</td>
		<td>1,639,379.00</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>(c) Profits in lieu of salary under section 17(3) (as per Form No. 12BA,
wherever applicable)</td>
		<td>4,231.00</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>(d) Total</td>
		<td>NIL</td>
		<td>1,643,610.00</td>
		<td></td>
	</tr>
	<tr>
		<td>2. Less Allowance to the extent exempt under section 10</td>
		<td></td>
		<td>NIL</td>
		<td></td>
	</tr>
	<tr>
		<td>3. Balance (1-2)</td>
		<td></td>
		<td>1,643,610.00</td>
		<td></td>
	</tr>
	<tr>
		<td>3. Balance (1-2)</td>
		<td></td>
		<td>1,643,610.00</td>
		<td></td>
	</tr>
	<tr>
		<td>4. Deductions</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>(a) Entertainment Allowance</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>(b) Tax on employment</td>
		<td></td>
		<td>2,400.00</td>
		<td></td>
	</tr>
	<tr>
		<td>5. Aggregate of 4(a) and (b)</td>
		<td></td>
		<td></td>
		<td>1,641,210.00</td>
	</tr>
	<tr>
		<td>6. Income chargeable under the head &#39;salaries&#39; (3-5)</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>7. Add: Any other income reported by the employee</td>
		<td></td>
		<td>-2.102.00</td>
		<td></td>
	</tr>
	<tr>
		<td>(a) House Property Income</td>
		<td></td>
		<td></td>
		<td>1,693,108.00</td>
	</tr>
	<tr>
		<td>8. Gross total income (6+7)</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>9. Deductions under Chapter VIA</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>(A) Sections 80C, 80CCC, and 80CCD</td>
		<td>Gross Amount</td>
		<td>Deductable
Amount</td>
		<td></td>
	</tr>
	<tr>
		<td>(a) Section 80C</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>(1)EPF 155,084.00</td>
		<td>175,650.00</td>
		<td>150,000.00</td>
		<td></td>
	</tr>
	<tr>
		<td>(2)HOUSING LOAN - PRINCIPAL 20,566.00</td>
		<td>NIL</td>
		<td>NIL</td>
		<td></td>
	</tr>
	<tr>
		<td>(b) Section 80CCC</td>
		<td>NIL</td>
		<td>NIL</td>
		<td></td>
	</tr>
	<tr>
		<td>(c) Section 80CCD</td>
		<td>Qualifying Amount</td>
		<td>Deductable Amount</td>
		<td></td>
	</tr>
	<tr>
		<td>(B) Other Sections under Chapter VIA Gross Amount</td>
		<td>17,986.00</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>(a)SECTION 80D</td>
		<td>17,986.00</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>10. Aggregate of deductible amount under Chapter VIA</td>
		<td></td>
		<td></td>
		<td>167,986.00</td>
	</tr>
	<tr>
		<td>11. Total income (8-10)</td>
		<td></td>
		<td></td>
		<td>1,471,120.00</td>
	</tr>
	<tr>
		<td>Tax on total income</td>
		<td></td>
		<td></td>
		<td>266,336.00</td>
	</tr>
	<tr>
		<td>Education cess @ 3% (on tax at S. No. 12)</td>
		<td></td>
		<td></td>
		<td>274,326.00</td>
	</tr>
	<tr>
		<td>Tax payable (12+13)</td>
		<td></td>
		<td></td>
		<td>NIL</td>
	</tr>
	<tr>
		<td>Less: Relief under section 89 (attach details)</td>
		<td></td>
		<td></td>
		<td>274,326.00</td>
	</tr>
	<tr>
		<td>16. Tax payable (14-15)</td>
		<td></td>
		<td></td>
		<td>274,326.00</td>
	</tr>
</table>

<?php
    }
 ?>

</div>
</body>
</html>