<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <title>ฟอร์มเพิ่มข้อมูลลูกค้า</title>
</head>
<style>
    body {
        font-family: 'Prompt', sans-serif;
        padding-left: 10%;
        width: 110%;
    }

    h2,
    h5 {
        font-family: 'Prompt', sans-serif;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;

    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    input[type=reset] {
        background-color: #787A79;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=reset]:hover {
        background-color: #656C5C;
    }

    #css {
        font-size: 16px;
    }

    #cc {
        width: 209%;
    }
</style>

<body>

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-9">
                    <div class="card bg-blue-grey">
                        <div class="body">
                            <div>

                                <form action="#" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="POST" enctype="multipart/form-data">
                                    <h2 class="w3-center">ฟอร์มเพิ่มข้อมูลลูกค้า</h2>


                                    <h5>คำนำหน้าชื่อ</h5>
                                    <div class="w3-row w3-section">
                                        <div class="w3-col" style="width:50px"><i class='fas fa-address-card' style='font-size:36px'></i></div>
                                        <div class="w3-rest">
                                            <div class="row clearfix">
                                                <div class="col-sm-6">
                                                    <select class="form-control show-tick" id="cc">
                                                        <option value="">--- คำนำหน้าชื่อ ---</option>
                                                        <option>นาย</option>
                                                        <option>นาง</option>
                                                        <option>นางสาว</option>
                                                        <option>อื่นๆ โปรดระบุ</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>


                                        <h5>ชื่อ</h5>
                                        <div class="w3-row w3-section">
                                            <div class="w3-col" style="width:50px"><i class='fas fa-user-alt' style='font-size:36px'></i></div>
                                            <div class="w3-rest">
                                                <input class="w3-input w3-border" name="name" type="text" placeholder="ชื่อ">
                                            </div>
                                        </div>

                                        <h5>นามสกุล</h5>
                                        <div class="w3-row w3-section">
                                            <div class="w3-col" style="width:50px"><i class='fas fa-user-alt' style='font-size:36px'></i></div>
                                            <div class="w3-rest">
                                                <input class="w3-input w3-border" name="name" type="text" placeholder="นามสกุล">
                                            </div>
                                        </div>

                                        <h5>ชื่อหน่วยงาน</h5>
                                        <div class="w3-row w3-section">
                                            <div class="w3-col" style="width:50px"><i class='fas fa-building' style='font-size:36px'></i></div>
                                            <div class="w3-rest">
                                                <input class="w3-input w3-border" name="name" type="text" placeholder="ชื่อหน่วยงาน">
                                            </div>
                                        </div>

                                        <h5>ตำแหน่ง</h5>
                                        <div class="w3-row w3-section">
                                            <div class="w3-col" style="width:50px"><i class='fas fa-id-card-alt' style='font-size:36px'></i></div>
                                            <div class="w3-rest">
                                                <input class="w3-input w3-border" name="name" type="text" placeholder="ตำแหน่ง">
                                            </div>
                                        </div>

                                        <div class="w3-row w3-section">
                                            <div class="demo-radio-button">
                                                <input name="group5" type="radio" id="radio_34" class="with-gap radio-col-indigo" />
                                                <label for="radio_34">สำนักงานใหญ่</label>
                                                <input name="group5" type="radio" id="radio_35" class="with-gap radio-col-indigo" />
                                                <label for="radio_35">สาขาย่อย</label>
                                            </div>
                                        </div>

                                        <h5>ชื่อสาขาหรือเลขที่สาขา</h5>
                                        <div class="w3-row w3-section">
                                            <div class="w3-col" style="width:50px"><i class='fas fa-building' style='font-size:36px'></i></div>
                                            <div class="w3-rest">
                                                <input class="w3-input w3-border" name="name" type="text" placeholder="ชื่อสาขาหรือเลขที่สาขา">
                                            </div>
                                        </div>

                                        <h5>ประเภทกิจการ</h5>
                                        <div class="w3-row w3-section">
                                            <div class="w3-col" style="width:50px"><i class='fas fa-tasks' style='font-size:36px'></i></div>
                                            <div class="w3-rest">
                                                <div class="row clearfix">
                                                    <div class="col-sm-6">
                                                        <select class="form-control show-tick" id="cc">
                                                            <option value="">--- เลือกประเภทกิจการ ---</option>
                                                            <option value="1">ผู้ผลิตบรรจุภัณฑ์กระดาษ</option><option>นาย</option>
                                                            <option value="2">ผู้ผลิตบรรจุภัณฑ์พลาสติก</option>
                                                            <option value="3">ผู้ผลิตบรรจุภัณฑ์โลหะ</option>
                                                            <option value="4">ผู้ใช้งานบรรจุภัณฑ์</option>
                                                            <option value="5">ผู้ประกอบการ SME</option>
                                                            <option value="6">หน่วยงานของรัฐ</option>
                                                            <option value="7">สถาบันการศึกษา</option>
                                                            <option value="8">นักเรียน นักศึกษา</option>
                                                            <option value="9">ผู้ผลิตบรรจุภัณฑ์แก้ว</option>
                                                            <option value="10">อื่นๆ โปรดระบุ</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h5>เลขที่ผู้เสียภาษี</h5>
                                        <div class="w3-row w3-section">
                                            <div class="w3-col" style="width:50px"><i class='fas fa-book' style='font-size:30px'></i></div>
                                            <div class="w3-rest">
                                                <input class="w3-input w3-border" name="number" type="text" placeholder="เลขที่ผู้เสียภาษี">
                                            </div>
                                        </div>

                                        <h5>E-mail</h5>
                                        <div class="w3-row w3-section">
                                            <div class="w3-col" style="width:50px"><i class='fas fa-envelope-open' style='font-size:36px'></i></div>
                                            <div class="w3-rest">
                                                <input class="w3-input w3-border" name="e-mail" type="text" placeholder="e-mail">
                                            </div>
                                        </div>

                                        <h5>หมายเลขโทรศัพท์</h5>
                                        <div class="w3-row w3-section">
                                            <div class="w3-col" style="width:50px"><i class='fas fa-phone-alt' style='font-size:36px'></i></div>
                                            <div class="w3-rest">
                                                <input class="w3-input w3-border" name="phone" type="text" placeholder="เบอร์โทรศัพท์">
                                            </div>
                                        </div>

                                        <h5>Line ID</h5>
                                        <div class="w3-row w3-section">
                                            <div class="w3-col" style="width:50px"><i class='fab fa-line' style='font-size:36px'></i></div>
                                            <div class="w3-rest">
                                                <input class="w3-input w3-border" name="phone" type="text" placeholder="ID">
                                            </div>
                                        </div>


                                        <p class="w3-center">
                                            <input type="submit" name="submit" value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="reset" name="reset" value="Cancel" />
                                        </p>
                                        <br>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>