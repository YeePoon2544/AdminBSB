<?
$number = $_POST["Number"];
$sql        = "SELECT *FROM name WHERE Number like '%$number%' ";
$result     = $db_tm->sql_query($sql);
$rows       = $db_tm->sql_fetchrow($result);
 
print_r($rows);
?>
<script>
    window.location = "../index.php?Menu=1&Submenu=inforcustomer";
</script>