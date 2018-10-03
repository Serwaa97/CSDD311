
<?php

    require 'table_stu.php';
    $username="";
    $password="";
    if(isset($_POST['loginbtn'])){
        $password= strip_tags($_POST['password']);
        $username= strip_tags($_POST['username']);
        $query=mysqli_query($conn,"SELECT * FROM table_stu WHERE username= '$username' AND password='$password'");
        $check_query = mysqli_num_rows($query);
        
        if($check_query===1){
            header("Location:newpage.php");
        }
        else{
            echo"Not Successful";
            
        }
    }


        
        
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>STUDENT DATABASE</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
        <<link rel="stylesheet" type="text/css" href="newpage.php"/>
        <style>
            #loginform{
                position:absolute;
                top:50%;
                left:50%;
                transform:translate(-50%,-50%);
                border:5px solid powderblue;
                width:25%;
                border-radius:5px;
                border-top: 5px;
                margin: 0 auto;
/*                padding:10px;
                margin:auto;
                height:300px;
                */
                text-align: center;
                height:60vh;
            }
            *{
               
                margin: 0 ;
                padding : 0 ;
            }
           
            
            h3{
                display :inline;
               
            }
        </style>
    </head>
    <body >
        <div id="loginform">
        <form id="abc" action="index.php" method="POST" >
            <table >
                <tr> <h3>Please Login</h3></tr>
    <tr>
        <td>
            Username:
        </td>
        <td >
            <input style="margin-top:40px ;" type="text" class="form-control" name="username" placeholder="Enter Username" required/><br><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for="password">Password:</label>
        </td>
        <td>
             <input style="margin-top:40px ;" type="password" class="form-control" name="password" placeholder="Enter Password" required/><br><br>
        </td>
    </tr>
    
    
    
</table>
           
            <button name="loginbtn"  type="login"  class="btn btn-primary">login</button>
        </form>
        </div>
          
    </body>
</html>


