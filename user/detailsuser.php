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
        background-color: #00cc44;
        border: none;
        border-radius: 12px;
        box-shadow: 0 7px #999;
        margin-left: 57%;
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

    .vv {
        padding: 10px 15px;
        font-size: 15px;
        text-align: center;
        outline: none;
        color: white;
        background-color: #ff4d4d;
        border: none;
        border-radius: 12px;
        box-shadow: 0 7px #999;
        margin-left: 1%;
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
    <div class="card2">
        <div class="header bg-pink" style="height:60px;">
            <h2 style="padding:10px 10px;">ข้อมูลผู้สนใจบริการ</h2>
        </div>
        <div class="header">
            <div class="w3-container">
                <br>

                <div>
                    <button type="button" class="button1" data-toggle="modal" data-target="#myModal">ยืนยันรับงาน <i class='fas fa-check-circle' style='font-size:16px'></i></button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h2 class="modal-title">หน่วยงานให้บริการ</h2>
                                </div>
                                <div class="modal-body">
                                    <div class="demo-checkbox">
                                        <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red" />
                                        <label for="md_checkbox_21">ศูนย์ทดสอบและมาตรวิทยา</label> <br>
                                        <input type="checkbox" id="md_checkbox_22" class="filled-in chk-col-red" />
                                        <label for="md_checkbox_22">ศูนย์พัฒนาและวิเคราะห์สมบัติของวัสดุ</label> <br>
                                        <input type="checkbox" id="md_checkbox_23" class="filled-in chk-col-red" />
                                        <label for="md_checkbox_23">ศูนย์ทดสอบมาตรฐานระบบขนส่งทางราง</label> <br>
                                        <input type="checkbox" id="md_checkbox_24" class="filled-in chk-col-red" />
                                        <label for="md_checkbox_24">ศูนย์การบรรจุหีบห่อไทย</label> <br>
                                        <input type="checkbox" id="md_checkbox_25" class="filled-in chk-col-red" />
                                        <label for="md_checkbox_25">สำนักรับรองคุณภาพ</label> <br>
                                        <input type="checkbox" id="md_checkbox_26" class="filled-in chk-col-red" />
                                        <label for="md_checkbox_26">ศูนย์เชี่ยวชาญผลิตภัณฑ์วัตกรรมสมุนไพร</label> <br>
                                        <input type="checkbox" id="md_checkbox_27" class="filled-in chk-col-red" />
                                        <label for="md_checkbox_27">บริการฝึกอบรบ (Training)</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="Submit" class="btn btn-default" data-dismiss="modal">ยืนยันรับงาน</button>
                                </div>
                            </div>

                        </div>
                    </div></a>
                    <a href='#'><button type="button" class="vv">ไม่สามารถทำได้ <i class='fas fa-ban' style='font-size:16px'></i></button></a>
                    <a href='#'><button type="button" class="aa">ยกเลิกข้อมูล <i class='fas fa-eraser' style='font-size:16px'></i></button></a>
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
                            <div class="w3-col" style="width:50px"><i class='far fa-file' style='font-size:36px'></i></div>
                            <div class="w3-rest">
                                <textarea name="story" cols="105" rows="10" placeholder="สมมติ"></textarea>
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
                            <div class="w3-col" style="width:50px"><i class='fas fa-envelope-open' style='font-size:36px'></i></div>
                            <div class="w3-rest">
                                <label>โปรดระบุ E-mail ที่ต้องการให้ วว. ติดต่อหรือส่งใบเสนอราคา</label>
                                <input type="text" name="Receive_Email" value="ppppppppp@gmail.com" size="50">
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
                                <text type="text" class="form-control">สมมติ </text>
                            </div>
                        </div>

                        <h5>ในนาม</h5>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class='fas fa-user-alt' style='font-size:36px'></i></div>
                            <div class="w3-rest">
                                <text class="form-control">สมมติ</text>
                            </div>
                        </div>

                        <h5>ชื่อหน่วยงาน</h5>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class='fas fa-building' style='font-size:36px'></i></div>
                            <div class="w3-rest">
                                <text class="ss form-control">สมมติ</text>
                            </div>
                        </div>

                        <div class="w3-row w3-section">

                            <div class="w3-rest">
                                <div class="form-group row">
                                    <div class="col-md-4 mt-2">
                                        <p>รายละอียดที่อยู่</p>
                                        <text class="form-control">สมมติ</text>
                                    </div>
                                    <div class="col-md-2 mt-2">
                                        <p>เลขที่</p>
                                        <text class="form-control">สมมติ</text>
                                    </div>

                                    <div class="col-md-2 mt-2">
                                        <p>หมู่ที่</p>
                                        <text class="form-control">สมมติ</text>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <p>ถนน</p>
                                        <text class="form-control">สมมติ</text>
                                    </div>
                                    <br> <br> <br> <br>
                                    <div class="col-md-4 mt-2">
                                        <p>จังหวัด</p>
                                        <text class="form-control">สมมติ</text>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <p>อำเภอ/เขต</p>
                                        <text class="form-control">สมมติ</text>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <p>แขวง/ตำบล</p>
                                        <text class="form-control">สมมติ</text>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5>เลขประจำตัวผู้เสียภาษี/นิติบุคคล</h5>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class='fas fa-book' style='font-size:36px'></i></div>
                            <div class="w3-rest">
                                <text class="form-control">สมมติ</text>
                            </div>
                        </div>

                        <h5>E-mail</h5>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class='fas fa-envelope-open' style='font-size:36px'></i></div>
                            <div class="w3-rest">
                                <text class="form-control">สมมติ</text>
                            </div>
                        </div>

                        <h5>หมายเลขโทรศัพท์</h5>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class='fas fa-phone-alt' style='font-size:36px'></i></div>
                            <div class="w3-rest">
                                <text class="form-control">สมมติ</text>
                            </div>
                        </div>

                        <h5>หมายเลขมือถือ</h5>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class='fas fa-phone-alt' style='font-size:36px'></i></div>
                            <div class="w3-rest">
                                <text class="form-control">สมมติ</text>
                            </div>
                        </div>

                        <h5>Line ID</h5>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:50px"><i class='fab fa-line' style='font-size:36px'></i></div>
                            <div class="w3-rest">
                                <text class="form-control">สมมติ</text>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>

</html>