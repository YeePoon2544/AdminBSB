<!DOCTYPE html>
<html>

<head>
    <title>ข้อมูลสถานะ</title>
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
        border: 8px solid #E7D8C9;
        width: 150px;
        border-radius: 45px;
        text-align: center;
        color: rgb(255, 255, 255);
        font-size: 27px;
        background-color: #B2967D;
        margin-left: 10px;
        margin-top: 40px;
        padding: 7px;
        width: 30%;
        margin: 0 auto;
        font-size: 30px;
        font-family: 'Prompt', sans-serif;
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
        background-color: #9999ff;
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
        margin-left: 43%;

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
            <h1>สถานะของงาน</h1>
            <br><br>
            <div>
                <form action="#>" method="post">
                    กรุณากรอกคำค้นหา <input type="text" name="search">
                    <input type="submit" value="ค้นหา">
                </form>

            </div>

            <br>
            <table align="center" width=90% border=2 cellpadding=3>
                <tr bgcolor="#E6BEAE">
                    <th>ลำดับ</th>
                    <th>ประเภทของงานบริการ</th>
                    <th>รายละเอียดงาน</th>
                    <th>ชื่อผู้ขอ</th>
                    <th>สถานะของงาน</th>
                    <th>รายละเอียด</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>สมมติ</td>
                    <td>สมมติ</td>
                    <td>สมชาย มันม่วง</td>
                    <td><span class="label label-danger">ไม่ทำงาน</td>
                    <td><a href='index.php?Menu=2&Submenu=detailsstatus'><button class="button">รายละเอียด</button></a></td>

                </tr>
                <tr>
                    <td>2</td>
                    <td>สมมติ</td>
                    <td>สมมติ</td>
                    <td>นฤมล แสงจันทร์</td>
                    <td><span class="label label-success">ทำงาน</span></td>
                    <td><a href='#'><button class="button">รายละเอียด</button></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>สมมติ</td>
                    <td>สมมติ</td>
                    <td>มาลาดี มาลาวัน</td>
                    <td><span class="label label-success">ทำงาน</span></td>
                    <td><a href='#'><button class="button">รายละเอียด</button></a></td>
                </tr>
            </table>
        </div>
    </div>
    </div>

</body>

</html>