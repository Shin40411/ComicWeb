<div class="box darkBox genres">
          <div class="module_content">
            <h2><b>Thể loại</b></h2>
              <ul class="na">
              @foreach($danhmuc as $key => $danh)
                <li>
                  <a href="{{url('danh-muc/'.$danh->slug_danhmuc)}}">{{$danh->tieudedanhmuc}}</a>
                </li>
                @endforeach
              </ul>
            </div>
          </div>