<!DOCTYPE html>
<html>

<head>
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
        padding-left: 5%;
        width: 120%;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-left: 80%;

    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    h2,
    h5 {
        font-family: 'Prompt', sans-serif;
    }

    h2 {
        border: 8px solid #B3A188;
        width: 150px;
        border-radius: 45px;
        text-align: center;
        color: white;
        font-size: 27px;
        background-color: #916848;
        margin-left: 10px;
        margin-top: 40px;
        padding: 7px;
        width: 30%;
        margin: 0 auto;
        font-size: 22px;
        font-family: 'Prompt', sans-serif;
    }

    h3 {
        font-family: 'Prompt', sans-serif;
    }

    .row2 {
        padding-right: 25%;
    }

    button {
        padding: 10px 15px;
        font-size: 15px;
        text-align: center;
        outline: none;
        color: white;
        background-color: #ffc61a;
        border: none;
        border-radius: 12px;
        box-shadow: 0 7px #999;
        /* margin-left: 73%; */


    }

    table {
        border-collapse: collapse;
        width: 70%;
        text-align: center;

    }

    th {
        background-color: #ff6666;
        color: white;
        text-align: center;
    }

    .aa {
        padding: 10px 15px;
        font-size: 15px;
        text-align: center;
        outline: none;
        color: white;
        background-color: #e60000;
        border: none;
        border-radius: 12px;
        box-shadow: 0 7px #999;
        margin-left: 1%;
    }

    .ss {
        font-size: 18px;
        color: black;
    }

    .pu {
        padding-left: 140px;
    }

    .ww {
        font-size: 16px;

    }
    #myModal{
        color: #000;
        font-size: 16px;
    }
    #myModal2{
        color: #000;
        font-size: 16px;
    }
    #myModal3{
        color: #000;
        font-size: 16px;
    }
    .nn{
        background-color: #BEABA7;
        width: 60%;
        
    }
</style>

