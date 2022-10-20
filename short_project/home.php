<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<?php
  session_start();
  include './header.php';

  if(isset($_SESSION['user_id'])){
    echo '<h1> Welcome '.$_SESSION['user_id'] .'</h1>';
    echo '<a href="/myProjects/sample/logout.php">logout</a>'; 
  }else{
    echo '<h1> Welcome Guest </h1>';
    echo '<a href="/myProjects/sample/login.php">Sign In</a>'; 
  }
  # Check if there is a submit value
  if(isset($_POST['submit'])){

    # if there is a submit value then check for the name value

    if(!empty($_POST['name'])){

      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

      # check if there is email value and the format

      if(!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)==true){

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);

        # check if there is feedback

        if(!empty($_POST['content'])){

          $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);

          # insert the data to database and redirect to feedback page

          $sql = "INSERT INTO feedback(name,email,content) VALUES ('$name', '$email', '$content')";

          if(mysqli_query($connection, $sql)){

            # successful insert

            header('Location:/myProjects/sample/feedback.php');
          }else{
            echo "Error:" . mysqli_error($connection);
          }

        # else print error message for content invalid
        
        }else{
          $contenterr='<p style="color:red;">No feedback given, please provide the feedback</p>';
        }

      # else print error message for email invalid

      }else{
        $emailerr='<p style="color:red;">No email specified, please specify your email in correct format</p>';
      }
      
    # else print error message of name  invalid

    }else{
      $nameerr = '<p style="color:red;">No name given, please provide the feedback</p>';
    }
  }
?>


  <form action="<?PHP $_SERVER['PHP_SELF']; ?>" method="POST">
     <label for="name">Name:</label>
      <br/>
      <input type="text" name="name" placeholder="Type your name"></input>
      <?php echo $nameerr ?? null; ?>
      <br/>

      <label for="name">Email:</label>

      <br/>

      <input type="text" name="email" placeholder="Type your name"></input>
      <?php echo $emailerr ?? null; ?>
      <br/>

      <label for="content">Type your feedback:</label>

      <br/>

      <textarea name="content" placeholder="feedback here"></textarea>
      <?php echo $contenterr ?? null; ?>
      <br/>

      <input type="submit" name="submit" value="submit"></input>

      </form>
      </div>
      </main>
    </body>
</html>