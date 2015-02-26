<?php
//links for pages//
require_once (__DIR__ . "/../model/config.php");
require_once (__DIR__ . "/../controller/login-verify.php");
?>





<link type="text/css" rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="view/custom-style.css">
<form method="post" action="<?php echo $path . "/controller/login-user.php";?>">
    <div>
        <label for="username">Username:</label>
        <input type="username" name="username"/>
            
    </div>
    <div>
        <label for="post">Password:</label>
        <input type="password" name="password"/>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
    
</form>



