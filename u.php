<?php
include_once 'connect.php';

switch ($_GET["table"]) {
	case "colis":
		updateScore($_GET);
		break;
	case "personne":
		updatepersonne($_GET);
		break;
			
	default:
		;
	break;
}

function updatecolis($data){
	global $conn;
	

}
function updatepersonne($data){
	global $conn;
	
	$sql = "UPDATE personnes SET nom='".$data["nom"]."' WHERE id_perso=".$data["id"]."";

	if ($conn->query($sql) === TRUE) {
	    echo "Personne updated successfully";
	} else {
	    echo "Error updating record: " . $conn->error;
	}	
}



$conn->close();
