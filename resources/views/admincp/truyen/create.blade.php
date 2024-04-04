@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="col py-3">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm truyện</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <style type="text/css">
                    .mn {
                        margin-left: 0;
                    }
                </style>
                <div class="card-body formcp">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{route('truyen.store')}}" enctype='multipart/form-data'>
                        @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên truyện</label>
                        <input type="text" class="form-control mn" value="{{old('tentruyen')}}" id="slug" onkeyup="ChangeToSlug();" name="tentruyen" aria-describedby="emailHelp" placeholder="Tên truyện...">   
                    </div>  
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên khác</label>
                        <input type="text" class="form-control mn" value="{{old('tenkhac')}}" name="tenkhac" aria-describedby="emailHelp" placeholder="Tên khác của truyện...">   
                    </div> 
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tác giả</label>
                        <input type="text" class="form-control mn" value="{{old('tacgia')}}" name="tacgia" aria-describedby="emailHelp" placeholder="Tên tác giả...">   
                    </div>  

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Slug</label>
                        <input type="text" class="form-control mn" value="{{old('slug_danhmuc')}}" id="convert_slug" name="slug_truyen" aria-describedby="emailHelp" placeholder="Slug truyện...">   
                    </div>  

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tóm tắt</label>
                        <textarea name="tomtat" class="form-control mn" rows="5" style="resize: none;"></textarea>   
                    </div>  

                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Thể loại</label>
                    <br>
                    @foreach($danhmuc as $key => $muc)
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="{{$muc->id_danhmuc}}" name="danhmuc[]" id="danhmuc_{{$muc->id_danhmuc}}">
                    <label class="form-check-label" for="danhmuc_{{$muc->id_danhmuc}}">
                    {{$muc->tieudedanhmuc}}
                    </label>
                    </div>
                    @endforeach
                    </div> 

                    <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Hình ảnh</label>
                    <input class="form-control mn" type="file" id="formFileMultiple" name="hinhanh" multiple>
                    </div>

                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Truyện nổi bật/hot</label>
                    <select name="truyennoibat" class="form-select" aria-label="Default select example">
                        <option value="0">Truyện thường</option>
                        <option value="1">Truyện nổi bật</option>
                        <option value="2">Truyện hot</option>
                    </select>
                    </div> 

                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tình trạng</label>
                    <select name="tinhtrang" class="form-select" aria-label="Default select example">
                        <option value="0">Đang tiến hành</option>
                        <option value="1">Hoàn thành</option>
                    </select>
                    </div> 

                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Trạng thái</label>
                    <select name="kichhoat" class="form-select" aria-label="Default select example">
                        <option value="0">Cho hiện</option>
                        <option value="1">Cho ẩn</option>
                    </select>
                    </div> 

                    <button type="submit" name="themtruyen" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
