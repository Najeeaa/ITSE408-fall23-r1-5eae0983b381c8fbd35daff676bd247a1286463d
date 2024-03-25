<section class="section">
    <div class="container">
      <!-- #####Begin row with multiple columns-->
      <div class="row multi-columns-row col-margin-bottom-40">
        @foreach ($faculties as $faculty)
        <div class="col-md-3 col-sm-6">
                <!-- #####Begin  book element-->
            @if ($faculty->image)
            <img src="{{ asset('storage/' . $faculty->image) }}" alt="image" style="margin-bottom: 15px;">
            @endif

          <div class="contents">
              <div class="title-wrapper">
                <h2 class="title">{{ $faculty->name_ar }}</h2>
              </div>
            </div>
          <!-- #####End  book element-->
        </div>
        @endforeach
      </div>
      <!-- #####End row with multiple columns-->
    </div>
  </section>
