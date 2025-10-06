<html>
<body>

<table>

<?php

$conn = new mysqli('mysql', 'root', 'password', 'db34');

// Don't do this. This bad.
// $sql = 'SELECT * FROM users WHERE name = "'
//    . $_GET['name'] . '" AND password = SHA2("' . $_GET['password'] . '", 256)';
// $result =  $conn->query($sql);

// this better.
$sql = 'SELECT * FROM users WHERE name = ? AND password = SHA2(?, 256)';
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $_GET['name'], $_GET['password']);
$stmt->execute();
$result = $stmt->get_result();

echo $sql;

while( $row = $result->fetch_assoc()) {
?>
<tr>
  <td><?php echo $row['name']?></td>
  <td><?php echo $row['email']?></td>
  <td><?php echo $row['password']?></td>
</tr>
<?php } ?>
</table>


<form>
<label for="name">User Name:</label>
<input name="name" id="name" />
<label for="password">Password:</label>
<input name="password" id="password" />
<input type="submit" />
</form>


<h1><?php echo $_GET['hamburgers']; ?></h1>

<p>lkj wedl s,knlk jeclkknlkn laxclkjnlkja sdjlkwl jwekjn wkjfn lmsd lmwslkd lksdnflkfs lknsd</p>
<p>lkj wedl s,knlk jeclkknlkn laxclkjnlkja sdjlkwl jwekjn wkjfn lmsd lmwslkd lksdnflkfs lknsd</p>
<p>lkj wedl s,knlk jeclkknlkn laxclkjnlkja sdjlkwl jwekjn wkjfn lmsd lmwslkd lksdnflkfs lknsd</p>
<p>lkj wedl s,knlk jeclkknlkn laxclkjnlkja sdjlkwl jwekjn wkjfn lmsd lmwslkd lksdnflkfs lknsd</p>
<p>lkj wedl s,knlk jeclkknlkn laxclkjnlkja sdjlkwl jwekjn wkjfn lmsd lmwslkd lksdnflkfs lknsd</p>
<p>lkj wedl s,knlk jeclkknlkn laxclkjnlkja sdjlkwl jwekjn wkjfn lmsd lmwslkd lksdnflkfs lknsd</p>
</body>
</html>
