
<?php
//链接数据库
function create_connect($database){


$link=mysqli_connect("localhost","root","root",$database);
 /*链接失败测试
 if (!$link) {
        die("连接失败: " . mysqli_connect_error());
    }
*/
return $link;
}

?>