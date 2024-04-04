@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="col py-3">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Chỉnh sửa chapter truyện</div>
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
                    <form method="POST" action="{{route('chapter.update',[$chapter->id_chapter])}}">
                        @method('PUT')
                        @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên chapter</label>
                        <input type="text" class="form-control" value="{{$chapter->tuade}}" id="slug" onkeyup="ChangeToSlug();" name="tuade" aria-describedby="emailHelp" placeholder="Tên chapter truyện...">   
                    </div>  

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Slug</label>
                        <input type="text" class="form-control" value="{{$chapter->slug_chapter}}" id="convert_slug" name="slug_chapter" aria-describedby="emailHelp" placeholder="Slug chapter truyện...">   
                    </div>  

                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Thuộc truyện</label>
                    <select name="truyen_id" class="form-select" aria-label="Default select example">
                      @foreach($truyen as $key => $value)
                        <option {{$value->id_truyen==$chapter->truyen_id ? 'selected' : ''}} value="{{$value->id_truyen}}">{{$value->tentruyen}}</option>
                     @endforeach
                    </select>
                    </div> 

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nội dung</label>
                        <textarea name="noidung" class="form-control" id="noidung_chapter" rows="5" style="resize: none;">{{$chapter->noidung}}</textarea>
                    </div>      

                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Trạng thái</label>
                    <select name="kichhoat" class="form-select" aria-label="Default select example">
                        @if($chapter->kichhoat == 0)
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
