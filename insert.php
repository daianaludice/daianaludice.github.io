
<?
$db_host ="localhost";
$db_user = "root";
$db_password ="autoset";
$db_name = "portfolio";
$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);

if(!$conn){
  die("connetction failed:" . mysqli_connect_error());
  }

$name = addslashes($_POST["name"]);
$password = addslashes($_POST["password"]);
$email = addslashes($_POST["email"]);
$homepage = addslashes($_POST["homepage"]);
$subject = addslashes($_POST["subject"]);
$memo = addslashes($_POST["memo"]);

$writetime = date("Y/m/d");
$ip = getenv("REMOTE_ADDR");
$hit =0;

$sql = "INSERT INTO notice(number,name,password,email,homepage,subject,memo,ip,writetime,hit)
        VALUES('','$name','$password','$email','$homepage','$subject','$memo','$ip','$writetime','$hit')";
if (mysqli_query($conn,$sql)){
  echo "new record create successfully";
  }
  else{ echo "Error: " .$sql . "<br>" . mysqli_error($conn);
  }

mysqli_close($conn);

?>
<html>
 <head>
    <script type="text/javascript">
       self.window.alert('성공적으로 전송되었습니다.');
       location.href='notice_board.php';
    </script>
 </head>
       
</html>
