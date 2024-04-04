@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="col py-3">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Chỉnh sửa truyện</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body formcp">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{route('truyen.update',[$truyen->id_truyen])}}" enctype='multipart/form-data'>
                        @method('PUT')
                        @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên truyện</label>
                        <input type="text" class="form-control" value="{{$truyen->tentruyen}}" id="slug" onkeyup="ChangeToSlug();" name="tentruyen" aria-describedby="emailHelp" placeholder="Tên truyện...">   
                    </div>  

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên khác</label>
                        <input type="text" class="form-control" value="{{$truyen->tenkhac}}" name="tenkhac" aria-describedby="emailHelp" placeholder="Tên khác của truyện...">   
                    </div>  

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Slug</label>
                        <input type="text" class="form-control" value="{{$truyen->slug_truyen}}" id="convert_slug" name="slug_truyen" aria-describedby="emailHelp" placeholder="Slug truyện...">   
                    </div>  

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tác giả</label>
                        <input type="text" class="form-control" value="{{$truyen->tacgia}}" name="tacgia" aria-describedby="emailHelp" placeholder="Tên tác giả...">   
                    </div>  

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tóm tắt</label>
                        <textarea name="tomtat" class="form-control" rows="5" style="resize: none;">{{$truyen->tomtat}}</textarea>   
                    </div>  

                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Thể loại</label>
                    <br>
                    @foreach($danhmuc as $key => $muc)
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" @if($thuocdanhmuc->contains($muc->id_danhmuc)) checked @endif type="checkbox" value="{{$muc->id_danhmuc}}" name="danhmuc[]" id="danhmuc_{{$muc->id_danhmuc}}">
                    <label class="form-check-label" for="danhmuc_{{$muc->id_danhmuc}}">
                    {{$muc->tieudedanhmuc}}
                    </label>
                    </div>
                    @endforeach
                    </div> 

                    <div class="mb-3 thumbnail">
                    <label for="formFileMultiple" class="form-label">Hình ảnh</label>
                    <input class="form-control" type="file" id="formFileMultiple" name="hinhanh" multiple style="margin-bottom:5px;">
                    <img src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" height="300" width="250">
                    </div>

                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Truyện nổi bật/hot</label>
                    <select name="truyennoibat" class="form-select" aria-label="Default select example">
                        @if($truyen->truyen_noibat == 0)
                        <option selected value="0">Truyện thường</option>
                        <option value="1">Truyện nổi bật</option>
                        <option value="2">Truyện hot</option>
                        @elseif($truyen->truyen_noibat == 1)
                        <option value="0">Truyện thường</option>
                        <option selected value="1">Truyện nổi bật</option>
                        <option value="2">Truyện hot</option>
                        @else
                        <option value="0">Truyện thường</option>
                        <option value="1">Truyện nổi bật</option>
                        <option selected value="2">Truyện hot</option>
                        @endif
                    </select>
                    </div> 

                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tình trạng</label>
                    <select name="tinhtrang" class="form-select" aria-label="Default select example">
                        @if($truyen->tinh_trang == 0)
                        <option selected value="0">Đang tiến hành</option>
                        <option value="1">Hoàn thành</option>
                        @else
                        <option value="0">Đang tiến hành</option>
                        <option selected value="1">Hoàn thành</option>
                        @endif
                    </select>
                    </div> 

                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Trạng thái</label>
                    <select name="kichhoat" class="form-select" aria-label="Default select example">
                        @if($truyen->kichhoat == 0)
                        <option selected value="0">Đang hiện</option>
                        <option value="1">Đang ẩn</option>
                        @else
                        <option value="0">Đang hiện</option>
                        <option selected value="1">Đang ẩn</option>
                        @endif
                    </select>
                    </div> 

                    <button type="submit" name="themtruyen" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
