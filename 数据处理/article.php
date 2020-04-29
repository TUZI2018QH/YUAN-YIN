<?php
//文章接口管理
$act = $_GET['act'];
$pdo = include './pdo.php';

//列表
if('list' == $act)
{
	$offset = $_GET['offset'] ?? 0;
	$limit = $_GET['limit'] ?? 10;
	$sql = "select * from article order by id DESC limit $offset,$limit";
	$list = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	// $result = $pdo->prepare($sql);
	// $result->execute();
	// $list=$result->fetchAll(PDO::FETCH_ASSOC);

	// var_dump($list);
	echo json_encode($list,JSON_UNESCAPED_UNICODE);
}elseif ('add' == $act) //添加
{
	$sql = "insert into article (title,author,status) values('添加内容123','作者','1')";
	$ret = $pdo -> exec($sql);

	var_dump($ret);
}