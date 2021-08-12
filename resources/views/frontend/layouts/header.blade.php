<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" itemscope itemtype="http://schema.org/WebPage">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="airbnb, booking, city guide, directory, events, hotel booking, listings, marketing, places, restaurant, restaurant">
    <meta name="description" content="Guido - Directory & Listing HTML Template">
    <meta name="CreativeLayers" content="ATFN">
    <!-- css file -->
    {{-- ========================================included==================== --}}
    <link rel="stylesheet" href="{{ asset('/web/themes/guido') }}/css/bootstrap.min.css?v=2.02">
    <link rel="stylesheet" href="{{ asset('/web/themes/guido') }}/css/style.css?v=2.02">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('/web/themes/guido') }}/css/responsive.css?v=2.02">
    <!-- Title -->
    <title> @yield('title') | {{ config('app.name', 'MakaiRooms') }}</title>
    <!-- Favicon -->
    <link rel="stylesheet" href="{{ asset('') }}font/css/all.min.css" />
    <link href="{{ asset('/web/themes/guido') }}/images/favicon.ico?v=2.02" sizes="128x128" rel="shortcut icon"
        type="image/x-icon" />
    <link href="{{ asset('/web/themes/guido') }}/images/favicon.ico?v=2.02" sizes="128x128" rel="shortcut icon" />
    @yield('excss')
    {{-- ========================================included==================== --}}
</head>

<body>
