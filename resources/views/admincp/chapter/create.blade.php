@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="col py-3">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm chapter truyện</div>
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
                    <form method="POST" action="{{route('chapter.store')}}">
                        @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên chapter</label>
                        <input type="text" class="form-control" value="{{old('tuade')}}" id="slug" onkeyup="ChangeToSlug();" name="tuade" aria-describedby="emailHelp" placeholder="Tên chapter truyện...">   
                    </div>  

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Slug</label>
                        <input type="text" class="form-control" value="{{old('slug_chapter')}}" id="convert_slug" name="slug_chapter" aria-describedby="emailHelp" placeholder="Slug chapter truyện...">   
                    </div>  

                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Thuộc truyện</label>
                    <select name="truyen_id" class="form-select" aria-label="Default select example">
                      @foreach($truyen as $key => $value)
                        <option value="{{$value->id_truyen}}">{{$value->tentruyen}}</option>
                     @endforeach
                    </select>
                    </div> 

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nội dung</label>
                        <textarea name="noidung" id="noidung_chapter" class="form-control" rows="5" style="resize: none;"></textarea>
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
