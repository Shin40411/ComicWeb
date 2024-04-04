@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="col py-3">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <style type="text/css">
                    .card-body .info {
                        color: #0d6efd;
                        text-decoration: underline;
                    }
                </style>
                <div class="card-header">Thông tin website</div>
                <style type="text/css">
                    img.thumbnail {
                        max-width: 120px;
                    }
                </style>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="d-flex justify-content-center">
                    <h3>
                  Url:  <a class="info" target="_blank" href="https://themtruyen.info/">themtruyen.info</a>
                    </h3>
                    </div>

                </div>
            </div>
            <div class="col-md-12">
                    <div class="card">
                    <div class="card-header">Truyện nhiều lượt xem nhất</div>
                        <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên truyện</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Lượt xem</i> 
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($lietke_truyen as $key => $truyen)
                            <tr>
                            <th scope="row">
                        <span class="txt-rank fn-order pos1">{!!  $lietke_truyen->firstItem() +$key!!}</span>
                            </th>
                            <td>
                            {{$truyen -> tentruyen}}
                            </td>
                            <td>
                            <img class="thumbnail" height="200" src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" alt="">                               
                            </td>
                            <td>
                            {{$truyen -> luotxem}}  <i class="bi bi-eye" style="color: rgb(237, 95, 30)"></i>                        
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                        </table>
                    </div>
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
