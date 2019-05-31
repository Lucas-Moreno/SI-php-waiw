

<!DOCTYPE html lang="fr"> 
   <head> 
      
      <meta charset="utf-8" /> 
   </head> 
<body> 
   <?php 
         
         include "bdd.php";
         

         $prepare = $db->prepare('INSERT INTO POST (post_movie_title, post_movie_director, post_movie_ctor, post_movie_releasedate, post_movie_synopsis, post_movie_file, post_date) VALUES (:titre, :director, :actor , :releasedate, :synopsis, :files NOW())');
         

         $prepare->bindValue(':titre', $_POST['post_title']);
         $prepare->bindValue(':director', $_POST['post_director']);
         $prepare->bindValue(':actor', $_POST['post_actor']);
         $prepare->bindValue(':synopsis', $_POST['post_synopsis']);
         $prepare->bindValue(':files', $_POST['post_file']);
         $prepare->bindValue(':releasedate', $_POST['post_movie_releasedate']);
         
         
         $exec = $prepare->execute();

   ?>  
</body> 
</html>