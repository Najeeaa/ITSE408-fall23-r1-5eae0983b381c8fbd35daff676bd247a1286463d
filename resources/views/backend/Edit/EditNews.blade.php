@extends('backend.layout.layout')
@section('content')

<div class="pagetitle">
    <h1>تعديل الخبر</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('ManageNews') }}">الرئيسية</a></li>
        <li class="breadcrumb-item active">تعديل الخبر</li>
    </ol>
</div><!-- End Page Title -->

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('updateNews', ['id' => $news->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">العنوان</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $news->title }}">
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label">الناشر</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{ $news->author }}">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">التصنيف</label>
                    <input type="text" class="form-control" id="category" name="category" value="{{ $news->category }}">
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">تاريخ الخبر</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ $news->date }}">
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">المحتوى</label>
                    <textarea class="form-control" id="content" name="content">{{ $news->content }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">صورة الخبر</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <!-- Add other form fields as needed -->

                <button type="submit" class="btn btn-primary">تحديث</button>
            </form>
        </div>
    </div>
</div>

@endsection