@extends('../layout')

@section('content')
<nav style="padding: 10px;" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ </a></li>
    <li class="breadcrumb-item active" aria-current="page">Lịch sử đọc truyện</li>
  </ol>
</nav>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
      <div class="row" id="historyview">
      <div class="searching">
          <h3>
          Lịch sử đọc truyện <i class="fa fa-angle-right"></i>
          </h3>
          <p>Lịch sử đọc truyện chỉ được lưu khi bạn xem chapter, truyện được hiển thị như ảnh dưới:</p>
          <img src="{{asset('public/images/Capture.PNG')}}">
        </div>
        
    </div>
    <div class="fb-comments" data-href="{{\URL::current()}}" data-width="100%" data-numposts="10"></div>
    </div>
      <div class="col-lg-4 col-md-4 col-md-9">
      @include('..sidebar.sidebardanhmuc')
      </div>
  </div>
</div>
@endsection



