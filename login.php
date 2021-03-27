<?php include_once('connection.php');
 
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
                session_start();
                $data = mysqli_fetch_array($result);
                if($data['role_id'] == 1 ){
                    $_SESSION['logged'] = true;
                    $_SESSION['id_user'] = $data['email'];
                    $_SESSION['name'] = $data['fullName'];
                    header('Location: Admin/index.php');
                }else{ 
                $_SESSION['logged'] = true;
                $_SESSION['id_user'] = $data['email'];
                $_SESSION['user_id'] = $data['user_id'];
                header('Location: account.php');
            }
            else:
                $errors[] = "<li>User and password does not match</li>";
                header('Location: loginPopup.php');
            endif;
            
        else:
            $errors[] = "<li>User does not exist</li>";
            header('Location: panel.php');
             
        endif;
        
    endif;    
endif;

?>