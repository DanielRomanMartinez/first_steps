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
        </div>
    </body>
</html>
