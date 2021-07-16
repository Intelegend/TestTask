
<?php require_once("header.php"); ?>
<div class = 'second'>
<?php 
	$link = mysqli_connect($host, $user, $pass, $dbname);
    $query = "select * from comments order by date DESC";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

    foreach ($result as $row) {
        echo "<div class = 'comments'>";
        echo "<b>". $row['name'] ."</b> \n";
        echo "". $row['date'] ."\n";
        echo "<br>";
        echo "". $row['commenttext'] ."\n";
        echo "</div>";
        echo "<br>";
    }
    echo "<hr>";
?>
</div>
<div class = 'third'>
<form action = "index.php" id="index" method = "post" name = "index">
<?php

if(isset($_POST["submit"])){
    echo "<meta http-equiv='refresh' content='0'>";
 if(!empty($_POST['name']) && !empty($_POST['commenttext'])) {
 
 $name = htmlspecialchars($_POST['name']);
 $commenttext=htmlspecialchars($_POST['commenttext']);

  if (!empty($_POST)) {
        $name = $_POST['name'];
	    $commenttext = $_POST['commenttext'];
        $date = date('H:i:s Y.m.d');
		$query = "INSERT INTO comments SET name = '$name', commenttext = '$commenttext', date = '$date'";
		mysqli_query($link, $query) or die(mysqli_error($link)); 
        } 
    }
}
?>
<p><label><h3>Оставить комментарий</h3>
<p><label for="user_login">Имя<br>
<input class="text" name="name" size="32"  type="text" ></label></p>
<p><label for="user_pass">Комментарий</label><br></p>
<textarea form = "index" name="commenttext"  type="text" class="area"> </textarea> <br>

<input class="submit" name="submit" type="submit" value="Отправить">
</form>
</div>
<?php require_once("footer.php"); ?>