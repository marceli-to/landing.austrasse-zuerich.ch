<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Austrasse Zürich - Administration</title>
<link href="{{ mix('assets/admin/css/app.css') }}" type="text/css" rel="stylesheet" />
<meta name="csrf-token" value="{{ csrf_token() }}" />
</head>
<body>
<div id="app">
    <app-component></app-component>
</div>
<script src="{{ mix('assets/admin/js/app.js') }}" type="text/javascript"></script>
</body>
</html>