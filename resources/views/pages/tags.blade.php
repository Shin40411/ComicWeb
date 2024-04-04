@extends('../layout')

@section('content')
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;); padding: 10px;" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ </a></li>
    <li class="breadcrumb-item active" aria-current="page">Tìm kiếm</li>
  </ol>
</nav>
<div class="container">
  <div class="row">
  <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
    <div class="row">
      <div class="searching">
        <h3>{{$title}} {{$tag}}</h3>
      </div>
            @php
                 $count = count($truyen);
            @endphp
            @if($count==0)
            <div class="col-md-12 col-12">
                <div class="card-body">
                    <p>Không tìm thấy kết quả...</p>
                    <img src="{{asset('public/uploads/truyen/small-chick-holding-opps-sign-260nw-1510548410.webp')}}">
                </div>
            </div>
            @else
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
           <i class="fas fa-eye"> {{$t -> luotxem}}</i>
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
    @endif
    </div>
    <div class="pagination-outter pages">
    {{$truyen->links('pagination::bootstrap-4')}}
    </div>
    <div class="fb-comments" data-href="{{\URL::current()}}" data-width="100%" data-numposts="10"></div>
    </div>

      <div class="col-lg-4 col-md-4 col-md-9">
      @include('..sidebar.sidebardanhmuc')
      </div>
  </div>
</div>
@endsection



