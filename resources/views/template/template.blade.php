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
    @yield('content')
    @livewireScripts
  </body>
</html>