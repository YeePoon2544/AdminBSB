<!DOCTYPE html>
<html>

<head>
    <title>ข้อมูลผู้สนใจบริการใหม่</title>
    <meta charset="utf-8">
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
        /* border-radius: 15px; */

    }

    th,
    tr {
        text-align: center;
        font-size: 18px;
        height: 65px;


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
        margin-left: 55%;

    }
</style>

<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1>ข้อมูลผู้สนใจบริการใหม่</h1>
    <br>
    <div class="card">
        <div class="header">
            <div align="center">
                <a href='index.php?Menu=1&Submenu=servedate'><button class="button1">เพิ่มข้อมูลผู้สนใจบริการใหม่</button></a>
            </div>
            <br>
            <table align="center" width=90% border=2 cellpadding=3>
                <tr bgcolor="#F6C6C7">
                    <th>ลำดับ</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>รายละเอียด</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>สมชาย</td>
                    <td>มันม่วง</td>
                    <td><a href='index.php?Menu=1&Submenu=datecustomer'><button class="button">รายละเอียด</button></a></td>

                </tr>
                <tr>
                    <td>2</td>
                    <td>นฤมล</td>
                    <td>แสงจันทร์</td>
                    <td><a href='index.php?Menu=1&Submenu=datecustomer'><button class="button">รายละเอียด</button></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>มาลาดี</td>
                    <td>มาลาวัน</td>
                    <td><a href='index.php?Menu=1&Submenu=datecustomer'><button class="button">รายละเอียด</button></a></td>
                </tr>
            </table>
        </div>
    </div>
    </div>

</body>

</html>