@extends('backend.layout.layout')

@section('content')

    <div class="pagetitle">
        <h1>إضافة وثيقة جديدة</h1>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <form action="{{ route('documents.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="title">عنوان الوثيقة</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="عنوان الوثيقة"
                        required value="{{ old('title') }}">
                </div>

                <div class="form-group">
                    <label for="description">الوصف</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="الوصف"
                        required value="{{ old('description') }}">
                </div>

                <div class="form-group">
                    <label for="content">المحتوى </label>
                    <textarea class="form-control" id="content" name="content" rows="3"
                        placeholder="المحتوى" required>{{ old('content') }}</textarea>
                </div>



                <button type="submit" class="btn btn-primary">إنشاء وثيقة</button>
            </form>
        </div>
    </div>

@endsection
