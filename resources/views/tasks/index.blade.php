<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>

    </style>
</head>

<body class="bg-dark container">
    <h1 class="text-center bg-secondary m-5 p-3">Tâches</h1>
    <section class="row m-5 ">
        <ul class="text-center list-unstyled col-12 ">

            @foreach($tasks as $task)
            <li class="text-center text-white d-flex justify-content-between bg-secondary m-1 p-3 ">
                {{$task->Description}}
                <form action="/tasks/{{$task->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn bg-light text-dark " type="submit">Delete</button>
                </form>
            </li>
            @endforeach

            <form action="tasks/create" method="POST">
                @csrf
                tache: <input type="text" name="Description" id="Description" placeholder="create something">
                <button type="submit">add</button>
            </form>
        </ul>
    </section>
</body>

</html>
