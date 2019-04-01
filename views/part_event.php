<?php
include "../entities/event.php" ;
include "../core/eventC.php" ;
	$nb=$_GET['quantite']-$_GET['nb'];
	$id=$_GET['id'];
	$eventC=new eventC();

if ( empty($_GET['nb'])) 
{
?>
	<script type="text/javascript">
        alert ("Manque des informations");</script>
    <?php 
    echo "<META http-equiv='refresh' content='0;URL=afficher_event.php'>";
}
else if ( $_GET['nb']>10) 
{
?>
	<script type="text/javascript">
        alert ("Max. 10 passes");</script>
    <?php 
    echo "<META http-equiv='refresh' content='0;URL=afficher_event.php'>";
}
else if ( $_GET['nb']>$_GET['quantite']) 
{
?>
	<script type="text/javascript">
        alert ("Quantité indisponible");</script>
    <?php 
    echo "<META http-equiv='refresh' content='0;URL=afficher_event.php'>";
}
else if (isset($_GET['nb']) )  
{
    
	
	if( !empty($_GET['nb']))
	{
		$eventC->decrement_quantite($_GET['id'],$nb);
		require('fpdf.php');
		$jomla='Ariana scooters vous laisse '.$_GET['nb'].' passes pour levenement '.$_GET['event'];
		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(40,100,$jomla);
		$pdf->Image('assets/img/brand/logo-white.png',10,12,30,0,'','http://www.fpdf.org');
		$pdf->Output('F','doc.pdf',true);
		echo "<META http-equiv='refresh' content='0;URL=pdf_event.php'>";
    }
}
?>