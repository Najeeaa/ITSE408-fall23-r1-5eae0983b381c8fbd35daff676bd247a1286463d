@extends('backend.layout.layout')
@section('content')

    <div class="pagetitle">
        <h1> اعضاء هيئة التدريس </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                <li class="breadcrumb-item active">اعضاء هيئةالتدريس </li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <div class="col-12">
        <div class="card recent-sales overflow-auto">


            <div class="card-body">
                <h5 class="card-title">قائمة اعضاء هيئة التدريس </h5>

                <table class="table table-borderless datatable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">الاسم</th>
                            <th scope="col">البريد الإلكتروني</th>
                            <th scope="col">رقم الهاتف</th>
                            <th scope="col">الكلية</th>
                            <th scope="col">الرقم الوطني</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($staff as $Staff)
                        <tr>
                            <th scope="row"><a href="#">{{ $Staff->id }}</th>
                            <td>{{ $Staff->name }}</td>
                            <td>{{ $Staff->email }}</td>
                            <td>{{ $Staff->phone }}</td>
                            <td>{{ $Staff->faculty }}</td>
                            <td>{{ $Staff->National_number }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div><!-- End Recent Sales -->

@endsection