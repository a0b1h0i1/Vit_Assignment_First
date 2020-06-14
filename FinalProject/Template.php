<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="signup.php">SIGNUP</a></li>
                   
                </ul>
            </nav>
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            <div id="sidebar">
                    <nav id="navigation">
                <ul id="nav">
                    <li><a href="">Users Sessions</a></li>
                    
                    <h3>Go to login for access this part</h3>
                </ul>
            </nav>
                </div>
            
            <footer>
                <p></p>
            </footer>
        </div>
    </body>
</html>
