<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <title>ข้อมูลบริการลูกค้า</title>
</head>
<style>
    body {
        font-family: 'Prompt', sans-serif;
        padding-left: 22%;


    }

    h2,
    h5 {
        font-family: 'Prompt', sans-serif;
    }

    .button1 {
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

    .card2 {
        background: #fff;
        min-height: 50px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        position: relative;
        margin-bottom: 30px;
        margin-right: 5%;
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        -ms-border-radius: 2px;
        border-radius: 2px;
        padding: 0 0 0 0;
    }
    .oo{
        font-size: 16px;
        color: black;
    }

</style>

<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="card2">
        <div div class="header bg-pink" style="height:60px;">
            <h2 style="padding:10px 10px;">ประเภทบริการ/วิจัย</h2>
        </div>
        <div class="header">
            <div class="w3-container">
                <br>
                
                <div>
                    <p class="text-right">
                        <a href='index.php?Menu=1&Submenu=editservedate'><button type="button" class="button1">แก้ไขข้อมูล <i class='fas fa-edit' style='font-size:16px'></i></button></a>
                    </p>
                    <form action="#" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="POST" enctype="multipart/form-data">


                        <h5>ประเภทของงาน</h5>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class='fas fa-paste' style='font-size:30px'></i></div>
                            <div class="w3-rest">
                                <text class="oo">สมมติ</text>
                            </div>
                        </div>

                        <h5>รายละเอียด</h5>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class='far fa-file' style='font-size:30px'></i></div>
                            <div class="w3-rest">
                                <text class="oo">สมมติ</text>
                            </div>
                        </div>

                        <h5>ผู้ที่แก้ไขข้อมูลล่าสุด</h5>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class='fas fa-user-alt' style='font-size:30px'></i></div>
                            <div class="w3-rest">
                                <text class="oo">นฤมล แสงจันทร์</text>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</body>

</html>