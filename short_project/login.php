<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<?php

    session_start();
    include './header.php';

    # check is the submit is set

    if(isset($_POST['submit'])){

        # check if the user id and password is empty or not

        $userid=filter_input(INPUT_POST,'userid',FILTER_SANITIZE_SPECIAL_CHARS);
        $password=filter_input(INPUT_POST,'password', FILTER_SANITIZE_SPECIAL_CHARS);

        $sql="SELECT * FROM user";
        $result=mysqli_query($connection, $sql);
        $log=mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach($log as $item){

            if($userid== $item['user_id'] && $password== $item['password'] ){

                # create a session
                $_SESSION['user_id']=$userid;
                header('Location:/myProjects/sample/home.php');

            }else{
                $flag=1;
            }
        }
        if($flag==1){
            echo'<p style="color:red;">Invalid login</p>';
        }
    }
?>

<form action="<?php $_SERVER['PHP_SELF'];?>" method= "POST">
    <div class="heading">
    <h1>FEEDBACK FORM</h1>
    </div>
    <div class="label">
    <label class="new" for=userid> User id: </label>
    <input type="text" name="userid" placeholder="Enter your userid"></input>
    <label class="new" for=password> Password: </label>
    <input type="password" name="password" placeholder="Enter your password"></input>
    </div>
    <br/>
    <br/>
    <div class="row" style="padding-left: 20%;">
        <div class="col-sm">
            <button name="submit" value="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Login</button>
        </div>
        <div class="col-sm">
            <a class="btn btn-secondary" href="/myProjects/sample/signup.php"><i class="fa fa-user-plus"></i> Sign Up</a>
        </div>
    </div>
</form>