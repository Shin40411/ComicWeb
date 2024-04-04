@extends('../layout')

@section('content')
<nav style="padding: 10px;" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ </a></li>
    <li class="breadcrumb-item active" aria-current="page">Theo dõi</li>
  </ol>
</nav>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
      <div class="row" id="following">
      <div class="searching">
          <h3>
            Truyện đang theo dõi <i class="fa fa-angle-right"></i>
          </h3>
          <p>Để theo dõi truyện, nhấn vào Theo dõi như hình bên dưới. Bạn có thể theo dõi tối đa 20 truyện.</p>
          <img src="{{asset('public/images/huong-dan-theo-doi-truyen.jpg')}}">
        </div>
        
    </div>
    <!-- <div class="fb-comments" data-href="{{\URL::current()}}" data-width="100%" data-numposts="10"></div> -->
    </div>
      <div class="col-lg-4 col-md-4 col-md-9">
      @include('..sidebar.sidebardanhmuc')
      </div>
  </div>
</div>
@endsection



