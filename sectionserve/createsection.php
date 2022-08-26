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
    <title>ประเภทของงาน</title>
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

    h5,
    h2 {
        font-family: 'Prompt', sans-serif;
    }

    #cc {
        width: 207%;
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
                                    <h2 class="w3-center">ฟอร์มเพิ่มข้อมูลหัวข้อบริการ/วิจัย</h2>

                                    <h5>ไฟล์รูปภาพบริการ/วิจัย</h5>
                                    <div class="w3-row w3-section">
                                        <div class="w3-col" style="width:50px"><i class="fa fa-file-picture-o" style="font-size:36px"></i></div>
                                        <div class="w3-rest">
                                            <input class="w3-input w3-border" name="image" type="file">
                                        </div>
                                    </div>

                                    <h5>ประเภทของงานบริการ/วิจัย</h5>
                                    <div class="w3-row w3-section">
                                        <div class="w3-col" style="width:50px"><i class='fas fa-paste' style='font-size:36px'></i></div>
                                        <div class="w3-rest">
                                            <div class="row clearfix">
                                                <div class="col-sm-6">
                                                    <select class="form-control show-tick" id="cc">
                                                        <option value="">--- เลือกประเภทของงาน ---</option>
                                                        <option>บริการ</option>
                                                        <option>วิจัย</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h5>หัวข้อของงานบริการ/วิจัย</h5>
                                    <div class="w3-row w3-section">
                                        <div class="w3-col" style="width:50px"><i class='fas fa-pen-square' style='font-size:36px'></i></div>
                                        <div class="w3-rest">
                                            <div class="row clearfix">
                                                <div class="col-sm-6">
                                                    <select class="form-control show-tick" id="cc">
                                                        <option value="">--- เลือกหัวข้อของงาน ---</option>
                                                        <option>สมมติ</option>
                                                        <option>สมมติ</option>
                                                        <option>สมมติ</option>
                                                        <option>สมมติ</option>
                                                        <option>สมมติ</option>
                                                        <option>สมมติ</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h5>รายละเอียด</h5>
                                    <div class="w3-row w3-section">
                                        <div class="w3-col" style="width:50px"><i class="fa fa-file-text" style="font-size:36px;"></i></div>
                                        <div class="w3-rest">
                                            <textarea name="story" cols="95" rows="10" placeholder="รายละเอียด"></textarea>
                                        </div>
                                    </div>

                                    <h5>สถานะของงาน</h5>
                                    <div class="demo-radio-button">
                                        <input name="group5" type="radio" id="radio_34" class="with-gap radio-col-indigo" />
                                        <label for="radio_34">ทำงาน</label>
                                        <input name="group5" type="radio" id="radio_35" class="with-gap radio-col-indigo" />
                                        <label for="radio_35">ไม่ทำงาน</label>
                                    </div>
                                    <br>


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