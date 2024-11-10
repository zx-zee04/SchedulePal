<?php
include 'include/connection.php';
include 'include/function.php';

$id = $_GET['id'];
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  deleteFakultas($id, $conn);
  header("Location: fakultas.php");
}
?>