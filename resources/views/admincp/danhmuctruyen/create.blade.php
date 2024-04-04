@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="col py-3">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm thể loại truyện</div>
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
                    <form method="POST" action="{{route('danhmuc.store')}}">
                        @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tiêu đề</label>
                        <input type="text" class="form-control" value="{{old('tieudedanhmuc')}}" id="slug" onkeyup="ChangeToSlug();" name="tieudedanhmuc" aria-describedby="emailHelp" placeholder="Tiêu đề danh mục...">   
                    </div>  
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Slug</label>
                        <input type="text" class="form-control" value="{{old('slug_danhmuc')}}" id="convert_slug" name="slug_danhmuc" aria-describedby="emailHelp" placeholder="Slug danh mục...">   
                    </div>  

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Mô tả</label>
                        <input type="text" class="form-control" value="{{old('motadanhmuc')}}" id="exampleInputEmail1" name="motadanhmuc" aria-describedby="emailHelp" placeholder="Mô tả danh mục...">   
                    </div>  

                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Trạng thái</label>
                    <select name="kichhoat" class="form-select" aria-label="Default select example">
                        <option value="0">Cho hiện</option>
                        <option value="1">Cho ẩn</option>
                    </select>
                    </div> 

                    <button type="submit" name="themdanhmuc" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
