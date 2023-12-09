<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Default Auth Title' }}</title>
    <x-css-loader></x-css-loader>
</head>

<body>
    <x-header></x-header>
    <main class="d-flex jsutify-content-center align-items-center" style="min-height: 90vh;">{{ $slot }}</main>
    <x-js-loader></x-js-loader>
</body>

</html>
