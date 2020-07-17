<?php 
  

if(isset($_POST['login'])){
    $ID = @_POST['ID'];
    $Name = @_POST['Name'];
}
if(!empty($ID) || !empty($Name)){
    $host = 'localhost';
    $user = "root";
    $password = '';
    $db = 'StudentsDB';

$conn = new mysqli($host, $user, $password ,$db  );
$sql = "select * from StudentsDB  where Name='".$Name."'AND ID='".$ID."'limit 1";

  $query = "Select * from names where name='$Name'";
  $result = mysqli_query($conn,$sql);





if($row = mysqli_fetch_assoc($result)){
    $db_id = $row['ID'];

   // $db_name = $row['ID'];

    if(md5($ID)==$db_id)
{ echo 'Your test is ready';
}
else {
    echo 'incorrect id';
}
}
else {
    echo 'Check your query';
}
}
else {
    'all fields are requiered';
}
   
?>