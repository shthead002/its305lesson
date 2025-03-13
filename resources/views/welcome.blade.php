<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
</head>

<body>
    @foreach ($studs as $stud)
        <div class="col-12">
            <span>{{ $stud->email }} - {{ $stud->first_name }} {{ $stud->middle_name }} {{ $stud->last_name }} {{ $stud->suffix->name ?? '' }} - {{ $stud->year_level->name }} ({{ $stud->status->name }})</span>
        </div>
    @endforeach
    <!-- Vendor js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>
