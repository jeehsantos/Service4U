<?php
if(!isset($_SESSION)) 
{
    session_start(); 
}
include_once('connection.php');
include_once('login.php');

if(isset($_POST['updateMyProfile'])){
    
        if ( $_SESSION['user_id'] != '') {
            $user_id = $_SESSION['user_id'];
            $fullName = $_POST['fullName'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $postCode = $_POST['postCode'];
            $phone = $_POST['phone'];
            $city = $_POST['city'];
            $password =  $_POST['password'];
            $query = "UPDATE `users` SET `fullName`='$fullName',`email`='$email',`address`='$address',`postCode`=$postCode,`phone`=$phone,`city`='$city',`password`= md5('{$password}') WHERE `user_id` = $user_id";
            
            $result = mysqli_query($strcon, $query);  
            $strcon->close();
            header('location: index.php');
        }
}
            
               /*  if(in_array($file_extension, $validextensions)){	
                                if(move_uploaded_file($src, $targ)){ 
                                    $query = "UPDATE `users` SET `fullName`='$fullName',`email`='$email',`address`='$address',`postCode`='$postCode',`phone`='$phone',`city`='$city',`password`='MD5('$password')',`img_user`=' $image_name' WHERE user_id = 'user_id'";
                                    $query = mysqli_query($strcon, $query);
                                    echo "atualizado";
                                }else{
                                    
                                    echo "nothing";
                                }
                        }else{
                            echo "Only allowed jpeg,jpg and gif extension";
                        }
                 
            }  
              
}else{

    echo "errou";
}*/
?>
 