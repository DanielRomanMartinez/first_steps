<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>        
    </head>
    <body>
        <div class="container">
            <h1>Notes</h1>

            <ul>
                @foreach ($notes as $note)
                <li>{{ $note ->note }}</li>
                @endforeach
            </ul>
            <form method="POST">
                <!-- Metodo 1: <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                <!-- Metodo 2: -->
                {!! csrf_field() !!}
                <textarea></textarea>
                <button type="submit">Create a new Note</button>
            </form>
        </div>
    </body>
</html>
