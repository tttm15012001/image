<?php

require_once('db/dbhelper.php');
require_once('utils/utilities.php');

$list_product = executeResult('select * from products');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="all,follow">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-
    B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-
    DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-
    Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.pack.js"></script>
    <title>Document</title>
    <script>
        /* $.post('api/cookie.php', {
                'action': 'add',
                'id': id,
                'num': 1
            }, function(data) {
                header("Location: sign_in.php");
            })  */

        function nav() {
            var sideNav = document.getElementById("nav");
            var menu = document.getElementById("menu");
            if (sideNav.style.left == "-250px") {
                sideNav.style.left = "0";
                menu.src = "image/close.png";
            } else {
                sideNav.style.left = "-250px";
                menu.src = "image/menu.png";
            }
        }

        function addToCart(id) {
            //var data_test = 'This is first demo';
            $.ajax({
                url: 'api/cookie.php',
                type: 'POST',
                data: {
                    'action': 'add',
                    'id': id,
                    'num': 1
                },
                success: function(data) {
                    location.reload();
                },
                error: function(e) {
                    console.log(e.message);
                }
            });
        }
    </script>
</head>

<body onload="nav()">
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-4 div_1">
                    <img src="image/LU/Logo B??nh Lu.png" alt="">
                </div>
                <div class="col-lg-7 col-md-5 col-sm-9 col-8 div_2">
                    <div>
                        <div class="div_2_2">
                            <nav>
                                <a href="cart.php"><img src="image/icons8-cart-64.png" alt=""></a>
                                <a href="#">????ng nh???p</a>
                                <a href="#">????ng k??</a>
                            </nav>
                        </div>
                        <div class="middle">
                            <input type="text" placeholder="??i???n lo???i b??nh c???n t??m">
                            <div>
                                <select id="multiSelect">
                                    <option value="">All</option>
                                    <option value="">B??nh qu??? Lu Wafer 97.5g</option>
                                    <option value="">B??nh qu??? Lu Wafer 234g</option>
                                    <option value="">Cookies b?? Ph??p LU 180g</option>
                                    <option value="">Cookies b?? Ph??p LU 310g</option>
                                    <option value="">Cookies b?? Ph??p LU 540g</option>
                                    <option value="">Cookies b?? Ph??p LU 708g</option>
                                    <option value="">Cookies b?? Ph??p LU 894g</option>
                                    <option value="">Lu veritable petit beurre 600g</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 div_3">
                    <nav>
                        <div><a href="cart.php"><img src="image/icons8-cart-64.png" alt=""></a></div>
                        <div class="login"><a href="#">????ng nh???p</a></div>
                        <div class="login"><a href="#">????ng k??</a></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <?php
    $count = 0;
    $cart = [];
    if (isset($_COOKIE['cart'])) {
        $json = $_COOKIE['cart'];
        $cart = json_decode($json, true);
    }
    foreach ($cart as $item) {
        $count += $item['num'];
    }
    ?>
    <div id="nav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">TRANG CH???</a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
                <a class="nav-link" href="#">B???NG GI?? 2022</a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
                <a class="nav-link" href="#">B??NH QU??? LU WAFER</a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
                <a class="nav-link" href="#">B??NH COOKIES B?? PH??P LU</a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
                <a class="nav-link" href="#">LU VERITABLE PETIT BEURRE</a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
                <a class="nav-link" href="#">LI??N H???</a>
            </li>
            <div class="dropdown-divider"></div>
        </ul>
    </div>
    <div class="lien_he">
        <div>
            <a href="#">
                <img src="image/fb.png" alt="">
            </a>
        </div>
        <div>
            <a href="#">
                <img src="image/youtube.png" alt="">
            </a>
        </div>
        <div>
            <a href="#">
                <img src="image/zalo.png" alt="">
            </a>
        </div>
        <div>
            <a href="#">
                <img src="image/twitter.png" alt="">
            </a>
        </div>
    </div>
    <div id="menuBtn" onclick="nav()"><img src="image/menu.png" id="menu"></div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active img">
                <img class="d-block w-100" src="image/background.png" alt="First slide">
            </div>
            <div class="carousel-item img">
                <img class="d-block w-100" src="image/kinh_do1.jpg" alt="Second slide">
            </div>
            <div class="carousel-item img">
                <img class="d-block w-100" src="image/kinh_do2.jpeg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div id="trangVang">
        <div class="header">
            B??NH LU 2022
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <?php
                    foreach ($list_product as $item) {
                        echo '<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 item" style="padding: 15px; height: fit-content;">
                                    <div class="img">
                                        <img class="card-img-top" src="' . $item['thumbnail'] . '" alt="">
                                    </div>
                                    <div class="card-body">
                                        <div>' . $item['title'] . '</div>
                                        <div style="font-size: 16px; color: red;">' . number_format($item['price'], 0, ',', '.') . '</div>
                                        <div>
                                            <button onclick="addToCart(' . $item['id'] . ')">?????T H??NG</button>
                                        </div>
                                    </div>
                                </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div id="news">
        <div class="header">
            Tin T???c S??? Ki???n
        </div>
        <div class="content container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="img">
                        <img src="image/LU/b?? m???t ???n sau chi???c b??nh quy Lu tr??? danh c???a n?????c Ph??p.jpg" alt="">
                        <div class="script">
                            <div>
                                <span>
                                    <a href="https://tiengphapthuvi.fr/bi-mat-sau-chiec-banh-quy-lu-tru-danh-cua-nuoc-phap/" target="_blank">
                                        B?? M???T ???N SAU CHI???C B??NH QUY LU TR??? DANH C???A N?????C PH??P
                                    </a>
                                </span>
                            </div>
                            <div>
                                <p style="font-size: 11px;">02/12/2021</p>
                            </div>
                            <hr>
                            <div>
                                <p>Su???t chi???u d??i l???ch s??? 170 n??m, c?? m???t tr??n h??n 100 qu???c gia,
                                    b??nh quy LU v???n gi??? ???????c danh ti???ng nh??? h????ng v??? tinh t??? b???t ch???p th???i gian.
                                    V?? ???n sau m???i chi???c b??nh ???y l?? nh???ng c??u chuy???n th?? v??? v??? n???n v??n h??a Ph??p ???
                                    c??i n??i c???a v??n h??a ch??u ??u.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="img">
                        <img src="image/LU/T???t l?? g?? trong suy ngh?? c???a c??nh m??y r??u.jpg" alt="">
                        <div class="script">
                            <div>
                                <span>
                                    <a href="https://afamily.vn/tet-la-gi-trong-suy-nghi-cua-canh-may-rau-20190118162957808.chn" target="_blank">
                                        T???T L?? G?? TRONG SUY NGH?? C???A C??NH M??Y R??U?
                                    </a>
                                </span>
                            </div>
                            <div>
                                <p style="font-size: 11px;">16/12/2021</p>
                            </div>
                            <hr>
                            <div>
                                <p>M???i ????? T???t v???, m???ng x?? h???i l???i d???y s??ng nh???ng lu???ng ?? ki???n tr??i chi???u
                                    v??? vai tr?? v?? s??? b???n r???n c???a ng?????i ph??? n??? trong ng??y T???t.
                                    S??? ????ng th???u hi???u s??? v???t v??? v???i ng?????i ph??? n???, s??? kh??c l??n ti???ng ch?? tr??ch
                                    c??nh ????n ??ng thi???u s??? h??? tr??? v?? chia s???. V???y nh???ng ng?????i ????n ??ng, h??? ngh?? g?? khi T???t ?????n?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="img">
                        <img src="image/LU/Xu h?????ng ch???n h???p qu?? b??nh ng??y T???t.jpg" alt="">
                        <div class="script">
                            <div>
                                <span>
                                    <a href="https://www.bachhoaxanh.com/kinh-nghiem-hay/cac-hop-banh-quy-dep-ngon-thich-hop-lam-qua-tang-ngay-tet-1228863" target="_blank">
                                        XU H?????NG CH???N H???P QU?? B??NH NG??Y T???T C???A NG?????I VI???T
                                    </a>
                                </span>
                            </div>
                            <div>
                                <p style="font-size: 11px;">01/01/2021</p>
                            </div>
                            <hr>
                            <div>
                                <p>C??c h???p b??nh quy ?????p, ngon th??ch h???p t???ng T???t lu??n l?? ch??? ????? t??m ki???m
                                    m???i khi T???t ?????n xu??n v???. B???i l???a ch???n qu?? bi???u T???t t???ng gia ????nh,
                                    b???n b??, ?????ng nghi???p, ?????i t??c,... v???a mang ?? ngh??a g???i ??i may m???n, b??nh an,
                                    v???a ch???a ?????ng t??nh c???m ng?????i g???i.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="img">
                        <img src="image/LU/c??ch l??m b??nh quy b??.jfif" alt="">
                        <div class="script">
                            <div>
                                <span>
                                    <a href="http://www.savourydays.com/cach-lam-banh-quy-bo-tet/" target="_blank">
                                        C??CH L??M B??NH QUY B???NG N???I CHI??N KH??NG D???U
                                    </a>
                                </span>
                            </div>
                            <div>
                                <p style="font-size: 11px;">22/01/2022</p>
                            </div>
                            <hr>
                            <div>
                                <p>Trong th???i ??i???m T???t ?????n Xu??n v???, c??c c??ng th???c m??n ??n,
                                    c??ch l??m b??nh quy b???ng n???i chi??n kh??ng d???u ???? tr??? th??nh m???t tr??o l??u
                                    r???t ???????c H???i y??u b???p nghi???n l??m b??nh ??a chu???ng. </p>
                            </div>
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
                        ??I???M B??N B??NH LU 2022
                    </div>
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
    <div id="demo-ajax"></div>
</body>

</html>