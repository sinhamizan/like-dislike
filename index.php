<?php 
  include_once "db.php";

  $post_sql = "SELECT * FROM posts";
  $post_qs = mysqli_query( $conn, $post_sql );

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
    
    <div class="login-page pt-5">
      <div class="container">
        <div class="row">
          <div class="col-8 offset-2">
            <h2>All Posts</h2>
            <?php if( mysqli_num_rows( $post_qs ) ): ?>
              <?php while( $row = mysqli_fetch_assoc( $post_qs ) ): ?>
                <div class="card mb-3">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $row['title']; ?></h5>
                    <p class="card-text"><?php echo $row['description']; ?></p>
                    <a class="btn">Like</a><span class="badge bg-primary">4</span>
                    <a class="btn">Dislike</a><span class="badge bg-danger">4</span>
                  </div>
                </div>
                <?php endwhile; ?>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>