<?php 
require_once(__DIR__. "/../model/config.php");
?>
<!--links to pages from my navbar-->
<nav>
    <ul>
        
        
        <a class="blogPost" href="<?php echo $path . "/index.php"; ?>">Main Page</a>
        
          <a class="blogPost" href="<?php echo $path . "/post.php"; ?>">Post Blog Form</a>
            <a class="blogPost" href="<?php echo $path . "/login.php"; ?>">Sign in</a>
          
        
    </ul>
</nav>
