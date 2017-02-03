<HTML>
<HEAD>
<TITLE>for的高级运用</TITLE>
</HEAD>
<BODY>
<?php

    header("Content-type: text/html; charset=utf-8");
    print("<B>当前服务器时间：</B>\n");
    print("<OL>\n");
    //print("<LI>" . date("l", $currentDate) . "\n");
    echo date("r") . "<br>";

    print("<B>距离星期一还有几天？</B>\n");
    print("<OL>\n");
    for($currentDate = date("U");           //定义$currentDate时间格式
        date("l", $currentDate) != "Monday";    //判断是不是当前系统时间是Monday
        $currentDate += (60 * 60 * 24))     //当前时间加上1天
    {
        /* 
        ** 打印时间名称 
        */
        print("<LI>" . date("l", $currentDate) . "\n");
    }

    print("</OL>\n");
?>
</BODY>
</HTML>
