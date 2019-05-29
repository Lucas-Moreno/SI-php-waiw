<?php

// Déclaration des attributs de la classe*
class Post {
  private $post_id;*// automatique*
  private $post_pseudo;*// automatique*
  private $post_movie_title;
  private $post_movie_synopsis;
  private $post_movie_director;
  private $post_movie_actors;
  private $post_movie_release;
  private $post_movie_poster;
  private $post_date;*// automatique*

  *// Déclaration du constructeur*
  public function __construct($post_id, $post_pseudo, $post_movie_title, $post_movie_synopsis, $post_movie_director, $post_movie_actors, $post_movie_release, $post_movie_poster, $post_date)
  {
    $this->post_id = $id; *// automatique*
    $this->post_pseudo = $pseudo; *// automatique*
    $this->post_movie_title = $movie_title;
    $this->post_movie_synopsis = $movie_synopsis;
    $this->post_movie_director = $movie_director;
    $this->post_movie_actors = $movie_actors;
    $this->post_movie_release = $movie_release;
    $this->post_movie_poster = $movie_poster;
    $this->post_date = $date;*// automatique*
  }

  *// Hydratation de l'objet ?????*

*///////////////*


  *// Déclaration des getters*
  public function id()
  {
    return $this->post_id;
  }
  public function pseudo()
  {
    return $this->post_pseudo;
  }
  public function movie_title()
  {
    return $this->post_movie_title;
  }
  public function movie_synopsis()
  {
    return $this->post_movie_synopsis;
  }
  public function movie_director()
  {
    return $this->post_movie_director;
  }
  public function movie_actors()
  {
    return $this->post_movie_actors;
  }
  public function movie_release()
  {
    return $this->post_movie_release;
  }
  public function movie_poster()
  {
    return $this->post_movie_poster;
  }
  public function date()
  {
    return $this->post_date;
  }

  *// Déclaration des setters*
  public function setId(int $id)
  {
    $this->post_id = $id;
  }
  public function setPseudo(string $pseudo)
  {
    $this->post_pseudo = $pseudo;
  }
  public function setMovieTitle(string $movie_title)
  {
    $this->post_movie_title = $movie_title;
  }
  public function setSynopsis(string $movie_synopsis)
  {
    $this->post_movie_synopsis = $movie_synopsis;
  }
  public function setMovieDirector(string $movie_director)
  {
    $this->post_movie_director = $movie_director;
  }
  public function setMovieActors(string $movie_actors)
  {
    $this->post_movie_actors = $movie_actors;
  }
  public function setMovieTitle(string $movie_title)
  {
    $this->post_movie_title = $movie_title;
  }  
  public function setMovieRelease(string $movie_release)
  {
    $this->post_movie_release = $movie_release;
  }
  public function setMoviePoster(string $movie_poster)
  {
    $this->post_movie_poster = $movie_poster;
  }
  public function setDate(string $date)
  {
    $this->post_date = $date;
  }






  *// $stmt = Bdd::getDatabaseConnect()->prepare("  INSERT INTO post (*
  *//   title_post,*
  *//   content_post,*
  *//   date_post,*
  *//   id_user,*
  *//   id_topic*
  *// ) VALUES (:title, :content, :date, :idUser, :idTopic);");*
  *// $stmt->execute(*
  *//   [*
  *//     'title'      => $this->_title,*
  *//     'content'    => $this->_content,*
  *//     'date' => $this->_date,*
  *//     'idUser'     => $this->_idUser,*
  *//     'idTopic'        => $this->_idTopic*
  *//   ]*
  *// );*
  *// $post = $stmt->fetch();*
  *// return $post;*
}
