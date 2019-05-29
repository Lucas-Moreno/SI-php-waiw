<?php
class PostManager
{
  private $_db; // Instance de PDO
  public function __construct($db)
  {
    $this->setDb($db);
  }

    // All methods for the CRUD
    // This one is for adding
  public function add(Post $post)
  {
    $req = $this->_db->prepare('INSERT INTO POST (post_id, member_id, post_movie_title, post_movie_synopsis, post_movie_director, post_movie_actors, post_movie_release, post_movie_poster, post_date)
    VALUES(:post_id, :member_id, :post_movie_title, :post_movie_synopsis, :post_movie_director, :post_movie_actors, :post_movie_release, :post_movie_poster, :post_date)');


    // A FINIR
    $req->bindValue(':post_id', $post->post_id());
    $req->bindValue(':member_id', $post->member_id());
    $req->bindValue(':post_movie_title', $post->post_movie_title(), PDO::PARAM_STR);
    $req->bindValue(':post_movie_synopsis', $post->post_movie_synopsis(), \PDO::PARAM_STR);
    $req->bindValue(':post_movie_director', $post->post_movie_director(), \PDO::PARAM_STR);
    $req->bindValue(':post_movie_synopsis', $post->post_movie_synopsis(), \PDO::PARAM_STR);
    $req->bindValue(':post_movie_actors', $post->post_movie_actors(), \PDO::PARAM_STR);
    $req->bindValue(':post_movie_release', $post->post_movie_release());
    $req->bindValue(':post_movie_poster', $post->post_movie_poster(), \PDO::PARAM_STR);
    $req->execute();
  }

  // This one is for delete
  public function delete(Post $post)
  {
    $this->_db->exec('DELETE FROM POST WHERE id = '.$post->post_id());
  }

  // This one is for getting a single data 
  public function get(int $id)
  {
    $req = $this->_db->prepare('SELECT * FROM post WHERE post_id = :post_id');
    $req->execute([
      'post_id' => $post_id,
    ]);

    $req->setFetchMode(PDO::FETCH_CLASS, Post::class);
    $post = $req->fetch();
    return $post;
  }

  // This one is for getting all data events
  public function getList() {
    $post = [];
    $req = $this->_db->prepare('SELECT * FROM POST ORDER BY post_id');
    while ($data = $req->fetch(PDO::FETCH_ASSOC))
    {
      $post[] = new Post($data);
    }
    return $post;
  }

  // This one is for Updating a single data, selected by his ID
  public function update(Post $post)
  {
    $req = $this->_db->prepare('UPDATE POST 
    SET post_id = :post_id, 
    member_id = :member_id,
    post_movie_title = :post_movie_title,
    post_movie_synopsis = :post_movie_synopsis,
    post_movie_director = :post_movie_director,
    post_movie_actors = :post_movie_actors,
    post_movie_release = :post_movie_release,
    post_movie_poster = :post_movie_poster,
    post_date = :post_date
    WHERE post_id = :post_id');
    $req->bindValue(':post_id', $post->post_id());
    $req->bindValue(':member_id', $post->member_id());
    $req->bindValue(':post_movie_title', $post->post_movie_title(), PDO::PARAM_STR);
    $req->bindValue(':post_movie_synopsis', $post->post_movie_synopsis(), \PDO::PARAM_STR);
    $req->bindValue(':post_movie_director', $post->post_movie_director(), \PDO::PARAM_STR);
    $req->bindValue(':post_movie_synopsis', $post->post_movie_synopsis(), \PDO::PARAM_STR);
    $req->bindValue(':post_movie_actors', $post->post_movie_actors(), \PDO::PARAM_STR);
    $req->bindValue(':post_movie_release', $post->post_movie_release(), \PDO::PARAM_STR);
    $req->bindValue(':post_movie_poster', $post->post_movie_poster(), \PDO::PARAM_STR);
    $req->execute();
  }
  // Set the PDO instance to the _db variable
  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}