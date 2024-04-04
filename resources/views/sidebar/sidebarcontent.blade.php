<!-- following manga section -->
<div class="box darkBox">
  <h2 style="margin-bottom: 0;">
  Truyện đang theo dõi
  <!-- <a href="javascript:void(0)" class="view-all" onclick="deleteRow()"><i class="fa fa-times"></i> Xóa tất cả</a> -->
  <a href="{{url('theo-doi/')}}" class="view-all"> Xem tất cả</a>
  </h2>
  <div class="scroll-y" id="yeuthich">

  </div>
</div>

<!-- history section -->
<div class="box darkBox">
    <h2>
      Lịch sử đọc truyện
  <a href="{{url('lich-su/')}}" class="view-all"> Xem tất cả</a>
    </h2>
    <ul class="list-unstyled" id="viewed" style="margin-top: 2px;">

    </ul>
</div>

<!-- top tabs section -->
<div class="box darkBox tabsec">
 <!-- Tab links -->
  <div class="tabs">
    <button class="tablinks active" data-electronic="allproducts">Top nổi bật</button>
    <button class="tablinks" data-electronic="Microcontrollers">Top hot</button>
  </div>
  <!-- Tab content -->
  <div class="wrapper_tabcontent">
 
    <!-- Tab content 1 -->
      <div id="allproducts" class="tabcontent active">
        <div class="tab-pane">
            <ul class="list-unstyled">
            @foreach($truyentranh->take(7) as $key => $t)
              <li class="clearfix">
              <span class="txt-rank fn-order pos1">{{$loop->iteration}}</span>
                <div class="t-item">
                  <a href="{{url('xem-truyen/'.$t->slug_truyen)}}" class="thumb">
                    <img src="{{asset('public/uploads/truyen/'.$t->hinhanh)}}" alt="">
                  </a>
                  <h3 class="title ">
                    <a href="{{url('xem-truyen/'.$t->slug_truyen)}}">{{$t->tentruyen}}</a>
                  </h3>
                  <p class="chapter">
                  @foreach($t->chapter->reverse()->take(1)->where('kichhoat',0) as $chap)
                    <a href="{{url('xem-chapter/'.$t->slug_truyen.'/'.$chap->slug_chapter)}}">{{$chap->tuade}}</a>
                  @endforeach                   
                    <span class="view pull-right">
                    <i class="fa fa-eye"> {{$t->luotxem}}</i> 
                  </p>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
      </div>
    
    <!-- Tab content 2 -->
      <div id="Microcontrollers" class="tabcontent">
      <div class="tab-pane">
            <ul class="list-unstyled">
            @foreach($truyentranhhot->take(7) as $key => $t)
              <li class="clearfix">
              <span class="txt-rank fn-order pos1">{{$loop->iteration}}</span>
                <div class="t-item">
                  <a href="{{url('xem-truyen/'.$t->slug_truyen)}}" class="thumb">
                    <img src="{{asset('public/uploads/truyen/'.$t->hinhanh)}}" alt="">
                  </a>
                  <h3 class="title ">
                    <a href="{{url('xem-truyen/'.$t->slug_truyen)}}">{{$t->tentruyen}}</a>
                  </h3>
                  <p class="chapter">
                  @foreach($t->chapter->reverse()->take(1)->where('kichhoat',0) as $chap)
                    <a href="{{url('xem-chapter/'.$t->slug_truyen.'/'.$chap->slug_chapter)}}">{{$chap->tuade}}</a>
                  @endforeach                   
                    <span class="view pull-right">
                        <i class="fa fa-eye"> {{$t->luotxem}}</i> 
                    </span>
                  </p>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
      </div>
  </div>
</div>



<div class="box darkBox" id="newcmt">
      <h2>Bình luận mới</h2>
      <div class="scroll-y">
        <ul>
          @foreach($comments->take(10) as $key => $c)
          <li>
            <h3 class="name_comic">
              <a href="{{url('xem-truyen/'.$c->truyencmt->slug_truyen)}}">{{$c->truyencmt->tentruyen}}</a>
              <a class="cmchapter-link" href="{{url('xem-chapter/'.$c->truyencmt->slug_truyen.'/'.$c->chapcmt->slug_chapter)}}">
              <span class="cmchapter">{{$c->chapcmt->tuade}}</span>
              </a>
            </h3>
            <span class="authorname">{{$c->comment_user}}</span>
            <abbr><i class="fa fa-clock"></i> {{$c->comment_date}}</abbr>
            <p class="comment_top">{{$c->comment}}</p>
          </li>
          @endforeach
        </ul>
      </div>
      </div>