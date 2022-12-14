<!DOCTYPE html>
<html>

<head>
    <title>ข้อมูลงานบริการ</title>
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
        border: 8px solid #E8DBD4;
        width: 150px;
        border-radius: 45px;
        text-align: center;
        color: rgb(255, 255, 255);
        font-size: 27px;
        background-color: #F898A4;
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
        background-color: #ffc61a;
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
        background-color: #928880;
        border: none;
        border-radius: 12px;
        box-shadow: 0 7px #999;
        margin-left: 43%;

    }


    .modal-title {
        text-align: left;
        font-family: 'Prompt', sans-serif;

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
            <h1>ข้อมูลประเภทบริการ/วิจัย</h1>
            <br><br>
            <div>
                <form action="#>" method="post">
                    กรุณากรอกคำค้นหา <input type="text" name="search">
                    <input type="submit" value="ค้นหา">

                    <form>
                        <a href='index.php?Menu=1&Submenu=createservedate'><button type="button" class="button1">เพิ่มข้อมูลประเภทบริการ/วิจัย <i class='fas fa-plus-circle' style='font-size:16px'></i></button></a>
                    </form>
                </form>

            </div>

            <br>
            <table align="center" width=90% border=2 cellpadding=3>
                <tr bgcolor="#F6C6C7">
                    <th>ลำดับ</th>
                    <th>รูปภาพไอคอนบริการ/วิจัย</th>
                    <th>ประเภทของงานบริการ/วิจัย</th>
                    <th>รายละเอียด</th>
                    <th>สถานะของงาน</th>
                    <th>แก้ไขข้อมูล</th>

                </tr>

                <tr>
                    <td>1</td>
                    <td><img src="./images/ww.png"  width="50"  height="50"></td>
                    <td>สมมติ</td>
                    <td>สมมติ</td>
                    <td><span class="label label-success">ทำงาน</span></td>
                    <td><button type="button" class="button" data-toggle="modal" data-target="#myModal">แก้ไขข้อมูล <i class='fas fa-edit' style='font-size:16px'></i> </button>
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h2 class="modal-title">แก้ไขข้อมูล</h2>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td class="text-right">ไฟล์รูปภาพบริการ/วิจัย</td>
                                                    <td><input class="form-control" name="image" type="file"></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right">ประเภทของงานบริการ/วิจัย</td>
                                                    <td><input class="form-control" placeholder="สมมติ"></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right">รายละเอียด</td>
                                                    <td><input class="form-control" placeholder="สมมติ"></td>
                                                </tr>
                                                <tr>
                                                    <td>สถานะของงาน</td>
                                                    <td>
                                                        <div class="demo-radio-button">
                                                            <input name="group1" type="radio" id="radio_1" />
                                                            <label for="radio_1">ทำงาน</label>
                                                            <input name="group1" type="radio" id="radio_2" />
                                                            <label for="radio_2">ไม่ทำงาน</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">SAVE</button>
                                    </div>
                                </div>

                            </div>
                        </div>

        </div>
        </td>


        </tr>
        <tr>
            <td>2</td>
            <td><img src="./images/ww.png"  width="50"  height="50"></td>
            <td>สมมติ</td>
            <td>สมมติ</td>
            <td><span class="label label-danger">ไม่ทำงาน</span></td>
            <td><button type="button" class="button">แก้ไขข้อมูล <i class='fas fa-edit' style='font-size:16px'></i></button></td>
        </tr>
        <tr>
            <td>3</td>
            <td><img src="./images/ww.png"  width="50"  height="50"></td>
            <td>สมมติ</td>
            <td>สมมติ</td>
            <td><span class="label label-success">ทำงาน</span></td>
            <td><button type="button" class="button">แก้ไขข้อมูล <i class='fas fa-edit' style='font-size:16px'></i></button></td>
        </tr>
        </table>
    </div>

</body>

</html>