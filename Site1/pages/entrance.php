
<h3>Entrance Form</h3>
<?php
if(!isset($_POST['enmbtn']))
{
?>
<form action="index.php?page=5" method="post"> 
	<div class="form-group">
    <label for="login">Login:</label>
    <input type="text" class="form-control" name="login">
  </div>
  <div class="form-group">
    <label for="pass1">Password:</label>
    <input type="password" class="form-control" name="pass1">
  </div>
 
  <button type="submit" class="btn btn-primary" name="regbtn">Вход</button>
</form>
<?php


}