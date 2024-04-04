@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="col py-3">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liệt kê chapter theo truyện</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <div class="card-header">
                           <b>Tên truyện:</b> 
                            </div>
                    @foreach($truyen as $key => $t)
                        <h5 class="accordion-header" id="flush-heading-{{$t->id_truyen}}">
                            @php
                                $count = count($t->chapter);
                            @endphp
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-{{$t->id_truyen}}" aria-expanded="false" aria-controls="flush-collapseOne">
                       <b>{!!  $truyen->firstItem() +$key!!}</b>.  {{$t->tentruyen}} <br> <span class="badge bg-danger popular">  Tổng số chapter: {{$count}} chap </span> 
                        </button>
                        </h5>
                        <div id="flush-collapse-{{$t->id_truyen}}" class="accordion-collapse collapse" aria-labelledby="flush-heading-{{$t->id_truyen}}" data-bs-parent="#accordionFlushExample">
                        <table class="table">
                    <thead>
                        <tr>

                        <th scope="col">Tên chapter</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Lượt xem</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Ngày thêm</th>
                        <th scope="col">Ngày cập nhật</th>
                        <th scope="col">Quản lý</th>
                        </tr>
                    </thead>
                    @foreach($t->chapter as $key => $chap)
                    <tbody>
                        <tr>
                  
                        <td>{{$chap -> tuade}}</td>
                        <td>{{$chap -> slug_chapter}}</td>
                        <td style="text-align: center;">{{$chap->luotxemchap}}</td>  
                        <td>
                            @if($chap -> kichhoat == 0)
                            <span class="text text-success">Đang hiện</span>
                            @else
                            <span class="text text-danger">Đang ẩn</span>
                            @endif
                        </td>
                        <td>{{$chap->created_at}} <br> <b>{{ $chap->created_at->diffForHumans()}}</b></td>
                        <td>
                            @if($chap->updated_at != '')
                            {{$chap->updated_at}} <br> <b>{{ $chap->updated_at->diffForHumans()}}</b> 
                            @endif
                        </td>
                        <td>
                        <ol class="breadcrumb">
                            <a href="{{route('chapter.edit',[$chap -> id_chapter])}}" class="btn btn-primary">Sửa</a>
                            </ol>
                            <form action="{{route('chapter.destroy',[$chap -> id_chapter])}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button onclick="return confirm('Bạn có chắc chắn muốn xóa không?');" class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                        </tr>
                    </tbody>
                    @endforeach
                    </table>    
                                </div>
                        @endforeach
                            </div>     
                        </div>
                        <div class="pagination-outter pages">
                        {{$truyen->links('pagination::bootstrap-4')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection 