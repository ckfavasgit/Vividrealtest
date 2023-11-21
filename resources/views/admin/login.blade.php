<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .form-signin {
            width: 100%;
            max-width: 400px;
        }
    </style>
</head>
<body>

<div class="container">
    <form class="form-signin" method="POST" action="{{ route('login') }}" >
        @csrf
        
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
            </div>
        @endif

        <div class="form-group">
            <label for="inputEmail">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address"  autofocus name="email" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password"  name="password" >
        </div>

        

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
