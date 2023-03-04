<?php
$activate = "service";
@include('header.php')
?>
<link href="css/sodo.css" rel="stylesheet">

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/lp.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Chuyến Bay</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="booking.php">Trang Chủ</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Dịch vụ</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Chon ghe -->

<h1>Vui lòng chọn ghế</h1>
<div class="seats">
    <div class="left-side">
        <div class="cot">
            <div class="seat">Ghế A1</div>
            <div class="seat">Ghế A2</div>
            <div class="seat">Ghế A3</div>
            <div class="seat">Ghế A4</div>
            <div class="seat">Ghế A5</div>
            <div class="seat">Ghế A6</div>
            <div class="seat">Ghế A7</div>
            <div class="seat">Ghế A8</div>
            <div class="seat">Ghế A9</div>
            <div class="seat">Ghế A10</div>
            <div class="seat">Ghế A11</div>
            <div class="seat">Ghế A12</div>
            <div class="seat">Ghế A13</div>
            <div class="seat">Ghế A14</div>
            <div class="seat">Ghế A15</div>
            <div class="seat">Ghế A16</div>
        </div>
    </div>
    <div class="right-side">
        <div class="cot">
            <div class="seat">Ghế B1</div>
            <div class="seat">Ghế B2</div>
            <div class="seat">Ghế B3</div>
            <div class="seat">Ghế B4</div>
            <div class="seat">Ghế B5</div>
            <div class="seat">Ghế B6</div>
            <div class="seat">Ghế B7</div>
            <div class="seat">Ghế B8</div>
            <div class="seat">Ghế B9</div>
            <div class="seat">Ghế B10</div>
            <div class="seat">Ghế B11</div>
            <div class="seat">Ghế B12</div>
            <div class="seat">Ghế B13</div>
            <div class="seat">Ghế B14</div>
            <div class="seat">Ghế B15</div>
            <div class="seat">Ghế B16</div>
        </div>
    </div>
</div>

<!--CHÚ THÍCH  -->

<div class="legend">
    <h3>Chú thích: </h3>
    <div class="legend-box trong"></div>

    <span>Còn trống</span>
    <div class="legend-box dat"></div>
    <span>Đã đặt</span>
    <div class="legend-box chon"></div>
    <span>Đang chọn</span>
</div>

<button class="pay-button">Thanh toán</button>
<!-- Xác nhận form -->
<div class="popup">
    <div class="confirm-box">
        <p>Bạn có chắc chắn muốn đặt vé?</p>
        <div class="button-container">
            <button id="confirm-button">Xác nhận</button>
            <button id="cancel-button">Huỷ</button>
        </div>
    </div>
</div>
</div>
<div></div>
<!-- Testimonial Start -->
<div class="container-xxl testimonial mt-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s" style="margin-bottom: 90px;">
    <div class="container">
        <div class="owl-carousel testimonial-carousel py-5">
            <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet.
                    Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg"
                        style="width: 45px; height: 45px;">
                    <div class="ps-3">
                        <h6 class="fw-bold mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
                <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
            </div>
            <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet.
                    Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg"
                        style="width: 45px; height: 45px;">
                    <div class="ps-3">
                        <h6 class="fw-bold mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
                <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
            </div>
            <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet.
                    Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg"
                        style="width: 45px; height: 45px;">
                    <div class="ps-3">
                        <h6 class="fw-bold mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
                <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Newsletter Start -->
<div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="row justify-content-center">
        <div class="col-lg-10 border rounded p-1">
            <div class="border rounded text-center p-1">
                <div class="bg-white rounded text-center p-5">
                    <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                        <button type="button"
                            class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
@include('footer.php')


?>