<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter an e-mail</label>";  
      }  
      else if(empty($_POST["un"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      }  
      else if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
      else if(empty($_POST["Cpass"]))  
      {  
           $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
      } 
       
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'e-mail'          =>     $_POST["email"],  
                     'username'     =>     $_POST["un"],  
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title></title>  
           
      </head>  
      <body style="background-color:#F0F8FF">
      <br>
       
           <br />  
           <h2 style="text-align: center; color: #008B8B; background-color: #FAEBD7">LOGIN</h2><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>USERNAME:</label>  
                     <input type="text" name="name" class="form-control"/> <br/> 
                     <br>
                     <label>Email:</label>
                     <input type="text" name="e-mail" class="form-control"/><br/>
                     <br>
                     <label>Password</label>
                     <input type="password" name = "pass" class="form-control"/><br/>
                     <br>
                     <label>Confirm Password</label>
                     <input type="password" name = "Cpass" class="form-control"/><br/>

                     
                     <input type="submit" name="submit" value="Append" class="btn btn-info" /> <br/>                     
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     
                     ?>  
                </form>  
           </div>  
           <br /> 
           <a href="registration.php">click here for registration page</a> 
      </body>  
 </html>  