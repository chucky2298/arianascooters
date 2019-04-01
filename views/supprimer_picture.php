<?PHP
include "../core/pictureC.php";
$pictureC=new pictureC();


if (isset($_POST["schemaa"])){
	$mes=$pictureC->supprimerpicture($_POST["schemaa"]);
}

?>