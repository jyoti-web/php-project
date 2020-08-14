<?php
require("../config.php");

if (isset($_GET['edit_row'])) {
    $sql = $conn->prepare("UPDATE comments SET name=? , comments=?  WHERE id=?");
    $id = $_GET['id'];
    $name = $_GET['name'];
    $comments = $_GET['comments'];

    $sql->bind_param($id, $name, $comments);
    if ($sql->execute()) {
        print "success";
    } else {
        $error_message = "Problem in Editing Record";
    }
}
?>