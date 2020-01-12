<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Shine Conference 2020</title>
  @include('layout.header')
</head>
<body>
  <div id="swc-wrapper">
    <v-app>
      @include('layout.nav')
      @yield('body')
    </v-app>
  </div>
  @include('layout.footer')
  @include('layout.scripts')
</body>
</html>