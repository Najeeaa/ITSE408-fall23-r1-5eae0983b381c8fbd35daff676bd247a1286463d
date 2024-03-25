@extends('website.layout.layout')
@section('content')
<section  class="section parallax-layer ol-para-bg-CUNRm" id="About">

    <div class="container">
      <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('storage/images/' . $news->image) }}" alt="image" class="img-fluid" style="max-width: 100%; max-height: 150px;">
          <!-- #####Begin heading-->
          <div class="heading-with-sub">
            <h3 class="title">{{ $news->title }}</h3>
            <h4 class="subtitle"></h4>
            <div class="sp-blank-10"></div>

          </div>
          <!-- #####End heading-->
        </div>
        <div class="col-md-8 gradiantbg">
          <!-- #####Begin heading-->
          <div class="heading-with-sub">
            <h3 class="title">{{ $news->title }}</h3>
            <h6 >
                <p style="font-family: DroidKufi-Regular;">{{ $news->content }}</p>
            </h6>
          </div>
          <!-- #####End heading-->
        </div>
      </div>
    </div>
</section>
@endsection