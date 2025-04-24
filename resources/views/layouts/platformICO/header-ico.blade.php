<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="{{'Цифровая инвестиционная платформа (ЦИПП) объединяет предпринимателей и инвесторов, предлагая безопасное финансирование стартапов с использованием Blockchain и AI.'}}">
    <meta name="keywords" content="{{__('Цифровая инвестиционная платформа, инвестиции, стартапы, Blockchain, искусственный интеллект, цифровые активы, финансирование проектов, венчурный капитал, прозрачные инвестиции, финансовые технологии')}}">
    <meta name="author" content="KB">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('MainPublic/assets/imgs/template/favicon.svg')}}">
    <link href="{{asset('MainPublic/assets/css/style.css?v=1.0.0')}}" rel="stylesheet">
    <link href="{{asset('MainPublic/assets/css/cipp.css')}}" rel="stylesheet">
    <!-- Диаграмма -->
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    @yield('description')
    <meta name="author" content="KirillB">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Page Title -->
    <title>@yield('title','APP_NAME')</title>


</head>

