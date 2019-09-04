<!DOCTYPE html>
<html lang="en">
<head>

  @include('layouts.header')

</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

      @include('layouts.navbar')

      @include('layouts.sidebar')

      <!-- Main Content -->
      <div class="main-content">

        @yield('content')

      </div>

      @include('layouts.footer')

    </div>
  </div>

  @include('layouts.scripts')
</body>
</html>