@extends('../layout')

@section('content')
  <nav style="padding: 10px;" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ </a></li>
    <li class="breadcrumb-item"><a href="#">Thể loại</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{$tieudedanhmuc}}</li>
  </ol>
</nav>
<div class="container">
  <div class="row">

 

  <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
    <div class="row">
    <h1 class="text-center">
    Truyện thể loại <strong>{{$tieudedanhmuc}}</strong>
    </h1>
      <div class="Description">
        <div class="info">
          {{$motadanhmuc}}
        </div>
      </div>
    </div>

    <div class="text-center mrt">
    <button type="button" class="btn btn-info" onclick="hideSearchAdvance()" id="myBtn">
    Ẩn khung tìm kiếm
</button>
</div>
<div id="dots"></div>
<div class="advance_search" id="more">
<div class="form-group clearfix">

        <form>
            @csrf
            <div class="row">
    <label class="col-sm-2 control-label">Thể loại</label>
    <div class="col-sm-10">
            <select name="sort" id="sort" class="form-select select-types" aria-label="Default select example">
                @foreach($danhmuc as $key => $muc)
                <option value="{{url('danh-muc/'.$muc->slug_danhmuc)}}">{{$muc->tieudedanhmuc}}</option>
                @endforeach
            </select>
        </div>
            <!-- @php 
                $category_id = [];
                $category_arr = [];

                if(isset($_GET['sort_by_category']))
                {
                    $category_id = $_GET['sort_by_category'];
                } else {
                    $category_id = $danhmuc_id->id_danhmuc .",";
                }
                $category_arr = explode(",", $category_id);
            @endphp  -->
            <!-- @foreach($danhmuc as $key => $muc)
            <div class="col-md-3 col-sm-4 col-xs-6">
            <div class="form-check form-check-inline">
            <input class="form-check-input danhmuc-filter" type="checkbox"
            {{ in_array($muc->id_danhmuc, $category_arr) ? 'checked' : '' }} value="{{$muc->id_danhmuc}}" name="danhmuc-filter" data-filters="danhmuc">
            <label class="form-check-label">
            {{$muc->tieudedanhmuc}}
            </label>
            </div>
            </div>
            @endforeach -->
            </div>  
        </form>     
    </div>
    <div class="form-group clearfix sort_by">

            <!-- <div class="row">
            <div class="col-sm-5 control-label">
                <label for="status">Tình trạng</label>
            </div>
            <div class="col-sm-9">
            <select name="" class="form-select" aria-label="Default select example">
                <option value="0">Đang tiến hành</option>
                <option value="1">Đã hết</option>
            </select>
            </div>
            </div> -->
            <div class="row comic_filter">
            <label class="col-sm-3 control-label">Sắp xếp theo</label>
            <div class="col-sm-9 act">
            <a class="arrange" href="{{Request::url()}}">Truyện mới</a>
            <a class="arrange" href="{{Request::url()}}?sort_by=truyen_hot">Truyện hot</a>
            <a class="arrange" href="{{Request::url()}}?sort_by=truyen_noi_bat">Truyện nổi bật</a>
            <a class="arrange" href="{{Request::url()}}?sort_by=top_all">Top all</a>
          </div>
            </div>
      
    </div>
    <div class="form-group clearfix sort_by">
      <div class="row comic_filter">
      <label class="col-sm-3 control-label">Tình trạng</label>
        <div class="col-sm-9 sta">
          <a class="current" href="{{Request::url()}}?status=tat_ca">Tất cả</a>
          <a class="current" href="{{Request::url()}}?status=hoan_thanh">Hoàn thành</a>
          <a class="current" href="{{Request::url()}}?status=dang_tien_hanh">Đang tiến hành</a>
        </div>
      </div>
    </div>
</div>

  <div class="row">
            @php
                 $count = count($truyendanhpage);
            @endphp
            @if($count==0)
            <div class="col-md-12 col-12">
                <div class="card-body">
                    <p>Truyện đang cập nhật...</p>
                    <img src="{{asset('public/uploads/truyen/small-chick-holding-opps-sign-260nw-1510548410.webp')}}">
                </div>
            </div>
            @else
  @foreach($truyendanhpage as $t)
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
    @endif
    </div>
    <div class="pagination-outter pages">
    {{$truyendanhpage->links('pagination::bootstrap-4')}}
    </div>
    <div class="fb-comments" data-href="{{\URL::current()}}" data-width="100%" data-numposts="10"></div>
  </div>
  <div class="col-lg-4 col-md-4 col-md-9">
        @include('..sidebar.sidebardanhmuc')
      </div>
  </div>
</div>
@endsection



