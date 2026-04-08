<h1>Tâches à accomplir</h1>
    <ul>
        @foreach($tasks as $task)
            <li>{{ $task['title'] }}</li>
        @endforeach
    </ul>
