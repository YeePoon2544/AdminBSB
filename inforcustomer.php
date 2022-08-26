<?php
$number = iconv("utf-8", "tis-620", $_REQUEST["Number"]);
$sql = "SELECT * FROM name ";

if ($number != "") {
    $sql .= " where Number like '%$number%' ";
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>ข้อมูลลูกกค้า</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
</head>

<style>
    body {
        font-family: 'Prompt', sans-serif;
        padding-left: 20%;

    }

    h1 {
        border: 8px solid #EED6D3;
        width: 150px;
        border-radius: 45px;
        text-align: center;
        color: rgb(255, 255, 255);
        font-size: 27px;
        background-color: #AA7C7A;
        margin-left: 10px;
        margin-top: 40px;
        padding: 7px;
        width: 30%;
        margin: 0 auto;
        font-size: 30px;
        font-family: 'Prompt', sans-serif;
        /* border-radius: 15px; */

    }

    th,
    tr {
        text-align: center;
        font-size: 18px;
        height: 65px;
        color: #000;

    }


    .button {
        padding: 10px 15px;
        font-size: 15px;
        text-align: center;
        outline: none;
        color: white;
        background-color: RebeccaPurple;
        border: none;
        border-radius: 12px;
        box-shadow: 0 7px #999;

    }

    .button1 {
        padding: 10px 15px;
        font-size: 15px;
        text-align: center;
        outline: none;
        color: white;
        background-color: #ff531a;
        border: none;
        border-radius: 12px;
        box-shadow: 0 7px #999;
        margin-left: 46%;

    }
</style>

<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="card">
        <div class="header">
            <h1>ข้อมูลลูกค้า</h1>
            <br><br>
            <div>
                <form action="" method="POST">
                    กรุณากรอกเลขที่ผู้เสียภาษี <input name="Number" type="text" placeholder="Search..." value="<?php echo $_REQUEST["Number"] ?>">
                    <button type="submit"><i class="fa fa-search"></i></button>

                    <form>
                        <button type="button" class="button1" data-toggle="modal" data-target="#myModal">เพิ่มข้อมูลลูกค้า <i class='fas fa-plus-circle' style='font-size:16px'></i></button>
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h2 class="modal-title">ค้นหาข้อมูล</h2>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="POST">
                                            กรุณากรอกเลขที่ผู้เสียภาษี <input name="Number2" id="Number2" type="text" placeholder="Search...">
                                            <button type="button" onclick=" myFunction() "><i class="fa fa-search"></i></button>
                                            <div id="box_customer_check"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

            </div>


            <?php
            $number = iconv("utf-8", "tis-620", $_REQUEST["Number"]);
            $objDB = mssql_select_db("work2");
            $data = mssql_query($sql);
            ?>
            <br>
            <table align="center" width=90% border=2 cellpadding=3>
                <tr bgcolor="#A8D1E7">
                    <th>ลำดับ</th>
                    <th>เลขที่ผู้เสียภาษี</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>หน่วยงาน</th>
                    <th>อีเมล</th>
                    <th>เบอร์โทรศัพท์</th>
                    <th>รายละเอียด</th>
                </tr>

                <?php
                while ($info = mssql_fetch_array($data)) {
                    $number = iconv("tis-620", "utf-8", $info['Number']);
                    $name = iconv("tis-620", "utf-8", $info['Name']);
                    $lastname = iconv("tis-620", "utf-8", $info['Lastname']);
                    $agency = iconv("tis-620", "utf-8", $info['Agency']);
                    $mail = iconv("tis-620", "utf-8", $info['Mail']);
                    $phone = iconv("tis-620", "utf-8", $info['Phone']);

                ?>
                    <tr align="center">
                        <td><?php echo $info['ID']; ?></td>
                        <td><?php echo $number; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $lastname; ?></td>
                        <td><?php echo $agency; ?></td>
                        <td><?php echo $mail; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><a href='index.php?Menu=1&Submenu=datecustomer'><button class="button">รายละเอียด</button></a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    </div>


</body>

</html>

<script>
    function myFunction() {
        var Number2 = $("#Number2").val();
        $.post("check_id_vat.php", {
            Number2: Number2
        }, function(data, status) {
            // alert(data);
            $("#box_customer_check").html(data);
        })
        // alert($("#Number2").val());
    }
</script>