@extends('layout')

@section('content')
<section>
        <div class="container-fluid" style="padding-left: 0; padding-right: 0;">
            <div class="banner-img">
                  <img src="../images/morning-meditation.jpg" alt="Snow" style="width:100%;">
                  <div id="overlay"></div>
            </div>
            <div class="centered text-banner">
                <div class="slider-title">
                    <h1>Meditation World</h1>
                    <h2 class="slider-h2">Personalised Meditation Experience</h2>
                </div>
                <div class="btn-baner mt-2" style="margin-left: 100px;">
                    <a href="#" class="btn btn-primary" style="padding:10px 20px; border-radius: 5px; border:none; ">
                        <h2><p style="margin-bottom: 0;">LEARN</p></h2>
                        <span>Articles, Blogs And Interviews</span>
                    </a>
                    <a href="#" class="btn btn-primary" style="padding:10px 20px; border-radius: 5px; border:none; ">
                        <h2><p style="margin-bottom: 0;">TECHNIQUES</p></h2>
                        <span>Meditations For Your Needs</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
