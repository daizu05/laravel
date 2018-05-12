<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> @yield('page-title')</title>
        <!-- Let browser know website is optimized for mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- This is for Chrome, Firefox OS and Opera -->
        <meta name="theme-color" content="teal">
        <!-- This is for Windows Phone -->
        <meta name="msapplication-navbutton-color" content="teal">
        <!-- This is for iOS - Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="teal">
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="192x192" href="{{ url('assets/images/AndroSms-192x192.png') }}">
        <link rel="icon" sizes="192x192" href="{{ url('assets/images/AndroSms-192x192.png') }}">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <style>
          /**** Remove Outline Orange Border in Android ****/
          button, form, textarea, select, input {
            outline: none !important;
          }
        </style>
    </head>
<body>