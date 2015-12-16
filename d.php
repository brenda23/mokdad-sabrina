<?php
include_once 'connect.php';

switch ($_GET["table"]) {
	case "colis":
		deleteColis($_GET);
		break;
	case "personne":
		deletePersonne($_GET);
		break;
		
	default:
		;
	break;
}

function deleteColis($data){
	global $conn;
	
	// sql to delete a colis
	$sql = "DELETE FROM colis WHERE id_per=".$data["id_per"]." ";

	if ($conn->query($sql) === TRUE) {
	    echo "colis deleted successfully";
	} else {
	    echo "Error deleting record: " . $conn->error;
	}	
}

function deletePersonne($data){
	global $conn;
	
	// sql to delete a person
	$sql = "DELETE FROM personne WHERE id_perso=".$data["id" ] ["nom" ] ["prenom" ]." ";
	

	if ($conn->query($sql) === TRUE) {
	    echo "personne deleted successfully";
	} else {
	    echo "Error deleting record: " . $conn->error;
	}	
}






$conn->close();
