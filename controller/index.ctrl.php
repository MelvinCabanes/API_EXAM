<?php
$min = date("Y-m-d");
$lastTenDays = date("Y-m-d" , strtotime("$min -9 day"));

if(isset($_POST['submit'])){

    if($_POST['start_date'] <= $_POST['end_date']){
        
        $dateStrt = date_create($_POST['start_date']);
        $dateEnd = date_create($_POST['end_date']);

        $startDate = date_format($dateStrt, "Y-m-d");
        $endDate = date_format($dateEnd, "Y-m-d");

        header("location:view.php?start=$startDate&end=$endDate");
    }else{
        echo "ERROR";
    }
}