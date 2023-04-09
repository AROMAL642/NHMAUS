<?php
$username = $_POST['username']; 
$password = $_POST['password']; 

if ($username === 'nhmaus' && $password === 'admin') { 
    $link = "https://example.com"; 
    echo "<a href='$link'>Click here to access the secure page</a>";  tag
} else {
    echo "Incorrect username or password"; 
}
?>

