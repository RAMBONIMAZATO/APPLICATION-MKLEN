<html>
<head>
<title>ShotDev.Com Tutorial</title>
</head>
<body>
<?
	$objConnect = odbc_connect("mydatabase","","");
	$strSQL = "INSERT INTO customer ";
	$strSQL .="(CustomerID,Name,Email,CountryCode,Budget,Used) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$_POST["txtCustomerID"]."','".$_POST["txtName"]."','".$_POST["txtEmail"]."' ";
	$strSQL .=",'".$_POST["txtCountryCode"]."','".$_POST["txtBudget"]."','".$_POST["txtUsed"]."') ";
	$objExec = odbc_exec($objConnect, $strSQL);
	if($objExec)
	{
		echo "Save completed.";
	}
	else
	{
		echo "Error Save [".$strSQL."]";
	}
	odbc_close($objConnect);
?>
</body>
</html>
<!--- This file download from www.shotdev.com -->