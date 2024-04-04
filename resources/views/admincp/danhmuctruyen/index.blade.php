@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="col py-3">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liệt kê thể loại truyện</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($danhmuctruyen as $key => $danhmuc)
                        <tr>
                        <th scope="row">{!!  $danhmuctruyen->firstItem() +$key!!}</th>
                        <td>{{$danhmuc -> tieudedanhmuc}}</td>
                        <td>{{$danhmuc -> slug_danhmuc}}</td>
                        <td>{{$danhmuc -> motadanhmuc}}</td>
                        <td>
                            @if($danhmuc -> kichhoat == 0)
                            <span class="text text-success">Đang hiện</span>
                            @else
                            <span class="text text-danger">Đang ẩn</span>
                            @endif
                        </td>
                        <td>
                        <ol class="breadcrumb">
                            <a href="{{route('danhmuc.edit',[$danhmuc -> id_danhmuc])}}" class="btn btn-primary">Sửa</a>
                            </ol>
                            <form action="{{route('danhmuc.destroy',[$danhmuc -> id_danhmuc])}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button onclick="return confirm('Bạn có chắc chắn muốn xóa không?');" class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                        <div class="pagination-outter pages">
                        {{$danhmuctruyen->links('pagination::bootstrap-4')}}
                        </div>
                    </div>     
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection 