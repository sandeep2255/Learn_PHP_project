<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<?php
    include './header.php';

    if(!empty($_POST['submit'])){

        # define sql query
        $userid=filter_input(INPUT_POST,'userid',FILTER_SANITIZE_SPECIAL_CHARS);
        $password=filter_input(INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS);

        $sql="INSERT INTO user VALUES('$userid', '$password')";

        # check if sql query successful

        if(mysqli_query($connection,$sql)){

            # if successful then print sign up success 

            header('Location:/myProjects/sample/login.php');

        }else{

            echo "Error" . mysqli_error($connection);
        }
    }   

?>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
    
    <div class="heading1">
    <h1>Sign Up</h1>
    </div>
    <div class="label">
    <label class="new" for="userid">User id: </label>
    <input type="text" name="userid"></input>
    <label class="new" for="password">Password: </label>
    <input type="password" name="password"></input>
    </div>
    <br/>
    <br/>
    <div class="row" style="padding-left: 10%;">
        <button class="btn btn-primary" value="submit" name="submit" type="submit">submit</button>
    </div>
</form>
<br/>
<a href="/myProjects/sample/login.php">Sign In</a>