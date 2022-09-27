@auth
<!-- <p>Welcome <b>{{ Auth::user()->name }}</b></p> -->
@include('app')
<link rel="stylesheet" href="{{ url('css/homepage/style.css')}}">
    <title>@yield('title', $title)</title>
    </head>
    <body>
        <!-- navbar -->
        @include('navbar')
        <!-- Capt -->
        <div class="container">
            <div class="row mt-4">
                <div class="col-lg-7">
                <div class="card-capt">
                    <p>Walaupun aku gak good looking <br> tapi cintaku padamu ril no akting</p>
                </div>
                <div class="card-capt">
                    <p>Walaupun aku gak good looking <br> tapi cintaku padamu ril no akting</p>
                </div>
                <div class="card-capt">
                    <p>Walaupun aku gak good looking <br> tapi cintaku padamu ril no akting</p>
                </div>
                <div class="card-capt">
                    <p>Walaupun aku gak good looking <br> tapi cintaku padamu ril no akting</p>
                </div>
                <div class="card-capt">
                    <p>Walaupun aku gak good looking <br> tapi cintaku padamu ril no akting</p>
                </div>
                <div class="card-capt">
                    <p>Walaupun aku gak good looking <br> tapi cintaku padamu ril no akting</p>
                </div> 
            </div>
            <div class="col-lg-5">
                <h1 class="text-center mt-1"><--FITUR--></h1>
                <div class="text-center mt-4 card-teks">
                    <h3 class="mt-3">1 to 1</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed ipsa quidem ut aspernatur cum molestias</p>
                </div>
                <div class="text-center mt-4 card-teks">
                    <h3 class="mt-3">1 to 1</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed ipsa quidem ut aspernatur cum molestias</p>
                </div>
                <div class="text-center mt-4 card-teks">
                    <h3 class="mt-3">1 to 1</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed ipsa quidem ut aspernatur cum molestias</p>
                </div>
            </div>
        </div> 
        </div>
    </body>
@endauth
@guest
@include('app')
<link rel="stylesheet" href="{{ url('css/dashboard/style.css')}}">
    <title>@yield('title', $title)</title>
    </head>
    <!-- navbar -->
    @include('navbar')
    <!-- jumbotron -->
    <div class="container jumbotron">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 text-left all-utama text-utama">
                <h4 class="head-jumbo">Selamat datang</h4>
                <h1 class="utama-jumbo">Datang sebagai rumah pulang membawa amanah</h1>
                <p class="des-utama">Platform curhat hanya untukmu, siapa lagi? mari curhat bersama ku</p>
                <a class="btn-start" role="button" href="#fitur" style="text-decoration: none;">Let's Start</a>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <img class="img-utama all-utama" src="{{url('css/img/LovingDoodle.svg')}}" alt="">
            </div>
        </div>
    </div>

<br><br><br><br><br><br><br><br><br><br>

    <!-- mid content -->
    <div class="bg-mid">
        <div class="container animasi">
            <div class="row">
                <div class="col-3">
                    <h3 class="t-mid">WHAT IS CURHATO<span class="t-online">?</span></h3>
                </div>
                <div class="col-9">
                    <p class="mt-5 d-mid">Curhato adalah sebuah media bagi para remaja yang membutuhkan teman bicara untuk membicarakan permasalahannya dan sebagai perantara untuk kalangan remaja dengan orang yang berpengalaman</p>
                </div>
            </div>

        </div>
    </div>

<br><br><br>

    <!-- fitur -->
    <div class="container text-center animasi" id="fitur">
        <h5 class="t-fitur">What Do We Have ?</h5>
        <h2 class="j-fitur">- Feature -</h2>
        <div class="row mt-5">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card-fitur p-4">
                    <img style="width: 100px; margin: auto;" src="{{url('css/img/time.png')}}" alt="">
                    <h5 class="mt-3 isi-fitur">Real Time</h5>
                    <p>Fitur ini memungkinkan pengguna untuk curhat secara real time</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card-fitur p-4">
                    <img class="" style="width: 125px; margin: auto;" src="{{url('css/img/friend 1.png')}}" alt="">
                    <h5 class="mt-3 isi-fitur">Found a New Friend</h5>
                    <p>Fitur ini memungkinkan pengguna untuk curhat secara real time</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card-fitur p-4">
                    <img style="width: 100px; margin: auto;" src="{{url('css/img/happy 1.png')}}" alt="">
                    <h5 class="mt-3 isi-fitur">Find Happiness</h5>
                    <p>Fitur ini memungkinkan pengguna untuk curhat secara real time</p>
                </div>
            </div>
        </div>
    </div>
</body>
<br><br><br>
<hr>
    <!-- service -->
    <center style="color: red; font-weight: 700; font-size: 24px;"></center>
    <center style="color: red; font-weight: 700; font-size: 24px;">COMING SOON</center>

@endguest