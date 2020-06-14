<?php
    session_start();
?>

<?php
$title = "Home";
$content = '
<h2 text-align: center>Economic Impact of the COVID-19 pandemic in India</h2>
<p>
  The economic impact of the 2020 coronavirus 
  pandemic in India has been largely disruptive. 
  India growth in the fourth quarter of the fiscal 
  year 2020 went down to 3.1% according to the Ministry
  of Statistics. The Chief Economic Adviser to the Government
  of India said that this drop is mainly due to the coronavirus
  pandemic effect on the Indian economy. Notably India had also
  been witnessing a pre-pandemic slowdown, and according to the
  World Bank, the current pandemic has "magnified pre-existing 
  risks to India economic outlook".
</p>';

//include 'Template.php';
?>
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
                <h1>My Google Docs</h1>
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="main.php">HOME</a></li>
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
                    <li><a href="sessions.php">CLICK HERE</a></li>
                    <h3>User Sessions<h3>
                </ul>
            </nav>
                </div>
            
            <footer>
                <p></p>
            </footer>
        </div>
    </body>
</html>
