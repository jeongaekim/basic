<?php
require_once('lib/print.php'); //require를 중복될경우 에러발생 그래서 once이용
require_once('view/top.php');
?>

    <a href="create.php">create</a>
    <?php if(isset($_GET['id'])){ //존재여부 isset ?>
      <a href="update.php?id=<?=$_GET['id']?>">update</a>
                        <!--php echo와 ;를 =로 바꾸고 ;삭제하여 간결하게-->
      <form action="delete_process.php" method="post">
              <input type="hidden" name="id" value="<?=$_GET['id']?>">
              <input type="submit" value="delete">
            </form>
    <?php } ?> <!--php로 중괄호를 묶어 중간부부 모두 if에 맞춰야만 존재-->
    <h2>
      <?php
            print_title();
            ?>
    </h2>
    <?php
    print_description();
     ?>
     <?php
     require_once('view/bottom.php');
     ?>
