<?php
$user = "juanpedro";
$password = "juanpedro";
$database = "consultas";
$table = "pacientes";

try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
  echo "<h2>COnexión a la base de datos exitosamente</h2><ol>";
  foreach($db->query("SELECT nombre FROM pacientes") as $row) {
    echo "<li>" . $row['content'] . "</li>";
  }
  echo "</ol>";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

