<?php
session_start();

echo "id: " . $_SESSION['id']."<br> usuário: ".$_SESSION['usuario']." <br>". session_id();
?>