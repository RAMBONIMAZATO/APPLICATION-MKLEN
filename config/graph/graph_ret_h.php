<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","ebp");


// $sqlQuery = "SELECT distinct(Deptid) as Deptid,Code,Effectif FROM t_dept ORDER BY Deptid";
$sqlQuery = "SELECT  DeptId, Code, count(Nb_ret) as Nb_ret FROM t_pourcentage_retard WHERE (MONTH(Dates)=MONTH(Date(now()))) AND (DAYOFWEEK(Dates) BETWEEN 1 AND 7) GROUP BY DeptId";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>