<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        #header {
            width: 100%;
        }

        .wrapper {
            width: 100%;
            background-color: rgb(170, 29, 4);
            height: 120px;
        }

        .wrapper .on {
            width: 100%;
            height: 120px;
            display: flex;
            flex-direction: row;

        }

        .wrapper .on>div {
            float: left;
        }

        .div_1 {
            height: 120px;
            line-height: 120px;
            width: 29%;
            text-align: right;
            font-size: 19px;
            color: rgb(192, 194, 63);
        }

        .div_2 {
            width: 42%;
            height: 120px;
            color: white;
            padding: 15px 25px 30px 25px;
        }

        .div_3 {
            height: 120px;
            width: 29%;
        }

        .div_2 .top {
            width: 100%;
            height: 25px;
            display: flex;
        }

        .div_2 .top>div {
            height: 25px;
            line-height: 25px;
            padding-left: 20px;
        }

        .div_2 .middle {
            width: 100%;
            height: 35px;
        }

        .div_2 .middle>div {
            height: 100%;
            line-height: 30px;
            float: left;
        }

        .middle select {
            border-radius: 3px;
            height: 100%;
            width: 50px;
        }

        .middle input {
            width: calc(100% - 50px);
            height: 100%;
            padding-left: 8px;
        }

        .div_2 .bottom {
            width: 100%;
            height: 40px;
            line-height: 40px;
        }

        .div_3>div {
            color: white;
            width: 114px;
            margin: auto;
            margin-top: 42.5px;
            padding: 0 7px;
            border: thin solid white;
            border-radius: 5px;
            height: 35px;
            font-size: 14px;
            line-height: 35px;
        }

        .div_3 .img {
            width: 23px;
            height: 30px;
            margin-top: 2.5px;
            float: right;
        }

        .div_3 .img img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        #under {
            background-color: rgb(170, 29, 4);
            width: 100%;
            height: 50px;
            transition: top 1s;
        }

        #under>div {
            color: #ddd;
            height: 50px;
            line-height: 50px;
            font-size: 14.5px;
            width: 85%;
            margin: auto;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        #under>div>div {
            background-color: rgb(170, 29, 4);
            padding: 0 7px;
            transition: 0.3s;
        }

        #under>div>div:hover {
            cursor: pointer;
            background-color: rgb(175, 112, 93);
            border-radius: 3px;
        }

        #main {
            width: 100%;
            height: fit-content;
        }

        #main .img {
            background-image: linear-gradient(to top, rgb(218, 195, 121) 20%, rgb(235, 184, 46) 80%);
            width: 100%;
            margin: auto;
        }

        #main .img img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        #trangVang {
            background-color: rgb(241, 241, 241);
            width: 100%;
            padding-bottom: 30px;
        }

        #trangVang .header {
            width: 100%;
            text-align: center;
            height: 100px;
            color: rgb(31, 197, 31);
            line-height: 100px;
        }

        .content {
            width: 100%;
        }

        .content>div {
            text-align: center;
            padding: 10px 0;
        }

        .trangVang {
            display: grid;
            grid-template-columns: auto auto auto auto auto;
            width: 84%;
            grid-gap: 8px;
            margin: auto;
        }

        .trangVang>div {
            padding: 15px 5px;
            background-color: white;
            transition: 0.4s;
        }

        .trangVang>div:hover {
            cursor: pointer;
            margin-top: -4px;
            margin-bottom: 4px;
        }

        .trangVang .img {
            width: 100%;
            height: 160px;
        }

        .trangVang img {
            width: 100%;
            height: 100%;
        }

        .trangVang .script {
            text-align: center;
            font-size: 20px;
        }

        .trangVang .script>div {
            padding: 5px 0;
        }

        .trangVang button {
            width: 100px;
            height: 30px;
            background-color: red;
            color: white;
        }

        .trangVang button:hover {
            cursor: pointer;
            background-color: brown;
        }

        #news {
            padding: 30px 0 170px 0;
        }

        #news .header {
            width: 100%;
            color: rgb(158, 19, 19);
            text-align: center;
            height: 80px;
            line-height: 80px;
        }

        #news .content {
            display: grid;
            grid-gap: 25px;
            grid-template-columns: auto auto auto auto;
            width: 84%;
            margin: auto;
        }

        #news .content>div {
            text-align: left;
        }

        #news .content>div>div {
            position: relative;
        }

        #news .content .img {
            opacity: 0.6;
            transition: 0.6s;
            width: 100%;
            height: 300px;
        }

        #news .content .script {
            opacity: 0;
            position: absolute;
            top: 80%;
            transition: 0.9s;
        }

        #news .content>div:hover .img {
            cursor: pointer;
            opacity: 1;
        }

        #news .content>div:hover .script {
            top: 100%;
            opacity: 1;
        }

        #news .content .script>div {
            padding: 4px 0;
        }

        #news .content .script hr {
            width: 30px;
        }

        #news .content img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #news span {
            color: rgb(158, 19, 19);
        }

        #contact {
            width: 100%;
            background-color: rgb(170, 29, 4);
            padding-top: 30px;
            color: rgb(224, 224, 224);
        }

        #contact .contact {
            box-shadow: 0px 3px 5px rgb(114, 18, 1);
        }

        #contact .contact .chi_nhanh {
            width: 84%;
            margin: auto;
            display: grid;
            grid-template-columns: calc(100% / 3) calc(100% / 3) calc(100% / 3);
            grid-gap: 25px;
        }

        #contact .contact .chi_nhanh>div .header {
            width: 100%;
            height: 45px;
            line-height: 45px;
            padding-left: 10px;
            font-size: 18px;
            font-weight: bold;
            background-color: rgb(114, 29, 3);
        }

        #contact hr {
            width: 25px;
            margin: 15px 0;
        }

        #contact h4 {
            font-size: 13.8px;
            margin: 15px 0;
        }

        #contact p {
            line-height: 28px;
        }

        #contact .script {
            padding: 50px 150px 15px 150px;
            text-align: center;
            color: rgb(180, 179, 179);
            font-size: 16.5px;
            line-height: 22px;
        }
        #contact .bottom {
            margin-top: 5px;
            z-index: -1;
            width: 100%;
            height: 65px;
            background-color: rgb(170, 29, 4);
        }
    </style>
    <script>
        function successful_login(){
            alert('Ch??o m???ng qu?? kh??ch h??ng ???? ?????n v???i c???a h??ng B??nh Trung Thu Kinh ???? c???a ch??ng t??i')
        }
        var under = document.getElementById('under');
        window.addEventListener("scroll", function () {
            var y = pageYOffset;
            if (y >= 170) {
                under.style.position = 'fixed';
                under.style.top = y + '50';
            }
            else {
                under.style.position = 'static';
                under.style.top = 'unset';
            }
        })
    </script>
