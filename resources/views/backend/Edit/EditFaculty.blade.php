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

    <form action="{{url('Faculty/'.$faculty->id.'/edit')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>الاسم</label>
            <input type="text" name="name" class="form-control" value="{{$faculty->name_ar}}">
            @error('name') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="mb-3">
            <label>date</label>
            <input type="date" name="created_at" class="form-control" value="{{$faculty->created_at}}">
            @error('date') <span class="text-danger">{{$message}}</span> @enderror

        </div>
        <div class="mb-3">
            <label>description</label>
            <textarea name="description_ar" class="form-control">{{$faculty->description_ar}}</textarea>
            @error('description_ar') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Upload Image</label>
            <input type="file" name="image" class="form-control" value={{$faculty->image}}>
            @error('image') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="mb-3">
           <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>

@endsection
