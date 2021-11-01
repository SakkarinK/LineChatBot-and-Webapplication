<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasi-kun :Collect information</title>
    <link rel="stylesheet" href="css/main.css">
</head>


<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <h1>Pasi-kun</h1>
                </div>
                <div class="write">
                    <h1>โปรดกรอกข้อมูลของท่าน</h1>
                </div>
            </nav>

            <form action="data.php" method="post">
                <fieldset>
                    <div class="col-container">
                        <section class="headerl-info">
                            <div class="header-title1">
                                <h2>รายได้ของคุณ</h2>
                            </div>
                            <div class="headerl-content">
                                <form>
                                    <br>
                                    <label>เงินเดือน(รายปี)</label>
                                    <input type="number" name="salary" min="0">
                                    <label1>บาท</label1>
                                </form>
                                <form>
                                    <label>โบนัส</label>
                                    <input type="number" name="bonus" min="0">
                                    <label1>บาท</label1>
                                </form>
                                <form>
                                    <label>รายได้อื่น ๆ</label>
                                    <input type="number" name="income" min="0">
                                    <label1>บาท</label1>
                                </form>
                            </div>
                            <br>
                            <div class="header-title2">
                                <h2>ลดหย่อนส่วนบุคคล</h2>
                            </div>
                            <div class="headerl-content">
                                <form>
                                    <br>
                                    <label for="status" id="status">สถานสมรส</label>
                                    <select name="mStatus">
                                        <option value="0">โสด</option>
                                        <option value="1">หย่า</option>
                                        <option value="2">คู่สมรสมีเงินได้(แยกยื่น)</option>
                                        <option value="3">คู่สมรสไม่มีเงินได้</option>
                                    </select>
                                </form>
                                <form>
                                    <label>บุตร (ถ้ามี)</label>
                                    <input type="number" name="nChild" min="0">
                                    <label1>คน</label1>
                                </form>
                                <form>
                                    <label>บิดา-มารดา</label>
                                    <input type="number" name="nParent" min="0">
                                    <label1>คน</label1>
                                </form>
                            </div>
                            <br>
                            <div class="header-title3">
                                <h2>กองทุน</h2>
                            </div>
                            <div class="headerl-content">
                                <form>
                                    <br>
                                    <label for="rmf" id="rmf">กองทุนเพื่อการเลี้ยงชีพ</label>
                                    <input type="number" name="rmf" min="0">
                                    <label1>บาท</label1>
                                </form>
                                <form>
                                    <label>กองทุนการออมแห่งชาติ</label>
                                    <input type="number" name="nsf" min="0">
                                    <label1>บาท</label1>
                                </form>
                                <form>
                                    <label>กองทุนเพื่อการออม</label>
                                    <input type="number" name="ssf" min="0">
                                    <label1>บาท</label1>
                                </form>
                                <form>
                                    <label for="ssfx" id="ssfx">กองทุนเพื่อการออมพิเศษ</label>
                                    <input type="number" id="ssfx" name="ssfx" min="0">
                                    <label1>บาท</label1>
                                </form>
                            </div>
                        </section>

                        <section class="headerr-info">
                            <div class="header-title4">
                                <h2>ประกันชีวิต</h2>
                            </div>
                            <div class="headerr-content">
                                <form>
                                    <br>
                                    <label>เบี้ยประกันชีวิต</label>
                                    <input type="number" name="insurance" min="0">
                                    <label1>บาท</label1>
                                </form>
                                <form>
                                    <label>เบี้ยประกันชีวิตแบบบำนาญ</label>
                                    <input type="number" name="Ainsurance" min="0">
                                    <label1>บาท</label1>
                                </form>
                            </div>

                            <br>
                            <div class="header-title5">
                                <h2>เงินบริจาค</h2>
                            </div>
                            <div class="headerr-content">
                                <form>
                                    <br>
                                    <label>ทั่วไป</label>
                                    <input type="number" name="donation" min="0">
                                    <label1>บาท</label1>
                                </form>
                                <form>
                                    <label>การศึกษา</label>
                                    <input type="number" name="eduDonation" min="0">
                                    <label1>บาท</label1>
                                </form>
                                <form>
                                    <label>ช่วยเหลืออุทกภัย</label>
                                    <input type="number" id="flood" name="floDonation" min="0">
                                    <label1>บาท</label1>
                                </form>
                                <form>
                                    <label>สาธารณประโยชน์</label>
                                    <input type="number" name="pubDonation" min="0">
                                    <label1>บาท</label1>
                                </form>
                            </div>

                            <br>
                            <div class="header-title6">
                                <h2><span></span>อื่น ๆ</h2>
                            </div>
                            <div class="headerr-content">
                                <form>
                                    <br>
                                    <label>ค่าดอกเบี้ยกู้บ้าน</label>
                                    <input type="number" name="hLoan" min="0">
                                    <label1>บาท</label1>
                                </form>
                                <form>
                                    <label>ประกันสังคม</label>
                                    <input type="number" name="socSecur" min="0">
                                    <label1>บาท</label1>
                                </form>
                                <form>
                                    <label>เงินสะสมกองทุนสำรองเลี้ยงชีพ</label>
                                    <input type="number" name="pFund" min="0">
                                    <label1>บาท</label1>
                                </form>
                            </div>
                        </section>
                    </div>
                    <section class="btn">
                        <div class="nav-btn">
                            <a href="#" class="save">บันทึกข้อมูล
                            </a>
                        </div>
                    </section>
        </div>
    </header>

    </fieldset>
    </form>

</body>

</html>