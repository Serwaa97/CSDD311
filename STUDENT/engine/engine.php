<?php 
require"log.php";
     $error = error_reporting(E_ALL);
     
if(isset($_SESSION['index_number'])){
    echo"rrrrrrrr";
    $register = true;
    $userLoggedIn = $_SESSION['index_number'];
    $query = mysqli_query($connection, "SELECT * FROM infos WHERE index_number = $userLoggedIn");
    $user = mysqli_fetch_array($query);
    // $firstname = $user['firstname']; 
     $hometown = "";
    $disability = "";
    $city = "";
    $gender = "";
    $hostel = "";
    $n_o_k = "";
    $home_add = "";
    $course = "";
    $affect_area = "";
    $phone_number = "";
    $status = "";
    $guard_name = "";
    $dob= "";
    $nationality = "";
  


   
    

    if(isset($_POST["btn-send"])){

        if($register){
            $hometown = strip_tags($_POST["hometown"]);
            $disability =strip_tags($_POST["disable"]);
            $city = strip_tags($_POST["city"]);
            $gender = strip_tags($_POST["gender"]);
            $hostel = strip_tags($_POST["hostel"]);
            $n_o_k =strip_tags($_POST["nok"]);
            $home_add = strip_tags($_POST["home_add"]);
            $course = strip_tags($_POST["course"]);
           
            $affect_area = strip_tags($_POST["affect_area"]);
            $phone_number = strip_tags($_POST["phone_number"]);
            $status = strip_tags($_POST["status"]);
            $guard_name = strip_tags($_POST["guard_name"]);
            $dob= strip_tags($_POST["dob"]);
            $nationality =strip_tags($_POST["nationality"]);
           

       

            $query = mysqli_query($connection,"INSERT INTO stud_info VALUES('','$userLoggedIn','$hometown','$disability','$city','$gender','$hostel','$n_o_k','$home_add','$course','$affect_area','$phone_number','$status','$guard_name','$dob','$nationality')");
            
          echo "entry sent successful";
           $register = false;
        }
           
     }
   }

