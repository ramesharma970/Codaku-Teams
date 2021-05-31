<?php
$fname = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$fname =    test_input($_POST["fname"]);
	# code...
}
functon test_input($data){
	return $data;

}

?>