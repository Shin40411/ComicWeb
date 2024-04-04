<ol class="breadcrumb">
        </ol>
        <div class="container">
        <div class="row">
        <h4 class="title_text">Truyện đề cử <i class="fa fa-angle-right"></i></h4>
        <div class="carousel-wrap">
        <div class="owl-carousel owl-theme">
            @foreach($slide_truyen as $slide)
            <div class="item">
                <div class="image">
                <a href="{{url('xem-truyen/'.$slide->slug_truyen)}}"><img src="{{asset('public/uploads/truyen/'.$slide->hinhanh)}}"></a>
                    <div class="slide-caption">
                        <h6><a href="{{url('xem-truyen/'.$slide->slug_truyen)}}">{{$slide->tentruyen}}</a></h6>
                        @foreach($slide->chapter->reverse()->take(1)->where('kichhoat',0) as $chap)
                        <a href="{{url('xem-chapter/'.$slide->slug_truyen.'/'.$chap->slug_chapter)}}">{{$chap->tuade}}</a>
                            <span class="time">
                            <i class="fa fa-clock"></i>
                            {{$chap->created_at->diffForHumans()}}
                            </span>
                        @endforeach
                    </div>
                </div>
             </div>     
             @endforeach
            </div>
        </div>
    </div>
</div>  