<link type="text/css" rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="view/custom-style.css">
<?php

require_once (__DIR__."/../model/config.php");
?>

<h1>Register</h1>


<form method="post" action="<?php echo $path . "/controller/create-user.php";?>">
    <div>
        <!--//email you need to register//-->
        <label for="email"> Email:</label>
        <input type="text" name="email"/>
    </div>
    
    <div>
        <!--username you use to register-->
        <label for="username">Username:</label>
        <input type="text" name="username"/>
    </div>
    
    <div>
        <!--password for register page-->
        <label for="password">Password:</label>
        <input type="password" name="password"/>
    </div>    
    
    <div>
        <button type="submit">Submit</button>
    </div>
        
  
</form>
