<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
  </head>
<body>
<h1>Number & Arithmetic Operator</h1>
  <h2>1+1</h2>
      <?php
      echo 1+1;
      ?>
  <h2>2-1</h2>
      <?php
      echo 2-1;
     ?>
  <h2>2*2</h2>
     <?php
     echo 2*2;
     ?>
  <h2>4/2</h2>
     <?php
     echo 4/2;
     ?>
<h1>String & String Operator</h1>
     <?php
     echo "Hello \"w\"ord";
     ?>
  <h2>concatenation operator</h2>
     <?php
     echo "Hello "."world";
     ?>
  <h2>String length function</h2>
     <?php
     echo strlen("Hello world");  //띄어쓰기 포함됨
      ?>
<h1>Variable</h1>
    <?php
    $name = "leezche";
    echo "Lorem ipsum dolor sit amet, consectetur ".$name."
    adipisicing elit, sed do eiusmod tempor incididunt ut labore
    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
    exercitation ullamco ".$name." laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit
    esse cillum dolore egoing eu fugiat nulla pariatur. Excepteur sint
    occaecat cupidatat non proident, sunt in culpa qui officia deserunt
     mollit anim id est laborum. by ".$name;//lorem후 tap키하면 랜덤한 내용글
    ?>
<h1>URL parameter</h1>
    안녕하세요. <?php echo $_GET['address']; ?>에 사시는
     <?php echo $_GET['name']; ?>님
     <!--127.0.0.1/php.php?name=jeongae&address=서울
     와 같은 URL의 변수에 따라 다름-->

<h1>function</h1>
    <?php
    $str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.


    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
    echo $str;
     ?>
     <h2>strlen()</h2>
     <?php
     echo strlen($str);
      ?>
    <h2>nl2br</h2>
      <?php
     echo nl2br($str);//원문처럼 줄바꿈 즉 br을 자동으로 넣어줌
       ?>

<h1>Comparison Operators &amp; Boolean data type </h1>
     <h2>1==1</h2>
     <?php
     var_dump(1==1); //입력한 자료형과 값을 출력하는 값
     ?>
     <h2>1===1</h2>
     <?php
     var_dump(1===1);  //비교 대상이 같고, 같은 자료형일때 true
     ?>
     <h2>1>1</h2>
     <?php
     var_dump(1>1);
     ?>
     <h2>1>=1</h2>
     <?php
     var_dump(1>=1);
     ?>
     <h2>1 != 1</h2>
     <?php
     var_dump(1!=1);
     ?>
     <h2>1 !== 1</h2>
     <?php
     var_dump(1!==1); // 같지 않거나 같은 자료형이 아닐때 true
     ?>
<h1>Conditional</h1>
   <h2>if</h2>
     <?php
     echo '1<br>';  //php속 줄바꿈을 주기위해서 br을 넣은 것
    if(false) {
     echo '2-1<br>';
     } else {
     echo '2-2<br>';
     }
     echo '3<br>';
     ?>

<h1>while</h1>
    <?php
    echo '1<br>';
    $i = 0;
    while($i < 3){
    echo '2<br>';
    $i = $i + 1;
    }
    echo '3<br>';
    ?>
<h1>Array</h1>
        <?php
        $coworkers = array('egoing', 'leezche', 'duru', 'taeho'); //array설정
        echo $coworkers[1].'<br>';
        echo $coworkers[3].'<br>';
        var_dump(count($coworkers));
        array_push($coworkers, 'graphittie');
        var_dump($coworkers);
        ?>
<h1>function making</h1>
<?php
function basic(){
    print("Lorem ipsum dolor1<br>");
    print("Lorem ipsum dolor2<br>");
}
basic();

function sum($left, $right){
  print($left+$right);
  print("<br>");
}
sum(2,4);

function sum2($left, $right){
  return $left+$right;
}
print(sum2(2,4));
?>

<h1>Cross site scripting(XSS)</h1>
    <?php
    echo htmlspecialchars('<script>alert("바보");</script>');
    //자바스크립트로 인해 실행의도가 변경될수 있는 것을 저 함수로 차단하고 소스코드
    //자체 그대로 출력하게 함
    ?>

</body>
</html>
