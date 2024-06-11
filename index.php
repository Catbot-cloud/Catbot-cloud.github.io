<?php
// 设置响应头为JSON格式
header('Content-Type: application/json');

// 获取当前时间
$currentTime = date('Y-m-d H:i:s');

// 将时间转换为JSON格式并输出
echo json_encode(['time' => $currentTime]);
?>
