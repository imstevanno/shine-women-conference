<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Shine Conference 2020 | Registrasi</title>
  @include('layout.header')
</head>
<body>
  <div id="swc-wrapper">
    <v-app>
      <div class="container-fluid" id="registration">
        <div class="row">
          <div class="registration-header">
            <div class="swc-logo">
              <img src="/images/logo.png" alt="">
            </div>
          </div>
          <registration-form></registration-form>
        </div>
      </div>
    </v-app>
  </div>
  @include('layout.footer')
  @include('layout.scripts')
</body>
</html>