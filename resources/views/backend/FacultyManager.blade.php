<?php
$number = 1;
?>
@extends('backend.layout.layout')
@section('content')

    <div class="pagetitle">
      <nav> <a href="{{url('AddFaculty')}}" class="btn btn-primary float-end">Add</a>

      <h1>ادارة الكليات</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
          <li class="breadcrumb-item active">إدارة الكليات</li>
        </ol>
      </nav>

    </div><!-- End Page Title -->


            <div class="col-12">
              <div class="card recent-sales overflow-auto">


                <div class="card-body">
                  <h5 class="card-title">قائمةالكليات</h5>

                  <table class="table table-borderless table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">الاسم</th>
                        {{-- <th scope="col">الكلية</th> --}}
                        <th scope="col">سنةالانشاء</th>
                        <th scope="col">حذف او تعديل</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($faculties as $faculty)
                      <tr>
                        <th scope="row"><a href="#">{{ $faculty->id}}</a></th>
                        <td>{{ $faculty->name_ar }}</td>
                        {{-- <td><a href="#" class="text-primary">At praesentium minu</a></td> --}}
                        <td>{{ $faculty->created_at}}</td>
                        <td>
                        <a href="{{url('Faculty/'.$faculty->id.'/edit')}}" class="btn btn-primary">Edit</a>
                        <a href="{{url('Faculty/'.$faculty->id.'/delete')}}" class="btn btn-danger"
                           onclick="return confirm('Are you suer ?')" >
                            Delete</a>
                        </td>
                      </tr>
                        @endforeach
                    </tbody>
                  </table>

                </div>

            </div>
            </div><!-- End Recent Sales -->

@endsection
