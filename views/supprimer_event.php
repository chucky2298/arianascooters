<?PHP
include "../core/eventC.php";
$eventC=new eventC();
if (isset($_POST["id"])){
	$mes=$eventC->supprimerevent($_POST["id"]);
}

?>