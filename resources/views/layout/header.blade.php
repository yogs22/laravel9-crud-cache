<title>{{ $title }} - {{ config('app.name') }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite([
    'resources/css/bootstrap.min.css',
    'resources/css/fonts.css',
    'resources/css/utilities.css',
])
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
