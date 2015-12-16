<?php
include_once 'connect.php';

switch ($_GET["table"]) {

	case "personne":
		getAll();
		break;
	case "colis":
		getcolis($_GET);
		break;		
		case "envoi":
		getAll();
		break;
	default:
		;
	break;
}

function getAll(){
	global $conn;
	
	$sql = "SELECT * FROM personne";
	$result = $conn->query($sql);
	//echo $sql;
	if ($result->num_rows > 0) {
    // output data of each row
	
	    while($row = $result->fetch_assoc()) {
	        echo json_encode($row);
	    }
	} else {
    	echo "0 results";
	}	
}
function getAll(){
	global $conn;
	
	$sql = "SELECT * FROM envoi";
	$result = $conn->query($sql);
	//echo $sql;
	if ($result->num_rows > 0) {
    // output data of each row
	
	    while($row = $result->fetch_assoc()) {
	        echo json_encode($row);
	    }
	} else {
    	echo "0 results";
	}	
}












function getcolis($data){
	global $conn;
	
	$sql = "SELECT * FROM colis where idper =".$data["idper"];
	
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo json_encode($row);
			
		}
	}
}





$conn->close();
