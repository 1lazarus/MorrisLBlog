<?php
require_once (__DIR__ . "/../model/config.php");
require_once (__DIR__ . "/../controller/login-verify.php");
?>






<form method="post" action="<?php echo $path . "/controller/create-post.php";?>">
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



