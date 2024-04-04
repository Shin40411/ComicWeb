@extends('../layout')

@section('content')
<nav style="padding: 10px;" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ </a></li>
    <li class="breadcrumb-item"><a href="#">Thể loại</a></li>
    @foreach($truyen_breadcrumb->thuocnhieudanhmuctruyen as $key => $breadcrumbdanhmuc)
    <li class="breadcrumb-item">
        <a href="{{url('danh-muc/'.$breadcrumbdanhmuc->slug_danhmuc)}}">{{$breadcrumbdanhmuc->tieudedanhmuc}}</a>
    </li>
    @endforeach
    <li class="breadcrumb-item"><a href="{{url('xem-truyen/'.$chapter->truyen->slug_truyen)}}"> {{$chapter->truyen->tentruyen}} </a></li>
    <li class="breadcrumb-item active" aria-current="page">{{$chapter->tuade}}</li>
  </ol>
</nav>
<div class="container">
    <div class="row">
        <div class="reading">

            <input type="hidden" id="comicview_id" value="{{$chapter->truyen->id_truyen}}">
            <input type="hidden" id="comicview_name{{$chapter->truyen->id_truyen}}" value="{{$chapter->truyen->tentruyen}}">
            <input type="hidden" id="comicview_url{{$chapter->truyen->id_truyen}}" value="{{url('xem-truyen/'.$chapter->truyen->slug_truyen)}}">
            <input type="hidden" id="comicview_img{{$chapter->truyen->id_truyen}}" value="{{asset('public/uploads/truyen/'.$chapter->truyen->hinhanh)}}">

            <div class="reading-detail box_doc">
            <div class="chapter-title">
            <h1 class="title-detail" style="text-align:center;">{{$chapter->truyen->tentruyen}} - {{$chapter->tuade}}</h1>
            <p style="text-align:center;">[Cập nhật lúc: {{$chapter->created_at}} - {{ $chapter->created_at->diffForHumans()}}]</p>
            </div>
            <style type="text/css">
                .isDisabled {
                    color: currentColor;
                    pointer-events: none;
                    opacity: 0.5;
                    text-decoration: none;
                }
            </style>
            <div class="alert alert-info mrb10 hidden-xs hidden-sm">
            <i class="fa fa-info-circle"></i> <em>Sử dụng mũi tên trái (←) hoặc phải (→) để chuyển chapter</em>
            </div>
            <div class="reading-control" id="chapter-ctrl">
                <a href="{{url('xem-chapter/'.$chapter->truyen->slug_truyen.'/'.$previous_chapter)}}" class="prev {{$chapter->id_chapter==$min_id->id_chapter ? 'isDisabled' : ''}}">
                    <i class="fa fa-chevron-left"></i>
                </a>
            <select class="form-select select-chapter" aria-label="Default select example">
            @foreach($all_chapter as $key => $chap)
            <option value="{{url('xem-chapter/'.$chap->truyen->slug_truyen.'/'.$chap->slug_chapter)}}">{{$chap->tuade}}</option>
            @endforeach
            </select>
                <a href="{{url('xem-chapter/'.$chapter->truyen->slug_truyen.'/'.$next_chapter)}}" class="next {{$chapter->id_chapter==$max_id->id_chapter ? 'isDisabled' : ''}}">
                    <i class="fa fa-chevron-right"></i>
                </a>
            </div>
            <div class="page-chapter">
            {!! $chapter->noidung !!}
            </div>
            <div class="reading-control">
                <a href="{{url('xem-chapter/'.$chapter->truyen->slug_truyen.'/'.$previous_chapter)}}" class="prev {{$chapter->id_chapter==$min_id->id_chapter ? 'isDisabled' : ''}}">
                    <i class="fa fa-chevron-left"></i>
                </a>
            <select class="form-select select-chapter" aria-label="Default select example">
            @foreach($all_chapter as $key => $chap)
            <option value="{{url('xem-chapter/'.$chap->truyen->slug_truyen.'/'.$chap->slug_chapter)}}">{{$chap->tuade}}</option>
            @endforeach
            </select>
            <a href="{{url('xem-chapter/'.$chapter->truyen->slug_truyen.'/'.$next_chapter)}}" class="next {{$chapter->id_chapter==$max_id->id_chapter ? 'isDisabled' : ''}}">
                    <i class="fa fa-chevron-right"></i>
                </a>
            </div>
            <hr>
            <nav style="padding: 10px;" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ </a></li>
                <li class="breadcrumb-item"><a href="#">Thể loại</a></li>
                @foreach($truyen_breadcrumb->thuocnhieudanhmuctruyen as $key => $breadcrumbdanhmuc)
                <li class="breadcrumb-item">
                    <a href="{{url('danh-muc/'.$breadcrumbdanhmuc->slug_danhmuc)}}">{{$breadcrumbdanhmuc->tieudedanhmuc}}</a>
                </li>
                @endforeach
                <li class="breadcrumb-item"><a href="{{url('xem-truyen/'.$chapter->truyen->slug_truyen)}}"> {{$chapter->truyen->tentruyen}} </a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$chapter->tuade}}</li>
            </ol>
            </nav>
            <!-- <div class="fb-comments" data-href="{{\URL::current()}}" data-width="100%" data-numposts="10"></div> -->
                </div>
              <!--/comment-section-->
                                <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <div class="card shadow-0 border" style="background-color: #f0f2f5;">
                    <div class="card-body p-4">
                    <?php
                    $customer_id = Session::get('customer_id');
                    $customer_name = Session::get('customer_name');
                    $customer_email = Session::get('customer_email');                
                    if($customer_id!=NULL){
                    ?>
                        <form action="" id="comment-form">
                        <div class="form-outline mb-4">
                        <div class="mrt5" style="color:red;font-size:12px;font-style:italic">Bình luận chapter</div>
                            <textarea class="form-control commented" id="exampleFormControlTextarea1" rows="3" oninvalid="this.setCustomValidity('Vui lòng nhập nội dung')" oninput="this.setCustomValidity('')" placeholder="Mời bạn thảo luận, vui lòng không spam,..." required></textarea>
                        </div>
                        <div class="form-group clearfix sort_by mb-4">
                            <div class="row comic_filter">
                                <div class="col-sm-5 infouser" style="display: flex;">
                                    <input type="email" class="form-control emails" value="{{$customer_email}}" oninvalid="this.setCustomValidity('Vui lòng nhập email')" oninput="this.setCustomValidity('')" placeholder="Email" required>
                                    <input type="text" class="form-control fullname" value="{{$customer_name}}" oninvalid="this.setCustomValidity('Vui lòng nhập tên')" oninput="this.setCustomValidity('')"  placeholder="Tên bạn" required>
                                    <button type="submit" class="btn btn-primary offset-md send-comment">Gửi</button>
                                </div>
                                <div id="notify"></div>
                            </div>
                        </div>
                        </form>
                        <?php
                        }else{
                        ?>
                              <form action="" id="comment-form">
                        <div class="form-outline mb-4">
                        <div class="mrt5" style="color:red;font-size:12px;font-style:italic">Bình luận chapter</div>
                            <textarea class="form-control commented" id="exampleFormControlTextarea1" rows="3" oninvalid="this.setCustomValidity('Vui lòng nhập nội dung')" oninput="this.setCustomValidity('')" placeholder="Mời bạn thảo luận, vui lòng không spam,..." required></textarea>
                        </div>
                        <div class="form-group clearfix sort_by mb-4">
                            <div class="row comic_filter">
                                <div class="col-sm-5 infouser" style="display: flex;">
                                    <input type="email" class="form-control emails" oninvalid="this.setCustomValidity('Vui lòng nhập email')" oninput="this.setCustomValidity('')" placeholder="Email" required>
                                    <input type="text" class="form-control fullname" oninvalid="this.setCustomValidity('Vui lòng nhập tên')" oninput="this.setCustomValidity('')"  placeholder="Tên bạn" required>
                                    <button type="submit" class="btn btn-primary offset-md unsend-comment">Gửi</button>
                                </div>
                                <div id="notify"></div>
                            </div>
                        </div>
                        </form>
                        <?php
                            }
                        ?>
                        <form>
                        @csrf
                        <input type="hidden" name="comment_chapter_id" class="comment_chapter_id" value="{{$chapter->id_chapter}}">
                        <input type="hidden" name="comment_truyen_id" class="comment_truyen_id" value="{{$chapter->truyen->id_truyen}}">

                        <div id="display_comment"></div>          

                        </form>
                        </div>
                    </div>
                </div>
            </div>
					<!--comment_section -->
        </div>
    </div>
</div>
@endsection