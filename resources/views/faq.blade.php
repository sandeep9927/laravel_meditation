@extends('layout')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.2.0/css/ionicons.min.css" integrity="sha256-F3Xeb7IIFr1QsWD113kV2JXaEbjhsfpgrKkwZFGIA4E=" crossorigin="anonymous" />
<section style="margin-bottom: 350px;">
<div class="container-fluid">
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 pa-0">
            <div class="container mt-sm-60 mt-30">
                <div class="hk-row">
                    <div class="col-xl-4">
                        <div class="card">
                            <h3 class="card-header">
                                            Category
                                        </h3>
                            <ul class="list-group list-group-flush">
                                @foreach($faqs as $faq)
                                <li class="list-group-item d-flex align-items-center">
                                    <a href="{{url("faq/$faq->id")}}">{{$faq->title}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card card-lg">
                            <h3 class="card-header border-bottom-0">Questions</h3>
                            <div class="accordion accordion-type-2 accordion-flush" id="accordion_2">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between activestate">
                                        @foreach($faqquestions as $faqquestion)
                                        <a role="button" data-toggle="collapse" href="#collapse_1i" aria-expanded="true">{{$faqquestion->title}}</a>
                                        @endforeach
                                    </div>
                                    <div id="collapse_1i" class="collapse show" data-parent="#accordion_2" role="tabpanel">
                                        @foreach($faqquestions as $faqquestion)
                                        <div class="card-body pa-15">{!!$faqquestion->description!!}</div>
                                        @endforeach
                                    </div>
                                </div>
                                
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->
</div>
</section>
@endsection