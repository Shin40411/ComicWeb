@extends('../layout')

@section('content')
<nav style="padding: 10px;" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ </a></li>
    <li class="breadcrumb-item"><a href="#">Thể loại </a></li>
    @foreach($truyen->thuocnhieudanhmuctruyen as $key => $breadcrumbdanhmuc)
    <li class="breadcrumb-item">
        <a href="{{url('danh-muc/'.$breadcrumbdanhmuc->slug_danhmuc)}}">{{$breadcrumbdanhmuc->tieudedanhmuc}}</a>
    </li>
    @endforeach
    <li class="breadcrumb-item active" aria-current="page"> {{$truyen->tentruyen}} </li>
  </ol>
</nav>
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
        <div class="row">
            <h1 class="title-detail" style="text-align:center;">{{$truyen->tentruyen}}</h1>
            <br>
            <p style="text-align:center;">[Cập nhật lúc: {{$truyen->created_at}} - {{ $truyen->created_at->diffForHumans()}}]</p>
           
   
            <div class="col-md-4 col-image">
            <img class="wishlist_img" src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}"  height="280">
            </div>

            <div class="col-lg-7 col-md-7">
                <ul class="infotruyen">
        
                    <input type="hidden" value="{{$truyen->tentruyen}}" class="wishlist_title">
                    <input type="hidden" value="{{$truyen->luotxem}}" class="wishlist_views">
                    @php
                        $counters = count($truyen->comments);
                    @endphp
                    <input type="hidden" value="{{$counters}}" class="wishlist_cmt">
                    @php
                    $countrate = count($truyen->rate);
                    @endphp
                    <input type="hidden" value="{{$countrate}}" class="wishlist_rate">

                    @foreach($chapter->reverse()->take(3) as $key => $chap)
                    <input type="hidden" data-url="{{\url('xem-chapter/'.$chap->truyen->slug_truyen.'/'.$chap->slug_chapter)}}" value="{{$chap->tuade}}" class="wishlist_chap">
                    <input type="hidden" value="{{$chap->created_at->diffForHumans()}}" class="wishlist_author">
                    @endforeach
                    @foreach($chapter->reverse()->take(1) as $key => $chaps)
                    <input type="hidden" data-url="{{\url('xem-chapter/'.$chaps->truyen->slug_truyen.'/'.$chaps->slug_chapter)}}" value="{{$chaps->tuade}}" class="wishlist_chapside">
                    @endforeach
                    <input type="hidden" value="{{\URL::current()}}" class="wishlist_url">
                    <input type="hidden" value="{{$truyen->id_truyen}}" class="wishlist_id">


                 @if(isset($truyen->tenkhac))
                    <li><i class="fa fa-user"> Tên khác:</i> {{$truyen->tenkhac}}</li>
                 @else
                    <li><i class="fa fa-user"> Tên khác:</i> đang cập nhật...</li>
                 @endif
                    <ol class="breadcrumb"></ol>
                    <li><i class="fa fa-plus"> Tác giả:</i> {{$truyen->tacgia}}</li>
                    <ol class="breadcrumb"></ol>
                    <li><i class="fa fa-eye"> Lượt xem:</i> 
                    @if($truyen -> luotxem == 0)
                    0
                    @else
                    {{$truyen -> luotxem}}
                    @endif
                    </li>
                    <ol class="breadcrumb"></ol>
                    <li><i class="fa fa-rss"> Tình trạng:</i> 
                    @if($truyen->tinh_trang == 0)
                    Đang tiến hành
                    @elseif($truyen->tinh_trang == 1)
                    Hoàn thành
                    @endif
                    </li>
                    <ol class="breadcrumb"></ol>
                    <li><i class="fa fa-angle-down"><a href="#danhsachchuong"> Xem danh sách chương</a></i></li>
                    <ol class="breadcrumb"></ol>
                    <li>
                    <i class="fa fa-tags">Thể loại: </i> 
                    @foreach($truyen->thuocnhieudanhmuctruyen as $thuocdanh)
                    <a href="{{url('danh-muc/'.$thuocdanh->slug_danhmuc)}}">
                        <span class="badge bg-warning text-dark">{{$thuocdanh->tieudedanhmuc}}</span>
                    </a>
                    @endforeach
                    </li>
                    <li>
                        <div class="rate" title="Average Rating">
                                <ul class="list-inline star" title="Rating">
                                    @for($count = 1; $count <= 5; $count++)
                                    @php 
                                        if($count <= $rating){
                                            $color = 'color:#ffcc00;';
                                        } else {
                                            $color = 'color:#ccc;';
                                        }
                                    @endphp
                                    <li title="Đánh giá truyện" id="{{$truyen->id_truyen}}-{{$count}}" data-index="{{$count}}" data-truyen_id="{{$truyen->id_truyen}}" data-rating="{{$rating}}" class="rating" style="cursor:pointer;{{$color}} font-size:25px;">
                                    &#9733;
                                    </li>
                                    @endfor
                                </ul>
                        <span>Xếp hạng <b>{!! number_format((float)($rating), 1) !!}</b> - <b>{{$rate}}</b> Lượt đánh giá.</span>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="btn btn-success btn-thich_truyen">
                        <i class="fa fa-heart" id="btn-design" style="font-size: 15px;"></i>
                        Theo dõi
                        </a> 
                    </li>


                    <ol class="breadcrumb"></ol>
                    @if($chapter_dau)
                    <li>
                        <a href="{{url('xem-chapter/'.$chapter_dau->truyen->slug_truyen.'/'.$chapter_dau->slug_chapter)}}" class="btn btn-primary">Đọc từ đầu</a> 
                        <a href="{{url('xem-chapter/'.$chapter_cuoi->truyen->slug_truyen.'/'.$chapter_cuoi->slug_chapter)}}" class="btn btn-warning">Đọc mới nhất</a>
                    </li>
                    @else
                    <li><a class="btn btn-primary">Truyện chưa được cập nhật</a></li> 
                    @endif
                </ul>
            </div>

    
            
        </div>
    <div class="col-md-12">
        <h3 class="list-title">
        Nội dung
        </h3>
            <p>
            {{$truyen->tomtat}}
            </p>
        </div>
        
        <div class="list-chapter">
            <h2 class="list-title clearfix" id="danhsachchuong">
                <i class="fa fa-list">
                </i>
                Danh sách chương
            </h2>
            <div class="row heading">
            <div class="col-xs-5 no-wrap">Số chương</div>
            <div class="col-xs-4 no-wrap text-center">Cập nhật</div>
            <div class="col-xs-3 no-wrap text-center">Xem</div>
            </div>
         <nav>
            <ul>
                @php
                    $mucluc = count($chapter);
                    @endphp
                @if($mucluc > 0)
                @foreach($chapter as $key => $chap)
                <li class="row">
                <div class="col-xs-5 chapter">
                <a href="{{url('xem-chapter/'.$chap->truyen->slug_truyen.'/'.$chap->slug_chapter)}}">{{$chap->tuade}}</a>
                </div>
                <div class="col-xs-4 text-center no-wrap small">{{$chap->created_at}}</div>
                <div class="col-xs-3 text-center small">{{$chap->luotxemchap}}</div>
                </li>
                @endforeach
                @else
                <li class="row">
                <div class="col-xs-5 chapter">
                    Truyện đang cập nhật...
                    </div>
                </li>
                @endif
            </ul>
            <a class="hidden view-more" href="javascript:void(0)" id="next">
                <i class="fa fa-plus">
                </i> Xem thêm</a>
            </nav>
        </div>
                <div class="fb-comments" data-href="{{\URL::current()}}" data-width="100%" data-numposts="10"></div>
    </div>
    <div class="col-lg-4 col-md-4 col-md-9">
    @include('..sidebar.sidebardanhmuc')
        </div>
    </div>
    <div class="clear" style="margin-top:5px;"></div>
</div>
@endsection