<?php
include_once('connection.php');
include_once('index.php');
//buton login
if(isset($_POST['btn-enter'])):
    $errors = array();
    $email = mysqli_real_escape_string($strcon, $_POST['email']);
    $password = mysqli_real_escape_string($strcon, $_POST['password']);
    if(empty($email) or empty($password)):
        $errors[] = "<li> The field login/password must be filler";
    else:
       
        $query = "SELECT email FROM users WHERE email = '$email'";
         $result = mysqli_query($strcon, $query);
          
        if(mysqli_num_rows($result) > 0):
            $query = "SELECT * FROM `users` WHERE email = '$email' and password = md5('{$password}')";
            $result = mysqli_query($strcon, $query);
            if(mysqli_num_rows($result) == 1):
                $data = mysqli_fetch_array($result);
                $_SESSION['logged'] = true;
                $_SESSION['id_user'] = $data['email'];
                header('Location: aboutus.php');
            else:
                $errors[] = "<li>User and password does not match</li>";
            endif;
            
        else:
            $errors[] = "<li>User does not exist</li>";
        endif;
    endif;    
endif;

?>