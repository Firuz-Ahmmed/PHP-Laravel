<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form Validation</title>
</head>

<body>
    <div class="container pt-5 my-5 bg-dark text-white col-3 justify-content-center">
        <h2 class="text-center">Form Validation</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('hello') }}" method="POST" class="col-6 offset-3 justify-content-center">
            @csrf
            <div class="form-group">
                <span for="name">Name</span>
                <input type="text" id="name" name="name" class="form-control"><br>
            </div>
            <div class="form-group">
                <span for="email">Email</span>
                <input type="email" id="email" name="email" class="form-control"><br>
            </div>
            <div class="form-group">
                <span for="password">Password</span>
                <input type="password" id="password" name="password" class="form-control"><br>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </form>

    </div>

</body>

</html>
