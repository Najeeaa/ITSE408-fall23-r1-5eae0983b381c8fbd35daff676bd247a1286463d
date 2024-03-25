<section class="page-contents">
    <!-- #####Begin main area-->
    <section id="main-area">
      <section class="section slim-container">
        <div class="container">


                    <div class="heading-with-sub text-center">
                        <h2 class="title">Latest Announcements </h2>
                        <h4 class="subtitle">We publish news about latest changes, announcements and recent projects</h4>
                    </div>




                    <div class="row multi-columns-row col-margin-bottom-50">
    @foreach ($announcement as $announcemen )

    <div class="col-md-4">
      <!-- #####Begin journal element--><a href="#" class="journal-el set-bg"><img src="../../assets/img/publications/grid/04.jpg" class="set-me">
        <div class="contents">
          <div class="header">
            <h6>{{$announcemen->created_at}}</h6>
          </div>
          <div class="footer">
            <h6 class="sub-title">{{$announcemen->Status}}</h6>
            <h2 class="title">{{$announcemen->Name}}</h2>
          </div>
        </div></a>
      <!-- #####End journal element-->
    </div>
    @endforeach
    {{-- <div class="col-md-4">
      <!-- #####Begin journal element--><a href="#" class="journal-el set-bg"><img src="../../assets/img/publications/grid/03.jpg" class="set-me">
        <div class="contents">
          <div class="header">
            <h6>5 Sep 2015</h6>
          </div>
          <div class="footer">
            <h6 class="sub-title">Expo</h6>
            <h2 class="title">Postgraduate mixer at the Chelsea MA show</h2>
          </div>
        </div></a>
      <!-- #####End journal element-->
    </div>
    <div class="col-md-4">
      <!-- #####Begin journal element--><a href="#" class="journal-el set-bg"><img src="../../assets/img/publications/grid/02.jpg" class="set-me">
        <div class="contents">
          <div class="header">
            <h6>8 Sep 2015</h6>
          </div>
          <div class="footer">
            <h6 class="sub-title">Expo</h6>
            <h2 class="title">Meeting</h2>
          </div>
        </div></a>
      <!-- #####End journal element-->
    </div> --}}
</div>

</div>
</section>
</section>
</section>
