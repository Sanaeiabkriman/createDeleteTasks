<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/public/css/app.css">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        
        </style>
    </head>
    <body>
       <h1>Tâches</h1>
       <ul>
            @if(count($tasks)>0)
            @foreach($tasks as $task)
           <li>
                {{$task->Description}} <button>Delete</button>
           </li>
            @endforeach
            @else
            <p> No task </p>
            @endif
       </ul>
    </body>
</html>