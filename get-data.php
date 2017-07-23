<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once "db.php";


$select_query = "SELECT * FROM `details`";
$select_res = mysqli_query($con, $select_query);
?>
<table>
	<tr>
		<td>Branch Name</td>
		<td>Employee No</td>
		<td>Employee Name</td>
		<td>Designation</td>
		<td>Department Name</td>
		<td>Department Name</td>
		<td>DOJ</td>
		<td>DOB</td>
		<td>Account Number</td>
		<td>Gender</td>
		<td>PF</td>
		<td>New Joinee</td>
		<td>Promotion</td>
		<td>Resignee</td>
		<td>Trnsfer</td>
		<td>Transfer Date</td>
		<td>Termination Date</td>
		<td>Promotion Date</td>
		<td>Payscale</td>
		<td>Paid Days</td>
		<td>Basic</td>
		<td>D.A</td>
		<td>CON All</td>
		<td>HRA</td>
		<td>SP All</td>
		<td>Bonus</td>
		<td>EDU All</td>
		<td>CCA</td>
		<td>MED All</td>
		<td>OTH All</td>
		<td>PTAX</td>
		<td>ITAX</td>
		<td>EPF</td>
		<td>LIC</td>
		<td>CREDIT SOC LN</td>
		<td>HSG LN1</td>
		<td>HSG LN2</td>
		<td>HSG LN3</td>
		<td>HSG REP LN1</td>
		<td>HSG REP LN2</td>
		<td>HSG EXT LN</td>
		<td>VEH LN</td>
		<td>FURNT LN1</td>
		<td>FURNT LN2</td>
		<td>FMY CAR LN</td>
		<td>EDU LOAN1</td>
		<td>EDU LOAN2</td>
		<td>OTH DED 1</td>
		<td>OTH DED 2</td>
		<td>ECOD INT</td>
		<td>GROSS EARNING</td>
		<td>TOTAL DEDUCTION</td>
		<td>NET SALARY PAYABLE</td>
		<td>UPDATE DATE</td>
		<td>PAYSLIPS REMARKS</td>
	</tr>
<?php
while ($row=mysqli_fetch_array($select_res, MYSQLI_ASSOC)) {

	echo "<tr>";
		echo "<td>".$row['BRANCH_NAME']."</td>";
		echo "<td>".$row['EMPNUMBER']."</td>";
		echo "<td>".$row['EMPNAME']."</td>";
		echo "<td>".$row['DESIGNATION']."</td>";
		echo "<td>".$row['DEPT_CODE']."</td>";
		echo "<td>".$row['DEPT_NAME']."</td>";
		echo "<td>".$row['EMP_DOJ']."</td>";
		echo "<td>".$row['EMP_DOB']."</td>";
		echo "<td>".$row['ACCOUNT_NUMBER']."</td>";
		echo "<td>".$row['EMP_GENDER']."</td>";
		echo "<td>".$row['PF_INDEX']."</td>";
		echo "<td>".$row['NEW_JOINEE']."</td>";
		echo "<td>".$row['PROMOTION']."</td>";
		echo "<td>".$row['RESIGNEE']."</td>";
		echo "<td>".$row['TRANSFER']."</td>";
		echo "<td>".$row['EMP_TRANSFER_DT']."</td>";
		echo "<td>".$row['EMP_TERMINATION_DT']."</td>";
		echo "<td>".$row['EMP_PROMOTION_DT']."</td>";
		echo "<td>".$row['EMP_PAY_SCALE']."</td>";
		echo "<td>".$row['PAID_DAYS']."</td>";
		echo "<td>".$row['BASIC']."</td>";
		echo "<td>".$row['D.A']."</td>";
		echo "<td>".$row['CON_ALL']."</td>";
		echo "<td>".$row['SP_ALL']."</td>";
		echo "<td>".$row['BONUS']."</td>";
		echo "<td>".$row['EDU_ALL']."</td>";
		echo "<td>".$row['CCA']."</td>";
		echo "<td>".$row['MED_ALL']."</td>";
		echo "<td>".$row['OTH_ALL']."</td>";
		echo "<td>".$row['PTAX']."</td>";
		echo "<td>".$row['ITAX']."</td>";
		echo "<td>".$row['EPF']."</td>";
		echo "<td>".$row['LIC']."</td>";
		echo "<td>".$row['CREDIT_SOC_LN']."</td>";
		echo "<td>".$row['HSG_LN1']."</td>";
		echo "<td>".$row['HSG_LN2']."</td>";
		echo "<td>".$row['HSG_LN3']."</td>";
		echo "<td>".$row['HSG_REP_LN1']."</td>";
		echo "<td>".$row['HSG_REP_LN2']."</td>";
		echo "<td>".$row['HSG_EXT_LN']."</td>";
		echo "<td>".$row['VEH_LN']."</td>";
		echo "<td>".$row['FURNT_LN1']."</td>";
		echo "<td>".$row['FURNT_LN2']."</td>";
		echo "<td>".$row['FMY_CAR_LN']."</td>";
		echo "<td>".$row['EDU_LOAN1']."</td>";
		echo "<td>".$row['EDU_LOAN2']."</td>";
		echo "<td>".$row['OTH_DED_1']."</td>";
		echo "<td>".$row['OTH_DED_2']."</td>";
		echo "<td>".$row['ECOD_INT']."</td>";
		echo "<td>".$row['GROSS_EARNING']."</td>";
		echo "<td>".$row['TOTAL_DEDUCTION']."</td>";
		echo "<td>".$row['NET_SALARY_PAYABLE']."</td>";
		echo "<td>".$row['UPDATE_DATE']."</td>";
		echo "<td>".$row['PAYSLIPS_REMARKS']."</td>";
	echo "</tr>";
}
?>
</table>