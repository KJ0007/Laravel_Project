<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback</title>
  
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">

    <h1 class="mt-5 mb-4">Share Your Feedback</h1>
    <form action="/" method="post" class="mb-4">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="feedback">Feedback</label>
            <textarea name="feedback" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

   
    
</body>
</html>
