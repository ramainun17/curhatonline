@extends('app')
<link rel="stylesheet" href="{{ url('css/login/style.css')}}">
    <title>@yield('title', $title)</title>
    </head>

<body>
<div class="container log-card">
        <div class="card-log">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('login.action') }}" method="POST">
            @csrf
            <a href="{{ route('home') }}"><img class="icon" src="{{url('css/img/right-arrow (1).png')}}" alt="" ></a>
            <br><br><br>
            <h4 class="log-text">Login</h4>
            
                <label class="form-label">Username <span class="text-danger">*</span></label>
                <input class="form-control frm-c" type="username" name="username" value="{{ old('username') }}" />
            
            
                <label class="col-sm-2 mt-2 col-form-label">Password <span class="text-danger">*</span></label>
                <input class="form-control frm-c mb-5" type="password" name="password" />
            
            
                <button class="btn-log">Login</button>
                <p style="font-size: 14px; font-weight: 500;">Belum memiliki akun? <span> <a href="{{ route('register') }}">Daftar disini</a></span></p>
        </form>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>