<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/analytic-html/index_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Oct 2023 06:29:36 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Analytic</title>
    <link rel="icon" href="img/mini_logo.png" type="image/png">
    <link rel="stylesheet" href="{{asset('css/bootstrap1.min.css') }}" />
    <link rel="stylesheet" href="{{asset('vendors/themefy_icon/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{asset('vendors/niceselect/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{asset('vendors/owl_carousel/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{asset('vendors/gijgo/gijgo.min.css') }}" />
    <link rel="stylesheet" href="{{asset('vendors/font_awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{asset('vendors/tagsinput/tagsinput.css') }}" />
    <link rel="stylesheet" href="{{asset('vendors/datepicker/date-picker.css') }}" />
    <link rel="stylesheet" href="{{asset('vendors/vectormap-home/vectormap-2.0.2.css') }}" />
    <link rel="stylesheet" href="{{asset('vendors/scroll/scrollable.cssv') }}" />
    <link rel="stylesheet" href="{{asset('vendors/datatable/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{asset('vendors/datatable/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{asset('vendors/datatable/css/buttons.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{asset('vendors/text_editor/summernote-bs4.css') }}" />
    <link rel="stylesheet" href="{{asset('vendors/morris/morris.css') }}">
    <link rel="stylesheet" href="{{asset('vendors/material_icon/material-icons.css') }}" />
    <link rel="stylesheet" href="{{asset('css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{asset('css/style1.css') }}" />
    <link rel="stylesheet" href="{{asset('css/colors/default.css" id="colorSkinCSS') }}">
</head>

