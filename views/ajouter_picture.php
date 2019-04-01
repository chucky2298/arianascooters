<?php
include "../entities/picture.php" ;
include "../core/pictureC.php" ;

	$event=$_GET['event'];
	$schemaa=$_GET['schemaa'];
	$schemaa1="C:\wamp64\www\projet\pictures".$schemaa;
	$e=new picture($event,$schemaa);
	$pictureC=new pictureC();
if ( empty($_GET['event']) || empty($_GET['schemaa']) ) 
{
?>
	<script type="text/javascript">
        alert ("Manque des informations");</script>
    <?php 
    echo "<META http-equiv='refresh' content='0;URL=gerer_gal.php'>";
}

else if (substr($_GET['schemaa'],strlen($_GET['schemaa'])-4,strlen($_GET['schemaa']))!=".jpg")
{
    ?>
    <script type="text/javascript">
        alert ("Schema erroné");</script>
    <?php 
    echo "<META http-equiv='refresh' content='0;URL=gerer_gal.php'>";
}
else if (!file_exists($schemaa1)) 
{
    ?>
	<script type="text/javascript">
        alert ("Photo introuvable");</script>
    <?php 
    echo "<META http-equiv='refresh' content='0;URL=gerer_gal.php'>";
}
else if ( isset($_GET['event']) && isset($_GET['schemaa']) ) 
{
    
	
	if( !empty($_GET['event']) && !empty($_GET['schemaa']))
	{
		
		$mes=$pictureC->ajouter($e);
		



		if ($mes==true) 
		{
			echo "ajout avec succees";
		}
		echo "<META http-equiv='refresh' content='0;URL=gerer_gal.php'>";
    }
}
?>