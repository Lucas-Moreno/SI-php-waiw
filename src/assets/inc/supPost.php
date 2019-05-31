<?php 

include "bdd.php";

if (getUserInfo() === $_GET['user']){
   // Prépare la requête
   $prepare = $bdd->prepare('DELETE FROM POST WHERE id= :post');
   $prepare2 = $bdd->prepare('DELETE FROM COMMENT WHERE Post_id = :idpost');
   // Bind les valeurs
   $prepare->bindValue(':post', $_GET['post']);
   $prepare2->bindValue(':idpost', $_GET['post']);
   // Execute la requête
   $exec = $prepare->execute();
   $exec2 = $prepare2->execute();
   echo 'Votre post à bien été supprimé';
} else {
   echo 'Vous ne pouvez pas supprimer ce post';
}
?> 