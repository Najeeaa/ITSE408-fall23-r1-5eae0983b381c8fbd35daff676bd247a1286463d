@extends('backend.layout.layout')
@section('content')

    <div class="pagetitle">
        <a href="{{ route('addNews') }}" class="btn btn-primary float-end">Add</a>
        <h1>إدارة الأخبار</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('index.html') }}">الرئيسية</a></li>
            <li class="breadcrumb-item active">إدارة الأخبار</li>
        </ol>
    </div><!-- End Page Title -->

    <div class="col-12">
        <div class="card recent-sales overflow-auto">
            <div class="card-body">
                <h5 class="card-title">قائمة الأخبار</h5>

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">العنوان</th>
                            <th scope="col">الناشر</th>
                            <th scope="col">التصنيف</th>
                            <th scope="col">تاريخ الخبر</th>
                            <th scope="col">المحتوى</th>
                            <th scope="col">الصورة</th>
                            <th scope="col">التحكم</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $News)
                        <tr>
                            <th scope="row"><a href="#">{{ $News->id }}</a></th>
                            <td>{{ $News->title }}</td>
                            <td>{{ $News->author }}</td>
                            <td>{{ $News->category }}</td>
                            <td>{{ $News->date }}</td>
                            <td>{{ $News->content }}</td>
                            <td>
                                @if ($News->image)
                                <img src="{{ asset('storage/images/' . $News->image) }}" alt="News Image" class="img-fluid">
                                @else
                                No Image
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('editNews', $News->id) }}" class="btn btn-sm btn-primary">تعديل</a>
                                <form action="{{ route('deleteNews', ['id' => $News->id]) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">حذف</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- End Recent Sales -->
    </div>

@endsection