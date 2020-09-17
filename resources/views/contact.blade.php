@extends('layout')
@section('title','contact')
@section('content')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
<section style="margin-bottom: 300px;">
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
                        <form action="{{ url('/contact/send') }}" method="post" name="enq">
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

</section>
@endsection