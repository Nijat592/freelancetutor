@extends('layouts.main_solid_nav')
<!-- section1 burda baslayir -->
@section('content')


<div class="container register">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 xmainbox">
            <div class="row xheaderx">
                <div class="col-md-12">  <div style="text-align:center; font-size: 18px;color:black; margin-top:20px;"><b>Qeyd Ol</b><div></div>
            </div>
        </div>
    </div>
    <div class="body">
        <form class="form-group" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}
            <div class="row secondline" style="text-align:center";>
                <div class="col-md-6 xsecondlinex"><label>
                    <input type="radio" name="type" id="gridRadios1" value="0">
                    Müəlliməm
                </label></div>
                <div class="col-md-6 xsecondlinex"><label>
                    <input type="radio" name="type" id="gridRadios1" value="1">
                    Tələbəyəm
                </label></div>
            </div>
            <div class="form-group">
                <label for="name">Ad</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="surname">Soyad</label>
                <input type="text" class="form-control" id="surname" name="surname" placeholder="Enter surname">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="pass">Şifrə</label>
                <input type="password" class="form-control" id="pass" name="password" placeholder="Enter password">
            </div>
            <div class="form-group">
                <label for="conpass">Təkrar Şifrə</label>
                <input type="password" class="form-control" id="conpass" name="password_confirmation" placeholder="Re-type password again">
            </div>
            
            {{-- <div class="form-group">
                <label for="address">Unvan</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter surname">
            </div> --}}

            {{-- <div class="form-group">
                <label for="phone">Telefon</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter surname">
            </div> --}}

           {{--  <div class="form-group">
                <label for="city">Sheher</label>
                <input type="text" class="form-control" id="city" name="" placeholder="Enter surname">
            </div> --}}


        </div>
        <div class="row">
            <div class="xcheckbox">
                <label>
                    <input type="checkbox" name="gridRadios" id="gridRadios1" value="option1">
                    <a href="#">Qaydalarla</a> tanış oldum</label></br>
                </label>
                Qeydiyyatdan keçmisiniz ? <a href="#">Daxil ol</a>
            </div>
        </div>
        <div class="row xform-footerx" style="text-align:center">
            <button type="submit" class="btn btn-info btn-md xfooter-buttonx">Qeyd Ol</button>
        </div>
    </form>
</div>
</div>
</div>
</div>
@endsection