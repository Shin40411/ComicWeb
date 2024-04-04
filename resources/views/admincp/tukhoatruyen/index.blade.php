@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="col py-3">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">Liệt kê từ khóa tìm kiếm</div>

            <style type="text/css">
                .popular {
                    font-size: 15px;
                }
                .line_tukhoa {
                    line-height: 3;
                }
            </style>

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
                        <th scope="col">Từ khóa</th>
                        <th scope="col">Cho nổi bật</th>
                        <th scope="col">Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tukhoatruyen as $key => $tukhoa)
                        <!-- {{ print_r( $tukhoa ) }}  -->
                        <tr class="line_tukhoa">
                        <th scope="row">{!!  $tukhoatruyen->firstItem() +$key!!}</th>
                        <td>{{$tukhoa -> keyword}}</td>
                        <td>
                            @if($tukhoa -> noibat == 1)
                            <span class="badge bg-info text-dark popular">Có</span>
                            @else
                            <span class="badge bg-danger popular">Không</span>
                            @endif
                        </td>  
                        <td style="width: 1%;">
                                <a href="{{route('tukhoatruyen.edit',['tukhoatruyen' => $tukhoa->id_tukhoa])}}" class="btn btn-primary">Sửa</a>
                        <form action="{{route('tukhoatruyen.destroy',['tukhoatruyen' => $tukhoa->id_tukhoa])}}" method="POST">
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
                        {{$tukhoatruyen->links('pagination::bootstrap-4')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
