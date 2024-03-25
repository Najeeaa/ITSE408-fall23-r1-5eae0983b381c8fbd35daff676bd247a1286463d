@extends('backend.layout.layout')
@section('content')

<div class="pagetitle">
    <nav>
        <a class="btn btn-primary float-end">Add</a>
        <h1>نشر  الأخبار </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
            <li class="breadcrumb-item active">إدارة الأخبار</li>
            <li class="breadcrumb-item active">نشر الأخبار</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('storeNews') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">عنوان الخبر</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="author">الكاتب</label>
                    <input type="text" class="form-control" id="author" name="author" required>
                </div>
                <div class="form-group">
                    <label for="image">صورة الخبر</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="date">تاريخ الخبر</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="category">التصنيف</label>
                    <input type="text" class="form-control" id="category" name="category" required>
                </div>
                <div class="form-group">
                    <label for="content">محتوى الخبر</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">إضافة الخبر</button>
            </form>
        </div>
    </div>
</div>

@endsection