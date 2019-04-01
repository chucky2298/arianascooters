<?php
include "../entities/event.php" ;
include "../core/eventC.php" ;
$tem=time();
$a=substr($_GET['date'],0,-6);
$m=substr($_GET['date'],5,-3);
$d=substr($_GET['date'],8);
$nom=$_GET['nom'];
	$adr=$_GET['adr'];
	$id=$_GET['id'];
	$date=$_GET['date'];
	$quantite=$_GET['quantite'];
	$lien=$_GET['lien'];
	$e=new event($nom,$adr,$id,$date,$quantite,$lien);
	$eventC=new eventC();
$tem1=mktime(0,0,0,$m,$d,$a);
if ( empty($_GET['nom']) || empty($_GET['adr']) || empty($_GET['id']) || empty($_GET['date']) || empty($_GET['quantite']) || empty($_GET['lien'])) 
{
?>
	<script type="text/javascript">
        alert ("Manque des informations");</script>
    <?php 
    echo "<META http-equiv='refresh' content='0;URL=ajouter_event.html'>";
}
else if ($eventC->existenceevent($_GET['id'])!=0)
{
	?>
	<script type="text/javascript">
        alert ("Event existe dejà");</script>
    <?php 
    echo "<META http-equiv='refresh' content='0;URL=ajouter_event.html'>";
}
else if ($tem1<$tem)
{
?>
	<script type="text/javascript">
        alert ("Date invalide");</script>
    <?php 
    echo "<META http-equiv='refresh' content='0;URL=ajouter_event.html'>";
}
else if ( isset($_GET['nom']) && isset($_GET['adr']) && isset($_GET['id']) && isset($_GET['date']) && isset($_GET['quantite']) && isset($_GET['lien']) ) 
{
    
	
	if( !empty($_GET['nom']) && !empty($_GET['adr']) && !empty($_GET['id']) && !empty($_GET['date']) && !empty($_GET['quantite']) && !empty($_GET['lien']))
	{
		
		$mes=$eventC->ajouter($e);
		
		if ($mes==true) 
		{
			echo "ajout avec succees";
		}
		echo "<META http-equiv='refresh' content='0;URL=events.php'>";
    }
}
?>