<?php

include "../config.php";
 
class eventC
{
	function ajouter($event)
	{
		$sql="insert into event (nom,adr,id,date,quantite,lien) values (:nom,:adr,:id,:date,:quantite,:lien)";
		$db=config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
		    $nom=$event->getnom();
		    $adr=$event->getadr();
		    $id=$event->getid();
	     	$date=$event->getdate();
	     	$quantite=$event->getquantite();
	     	$lien=$event->getlien();
	    	$req->bindValue(':nom', $nom);
	    	$req->bindValue(':adr', $adr);
	    	$req->bindValue(':id', $id);
	    	$req->bindValue(':date', $date);
	    	$req->bindValue(':quantite', $quantite); 
	    	$req->bindValue(':lien', $lien); 
	    	$req->execute();
	    	?>
	<script type="text/javascript">
        alert ("Ajout avec succés");</script>
    <?php 
	    	echo "<META http-equiv='refresh' content='0;URL=events.php'>";
        }
    
    catch(Exception $e)
	    {
		    echo 'Erreu' .$e->getMessage() ;
		    ?>
	<script type="text/javascript">
		var variableRecuperee = <?PHP echo $e->getMessage();?>;
		alert(variableRecuperee);
    </script>
    <?php 
		    echo "<META http-equiv='refresh' content='0;URL=events.php'>";
	    }
		
	}
	function supprimerevent($id){
		$sql="DELETE FROM event where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
            ?>
	<script type="text/javascript">
        alert ("Suppression avec succés");</script>
    <?php 
	    	echo "<META http-equiv='refresh' content='0;URL=events.php'>";
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            echo "<META http-equiv='refresh' content='0;URL=events.php'>";
        }
	}
	function modifierevent($event,$id){
		$sql="UPDATE event SET id=:id, nom=:nom, adr=:adr,date=:date,quantite=:quantite,lien=:lien WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		    $nom=$event->getnom();
		    $adr=$event->getadr();
	     	$date=$event->getdate();
	     	$quantite=$event->getquantite();
	     	$lien=$event->getlien();
	     	$lien=$event->getlien();
	    	$req->bindValue(':nom', $nom);
	    	$req->bindValue(':adr', $adr);
	    	$req->bindValue(':id', $id);
	    	$req->bindValue(':date', $date);
	    	$req->bindValue(':quantite', $quantite); 
	    	$req->bindValue(':lien', $lien); 
		
		
            $s=$req->execute();
			?>
	<script type="text/javascript">
        alert ("Modification avec succés");</script>
    <?php 
	    	echo "<META http-equiv='refresh' content='0;URL=events.php'>";
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo "<META http-equiv='refresh' content='0;URL=events.php'>";
        }
		
	}
	function decrement_quantite($id,$nb){
		$sql="UPDATE event SET quantite=:nb WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		    
	    	$req->bindValue(':nb', $nb);
	    	$req->bindValue(':id', $id);
		
		
            $s=$req->execute();
	    	echo "<META http-equiv='refresh' content='0;URL=pdf_event.php'>";
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo "<META http-equiv='refresh' content='0;URL=afficher_event.php'>";
        }
		
	}

	function afficherevents(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From event ORDER BY date";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	function recupererevent($id){
		$sql="SELECT * from event where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererevents($search){
		$sql="SELECT * from event where nom='$search'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function existenceevent($id){
		$db = config::getConnexion();
		$req = $db->query("SELECT count(*) as s FROM event WHERE id = '$id'");
		if($req->fetch()['s'] > 0)
		{
  		 return 1;
		}
		else {return 0;}
	}

	function rechercherListeevent($date){
		$sql="SELECT * from event where date=$date";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

}





?>