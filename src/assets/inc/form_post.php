<section class="form_post">
  <h2>Créer un post </h2>
  <form action="index.php" method="post">
    
  
        <label for="title">Titre</label>
        <input type="text" id="title" name="post_title" placeholder="Forrest Gump" autofocus>

        <label for="director">Realisateur</label>
        <input type="text" id="director" name="post_director" placeholder="Robert Zemeckis">
  
        <label for="actor">Acteurs / Actrices</label>
        <input type="text" id="actor" name="post_actor" placeholder="Tom Hanks, Gary Sinise, Robin Wright" >
        
        <label for="date">Date de sortie</label>
        <input type="text" id="releasedate" name="post_releasedate" placeholder="5 octobre 1994">

        <label for="synopsis">Synopsis</label>
        <textarea id="synopsis" name="post_synopsis" placeholder="Quelques décennies d'histoire américaine, des années 1940 à la fin du XXème siècle, à travers le regard et l'étrange odyssée d'un homme simple et pur, Forrest Gump." rows="4" maxlength="256"></textarea>
        
        <label for="fichier">Ajouter une image</label>
        <input type="file" name="post_file" accept="image/png, image/jpeg" >

        <input type="submit" value="Partager">
    
  </form>

</section>