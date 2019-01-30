<?php 

if(isset($_POST['submit'])) {
    

    $minimun = 5;
    $maximun = 10;

$username = $_POST['username'];
$password = $_POST['password'];
    
  
    
    
    echo "Welcome";
    
?>

<!DOCTYPE html>
<html>
<body>

<h2>Welcome to our food pantry! What would you like?</h2>

    <h3> Pick Carbs </h3>
<select name="Carbs">
  <option value="Bread">Bread</option> 
  <option value="Pasta (uncooked)">SPasta (uncooked)</option>
  <option value="Noodles">Noodles</option>
  <option value="Hamburger Buns">Hamburger Buns</option>
</select>
<br>
<br>
<button type="button" onclick="alert('Hello World!')">Click Me!</button>

</body>
</html>
