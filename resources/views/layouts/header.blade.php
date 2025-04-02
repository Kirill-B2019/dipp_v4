<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('MainPublic/assets/imgs/template/favicon.svg')}}">
    <link href="{{asset('MainPublic/assets/css/style.css?v=1.0.0')}}" rel="stylesheet">
    <!-- Диаграмма -->
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
        #chart {
            width: 1024px;
            height: 600px;
            background-image: url({{asset('MainPublic/assets/imgs/page/ico/diag_bg.png')}}); /* Замените на URL вашего изображения */
            background-size: cover; /* Масштабируем изображение, чтобы оно заполнило весь контейнер */
            background-position: right; /* Центрируем изображение */
        }
        .google-visualization-piechart {
            font-size: 12px; /* Измените размер шрифта здесь */
        }

    </style>
    @yield('description')
    <meta name="author" content="KirillB">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Page Title -->
    <title>@yield('title','APP_NAME')</title>

</head>
