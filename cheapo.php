<?php 

$host =getenv('IP');
$username = getenv('C9_USER');
$password='';
$dbname ='CheapoMail';
$pdo= new PDO("mysql:host=$host; dbname=$dbname", $username, $password);

$query="SELECT * FROM Users WHERE username = admin AND password = password123"
$result= $conn-> query($query);



if($result -> $row > 0){
    
    while($row = $result->fetch_assoc()){
        
        echo '<ul>'
        
    
    echo'<li> Username ='.$row['username'].'password = '.$row['password'].'</li>';

    }
};
echo '</ul>';




