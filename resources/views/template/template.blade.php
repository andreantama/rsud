<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="Instalasi Teknologi Komunikasi dan Informasi">
    <meta name="keywords" content="ITKI, RSDS">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
    <title>@yield('title')</title>
    @livewireStyles
  </head>
  <body>
  <div class="container">
    <div class="header">
      <h1>Header</h1>
    </div>
    <div class="main">
      <div class="sidebar">
        <ul class="menu">
          <li><a href="{{ Route("index") }}">From Input</a></li>
          <li><a href="#">Lorem</a></li>
        </ul>
      </div>
      <div class="content">
        @yield('content')
      </div>
    </div>
    <div class="footer">
      <h1>Footer</h1>
    </div>
  </div>
    @livewireScripts
  </body>
</html>