<?php
include('/xampp/htdocs/project/condb.php');
$sql = "SELECT * FROM amphures WHERE province_id={$_GET['province_id']}";
$query = mysqli_query($objCon, $sql);

$json = array();
while($result = mysqli_fetch_assoc($query)) {    
    array_push($json, $result);
}
echo json_encode($json);