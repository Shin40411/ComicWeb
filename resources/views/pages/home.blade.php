@extends('../layout')
@section('slide')
    @include('pages.slide')
@endsection
@section('content')
<!-- <div class="album py-5 bg-light"> -->
        <h3 style="padding-left: 11px;" class="title_text">Truyện mới cập nhật <i class="fa fa-angle-right"></i></h3>
<div class="container">
  <div class="row">
  <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
  <div class="row">

  @foreach($truyen as $t)
    <div class="col-md-3 col-6">
    <a href="{{url('xem-truyen/'.$t->slug_truyen)}}">
      <div class="image">
        <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$t->hinhanh)}}"  height="210">
          <div class="view clearfix">
            <span class="pull-left">
            <i class="fas fa-star"> 
            @php
              $countrate = count($t->rate);
            @endphp
              {{$countrate}}
            </i>
           <i class="fas fa-eye"> {{$t->luotxem}}</i>
           <i class="fa fa-comment">
           @php
              $counter = count($t->comments);
          @endphp
            {{$counter}}
          </i>
            </span>
          </div>
      </div>      
            <div class="card-body topic">
                    <h5 class="card-title cap">{{$t->tentruyen}}</h5>
                    </a>
                    <ul class="comic-item">
                   @foreach($t->chapter->reverse()->take(3)->where('kichhoat',0) as $chap)
                    <li class="chapter clearfix">
                    <a href="{{url('xem-chapter/'.$t->slug_truyen.'/'.$chap->slug_chapter)}}"> {{$chap->tuade}} </a>
                    <i class="time">{{ $chap->created_at->diffForHumans()}}</i>
                    </li>
                  @endforeach
                  </ul>
            </div>
        </div>
    @endforeach
    </div>
    <div class="pagination-outter pages">
    {{$truyen->links('pagination::bootstrap-4')}}
    </div>
    </div>
      <div class="col-lg-4 col-md-4 col-md-9">
      @include('..sidebar.sidebarcontent')
      </div>
  </div>
</div>
@endsection