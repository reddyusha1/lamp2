<!-- File: server-variables.php -->

<html>

<head>
<title>ServerVariables Example</title>
<link rel="stylesheet" type="text/css" href="../styles.css" />
</head>

<body>

<h2>ServerVariables Example</h2>

<p>Print the values of server variables.</p>

<form action="server-variables.php" method="get">
<?php 
    if (!isset($_GET["is_submitted"]))
    {
        echo <<<HTML
<input type="submit" name="btnSubmit" value="Show Server Variables" />
<input type="hidden" name="is_submitted" value="1" />
HTML;
    }
    else
    {
        echo <<<HTML
<table border="1" cellpadding="5">
<tr><th>Variable</th><th>Value</th> </tr>
<tr><td>PHP_SELF</td>       <td>$_SERVER[PHP_SELF]</td>       </tr>
<tr><td>QUERY_STRING</td>   <td>$_SERVER[QUERY_STRING]</td>   </tr>
<tr><td>SERVER_NAME</td>    <td>$_SERVER[SERVER_NAME]</td>    </tr>
<tr><td>DOCUMENT_ROOT</td>  <td>$_SERVER[DOCUMENT_ROOT]</td>  </tr>
<tr><td>REMOTE_ADDR</td>    <td>$_SERVER[REMOTE_ADDR]</td>    </tr>
<tr><td>HTTP_REFERER</td>   <td>$_SERVER[HTTP_REFERER]</td>   </tr>
<tr><td>HTTP_USER_AGENT</td><td>$_SERVER[HTTP_USER_AGENT]</td></tr>
</table>

<input type="hidden" name="is_submitted" value="1" />
HTML;
    }
?>
</form>
</body>
</html>

