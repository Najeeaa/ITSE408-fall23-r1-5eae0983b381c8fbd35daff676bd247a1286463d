@extends('backend.layout.layout')
@section('content')

    <div class="pagetitle">
      <nav>
        <a href="{{url('ManageFaculty')}}" class="btn btn-primary float-end">Back</a>

      <h1>ادارة الكليات</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
          <li class="breadcrumb-item active">إدارة الكليات</li>
        </ol>
      </nav>

    </div><!-- End Page Title -->

    <form action="{{url('AddFaculty')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>الاسم</label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}">
            @error('name') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="mb-3">
            <label>date</label>
            <input type="date" name="created_at" class="form-control">
            @error('date') <span class="text-danger">{{$message}}</span> @enderror

        </div>
        <div class="mb-3">
            <label>description</label>
            <textarea name="description_ar" class="form-control">{{old('description_ar')}}</textarea>
            @error('description_ar') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Upload Image</label>
            <input type="file" name="image" class="form-control">
            @error('image') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="mb-3">
           <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>

@endsection
