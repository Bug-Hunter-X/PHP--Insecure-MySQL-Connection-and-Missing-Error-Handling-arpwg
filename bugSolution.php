The corrected code uses the `mysqli_*` functions, provides more robust error handling, and ensures that the database connection is properly closed, even in case of errors.

```php
$mysqli = new mysqli('localhost', 'user', 'password', 'my_database');

if ($mysqli->connect_error) {
die('Connect Error: ' . $mysqli->connect_errno . ' - ' . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT * FROM my_table");

if ($result) {
  while ($row = $result->fetch_assoc()) {
    print_r($row);
  }
  $result->free_result();
} else {
die('Query Error: ' . $mysqli->errno . ' - ' . $mysqli->error);
}

$mysqli->close();
```