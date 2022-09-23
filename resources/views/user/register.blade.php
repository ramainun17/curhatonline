@extends('app')
<link rel="stylesheet" href="{{ url('css/register/style.css')}}">
    <title>@yield('title', $title)</title>
    </head>

<body>
<div class="container log-card">
    <div class="card-log">
        <a href="{{ route('home') }}"><img class="icon" src="{{url('css/img/right-arrow (1).png')}}" alt="" ></a>
        <br><br><br>
        <h4 class="log-text">Sign Up</h4>
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('register.action') }}" method="POST">
            @csrf
            
                <label class="form-label">First Name <span class="text-danger">*</span></label>
                <input class="form-control frm-c" type="text" name="fname" value="{{ old('fname') }} " placeholder="First Name" />
            
                <label class="form-label">Last Name <span class="text-danger">*</span></label>
                <input class="form-control frm-c" type="text" name="lname" value="{{ old('lname') }} " placeholder="Last Name" />
            
                <label class="form-label">Username <span class="text-danger">*</span></label>
                <input class="form-control frm-c" type="username" name="username" value="{{ old('username') }}" />
            
                <label class="form-label">Email <span class="text-danger">*</span></label>
                <input class="form-control frm-c" type="email" name="email" value="{{ old('email') }}" />

                <label class="radio-gender">Gender <span class="text-danger">*</span></label>
                <input type="radio" name="gender" value="L"><span style="font-size: 16px; font-weight: 400;"> Laki-laki</span>
                <input class="radio-gender" type="radio" name="gender" value="P"></span style="font-size: 16px; font-weight: 400;"> Perempuan</span></div>
                <br><br>
            
                <label class="col-sm-2 mt-2 col-form-label">Password <span class="text-danger">*</span></label>
                <input class="form-control frm-c" type="password" name="password" />
            
            
                <label class="col-sm-2 mt-2 col-form-label">Password Confirmation<span class="text-danger">*</span></label>
                <input class="form-control frm-c" type="password" name="password_confirm" />
            
            
                <button class="btn btn-primary">Register</button>
                <p style="font-size: 14px; font-weight: 500;">Belum memiliki akun? <span> <a href="{{ route('login') }}">Sudah Memiliki Akun</a></span></p>
            
        </form>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>