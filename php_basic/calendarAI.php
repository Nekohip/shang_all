<style>
    table {
        border-collapse: collapse;
        width: 60%;
        margin: auto;
    }
    td {
        border: 1px solid black;
        height: 10vh;
        text-align: center;
    }
    .color {
        background-color: lightyellow;
    }
    * {
        font-family: monospace;
    }
</style>

<table>
    <?php
    $month = 1;
    $year = 2025;
    
    // 取得該月第一天是星期幾 (0=日, 1=一, ..., 6=六)
    $firstDay = date("w", strtotime("$year-$month-1"));
    // 取得該月總天數
    $totalDays = date("t", strtotime("$year-$month-1"));
    
    $days = ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"];
    
    // 年月標題
    echo "<tr><td colspan='7'>{$year}年{$month}月</td></tr>";
    
    // 星期標題
    echo "<tr>";
    foreach($days as $i => $day) {
        $class = ($i == 0 || $i == 6) ? " class='color'" : "";
        echo "<td$class>$day</td>";
    }
    echo "</tr>";
    
    // 日期格子
    $dayCounter = 1;
    for($week = 0; $week < 6; $week++) {
        echo "<tr>";
        for($weekday = 0; $weekday < 7; $weekday++) {
            // 第一週的空格
            if($week == 0 && $weekday < $firstDay) {
                echo "<td></td>";
            }
            // 印出日期
            else if($dayCounter <= $totalDays) {
                $class = ($weekday == 0 || $weekday == 6) ? " class='color'" : "";
                echo "<td$class>$dayCounter</td>";
                $dayCounter++;
            }
            // 最後一週的空格
            else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
        
        // 如果已經印完所有日期就結束
        if($dayCounter > $totalDays) break;
    }
    ?>
</table>