@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="col py-3">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Chỉnh sửa thể loại truyện</div>
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
                    <form method="POST" action="{{route('danhmuc.update', [$danhmuc->id_danhmuc])}}">
                        @method('PUT')
                        @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tiêu đề</label>
                        <input type="text" class="form-control" value="{{$danhmuc->tieudedanhmuc}}" id="slug" onkeyup="ChangeToSlug();" name="tieudedanhmuc" aria-describedby="emailHelp" placeholder="Tiêu đề danh mục...">   
                    </div>  
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Slug</label>
                        <input type="text" class="form-control" value="{{$danhmuc->slug_danhmuc}}" id="convert_slug" name="slug_danhmuc" aria-describedby="emailHelp" placeholder="Slug danh mục...">   
                    </div>  
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Mô tả</label>
                        <input type="text" class="form-control" value="{{$danhmuc->motadanhmuc}}" id="exampleInputEmail1" name="motadanhmuc" aria-describedby="emailHelp" placeholder="Mô tả danh mục...">   
                    </div>  
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Trạng thái</label>
                    <select name="kichhoat" class="form-select" aria-label="Default select example">
                        @if($danhmuc->kichhoat == 0)
                        <option selected value="0">Đang hiện</option>
                        <option value="1">Đang ẩn</option>
                        @else
                        <option value="0">Đang hiện</option>
                        <option selected value="1">Đang ẩn</option>
                        @endif
                    </select>
                    </div> 
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
