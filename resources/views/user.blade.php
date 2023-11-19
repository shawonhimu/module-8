<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Module-7::Assignment</title>
</head>
<body>

    <h1>{{ $message }}</h1>

    <h2>Your IP Address = {{ $IP }}</h2>

    <form action="/form-data" method="get">
        @csrf
        <input type="text" name="name" id="" placeholder="Enter name" required>
        <input type="text" name="age" id="" placeholder="Enter age" required>
        <input type="submit" value="Submit" id="">
    </form>
    <br><br>
    <hr>
    <form action="/file-upload" method="post" enctype="multipart/form-data">
        @csrf
        <label for="fileUp">Upload a image</label>
        <input type="file" name="photo" id="fileUp" required>
        <input type="submit" value="Upload now" id="">
    </form>
    <br><br><br>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @elseif (session('error'))
    <div class="alert alert-warning">
        {{ session('error') }}
    </div>
    @else
    <div></div>
    @endif
    
</body>
</html>