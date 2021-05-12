<?php
    $date = "не определено";
    $sum = "не определено";
    $year = "не определено";
    $replenishment = "не определено";
    $sum_replenishment = "не определен";
    if(isset($_POST["date"])){    
        $date = $_POST["date"];
    }
    if(isset($_POST["sum"])){    
        $sum = $_POST["sum"];
    }
    if(isset($_POST["year"])){    
        $year = $_POST["year"];
    }
    if(isset($_POST["replenishment"])){
        $replenishment = $_POST["replenishment"];
    }    
    if(isset($_POST["sum_replenishment"])){
        $sum_replenishment = $_POST["sum_replenishment"];
    }
    $summn = $sum;
    $lastDate = explode("/", $date);
    $last = $year * 12;
    $month = $lastDate[1];
    $yearm = $lastDate[2];
    $percent = 0.1;
    for ($i = 0; $i < $last; $i++)
    {
        $daysn = date('t', mktime(0, 0, 0, $month, 1, $yearm));
        $daysy = date('z', mktime(0, 0, 0, 12, 31, $yearm));     
        if ($replenishment === "yes")
        {
            $summn = $summn + ($summn + $sum_replenishment) * $daysn * ($percent/$daysy);
        }
        else
        {
            $summn = $summn + ($summn) * $daysn * ($percent/$daysy);
        }
        $month++;
        if ($month == 13)
        {
            $month = 1;
            $yearm + 1;
        }
    }
    print_r((int)$summn);
?>