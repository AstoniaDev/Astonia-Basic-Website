<?php
require("config.php");
// Begin the session
session_start();

// Unset all of the session variables.
session_unset();

// Destroy the session.
session_destroy();
header("refresh:3;url=index.php");
?>
    <html>
<head>
    <title>Logged Out</title>
</head>

<body>
<h1>You are now logged out. Please come again</h1>
</body>
</html>
<?php include_once("analytics.php") ?>