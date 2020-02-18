<?php
function print_title(){
  if(isset($_GET['id'])){//isset은 넣은 변수의 값이 설정이되어있는지 여부를 물음
    echo htmlspecialchars($_GET['id'])//입력자가 코드수정못하게 방지
  } else {
    echo "Welcome";
  }
}
function print_description(){
  if(isset($_GET['id'])){
    $basename = basename($_GET['id']);
    echo htmlspecialchars(file_get_contents("data/".$basename));
    //개발자의 파일 디렉토리를 함부로 탐색해서 정보를 빼내가는 것을 방지
  } else {
    echo "Hello, PHP";
  }
}
function print_list(){
  $list = scandir('./data');
  //지정경로의 directory를 배열의 형태로 담음,[0]과[1]에는 .과 ..이 우선 넣어짐

  $i = 0;ㄴ
  while($i < count($list)){
    if($list[$i] != '.') {//현재디렉토리 .
      if($list[$i] != '..') {//부모디렉토리 ..
        echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
      }
    }
    $i = $i + 1;
  }
}
?>