<body>

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-9">
                    <div class="card">
                        <div class="body">
                            <div>
                                <h2 class="w3-center">รายละเอียดข้อมูลลูกค้า</h2>
                                <br>

                                <p class="text-right">
                                    <a href='index.php?Menu=1&Submenu=editcustomeruser'><button type="button" class="button1">แก้ไขข้อมูล <i class='fas fa-edit' style='font-size:16px'></i></button></a>
                                    <a href='#'><button type="button" class="aa">ยกเลิกข้อมูล <i class='fas fa-eraser' style='font-size:16px'></i></button></a>

                                </p>


                                <form action="#" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="POST" enctype="multipart/form-data">

                                    <h5>ตำแหน่ง</h5>
                                    <div class="w3-row w3-section">
                                        <div class="w3-col" style="width:50px"><i class='fas fa-id-card-alt' style='font-size:30px'></i></div>
                                        <div class="w3-rest">
                                            <text class="ss">กรอ.</text>
                                        </div>
                                    </div>

                                    <h5>เลขที่ผู้เสียภาษี</h5>
                                    <div class="w3-row w3-section">
                                        <div class="w3-col" style="width:50px"><i class='fas fa-book' style='font-size:30px'></i></div>
                                        <div class="w3-rest">
                                            <text class="ss">7777777777777</text>
                                        </div>
                                    </div>

                                    <h5>คำนำหน้าชื่อ</h5>
                                    <div class="w3-row w3-section">
                                        <div class="w3-col" style="width:50px"><i class='fas fa-user-alt' style='font-size:30px'></i></div>
                                        <div class="w3-rest">
                                            <text class="ss">นาย</text>
                                        </div>
                                    </div>
                                    <h5>ชื่อ</h5>
                                    <div class="w3-row w3-section">
                                        <div class="w3-col" style="width:50px"><i class='fas fa-user-alt' style='font-size:30px'></i></div>
                                        <div class="w3-rest">
                                            <text class="ss">สมาชาย</text>
                                        </div>
                                    </div>

                                    <h5>นามสกุล</h5>
                                    <div class="w3-row w3-section">
                                        <div class="w3-col" style="width:50px"><i class='fas fa-user-alt' style='font-size:30px'></i></div>
                                        <div class="w3-rest">
                                            <text class="ss">มันม่วง</text>
                                        </div>
                                    </div>

                                    <h5>ชื่อหน่วยงาน</h5>
                                    <div class="w3-row w3-section">
                                        <div class="w3-col" style="width:50px"><i class='fas fa-building' style='font-size:30px'></i></div>
                                        <div class="w3-rest">
                                            <text class="ss">สมมติ</text>
                                        </div>
                                    </div>
                                    <!-- 

                                    <div class="w3-row w3-section">
                                    <div class="w3-col" style="width:50px"><i class='fas fa-building' style='font-size:36px'></i></div>
                                        <div class="w3-rest">
                                            <text class="ss">สาขาย่อย</text>

                                        </div>
                                    </div> -->

                                    <h5>ชื่อสาขา</h5>
                                    <div class="w3-row w3-section">
                                        <div class="w3-col" style="width:50px"><i class='fas fa-building' style='font-size:30px'></i></div>
                                        <div class="w3-rest">
                                            <text class="ss">สมมติ</text>
                                        </div>
                                    </div>

                                    <h5>อีเมล</h5>
                                    <div class="w3-row w3-section">
                                        <div class="w3-col" style="width:50px"><i class='fas fa-address-card' style='font-size:30px'></i></div>
                                        <div class="w3-rest">
                                            <text class="ss">สมมติ</text>
                                        </div>
                                    </div>

                                    <h5>หมายเลขโทรศัพท์</h5>
                                    <div class="w3-row w3-section">
                                        <div class="w3-col" style="width:50px"><i class='fas fa-phone-alt' style='font-size:30px'></i></div>
                                        <div class="w3-rest">
                                            <text class="ss">66-66666666</text>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row2">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h3>
                            ที่อยู่
                        </h3>
                    </div>

                    <div class="body">
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h3 class="nn">ที่อยู่บริษัท</h3>
                                    </div>
                                    <div class="modal-body">
                                    <table class="table table-borderless"  >
                                        <tbody>
                                    <tr>
                                        <td class="text-right">คำนำหน้าชื่อ</td>
                                        <td><input class="form-control" placeholder="นาย"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">ชื่อผู้ติดต่อ</td>
                                        <td><input class="form-control" placeholder="สมชาย"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">นามสกุล</td>
                                        <td><input class="form-control" placeholder="มันม่วง"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">ชื่อหน่วยงาน</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">ตำแหน่ง</td>
                                        <td> <input class="form-control" placeholder="สมมติ"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">ชื่อสาขาหรือเลขที่สาขา</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">ประเภทกิจการ</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">เลขที่ผู้เสียภาษี</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">เลขที่บริษัท</td>
                                        <td><input class="form-control" placeholder="66-66666666"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">หมู่ที่</td>
                                        <td><input class="form-control" placeholder="66-66666666"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">ถนน</td>
                                        <td><input class="form-control" placeholder="66-66666666"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">ตำบล/แขวง</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">อำเภอ/เขต</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">จังหวัด</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">รหัสไปรษณีย์</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="text-right">เบอร์โทรศัพท์</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>
                                    </tbody>
                                  </table>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" name="submit" value="SAVE" />
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <blockquote>

                        <p>ที่อยู่บริษัท <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#myModal">แก้ไขข้อมูล <i class='fas fa-edit' style='font-size:16px'></i></button></p>
                        <footer>
                            <br>
                            คำนำหน้าชื่อ &nbsp; <text class="ww">นาย</text> &nbsp;&nbsp;&nbsp; ชื่อผู้ติดต่อ &nbsp; <text class="ww">สมชาย </text> &nbsp;&nbsp;&nbsp; นามสกุล &nbsp; <text class="ww">มันม่วง</text>
                            <br><br>
                            ชื่อหน่วยงาน &nbsp; <text class="ww">สมมติ</text> &nbsp;&nbsp;&nbsp; ตำแหน่ง &nbsp; <text class="ww">สมมติ</text> &nbsp;&nbsp;&nbsp; ชื่อสาขาหรือเลขที่สาขา &nbsp; <text class="ww">สมมติ</text>
                            <br><br>
                            ประเภทกิจการ &nbsp; <text class="ww">สมมติ</text> &nbsp;&nbsp;&nbsp; เลขที่ผู้เสียภาษี &nbsp; <text class="ww">สมมติ</text>
                            <br><br>
                            เลขที่บริษัท &nbsp; <text class="ww">66-66666666</text> &nbsp;&nbsp;&nbsp; หมู่ที่ &nbsp; <text class="ww">66-66666666</text> &nbsp;&nbsp;&nbsp; ถนน &nbsp; <text class="ww">66-66666666</text>
                            <br><br>
                            ตำบล/แขวง &nbsp; <text class="ww">66-66666666</text> &nbsp;&nbsp;&nbsp; อำเภอ/เขต &nbsp; <text class="ww">66-66666666</text> &nbsp;&nbsp;&nbsp; จังหวัด &nbsp; <text class="ww">66-66666666</text>
                            <br><br>
                            รหัสไปรษณีย์ &nbsp; <text class="ww">66-66666666</text> &nbsp;&nbsp;&nbsp; เบอร์โทรศัพท์ &nbsp; <text class="ww">66-66666666</text>
                        </footer>
                    </blockquote>
                    <div class="modal fade" id="myModal2" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h3 class="nn">ที่อยู่ส่งเอกสาร</h3>
                                </div>
                                <div class="modal-body">
                                <table  table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <td class="text-right">คำนำหน้าชื่อ</td>
                                        <td><input class="form-control" placeholder="นาย"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">ชื่อผู้ติดต่อ</td>
                                        <td><input class="form-control" placeholder="สมชาย"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">นามสกุล</td>
                                        <td><input class="form-control" placeholder="มันม่วง"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">ชื่อหน่วยงาน</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">ตำแหน่ง</td>
                                        <td> <input class="form-control" placeholder="สมมติ"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">ชื่อสาขาหรือเลขที่สาขา</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">ประเภทกิจการ</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">เลขที่ผู้เสียภาษี</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">เลขที่ส่งเอกสาร</td>
                                        <td><input class="form-control" placeholder="66-66666666"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">หมู่ที่</td>
                                        <td><input class="form-control" placeholder="66-66666666"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">ถนน</td>
                                        <td><input class="form-control" placeholder="66-66666666"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">ตำบล/แขวง</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">อำเภอ/เขต</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">จังหวัด</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">รหัสไปรษณีย์</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="text-right">เบอร์โทรศัพท์</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>
                                    </tbody>
                                  </table>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" name="submit" value="SAVE" />
                                </div>
                            </div>

                        </div>
                    </div>

                    <blockquote>
                        <p>ที่อยู่ส่งเอกสาร <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#myModal2">แก้ไขข้อมูล <i class='fas fa-edit' style='font-size:16px'></i></button></p>
                        <footer>
                            <br>
                            คำนำหน้าชื่อ &nbsp; <text class="ww">นาย</text> &nbsp;&nbsp;&nbsp; ชื่อผู้ติดต่อ &nbsp; <text class="ww">สมชาย </text> &nbsp;&nbsp;&nbsp; นามสกุล &nbsp; <text class="ww">มันม่วง</text>
                            <br><br>
                            ชื่อหน่วยงาน &nbsp; <text class="ww">สมมติ</text> &nbsp;&nbsp;&nbsp; ตำแหน่ง &nbsp; <text class="ww">สมมติ</text> &nbsp;&nbsp;&nbsp; ชื่อสาขาหรือเลขที่สาขา &nbsp; <text class="ww">สมมติ</text>
                            <br><br>
                            ประเภทกิจการ &nbsp; <text class="ww">สมมติ</text> &nbsp;&nbsp;&nbsp; เลขที่ผู้เสียภาษี &nbsp; <text class="ww">สมมติ</text>
                            <br><br>
                            เลขที่ส่งเอกสาร &nbsp; <text class="ww">66-66666666</text> &nbsp;&nbsp;&nbsp; หมู่ที่ &nbsp; <text class="ww">66-66666666</text> &nbsp;&nbsp;&nbsp; ถนน &nbsp; <text class="ww">66-66666666</text>
                            <br><br>
                            ตำบล/แขวง &nbsp; <text class="ww">66-66666666</text> &nbsp;&nbsp;&nbsp; อำเภอ/เขต &nbsp; <text class="ww">66-66666666</text> &nbsp;&nbsp;&nbsp; จังหวัด &nbsp; <text class="ww">66-66666666</text>
                            <br><br>
                            รหัสไปรษณีย์ &nbsp; <text class="ww">66-66666666</text> &nbsp;&nbsp;&nbsp; เบอร์โทรศัพท์ &nbsp; <text class="ww">66-66666666</text>
                        </footer>
                    </blockquote>


                    <div class="modal fade" id="myModal3" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h8 class="nn">ที่อยู่ใบเสร็จ/ใบกำกับภาษี</h8>
                                </div>

                                <div class="modal-body">
                                 <table  class="table table-borderless" >
                                    <tbody>
                                    <tr>
                                        <td class="text-right">คำนำหน้าชื่อ</td>
                                        <td><input class="form-control" placeholder="นาย"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">ชื่อผู้ติดต่อ</td>
                                        <td><input class="form-control" placeholder="สมชาย"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">นามสกุล</td>
                                        <td><input class="form-control" placeholder="มันม่วง"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">ชื่อหน่วยงาน</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">ตำแหน่ง</td>
                                        <td> <input class="form-control" placeholder="สมมติ"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">ชื่อสาขาหรือเลขที่สาขา</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">ประเภทกิจการ</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">เลขที่ผู้เสียภาษี</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">เลขที่ใบเสร็จ/ใบกำกับภาษี</td>
                                        <td><input class="form-control" placeholder="66-66666666"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">หมู่ที่</td>
                                        <td><input class="form-control" placeholder="66-66666666"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">ถนน</td>
                                        <td><input class="form-control" placeholder="66-66666666"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">ตำบล/แขวง</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">อำเภอ/เขต</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">จังหวัด</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>

                                    <tr>
                                        <td class="text-right">รหัสไปรษณีย์</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="text-right">เบอร์โทรศัพท์</td>
                                        <td><input class="form-control" placeholder="สมมติ"></td>
                                    </tr>
                                    </tbody>
                                  </table>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" name="submit" value="SAVE" />
                                </div>
                            </div>

                        </div>
                    </div>

                    <blockquote class="m-b-25">
                        <p>ที่อยู่ใบเสร็จ/ใบกำกับภาษี
                            <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#myModal3">แก้ไขข้อมูล <i class='fas fa-edit'></i></button>
                        </p>

                        <footer>
                            <br>
                            คำนำหน้าชื่อ &nbsp; <text class="ww">นาย</text> &nbsp;&nbsp;&nbsp; ชื่อผู้ติดต่อ &nbsp; <text class="ww">สมชาย </text> &nbsp;&nbsp;&nbsp; นามสกุล &nbsp; <text class="ww">มันม่วง</text>
                            <br><br>
                            ชื่อหน่วยงาน &nbsp; <text class="ww">สมมติ</text> &nbsp;&nbsp;&nbsp; ตำแหน่ง &nbsp; <text class="ww">สมมติ</text> &nbsp;&nbsp;&nbsp; ชื่อสาขาหรือเลขที่สาขา &nbsp; <text class="ww">สมมติ</text>
                            <br><br>
                            ประเภทกิจการ &nbsp; <text class="ww">สมมติ</text> &nbsp;&nbsp;&nbsp; เลขที่ผู้เสียภาษี &nbsp; <text class="ww">สมมติ</text>
                            <br><br>
                            เลขที่ใบเสร็จ/ใบกำกับภาษี &nbsp; <text class="ww">66-66666666</text> &nbsp;&nbsp;&nbsp; หมู่ที่ &nbsp; <text class="ww">66-66666666</text> &nbsp;&nbsp;&nbsp; ถนน &nbsp; <text class="ww">66-66666666</text>
                            <br><br>
                            ตำบล/แขวง &nbsp; <text class="ww">66-66666666</text> &nbsp;&nbsp;&nbsp; อำเภอ/เขต &nbsp; <text class="ww">66-66666666</text> &nbsp;&nbsp;&nbsp; จังหวัด &nbsp; <text class="ww">66-66666666</text>
                            <br><br>
                            รหัสไปรษณีย์ &nbsp; <text class="ww">66-66666666</text> &nbsp;&nbsp;&nbsp; เบอร์โทรศัพท์ &nbsp; <text class="ww">66-66666666</text>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>

        <div class="row2">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h3>
                            ประวัติการใช้บริการกับ วว.
                        </h3>
                    </div>
                    <div class="body">
                        <blockquote>
                            <table align="center" width=90% border=2 cellpadding=3>
                                <tr bgcolor="#F6C6C7">
                                    <th>ลำดับ</th>
                                    <th>ข้อมูลใช้บริการ</th>
                                    <th>ยอดเงินใช้บริการ</th>
                                    <th>วัน เวลา ที่ใช้บริการ</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>สมมติ</td>
                                    <td>สมมติ</td>
                                    <td>สมมติ</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>สมมติ</td>
                                    <td>สมมติ</td>
                                    <td>สมมติ</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>สมมติ</td>
                                    <td>สมมติ</td>
                                    <td>สมมติ</td>
                                </tr>
                            </table>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>