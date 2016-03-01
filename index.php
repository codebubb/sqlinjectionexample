<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
  <style>
    .container{
      padding-top: 200px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-offset-3 col-sm-6">
        <?php
          if (isset($_POST['username'])){
            extract($_POST);
            $db = new SQLite3('users.db');
            $query = "SELECT username FROM users WHERE username=\"$username\" AND password=\"$password\";";
            echo "<pre>$query</pre>";
            $results = $db->query($query);
            if($row = $results->fetchArray()){
              echo "<h1>Welcome, " .$row[0] . "</h1>";
            } else{
              echo "<h1>Login failed!</h1>";
            }
          }
        ?>
          <form action="index.php" method="POST">
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="text" class="form-control" name="password">
            </div>
            <button class="btn btn-primary btn-block">Login</button>
          </div>
      </form>
    </div>
  </div>
</body>
</html>
