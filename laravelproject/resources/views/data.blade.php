<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Feedback</h1>
    <table class="table table-striped">
            <thead>
            <tr>
         <th>Name</th>
          {{-- <th>Title</th>
             <th>Feedback</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach($feedback as $feedbacks)
                <tr>
                    <td><a href="{{ route('set.show') }}">{{ $feedbacks->name }}</a></td>

                    {{-- <td>{{ $feedbacks->name }}</a></td>
                    <td>{{ $feedbacks->title }}</td>
                    <td>{{ $feedbacks->feedback }}</td>
                </tr> --}}
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>