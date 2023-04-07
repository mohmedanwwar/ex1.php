<?php 

// connect php with SQL
$host="localhost";
$user="root";
$password="";
$dbName="web";
$conn =  mysqli_connect($host, $user ,$password ,$dbName); 

// if($conn){
//     echo"Connication is True";
// }else{
//     echo"connication is fales";
// }

// Create
$create= "INSERT INTO `courses` VALUES (NULL, 'WWEB' , 20.65 , Default) ";

$I = mysqli_query($conn ,$create) ;


// if($I){
//      echo"Connication is True";
//  }else{
//      echo"connication is fales";
//  }

// select

$select = "SELECT * FROM  `courses`";
$s = mysqli_query($conn, $select);

foreach ($s as $data){
    echo $data['id'] . "<br>";
     echo $data['name'] . "<br>";
      echo $data['cost'] . "<br>";
       echo $data['date'] . "<hr>";
}
//  update
$update="UPDATE `courses` SET name ='Full stack' , cost=5000 where id=2";
mysqli_query($conn,$update);

// delete
$delete =" DELETE from `courses`";
mysqli_query($conn ,$delete);
?>
