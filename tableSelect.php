<?php 
include("database.php");

$db= $conn;
$tableName="owlplayers";
$columns= ['player_id', 'player_name', 'player_team', 'player_position'];
$fetchData = fetch_data($db, $tableName, $columns);

function $fetchData {
	if(empty($db)){
	 $msg= "Datanase connection error";
	 }elseif (empty($columns) || !is_array($columns)) {
	 $msg="columns Name must be defined in an indexed array";
	 }elseif(empty($tableName)){
	 $msg= "Table Name is empty";
	 }
	 else{
	 $columnName = implode(",", $columns);
	 $query = "Select " .$columnName."FROM $tableName"."Order by player_id DESC";
	 $result = $db->query($query);
	 }
	 if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}

}
