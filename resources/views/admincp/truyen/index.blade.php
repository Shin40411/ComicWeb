@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="col py-3">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Liệt kê truyện</div>

                <style type="text/css">
                    img.thumbnail {
                        max-width: 120px;
                    }
                </style>


                <div class="card-body">

                    <div id="inform"></div>

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
                        <th scope="col">Tên truyện</th>
                        <th scope="col">Tên khác</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Tác giả</th>
                        <th scope="col">Lượt xem</th>
                        <th scope="col">Danh mục</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Loại truyện</th>
                        <th scope="col">Tình trạng</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Ngày thêm</th>
                        <th scope="col">Ngày cập nhật</th>
                        <th scope="col">Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lietke_truyen as $key => $truyen)
                        <tr>
                        <th scope="row">{!!  $lietke_truyen->firstItem() +$key!!}</th>
                        <td>{{$truyen -> tentruyen}}</td>
                        <td>{{$truyen -> tenkhac}}</td>
                        <td>{{$truyen -> slug_truyen}}</td>
                        <td>{{$truyen -> tacgia}}</td>
                        <td>
                            @if($truyen -> luotxem == 0)
                            <b>0</b>
                            @else
                            <b>{{$truyen -> luotxem}}</b>
                            @endif
                        </td>
                        <td>
                        @foreach($truyen->thuocnhieudanhmuctruyen as $t)
                        <span class="badge bg-warning text-dark">
                        {{$t->tieudedanhmuc}}
                        </span>
                        @endforeach
                        </td>
                        <td><img class="thumbnail" src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" height="200"></td>
                        <td width="10%">
                            @if($truyen -> truyen_noibat == 0)
                            <form>
                                @csrf
                            <select name="truyennoibat" data-truyen_id="{{$truyen->id_truyen}}" class="form-select truyennoibat" aria-label="Default select example">
                            <option selected value="0">Truyện thường</option>
                            <option value="1">Truyện nổi bật</option>
                            <option value="2">Truyện hot</option>
                            </select>
                            </form>
                            @elseif($truyen->truyen_noibat == 1)
                            <form>
                                @csrf
                            <select name="truyennoibat" data-truyen_id="{{$truyen->id_truyen}}" class="form-select truyennoibat" aria-label="Default select example">
                            <option value="0">Truyện thường</option>
                            <option selected value="1">Truyện nổi bật</option>
                            <option value="2">Truyện hot</option>
                            </select>
                            </form>
                            @else
                            <form>
                                @csrf
                            <select name="truyennoibat" data-truyen_id="{{$truyen->id_truyen}}" class="form-select truyennoibat" aria-label="Default select example">
                            <option value="0">Truyện thường</option>
                            <option value="1">Truyện nổi bật</option>
                            <option selected value="2">Truyện hot</option>
                            </select>
                            </form>
                            @endif
                        </td>
                        <td>
                            @if($truyen -> tinh_trang == 0)
                            <span class="text text-success">Đang tiến hành</span>
                            @else
                            <span class="text text-danger">Hoàn thành</span>
                            @endif
                        </td>
                        <td>
                            @if($truyen -> kichhoat == 0)
                            <span class="text text-success">Đang hiện</span>
                            @else
                            <span class="text text-danger">Đang ẩn</span>
                            @endif
                        </td>
                        <td>{{$truyen->created_at}} <br> <b>{{ $truyen->created_at->diffForHumans()}}</b></td>
                        <td>
                            @if($truyen->updated_at != '')
                            {{$truyen->updated_at}} <br> <b>{{ $truyen->updated_at->diffForHumans()}}</b> 
                            @endif
                        </td>
                        <td>
                        <ol class="breadcrumb">
                            <a href="{{route('truyen.edit',[$truyen -> id_truyen])}}" class="btn btn-primary">Sửa</a>
                            </ol>
                            <form action="{{route('truyen.destroy',[$truyen -> id_truyen])}}" method="POST">
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
                    {{$lietke_truyen->links('pagination::bootstrap-4')}}
                    </div>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
