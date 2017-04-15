<?php
session_start();
if(isset($_SESSION['SESS_CHANGEID']) == TRUE) {
session_unset();
session_regenerate_id();
}
require("db_connect.php");
?>

<?php echo $config_sitename; ?>
<div id="header"></div>
<div id="menu">
<a href="<?php echo $config_basedir; ?>">Home</a> -

<a href="<?php echo $config_basedir;?>showcart.php">View Basket/Checkout</a></div>
<div id="container">
<div id="bar">
<?php
require("bar.php");

echo "<hr />";

if(isset($_SESSION['SESS_LOGGEDIN']) == TRUE)

{

echo "Logged in as <strong>" . $_SESSION['SESS_USERNAME']. "</strong>[<a href="&quot; . $config_basedir. &quot;logout.php">Logout</a>]";

}

else{

echo "<a href="&quot;. $config_basedir . &quot;login.php">Login</a>";

}

?></div>
<div id="main">