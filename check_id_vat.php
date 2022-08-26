<?php
include("includes/config.inc.php");
$number2 = iconv("utf-8", "tis-620", $_REQUEST["Number2"]);
$sql2 = "SELECT * FROM name where Number='$number2'";
$data2 = mssql_query($sql2);
$info2 = mssql_fetch_array($data2);

if ($info2['Number']!= "" ){
    $sql .= " where Number like '%$number2%' ";
   echo '<button class="button5"><a href="index.php?Menu=1&Submenu=datecustomer">ตรวจสอบข้อมูล</a></button>';
} else  {
    echo '<button class="button6"><a href="index.php?Menu=1&Submenu=customeruser">เพิ่มข้อมูล</a></button>';
}

?>
<style>
      .button5 {
        padding: 10px 15px;
        font-size: 15px;
        text-align: center;
        outline: none;
        color: white;
        background-color:#ff9933;
        border: none;
        border-radius: 12px;
        box-shadow: 0 7px #999;
        margin-left: 40%;

    }
    .button6 {
        padding: 10px 15px;
        font-size: 15px;
        text-align: center;
        outline: none;
        color: white;
        background-color:#3F51B5;
        border: none;
        border-radius: 12px;
        box-shadow: 0 7px #999;
        margin-left: 40%;

    }
</style>
<br><br>