</head>

<body onload="successful_login()">
    <div id="header">
        <div class="wrapper">
            <div class="on">
                <div class="div_1">
                    <p>T???T TRUNG THU, T???T C???A T??NH TH??N</p>
                </div>
                <div class="div_2">
                    <div class="top">
                        <div>
                            <p>Sale.kinhdomiennam@gmail.com</p>
                        </div>
                        <div>
                            <p>0901.69.8910</p>
                        </div>
                        <div style="font-size: 12px;">
                            ?????a ch???: 5 B??i T?? H??n, An Ph??, Qu???n 2, HCM
                        </div>
                    </div>
                    <div class="middle">
                        <div>
                            <select>
                                <option value="">All</option>
                                <option value="">B??nh AFC & K???o Choco</option>
                                <option value="">B??nh ??n Chay - ??n Ki??ng</option>
                                <option value="">B??nh B??ng Lan Solite</option>
                                <option value="">B??nh D???o</option>
                                <option value="">B??nh N?????ng</option>
                                <option value="">B??nh Oreo</option>
                                <option value="">B??nh Quy Cosy</option>
                                <option value="">B??nh Quy LU</option>
                                <option value="">B??nh Trung Thu Oreo</option>
                                <option value="">H???p 2 B??nh</option>
                                <option value="">H???p 4 B??nh</option>
                                <option value="">Lava B??nh Trung Thu</option>
                                <option value="">S???n Ph???m M???i 2021</option>
                                <option value="">Thi???u Nhi</option>
                                <option value="">Tr??ng V??ng</option>
                                <option value="">Tr??ng V??ng Black&Gold</option>
                            </select>
                        </div>
                        <input type="text" placeholder="??i???n lo???i b??nh c???n t??m">
                    </div>
                    <div class="bottom">
                        <p style="font-size: 14px;">G???i ??: Gi?? B??nh Trung Thu Kinh ???? 2021, B??nh Tr??ng V??ng Black & Gold
                            2021, B??nh Tr??ng V??ng
                        </p>
                    </div>
                </div>
                <div class="div_3">
                    <div>
                        GI??? H??NG
                        <div class="img">
                            <img src="backend_php/small project/kinh_do/image/icons8-cart-24.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="under">
            <div>
                <div>
                    <p>TRANG CH???</p>
                </div>
                <div>
                    <p>B???NG GI?? 2021</p>
                </div>
                <div>
                    <p>BLACK & GOLD</p>
                </div>
                <div>
                    <p>TR??NG V??NG</p>
                </div>
                <div>
                    <p>M???U 2021</p>
                </div>
                <div>
                    <p>OREO</p>
                </div>
                <div>
                    <p>LAVA TR???NG CH???Y</p>
                </div>
                <div>
                    <p>H???P 2 B??NH</p>
                </div>
                <div>
                    <p>H???P 4 B??NH</p>
                </div>
                <div>
                    <p>B??NH TH?????NG</p>
                </div>
                <div>
                    <p>THI???U NHI</p>
                </div>
                <div>
                    <p>LI??N H???</p>
                </div>
            </div>
        </div>
        <div id="main">
            <div class="img">
                <img src="/small project/kinh_do/image/background.png" alt="">
            </div>
            <div></div>
        </div>
    </div>
    <div id="trangVang">
        <div class="header">
            <h2>B??nh Trung Thu Tr??ng V??ng Th?????ng H???ng Black & Gold</h2>
        </div>
        <div class="content">
            <div style="color: rgb(31, 197, 31);">
                <h2>B??nh Trung Thu Tr??ng V??ng 2021</h2>
            </div>
            <div class="trangVang">
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h1.jpg" alt="">
                    </div>
                    <div class="script">
                        <div>Tr??ng V??ng Ho??ng Kim Vinh Hoa (V??ng)</div>
                        <div style="font-size: 16px; color: red;">1.300.000 vn??</div>
                        <div>
                            <button>?????T H??NG</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h2.jpg" alt="">
                    </div>
                    <div class="script">
                        <div>Tr??ng V??ng Ho??ng Kim Vinh Hi???n (?????)</div>
                        <div style="font-size: 16px; color: red;">1.300.000 vn??</div>
                        <div>
                            <button>?????T H??NG</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h3.png" alt="">
                    </div>
                    <div class="script">
                        <div>Tr??ng V??ng H???ng Ng???c An Ph?? (V??ng)</div>
                        <div style="font-size: 16px; color: red;">750.000 vn??</div>
                        <div>
                            <button>?????T H??NG</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h4.png" alt="">
                    </div>
                    <div class="script">
                        <div>Tr??ng V??ng H???ng Ng???c An Th???nh (?????)</div>
                        <div style="font-size: 16px; color: red;">750.000 vn??</div>
                        <div>
                            <button>?????T H??NG</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h5.png" alt="">
                    </div>
                    <div class="script">
                        <div>Tr??ng V??ng H???ng Ng???c An Nhi??n (Xanh D????ng)</div>
                        <div style="font-size: 16px; color: red;">600.000 vn??</div>
                        <div>
                            <button>?????T H??NG</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h6.png" alt="">
                    </div>
                    <div class="script">
                        <div>Tr??ng V??ng H???ng Ng???c An L??nh (Xanh)</div>
                        <div style="font-size: 16px; color: red;">600.000 vn??</div>
                        <div>
                            <button>?????T H??NG</button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h7.png" alt="">
                    </div>
                    <div class="script">
                        <div>Tr??ng V??ng H???ng Ng???c An B??nh</div>
                        <div style="font-size: 16px; color: red;">550.000 vn??</div>
                        <div>
                            <button>?????T H??NG</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="news">
        <div class="header">
            <h2>Tin T???c S??? Ki???n</h2>
        </div>
        <div class="content">
            <div>
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h8.jpg" alt="">
                    </div>
                    <div class="script">
                        <div><span>B???NG GI?? H???P QU?? B??NH K???O T???T KINH ???? 2020</span></div>
                        <div>
                            <p style="font-size: 13px;">29/08/2021</p>
                        </div>
                        <hr>
                        <div>
                            <p>B???ng B??o Gi?? H???p Qu?? B??nh K???o T???t Kinh ???? 2022 chi???t kh???u cao ch??nh th???c</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h9.jpg" alt="">
                    </div>
                    <div class="script">
                        <div><span>Ph??n Ph???i B??nh Chu???i N?????ng C???t D???a Gi?? S??? Ch???t L?????ng Cao</span></div>
                        <div>
                            <p style="font-size: 13px;">29/08/2021</p>
                        </div>
                        <hr>
                        <div>
                            <p>B??nh chu???i n?????ng l?? lo???i b??nh kh?? ph??? bi???n d?????ng nh?? ai c??ng ???? t???ng th?????ng th???c</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h10.jpg" alt="">
                    </div>
                    <div class="script">
                        <div><span>Cung C???p B??nh Khoai M?? N?????ng S??? L?????ng L???n Gi?? ??u ????i</span></div>
                        <div>
                            <p style="font-size: 13px;">29/08/2021</p>
                        </div>
                        <hr>
                        <div>
                            <p>Ba??nh khoai mi?? n??????ng la?? m????t loa??i th????c ph????m ????????c r????t nhi????u kha??ch ha??ng y??u
                                thi??ch</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="img">
                        <img src="/small project/kinh_do/image/h11.jpg" alt="">
                    </div>
                    <div class="script">
                        <div><span>Cung C???p Rau C??? Qu??? ???? L???t ????ng Chu???n S??? L?????ng L???n Gi?? S???</span></div>
                        <div>
                            <p style="font-size: 13px;">29/08/2021</p>
                        </div>
                        <hr>
                        <div>
                            <p>Rau c??? qu??? ???? L???t lu??n l?? nh???ng th???c ph???m xanh, s???ch ???????c nhi???u ng?????i tin d??ng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact">
        <div class="contact">
            <div class="chi_nhanh">
                <div>
                    <div class="header">
                        ??I???M B??N B??NH TRUNG THU MI???N NAM
                    </div>
                    <hr>
                    <h4>C??NG TY TNHH ?????U T?? PH??T TRI???N SXTM HO??NG GIA</h4>
                    <div>
                        <p>
                            <span>Showroom: 5 B??i T?? H??n, An Ph??, Qu???n 2, H??? Ch?? Minh</span><br>
                            ?????a ch??? thu???:4/3 L????ng ????nh C???a, Ph?????ng B??nh An, qu???n 2, Tphcm <br>
                            M?? s??? thu???: 0313396342 (12/08/2015) <br> 
                            Hotline: 0901.69.8910- 09.0203.8910 <br>
                            Ng??y ho???t ?????ng: 12/08/2015,GPKD: 0313396342 <br>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="header">
                        ??I???M B??N B??NH TRUNG THU MI???N NAM
                    </div>
                    <hr>
                    <h4>C??NG TY TNHH ?????U T?? PH??T TRI???N SXTM HO??NG GIA</h4>
                    <div>
                        <p>
                            <span>Showroom: 5 B??i T?? H??n, An Ph??, Qu???n 2, H??? Ch?? Minh</span><br>
                            ?????a ch??? thu???:4/3 L????ng ????nh C???a, Ph?????ng B??nh An, qu???n 2, Tphcm <br>
                            M?? s??? thu???: 0313396342 (12/08/2015) <br>
                            Hotline: 0901.69.8910- 09.0203.8910 <br>
                            Ng??y ho???t ?????ng: 12/08/2015,GPKD: 0313396342 <br>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="header">
                        TH??NG TIN V??? B??NH TRUNG THU 2021
                    </div>
                    <hr>
                    <div>
                        <p class="p_3">
                            CH??NH S??CH V???N CHUY???N <br>
                            H?????NG D???N MUA H??NG <br>
                            CH??NH S??CH B???O H??NH/?????I TR??? <br> 
                            GI?? B??NH TRUNG THU KINH ???? 2021 <br>
                            CH??NH S??CH B???O M???T TH??NG TIN <br>
                            Panel EPS <br>
                            M??y in Uv <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="script">
                T???t c??? c??c s???n ph???m b??nh trung thu kinh ???? 2021 ???????c Ho??ng Gia nh???p tr???c ti???p t??? t???ng c??ng ty 
                Kinh ???? Mondelez v?? b??n theo ch??nh s??ch gi?? c???a c??ng ty v???i ?????y ????? c??c th??ng tin v??? s???n ph???m 
                h??nh ???nh ???????c ch???p ???nh tr???c ti???p khi nh???p v??? ????? b??n l???i cho qu?? kh??ch h??ng v?? ?????y ????? ho??t ????n VAT. 
                V?? v???y m???i quy???n l???i v??? h??nh ???nh ???????c b???o l??u v???i l?? do th????ng m???i ?????i l?? s??? v?? Ho??ng Gia t??? ch???p ???nh 
                v?? s??? d???ng ???nh s???n ph???m sau khi ???? mua h??ng v??? ch???p tr???c ti???p.
            </div>
        </div>
        <div class="bottom"></div>
    </div>
</body>

</html>