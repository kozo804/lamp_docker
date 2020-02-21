<?php
  $host_name = 'lamp_mysql_1';
  $user_name = 'root';
  $password = 'root';
  $database_name = 'test';
  // データベースへ接続
  $mysqli = new mysqli( $host_name, $user_name, $password, $database_name);
  // 接続エラーの確認
  if( $mysqli->connect_errno ) {	echo $mysqli->connect_errno . ' : ' . $mysqli->connect_error;}
  else{echo 'ok';}
  // 接続解除
  $mysqli->close();
?>
