<?php
file_put_contents('data/'.$_POST['title'], $_POST['description']);
header('Location: /index.php?id='.$_POST['title']);
//생성된페이지로 이동하는것, 리다이렉션
?>