<body class="crm_body_bg">


    @include('admin.components.sideBar')

    <section class="main_content dashboard_part large_header_bg">
    @include('admin.components.topBar')

        <div class="main_content_iner overly_inner ">
            <div class="container-fluid p-0 ">

                <div class="row">
                    <div class="col-12">
                        <div class="page_title_box d-flex align-items-center justify-content-between">
                            <div class="page_title_left">
                                <h3 class="f_s_30 f_w_700 dark_text">Product Details</h3>
                                <ol class="breadcrumb page_bradcam mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Product Details</li>
                                </ol>
                            </div>
                            <a href="#" class="white_btn3">Create Report</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="white_card position-relative mb_20">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 align-self-center"><img src="img/products/01.png" alt class="mx-auto d-block" height="300" /></div>

                                    <div class="col-lg-6 align-self-center">
                                        @foreach($products as $product)
                                        <div class="single-pro-detail">
                                            <form action="/api/admin/product_alter/{{$product->id}}" method="post">
                                                <!-- <p class="mb-1">Dastyle</p> -->
                                                <!-- <div class="custom-border mb-3"></div> -->
                                                <h6 class="text-muted font_s_13 mt-2 mb-1">Name</h6>
                                                <input name="name" value="{{$product->name}}">
                                                <!-- <h3 class="pro-title">{{$product->name}}</h3>
                                                <p class="text-muted mb-0">Morden and good look model 2020</p>
                                                <ul class="list-inline mb-2 product-review">
                                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="fas fa-star-half text-warning"></i></li>
                                                    <li class="list-inline-item">4.5 (9830 reviews)</li>
                                                </ul> -->
                                                <h6 class="text-muted font_s_13 mt-2 mb-1">Price</h6>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                        <!-- <span class="input-group-text">0.00</span> -->
                                                    </div>
                                                    <input name="price" value="{{$product->price}}" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                </div>



                                                <h6 class="text-muted font_s_13 mt-2 mb-1">Image</h6>
                                                <input name="image" value="{{$product->picture}}" style="width: 100%;">
                                                <h6 class="text-muted font_s_13 mt-2 mb-1">Category</h6>
                                                <select name="id_category" class="form-select" aria-label="Default select example">
                                                    <option selected>Category</option>
                                                    <option value="2" @if($product->id_category == 2) selected @endif>Chair</option>
                                                    <option value="1" @if($product->id_category == 1) selected @endif>Table</option>
                                                    <!-- <option value="3">Three</option> -->
                                                </select>
                                                <h6 class="text-muted font_s_13 mt-2 mb-1">Description</h6>
                                                <input name="description" value="{{$product->description}}" style="width: 100%; height: 150px;"></input>


                                                <!-- <h6 class="text-muted font_s_13 d-inline-block align-middle me-2">Color :</h6>
                                                <div class="radio2 radio-info2 form-check-inline ms-2">
                                                    <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked />
                                                    <label class="form-label" for="inlineRadio1"></label>
                                                </div>
                                                <div class="radio2 radio-dark2 form-check-inline">
                                                    <input type="radio" id="inlineRadio2" value="option2" name="radioInline" />
                                                    <label class="form-label" for="inlineRadio2"></label>
                                                </div>
                                                <div class="quantity mt-3">
                                                    <input class="form-control form-control-sm" type="number" min="0" value="0" id="example-number-input" />
                                                    <a href class="btn theme_bg_6 text-white px-4 d-inline-block "><i class="fa fa-cart-plus me-2"></i>Add to Cart</a>
                                                </div> -->
                                                <button type="submit" class="btn btn-primary mb-3">Apply</button>
                                            </form>
                                        </div>
                                        @endforeach
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white_card position-relative mb_20">
                            <div class="card-body">
                                <h5 class="mt-0">Related Products</h5>
                                <p class="text-muted mb-3 font_s_14">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="white_card position-relative mb_20 ">
                            <div class="card-body">
                                <div class="ribbon1 rib1-primary"><span class="text-white text-center rib1-primary">50% off</span></div>
                                <img src="img/products/img-5.png" alt class="d-block mx-auto my-4" height="150">
                                <div class="row my-4">
                                    <div class="col"><span class="badge_btn_3  mb-1">Life Style</span> <a href="#" class="f_w_400 color_text_3 f_s_14 d-block">Unique Blue Bag</a></div>
                                    <div class="col-auto">
                                        <h4 class="text-dark mt-0">$49.00 <small class="text-muted font_s_14"><del>$99.00</del></small></h4>
                                        <ul class="list-inline mb-0 product-review align-self-center">
                                            <li class="list-inline-item"><i class="fas fa-star text-warning font-16"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning font-16 ms-n2"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning font-16 ms-n2"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning font-16 ms-n2"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star-half text-warning font-16 ms-n2"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button class="btn_2">Add To Cart</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="white_card position-relative mb_20 ">
                            <div class="card-body">
                                <div class="ribbon1 rib1-primary"><span class="text-white text-center rib1-primary">50% off</span></div>
                                <img src="img/products/img-2.png" alt class="d-block mx-auto my-4" height="150">
                                <div class="row my-4">
                                    <div class="col"><span class="badge_btn_3  mb-1">Life Style</span> <a href="#" class="f_w_400 color_text_3 f_s_14 d-block">Unique Blue Bag</a></div>
                                    <div class="col-auto">
                                        <h4 class="text-dark mt-0">$49.00 <small class="text-muted font_s_14"><del>$99.00</del></small></h4>
                                        <ul class="list-inline mb-0 product-review align-self-center">
                                            <li class="list-inline-item"><i class="fas fa-star text-warning font-16"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning font-16 ms-n2"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning font-16 ms-n2"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning font-16 ms-n2"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star-half text-warning font-16 ms-n2"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button class="btn_2">Add To Cart</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="white_card position-relative mb_20 ">
                            <div class="card-body">
                                <div class="ribbon1 rib1-primary"><span class="text-white text-center rib1-primary">50% off</span></div>
                                <img src="img/products/02.png" alt class="d-block mx-auto my-4" height="150">
                                <div class="row my-4">
                                    <div class="col"><span class="badge_btn_3  mb-1">Life Style</span> <a href="#" class="f_w_400 color_text_3 f_s_14 d-block">Unique Blue Bag</a></div>
                                    <div class="col-auto">
                                        <h4 class="text-dark mt-0">$49.00 <small class="text-muted font_s_14"><del>$99.00</del></small></h4>
                                        <ul class="list-inline mb-0 product-review align-self-center">
                                            <li class="list-inline-item"><i class="fas fa-star text-warning font-16"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning font-16 ms-n2"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning font-16 ms-n2"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning font-16 ms-n2"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star-half text-warning font-16 ms-n2"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button class="btn_2">Add To Cart</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="white_card position-relative mb_20 ">
                            <div class="card-body">
                                <div class="ribbon1 rib1-primary"><span class="text-white text-center rib1-primary">50% off</span></div>
                                <img src="img/products/img-1.png" alt class="d-block mx-auto my-4" height="150">
                                <div class="row my-4">
                                    <div class="col"><span class="badge_btn_3  mb-1">Life Style</span> <a href="#" class="f_w_400 color_text_3 f_s_14 d-block">Unique Blue Bag</a></div>
                                    <div class="col-auto">
                                        <h4 class="text-dark mt-0">$49.00 <small class="text-muted font_s_14"><del>$99.00</del></small></h4>
                                        <ul class="list-inline mb-0 product-review align-self-center">
                                            <li class="list-inline-item"><i class="fas fa-star text-warning font-16"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning font-16 ms-n2"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning font-16 ms-n2"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star text-warning font-16 ms-n2"></i></li>
                                            <li class="list-inline-item"><i class="fas fa-star-half text-warning font-16 ms-n2"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button class="btn_2">Add To Cart</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2020 © Influence - Designed by <a href="#"> <i class="ti-heart"></i> </a><a href="#">DashboardPack</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="CHAT_MESSAGE_POPUPBOX">
        <div class="CHAT_POPUP_HEADER">
            <div class="MSEESAGE_CHATBOX_CLOSE">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.09939 5.98831L11.772 10.661C12.076 10.965 12.076 11.4564 11.772 11.7603C11.468 12.0643 10.9766 12.0643 10.6726 11.7603L5.99994 7.08762L1.32737 11.7603C1.02329 12.0643 0.532002 12.0643 0.228062 11.7603C-0.0760207 11.4564 -0.0760207 10.965 0.228062 10.661L4.90063 5.98831L0.228062 1.3156C-0.0760207 1.01166 -0.0760207 0.520226 0.228062 0.216286C0.379534 0.0646715 0.578697 -0.0114918 0.777717 -0.0114918C0.976738 -0.0114918 1.17576 0.0646715 1.32737 0.216286L5.99994 4.889L10.6726 0.216286C10.8243 0.0646715 11.0233 -0.0114918 11.2223 -0.0114918C11.4213 -0.0114918 11.6203 0.0646715 11.772 0.216286C12.076 0.520226 12.076 1.01166 11.772 1.3156L7.09939 5.98831Z" fill="white" />
                </svg>
            </div>
            <h3>Chat with us</h3>
            <div class="Chat_Listed_member">
                <ul>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img src="img/staf/1.png" alt>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img src="img/staf/2.png" alt>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img src="img/staf/3.png" alt>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img src="img/staf/4.png" alt>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <img src="img/staf/5.png" alt>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="member_thumb">
                                <div class="more_member_count">
                                    <span>90+</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="CHAT_POPUP_BODY">
            <p class="mesaged_send_date">
                Sunday, 12 January
            </p>
            <div class="CHATING_SENDER">
                <div class="SMS_thumb">
                    <img src="img/staf/1.png" alt>
                </div>
                <div class="SEND_SMS_VIEW">
                    <P>Hi! Welcome .
                        How can I help you?</P>
                </div>
            </div>
            <div class="CHATING_SENDER CHATING_RECEIVEr">
                <div class="SEND_SMS_VIEW">
                    <P>Hello</P>
                </div>
                <div class="SMS_thumb">
                    <img src="img/staf/1.png" alt>
                </div>
            </div>
        </div>
        <div class="CHAT_POPUP_BOTTOM">
            <div class="chat_input_box d-flex align-items-center">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Write your message" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn " type="button">

                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.7821 3.21895C14.4908 -1.07281 7.50882 -1.07281 3.2183 3.21792C-1.07304 7.50864 -1.07263 14.4908 3.21872 18.7824C7.50882 23.0729 14.4908 23.0729 18.7817 18.7815C23.0726 14.4908 23.0724 7.50906 18.7821 3.21895ZM17.5813 17.5815C13.9525 21.2103 8.04773 21.2108 4.41871 17.5819C0.78907 13.9525 0.789485 8.04714 4.41871 4.41832C8.04752 0.789719 13.9521 0.789304 17.5817 4.41874C21.2105 8.04755 21.2101 13.9529 17.5813 17.5815ZM6.89503 8.02162C6.89503 7.31138 7.47107 6.73534 8.18131 6.73534C8.89135 6.73534 9.46739 7.31117 9.46739 8.02162C9.46739 8.73228 8.89135 9.30811 8.18131 9.30811C7.47107 9.30811 6.89503 8.73228 6.89503 8.02162ZM12.7274 8.02162C12.7274 7.31138 13.3038 6.73534 14.0141 6.73534C14.7241 6.73534 15.3002 7.31117 15.3002 8.02162C15.3002 8.73228 14.7243 9.30811 14.0141 9.30811C13.3038 9.30811 12.7274 8.73228 12.7274 8.02162ZM15.7683 13.2898C14.9712 15.1332 13.1043 16.3243 11.0126 16.3243C8.8758 16.3243 6.99792 15.1272 6.22834 13.2744C6.09642 12.9573 6.24681 12.593 6.56438 12.4611C6.64238 12.4289 6.72328 12.4136 6.80293 12.4136C7.04687 12.4136 7.27836 12.5577 7.37772 12.7973C7.95376 14.1842 9.38048 15.0799 11.0126 15.0799C12.6077 15.0799 14.0261 14.1836 14.626 12.7959C14.7625 12.4804 15.1288 12.335 15.4441 12.4717C15.7594 12.6084 15.9048 12.9745 15.7683 13.2898Z" fill="#707DB7" />
                            </svg>

                        </button>
                        <button class="btn" type="button">

                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 0.289062C4.92455 0.289062 0 5.08402 0 10.9996C0 16.9152 4.92455 21.7101 11 21.7101C17.0755 21.7101 22 16.9145 22 10.9996C22 5.08472 17.0755 0.289062 11 0.289062ZM11 20.3713C5.68423 20.3713 1.375 16.1755 1.375 10.9996C1.375 5.82371 5.68423 1.62788 11 1.62788C16.3158 1.62788 20.625 5.82371 20.625 10.9996C20.625 16.1755 16.3158 20.3713 11 20.3713ZM15.125 10.3302H11.6875V6.98314C11.6875 6.61363 11.3795 6.31373 11 6.31373C10.6205 6.31373 10.3125 6.61363 10.3125 6.98314V10.3302H6.875C6.4955 10.3302 6.1875 10.6301 6.1875 10.9996C6.1875 11.3691 6.4955 11.669 6.875 11.669H10.3125V15.016C10.3125 15.3855 10.6205 15.6854 11 15.6854C11.3795 15.6854 11.6875 15.3855 11.6875 15.016V11.669H15.125C15.5045 11.669 15.8125 11.3691 15.8125 10.9996C15.8125 10.6301 15.5045 10.3302 15.125 10.3302Z" fill="#707DB7" />
                            </svg>

                            <input type="file">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>

    <script src="{{asset('js/jquery1-3.4.1.min.js') }}"></script>
    <script src="{{asset('js/popper1.min.js') }}"></script>
    <script src="{{asset('js/bootstrap1.min.js') }}"></script>
    <script src="{{asset('js/metisMenu.js') }}"></script>
    <script src="{{asset('vendors/count_up/jquery.waypoints.min.js') }}"></script>
    <script src="{{asset('vendors/chartlist/Chart.min.js') }}"></script>
    <script src="{{asset('vendors/count_up/jquery.counterup.min.js') }}"></script>
    <script src="{{asset('vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{asset('vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{asset('vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset('vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{asset('vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{asset('vendors/datatable/js/buttons.flash.min.js') }}"></script>
    <script src="{{asset('vendors/datatable/js/jszip.min.js') }}"></script>
    <script src="{{asset('vendors/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{asset('vendors/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{asset('vendors/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{asset('vendors/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{asset('vendors/datepicker/datepicker.js') }}"></script>
    <script src="{{asset('vendors/datepicker/datepicker.en.js') }}"></script>
    <script src="{{asset('vendors/datepicker/datepicker.custom.js') }}"></script>
    <script src="{{asset('js/chart.min.js') }}"></script>
    <script src="{{asset('vendors/chartjs/roundedBar.min.js') }}"></script>
    <script src="{{asset('vendors/progressbar/jquery.barfiller.js') }}"></script>
    <script src="{{asset('vendors/tagsinput/tagsinput.js') }}"></script>
    <script src="{{asset('vendors/text_editor/summernote-bs4.js') }}"></script>
    <script src="{{asset('vendors/am_chart/amcharts.js') }}"></script>
    <script src="{{asset('vendors/scroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{asset('vendors/scroll/scrollable-custom.js') }}"></script>
    <script src="{{asset('vendors/vectormap-home/vectormap-2.0.2.min.js') }}"></script>
    <script src="{{asset('vendors/vectormap-home/vectormap-world-mill-en.js') }}"></script>
    <script src="{{asset('vendors/apex_chart/apex-chart2.js') }}"></script>
    <script src="{{asset('vendors/apex_chart/apex_dashboard.js') }}"></script>
    <script src="{{asset('vendors/echart/echarts.min.js') }}"></script>
    <script src="{{asset('vendors/chart_am/core.js') }}"></script>
    <script src="{{asset('vendors/chart_am/charts.js') }}"></script>
    <script src="{{asset('vendors/chart_am/animated.js') }}"></script>
    <script src="{{asset('vendors/chart_am/kelly.js') }}"></script>
    <script src="{{asset('vendors/chart_am/chart-custom.js') }}"></script>
    <script src="{{asset('js/dashboard_init.js') }}"></script>
    <script src="{{asset('js/custom.js') }}"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/analytic-html/index_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Oct 2023 06:29:36 GMT -->

</html>