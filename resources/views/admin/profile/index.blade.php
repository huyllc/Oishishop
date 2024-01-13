@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Admin Profile</h1>
        </div>

        <div class="section-body">
            <div class="card card-primary">
                <div class="card-header">
                    <h4> Update Admin Profile </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Tên</label>
                            <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}">
                        </div>

                        <div class="form-group">
                            <label>Mail</label>
                            <input type="text" class="form-control" name="email" value="{{ auth()->user()->email }}">
                        </div>
                        <button class="btn btn-primary" type="">Lưu</button>
                    </form>
                </div>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4> Update Admin Profile </h4>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label>Mật khẩu hiện tại</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu mới</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label>Xác thực mật khẩu mới</label>
                            <input type="text" class="form-control" name="password_confirmation">
                        </div>
                        <button class="btn btn-primary" type="">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
