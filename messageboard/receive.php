<?php
//接收
$text = $_POST['text'];
$mailbox = $_POST['mailbox'];
$memo = $_POST['memo'];
$name = [
			'傻逼',
			'智障'
		];
if ($text == '') {
die("名字不能为空");
}

if ($mailbox == '') {
die("邮箱不能为空哦！");
}

if ($memo == '') {
	die("留言内容不能为空");

}

foreach ($name as $key) {
	if ($text == $key) {
		die('敏感词汇');
	}
}
//输出
function name(){
	echo "string";
}
name();
name();
var_dump($text,$mailbox,$memo);
?>