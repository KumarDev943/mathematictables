<h1><center><?php echo "Multiplication Tables"?></center></h1>
<form action="index.php" method="post"><center>
<label for="username">Starting Number:</label>
            <input type="number" name="num" value = "i">
            <label for="username">Ending Numaber:</label>
            <input type="number" name="num1" id="username" value = "j">
            <input type="submit" name = "submit">

<h2><center>
<?php 
if(isset($_POST['submit'])){
    $num = $_POST['num'];
    $num1 = $_POST['num1'];
    
for($i = 1; $i <=$num1; $i++){
 
    echo "$num"."*"."$i"."=". $num * $i."</br>";
}

}


?>
</center></h2>