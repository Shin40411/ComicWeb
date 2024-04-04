@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="col py-3">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Chỉnh sửa từ khóa</div>
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
                    <form method="POST" action="{{route('tukhoatruyen.update', [$tukhoa->id_tukhoa])}}">
                        @method('PUT')
                        @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Từ khóa</label>
                        <input type="text" class="form-control" value="{{$tukhoa->keyword}}"  name="keyword" aria-describedby="emailHelp" placeholder="Từ khóa tìm kiếm...">   
                    </div>  
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Cho nổi bật</label>
                    <select name="noibat" class="form-select" aria-label="Default select example">
                        @if($tukhoa->noibat == 1)
                        <option selected value="1">Có</option>
                        <option value="0">Không</option>
                        @else
                        <option value="1">Có</option>
                        <option selected value="0">Không</option>
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
