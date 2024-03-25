
<!DOCTYPE html>
<html lang="ar" dir='rtl'>

<head>

    @include('backend.sections.head')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('backend.sections.header')

  <!-- ======= Sidebar ======= -->
  @include('backend.sections.sidebar')

  <main id="main" class="main">

  @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('backend.sections.footer')

  <!-- ======= tail ======= -->
  @include('backend.sections.tail')

</body>

</html>
