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

    .oo {
        font-size: 16px;
        color: black;
    }

    #cc {
        width: 206%;
    }

    .form-group {
        margin-left: 3%;
    }

    #yy {
        text-align: center;
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
        <div class="header bg-orange" style="height:60px;">
            <h2 style="padding:10px 10px;" id="yy">ฟอร์มเพิ่มข้อมูลผู้สนใจบริการใหม่</h2>
        </div>
        <div class="header">
            <div class="w3-container">
                <br>

                <div>
                    <form class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="POST" enctype="multipart/form-data">

                        <h5>ประเภทของงาน</h5>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class='fas fa-paste' style='font-size:36px'></i></div>
                            <div class="w3-rest">
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <select class="form-control show-tick" id="cc">
                                            <option value="" selected="">--- เลือกประเภทของงาน ---</option>
                                            <option value="200">การทดสอบคุณค่าทางโภชนาการ</option>
                                            <option value="201">การทดสอบกลุ่มน้ำตาล วัตถุให้ความหวานแทนน้ำตาล</option>
                                            <option value="202">การทดสอบกลุ่มกรดอะมิโน</option>
                                            <option value="203">การทดสอบกลุ่มวิตามิน</option>
                                            <option value="204">การทดสอบกลุ่มกรดไขมัน คลอเรสเตอรอล</option>
                                            <option value="205">การทดสอบกลุ่มวัตถุกันเสีย</option>
                                            <option value="206">การทดสอบกลุ่มใยอาหาร</option>
                                            <option value="207">การทดสอบสารตกค้าง ยาฆ่าแมลง</option>
                                            <option value="208">การทดสอบทางจุลชีววิทยา จุลินทรีย์ที่ทำให้เกิดโรค</option>
                                            <option value="209">การทดสอบสารพิษจากจุลินทรีย์</option>
                                            <option value="210">การทดสอบจุลินทรีย์โพรไบโอติก (Lactic acid bacteria)</option>
                                            <option value="211">กลุ่มเบต้าอะโกนิสต์สารเร่งเนื้อแดง</option>
                                            <option value="212">กลุ่มเมลามีน</option>
                                            <option value="213">การทดสอบสารก่อภูมิแพ้ในอาหาร</option>
                                            <option value="214">การทดสอบสารปฏิชีวนะ</option>
                                            <option value="215">การทดสอบสีสังเคราะห์</option>
                                            <option value="216">กลุ่มแอลกอฮอล์</option>
                                            <option value="217">อาหารลดน้ำหนัก</option>
                                            <option value="218">การทดสอบเพื่อขอขึ้นทะเบียนอาหารและยา ตามประกาศกระทรวงสาธารณสุข</option>
                                            <option value="219">อื่นๆ</option>


                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5>รายละเอียดการติดต่อสอบถาม</h5>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class='fas fa-pen' style='font-size:36px'></i></div>
                            <div class="w3-rest">
                                <textarea name="story" cols="105" rows="10" placeholder="เขียนอะไรบางอย่าง"></textarea>
                            </div>
                        </div>

                        <h5>เอกสารแนบเพิ่มเติม</h5>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class='fas fa-file-upload' style='font-size:36px'></i></div>
                            <div class="w3-rest">
                                <input class="w3-input w3-border" name="image" type="file">
                            </div>
                        </div>

                        <h5>แนบรูปภาพประกอบ</h5>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class='fas fa-images' style='font-size:36px'></i></div>
                            <div class="w3-rest">
                                <input class="w3-input w3-border" name="image" type="file">
                            </div>
                        </div>

                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class='fas fa-envelope-open' style='font-size:30px'></i></div>
                            <div class="w3-rest">
                                <label>โปรดระบุ E-mail ที่ต้องการให้ วว. ติดต่อหรือส่งใบเสนอราคา</label>
                                <input class="w3-input w3-border" name="email" type="text" placeholder="email">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card2">
        <div class="header">
            <div class="w3-container">
                <br>

                <div>
                    <form class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="POST" enctype="multipart/form-data">

                        <h5>ชื่อผู้ขอ</h5>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class='fas fa-user-alt' style='font-size:36px'></i></div>
                            <div class="w3-rest">
                                <input class="w3-input w3-border" name="" type="text" placeholder="ชื่อผู้ขอ">
                            </div>
                        </div>

                        <h5>ในนาม</h5>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class='fas fa-user-alt' style='font-size:36px'></i></div>
                            <div class="w3-rest">
                                <input class="w3-input w3-border" name="" type="text" placeholder="ในนาม">
                            </div>
                        </div>

                        <h5>ชื่อหน่วยงาน</h5>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class='fas fa-building' style='font-size:36px'></i></div>
                            <div class="w3-rest">
                                <input class="w3-input w3-border" name="" type="text" placeholder="ชื่อหน่วยงาน">
                            </div>
                        </div>

                        <div class="w3-row w3-section">

                            <div class="w3-rest">
                                <div class="form-group row">
                                    <div class="col-md-4 mt-2">
                                        <p>รายละอียดที่อยู่</p>
                                        <input class="w3-input w3-border" name="" type="text" placeholder="รายละอียดที่อยู่">
                                    </div>
                                    <div class="col-md-2 mt-2">
                                        <p>เลขที่</p>
                                        <input class="w3-input w3-border" name="" type="text" placeholder="เลขที่">
                                    </div>
                                    <div class="col-md-2 mt-2">
                                        <p>หมู่ที่</p>
                                        <input class="w3-input w3-border" name="" type="text" placeholder="หมู่ที่">
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <p>ถนน</p>
                                        <input class="w3-input w3-border" name="" type="text" placeholder="ถนน">
                                    </div>
                                    <br> <br> <br> <br>
                                    <div class="col-md-4 mt-2">
                                        <p>จังหวัด</p>
                                        <input class="w3-input w3-border" name="" type="text" placeholder="จังหวัด">
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <p>อำเภอ/เขต</p>
                                        <input class="w3-input w3-border" name="" type="text" placeholder="อำเภอ/เขต">
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <p>แขวง/ตำบล</p>
                                        <input class="w3-input w3-border" name="" type="text" placeholder="แขวง/ตำบล">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5>เลขประจำตัวผู้เสียภาษี/นิติบุคคล</h5>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class='fas fa-book' style='font-size:36px'></i></div>
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

                        <h5>หมายเลขมือถือ</h5>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class='fas fa-mobile-alt' style='font-size:36px'></i></div>
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
                            <button type="button" class="btn btn-primary">จัดส่งใบคำร้องขอรับบริการ <i class="fas fa-paper-plane"></i> </button>
                        </p>
                        <br>
                </div>
            </div>
        </div>
    </div>

    </form>
</body>

</html>