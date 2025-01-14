<?php
require 'config.php';
error_reporting(0);

function signup(){


    global $conn;

    $username = $_POST['username'];
    $email = $_POST['email'];
    $usertype = $_POST['usertype'];
    $password = $_POST['password'];
    $conpassword = $_POST['conpassword'];
    $hashpassword = password_hash($password, PASSWORD_BCRYPT);

    if($username == "" || $email =="" || $usertype =="" || $password =="" || $conpassword ==""){
        $message = "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
         All field are required.
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>";
        echo json_encode(['status'=>'error','html'=>$message]);  
    }else{
        if($password == $conpassword){
            $sql = "INSERT INTO user (username, email, user_type, password, date)
                    VALUES('$username', '$email', '$usertype', '$hashpassword', NOW())";
      $query = mysqli_query($conn, $sql);
      if($query){
        $message = "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
         Account created successfully
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>";
      echo json_encode(['status'=>'success','html'=>$message]); 
      }else{
        $message = "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
         Error occured.
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>";
      echo json_encode(['status'=>'error','html'=>$message]); 
      }
        }else{
          $message = "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
          Password does not match.
         <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
           <span aria-hidden=\"true\">&times;</span>
         </button>
       </div>";
       echo json_encode(['status'=>'error','html'=>$message]);  
        }
    } 
  }

  function login_auth(){
  session_start();
  global $conn;

  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT *FROM user WHERE username='$username'";
$query = mysqli_query($conn, $sql);
if($query->num_rows > 0){
  $row = mysqli_fetch_assoc($query);
if(password_verify($password, $row['password'])){
 if($row['user_type'] == '1'){
  echo json_encode(['status'=>'staff','html'=>'$message']); 
 }else{
  echo json_encode(['status'=>'student','html'=>'$message']); 
 }
}else{
        $message = "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
        Incorrect credential. 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
        </div>";
      echo json_encode(['status'=>'error','html'=>$message]); 
    }

}else{
          $message = "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
          Incorrect credential. 
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
        </div>";
        echo json_encode(['status'=>'error','html'=>$message]); 
     }


  }
  ?>