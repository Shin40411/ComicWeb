@extends('../layout')
@section('content')
<nav style="padding: 10px; height: 30px;" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ </a></li>
    <li class="breadcrumb-item active" aria-current="page">Đăng nhập | Đăng ký</li>
  </ol>
</nav>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng nhập tài khoản</h2>
						<form action="{{URL::to('/dang-nhap')}}" method="POST">
							{{csrf_field()}}
							<input type="text" name="email_account" placeholder="Email tài khoản" required />
							<input type="password" name="password_account" placeholder="Mật khẩu" required/>
							<span>
								<input type="checkbox" class="checkbox"> 
								Ghi nhớ đăng nhập
							</span>
							<button type="submit" class="btn btn-warning">Đăng nhập</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Hoặc</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Đăng ký</h2>
						<form action="{{URL::to('/add-customer')}}" method="POST">
							{{ csrf_field() }}
							<input type="text" name="customer_name" placeholder="Họ và tên" required/>
							<input type="email" name="customer_email" placeholder="Địa chỉ email" required/>
							<input type="password" name="customer_password" placeholder="Mật khẩu" required/>
							<input type="text" name="customer_phone" placeholder="SĐT" required/>
							<button type="submit" class="btn btn-primary">Đăng ký</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
@endsection