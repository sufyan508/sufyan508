<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="container">
    <div id="app">
        <div class="container">

            @if (session('success_message'))
                <div class="alert alert-success">
                    {{ session('success_message') }}
                </div>
            @endif

            <h3>View Tasks</h3>

            <TableDraggableTask :tasks="{{ $task }}"></TableDraggableTask>

            <a href="{{ url('api/user/tasks/create') }}" class="btn btn-primary">Create Tasks</a>

        </div> <!-- end container -->
    </div> <!-- end app -->

    <script src="{{ asset('js/app.js') }}"></script>
