@extends('backend.layout.layout')
@section('content')

<div class="pagetitle">
    <nav>
        <a class="btn btn-primary float-end" href="{{ route('AddStaff') }}">إضافة</a>
        <h1>إدارة اعضاء هيئةالتدريس</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
            <li class="breadcrumb-item active">     ادارةاعضاء هيئةالتدريس</li>
            <li class="breadcrumb-item active">اضافة</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('storeStaff') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">الاسم</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">البريد الإلكتروني</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">رقم الهاتف</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="faculty">الكلية</label>
                    <input type="text" class="form-control" id="faculty" name="faculty" required>
                </div>
                <div class="form-group">
                    <label for="National_number">الرقم الوطني</label>
                    <input type="text" class="form-control" id="National_number" name="National_number" required>
                </div>
                <button type="submit" class="btn btn-primary"> إضافة  عضو هيئةالتدريس </button>
            </form>
        </div>
    </div>
</div>

@endsection