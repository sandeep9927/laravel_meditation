<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <style type="text/css">
        .btn-white, .sub_heading, .text_default, .btn-outline-default {
            color: #F32B56 !important;
        }
        .sub_heading {
            color: #F32B56 !important;
            padding-bottom: 10px;
            display: block;
            text-transform: capitalize;
        }
        .social_icons, .contact_detail {
    font-size: 0;
}
.contact_detail > li,
.header_list > li {
    display: inline-block;
    padding: 2px 15px 2px 0;
}
.social_icons li {
    display: inline-block;
    padding: 5px 5px 5px 0;
}
.social_icons li a {
    font-size: 16px;
    height: 35px;
    width: 35px;
    line-height: 36px;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
}
.social_icons.social_small li a {
    height: 25px;
    width: 25px;
    line-height: 26px;
    font-size: 16px;
}
.social_white .social_icons li a, .social_white.social_icons li a {
    color: #fff;
    border-color: #fff;
}
.social_white .social_icons li a:hover, .social_white.social_icons li a:hover {
    color: #F32B56;
}
.border_social .social_icons li a:hover, .border_social.social_icons li a:hover {
    background-color: #F32B56;
    border-color: #F32B56;
    color: #fff;
}
.contact_info > li > i {
    font-size: 18px;
    vertical-align: middle;
    max-width: 30px;
    width: 100%;
    text-align: center;
    margin-right: 5px;
}
.contact_info li:first-child {
    margin-top: 0;
}
.contact_info > li {
    margin-top: 10px;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
}
.contact_info li span {
    margin-right: 10px;
    color: #F32B56;
    max-width: 18px;
    text-align: center;
    width: 100%;
}
.contact_info_style1 li span {
    background-color: transparent;
    box-shadow: none;
    margin-right: 5px;
    padding-left: 0;
}
.contact_info i + *,
.contact_info span + * {
    font-size: 14px;
    color: #636363;
    margin: 0;
}
.contact_info.contact_info_style2 li span {
    font-size: 18px;
    background-color: #F32B56;
    box-shadow: none;
    border-radius: 100%;
    max-width: 40px;
    height: 40px;
    text-align: center;
    line-height: 40px;
    color: #fff;
    position: relative;
    margin: 0px 15px 0px 0px;
    width: 100%;
}
.icon_form .form-group .form-input span {
    position: absolute;
    left: 26px;
    top: 10px;
    pointer-events: none;
    z-index: 9;
}
.icon_form .form-control {
    padding-left: 35px;
}
.form-control {
    height: 45px;
    padding: 10px 15px;
    font-size: 14px;
}
.form-control, .form-control:focus, .custom-file-input:focus ~ .custom-file-label {
    color: #666666;
    box-shadow: none;
}
.btn {
    border-width: 2px;
    cursor: pointer;
    padding: 10px 25px;
    text-transform: uppercase;
    font-weight: 500;
    transition: all 0.5s ease-in-out;
    position: relative;
    overflow: hidden;
    z-index: 1;
}
.btn-default {
    background-color: #F32B56;
    border-color: #F32B56;
    color: #ffffff !important;
    padding: 10px 25px;
}
.btn-default:hover, .btn-default.focus, .btn-default:focus, .owl-theme .owl-nav [class*="owl-"]:hover {
    background-color: #D30B36;
}
textarea.form-control {
    height: auto;
}
    </style>
</head>
<body>
<!-- START HEADER -->
<!-- END HEADER --> 
    <!-- START SECTION BREADCRUMB -->
    <section class="breadcrumb_section page-title-light background_bg overlay_bg_70" data-img-src="media/img/site-img/buddha.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                    <div class="page-title">
                        <h1>Contact Us</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                      </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BREADCRUMB -->
    <!-- START SECTION CONTACT -->
    <section>
      <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                  <div class="heading_s2">
                      <span class="sub_heading">Contact Us</span>
                      <h3>Get In touch</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                    <ul class="contact_info contact_info_style2 list_none" style="padding-left: 0;">
                        <li>
                            <span ><i class="fas fa-mobile"></i></span>
                            <p>+123 456 7890</p>
                        </li>
                        <li>
                            <span ><i class="far fa-envelope-open"></i> </span>
                            <a href="mailto:info@yourmail.com">info@yourmail.com</a>
                        </li>
                        <li>
                            <span ><i class="fas fa-map-marker-alt"></i></span>
                            <address>C7/5 Yamuna Vihar Delhi 110053 , India</address>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 col-md-6 mt-4 mt-lg-0 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                  <div class="field_form icon_form">
                        <form action="/contact/send" method="post" name="enq">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6">
                                  <div class="form-input">
                                        <span>
                                           <i class="fas fa-user"></i>
                                        </span>
                                        <input required="required" placeholder="Enter Name *" id="first-name" class="form-control" name="name" type="text">
                                    </div>
                                 </div>
                                <div class="form-group col-lg-6">
                                  <div class="form-input">
                                        <span>
                                           <i class="far fa-envelope-open"></i>
                                        </span>
                                      <input required="required" placeholder="Enter Email *" id="email" class="form-control" name="email" type="email">
                                        @error('email')
                                            <div class="text-red-500 text-xs">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                  <div class="form-input">
                                        <span>
                                            <i class="fas fa-folder"></i>
                                        </span>
                                      <input required="required" placeholder="Enter Subject*" id="subject" class="form-control" name="subject" type="text">
                                    </div>
                                </div>
                                <div class="form-group col-lg-12">
                                  <div class="form-input">
                                        <span>
                                            <i class="fas fa-comments"></i>
                                        </span>
                                      <textarea required="required" placeholder="Message *" id="description" class="form-control" name="message" rows="5"></textarea> 
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" title="Submit Your Message!" class="btn btn-default" id="submitButton" name="submit" value="Submit">Submit</button>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <div id="alert-msg" class="alert-msg text-center"></div>
                                </div>
                            </div>
                        </form>   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION CONTACT -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>