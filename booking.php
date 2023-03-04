<?php
$activate = "booking";
@include('header.php')
?>
<body>
        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/ve-5.jpg);">
            <div class="container-fluid page-header-inner py-5">              
                <div class="container text-center pb-5">
                <!-- <h6 class="section-title text-center text-primary text-uppercase">Cùng Foxie Fly</h6> -->
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Booking</h1>
                <!-- <h6 class="section-title text-center text-primary text-uppercase">để có thể trãi nghiệm thêm nhiều ưu đãi nhé</h6> -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                            <li class="breadcrumb-item"><a href="service.php">PAGES</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        <!-- Booking Start -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-2">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="Ngày Đi" data-target="#date1" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" placeholder="Ngày Về" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                <select class="form-select" id="select1">
                                              <option value="0">Điểm Đi</option>
                                              <option value="1">Hà Nội</option>
                                              <option value="2">Hồ Chí Minh</option>
                                              <option value="3">Đà Nẵng</option>
                                              <option value="3">Quảng Ninh</option>
                                              <option value="3">Hải Phòng</option>
                                              <option value="3">Nghệ An</option>
                                              <option value="3">Huế</option>
                                              <option value="3">Khánh Hòa</option>
                                              <option value="3">Lâm Đồng</option>
                                              <option value="3">Bình Định</option>
                                              <option value="3">Cần Thơ</option>
                                              <option value="3">Kiên Giang</option>
                                              <option value="3">Đồng Nai</option>
                                            </select>
                                        
                                </div>
                                <div class="col-md-2">
                                <select class="form-select" id="select1">
                                              <option value="0">Điểm Đến</option>
                                              <option value="1">Hà Nội</option>
                                              <option value="2">Hồ Chí Minh</option>
                                              <option value="3">Đà Nẵng</option>
                                              <option value="3">Quảng Ninh</option>
                                              <option value="3">Hải Phòng</option>
                                              <option value="3">Nghệ An</option>
                                              <option value="3">Huế</option>
                                              <option value="3">Khánh Hòa</option>
                                              <option value="3">Lâm Đồng</option>
                                              <option value="3">Bình Định</option>
                                              <option value="3">Cần Thơ</option>
                                              <option value="3">Kiên Giang</option>
                                              <option value="3">Đồng Nai</option>
                                            </select>
                                            
                                </div>
                                <div class="col-md-2">
                                    <select class="form-select">
                                        <option selected>Loại Vé</option>
                                        <option value="1">Người Lớn >12 tuổi</option>
                                        <option value="2">Trẻ Em 2-11 tuổi</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-select">
                                        <option value="1">Khứ Hồi</option>
                                        <option value="2">Một chiều</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                           <button class="btn btn-primary w-100">Tìm Kiếm</button> 
                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->

        <!-- vé giá re-->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Khám phá thêm nhiều hành trình cùng Foxie Fly với mức giá vé hấp dẫn</h6>
                    <h1 class="mb-5">THAM KHẢO  <span class="text-primary text-uppercase">CÁC LOẠI VÉ</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/ve-1.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">789.000 VNĐ/Vé</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Đà Nẵng-Hà Nội</h5>
                                   <br>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                               
                                <p class="text-body mb-3">Giảm chỉ còn 789.000 VNĐ</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/ve-2.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">819.000 VNĐ/Vé</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Hồ Chí Minh-Đà Lạt</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    
                                </div>
                                <p class="text-body mb-3">Giảm chỉ còn 819.000 VNĐ</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/ve-3.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">939.000/Vé</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Hồ Chí Minh-Huế</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    
                                </div>
                                <p class="text-body mb-3">Giảm chỉ còn 939.000 VNĐ</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/ve-4.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Vé</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Hà Nội-Bangkok </h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                   
                                </div>
                                <p class="text-body mb-3">Giảm chỉ còn 100$</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/ve-5.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$200/Vé</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Hà Nội-Los Angeles</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                  
                                </div>
                                <p class="text-body mb-3">Giảm chỉ còn 200$</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/ve-6.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$150/Vé</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Hà Nội-Chicago</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                
                                </div>
                                <p class="text-body mb-3">Giảm chỉ còn 150$</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--loại vé giá rẻ-->

        <div class="container-xxl py-5">


        </div>


        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Đặt vé ngay</h6>
                    <h1 class="mb-5">Tại <span class="text-primary text-uppercase">Foxie Fly</span></h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/ve-1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/ve-2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/ve-3.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/ve-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" id="checkin" placeholder="Check In" data-target="#date3" data-toggle="datetimepicker" />
                                            <label for="checkin">Ngày Đi</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date4" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" id="checkout" placeholder="Check Out" data-target="#date4" data-toggle="datetimepicker" />
                                            <label for="checkout">Ngày Về</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <select class="form-select" id="select1">
                                              <option value="0">    </option>
                                              <option value="1">Hà Nội</option>
                                              <option value="2">Hồ Chí Minh</option>
                                              <option value="3">Đà Nẵng</option>
                                              <option value="3">Quảng Ninh</option>
                                              <option value="3">Hải Phòng</option>
                                              <option value="3">Nghệ An</option>
                                              <option value="3">Huế</option>
                                              <option value="3">Khánh Hòa</option>
                                              <option value="3">Lâm Đồng</option>
                                              <option value="3">Bình Định</option>
                                              <option value="3">Cần Thơ</option>
                                              <option value="3">Kiên Giang</option>
                                              <option value="3">Đồng Nai</option>
                                            </select>
                                            <label for="select1">Điểm Đi</label>
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <select class="form-select" id="select1">
                                              <option value="0">    </option>
                                              <option value="1">Hà Nội</option>
                                              <option value="2">Hồ Chí Minh</option>
                                              <option value="3">Đà Nẵng</option>
                                              <option value="3">Quảng Ninh</option>
                                              <option value="3">Hải Phòng</option>
                                              <option value="3">Nghệ An</option>
                                              <option value="3">Huế</option>
                                              <option value="3">Khánh Hòa</option>
                                              <option value="3">Lâm Đồng</option>
                                              <option value="3">Bình Định</option>
                                              <option value="3">Cần Thơ</option>
                                              <option value="3">Kiên Giang</option>
                                              <option value="3">Đồng Nai</option>
                                            </select>
                                            <label for="select1">Điểm Đến</label>
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <select class="form-select" id="select1">
                                              <option value="0">    </option>
                                              <option value="1">Một Chiều</option>
                                              <option value="2">Khứ Hồi</option>
                                            </select>
                                            <label for="select1">Loại Vé</label>
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <select class="form-select" id="select1">
                                              <option value="0">    </option>
                                              <option value="0"> 0</option>
                                              <option value="1"> 1</option>
                                              <option value="2"> 2</option>
                                              <option value="3"> 3</option>
                                              <option value="4"> 4</option>
                                              <option value="5"> 5</option>
                                              <option value="6"> 6</option>
                                              <option value="7"> 7</option>
                                              <option value="8"> 8</option>
                                              <option value="9"> 9</option>
                                              <option value="10"> 10</option>
                                              <option value="11"> 11</option>
                                              <option value="12"> 12</option>
                                              <option value="13"> 13</option>
                                              <option value="14"> 14</option>
                                              <option value="15"> 15</option>
                                              <option value="16"> 16</option>
                                              <option value="17"> 17</option>
                                              <option value="18"> 18</option>
                                              <option value="19"> 19</option>
                                              <option value="20"> 20</option>
                                            </select>
                                            <label for="select1">Người Lớn >12 tuổi</label>
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <select class="form-select" id="select2">
                                              <option value="0">    </option>
                                              <option value="0"> 0</option>
                                              <option value="1"> 1</option>
                                              <option value="2"> 2</option>
                                              <option value="3"> 3</option>
                                              <option value="4"> 4</option>
                                              <option value="5"> 5</option>
                                              <option value="6"> 6</option>
                                              <option value="7"> 7</option>
                                              <option value="8"> 8</option>
                                              <option value="9"> 9</option>
                                              <option value="10"> 10</option>
                                              <option value="11"> 11</option>
                                              <option value="12"> 12</option>
                                              <option value="13"> 13</option>
                                              <option value="14"> 14</option>
                                              <option value="15"> 15</option>
                                              <option value="16"> 16</option>
                                              <option value="17"> 17</option>
                                              <option value="18"> 18</option>
                                              <option value="19"> 19</option>
                                              <option value="20"> 20</option>
                                            </select>
                                            <label for="select2">Trẻ Em 2-11 tuổi
                                            </label>
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <select class="form-select" id="select2">
                                              <option value="0">    </option>
                                              <option value="0"> 0</option>
                                              <option value="1"> 1</option>
                                              <option value="2"> 2</option>
                                              <option value="3"> 3</option>
                                              <option value="4"> 4</option>
                                              <option value="5"> 5</option>
                                              <option value="6"> 6</option>
                                              <option value="7"> 7</option>
                                              <option value="8"> 8</option>
                                              <option value="9"> 9</option>
                                              <option value="10"> 10</option>
                                              <option value="11"> 11</option>
                                              <option value="12"> 12</option>
                                              <option value="13"> 13</option>
                                              <option value="14"> 14</option>
                                              <option value="15"> 15</option>
                                              <option value="16"> 16</option>
                                              <option value="17"> 17</option>
                                              <option value="18"> 18</option>
                                              <option value="19"> 19</option>
                                              <option value="20"> 20</option>
                                            </select>
                                            <label for="select2">Em Bé <24 tháng
                                            </label>
                                          </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <select class="form-select" id="select3">
                                              <option value="1">Room 1</option>
                                              <option value="2">Room 2</option>
                                              <option value="3">Room 3</option>
                                            </select>
                                            <label for="select3">Chọn Chỗ Ngồi</label>
                                          </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                            <label for="message">Ghi Chú</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                    <a class="btn-submit btn btn-primary w-100 py-3" type="submit" onclick="event.preventDefault()">Book Now</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->


        <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                               <div>
                             
                               </div> <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Start -->

        <script>
            const submit = document.querySelector('.btn-submit')
            const ipName = document.querySelector('#name')
            const ipEmail = document.querySelector('#email')
            let temp = true
            submit.onclick = function(event) {
                 if(ipName.value.length ==0) temp = false
                 if(ipEmail.value.length == 0) temp = false
                 if(temp === true) alert('Đặt vé thành công')
                 else alert('Bạn vui lòng nhâp đầy đủ thông tin !')
            }

        </script>
        <?php
@include('footer.php')


?>