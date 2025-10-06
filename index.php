<html>
<body>

<h1>List of books</h1>
<table>

<?php

$conn = new mysqli('mysql', 'root', 'password', 'db34');

// Don't do this. This bad.
$sql = 'SELECT * FROM booklist';
$result =  $conn->query($sql);

while( $row = $result->fetch_assoc()) {
?>
<tr>
  <td><?php echo $row['year']?></td>
  <td><?php echo $row['name']?></td>
  <td><?php echo $row['author']?></td>
</tr>
<?php } ?>
</table>

</body>
</html>
