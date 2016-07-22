@extends('layouts.main')
@section('content')
<section class="sec1">
  <div class="container-fluid">
    <div class="row">
      <!-- section'daki boslugu bu divle doldurmusham -->
      <div class="bosluq"></div>
      <div class="bosluq"></div>
      <div class="col-md-12 text-center menutext">
        <h1>Müəllimini Bu Gün Tap!</h1>
      </div>
    </div>
    <div class="col-md-12 text-center smtext"> 
      <h3>Elmin hər sahəsinə burada yiyələnin</h3>
    </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-3 search">
      <div class="col-md-12">
         <form action="/results" method="get" accept-charset="utf-8">
          <div class="col-md-6">
           <select name="subject"  class="searchbuttondrop">
              <option value="Fenn secin" >Fənn seçin</option>
              @foreach($kateqoriya as $kate)
                <option value="" disabled>{{$kate->title}}</option>
              @foreach($kate->subjects as $fenns)
                <option value="{{$fenns->id}}">{{$fenns->title  }}</option>
              @endforeach
              @endforeach
            </select>
          </div>
          <div class="col-md-6">       
             <select name="city" class="searchbuttondrop">
              <option value="Sheher secin" >Şəhər seçin</option>
              @foreach($city as $cities)
                <option value="{{$cities->id}}">{{$cities->title  }}</option>
              @endforeach
            </select>
            <button type="submit" class="indexsearch" value='axtar'"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
              
        </form>
      </div>
       
      </div>
    </div>
  </section>
  <!-- section2 burda baslayir -->
  <section class="sec2">
    <div class="container">
      <!-- section'daki boslugu bu divle doldurmusham -->
      <div class="bosluq"></div>
      <!--  -->
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 style=" letter-spacing: 2px;font-size:40px;"><b>kateqoriyaya görə müəllim tap</b></h1>
        </div>
      </div>
      <div class="row" style="margin-top:50px;">

        @foreach($kateqoriya as $kateqor)

        <div class="col-md-4 text-center">
          <div>
            <i class="fa fa-laptop fa-4x" aria-hidden="true"></i>
          </div>
          <div>
            <h5><b>{{ $kateqor->title }}</b></h5>

            <p>mensub fennler: </p>
            @foreach($kateqor->subjects as $sub)
            <div class="sec2b col-md-10 col-md-offset-1">
              <a href="/results?subject={{ $sub->id}}">{{ $sub->title }}</a>
           
            </div>
             @endforeach
          </div>
        </div>

        @endforeach

        
      <div class="col-md-12 text-center">
        <a href="#" class="btn btn-primary bt-large mybutton"><b>BÜTÜN KATEQORİYALAR</b></a>
      </div>
      {{--  <div class="row">
        
      </div> --}}
    </div>
  </section>
  <div class='main-wrapper'>
    <div class="lupa">
      <div class="container">
        <div class="col-md-12 spana">
          <span >vaxtınızı öyrənməyə sərf edin</span>
        </div>
        <div class="col-md-12 spanb">
          <span>Prevailed sincerity behaviour to so do principle departure.</span>
        </div>
        <div class="col-md-12" id='lupayaz'>
          <div class="col-md-4 lupayaz1">
            <div class="col-md-12">
              <img src="image/FIRST.png">
            </div>
            <div class="col-md-12">
              <h5>Axtar</h5>
            </div>
            <div class="col-md-12">
              <p>Set up a targeted alert and be first to the latest jobs.</p>
            </div>
            <div class="col-md-12 aclas">
              <a href="#" class="btn btn-secondary" >Create alert</a>
            </div>
          </div>
          <div class="col-md-4 lupayaz1 lupabashbela">
            <div class="col-md-12">
              <img src="image/FAST.png">
            </div>
            <div class="col-md-12">
              <h5>Əlaqə qur</h5>
            </div>
            <div class="col-md-12">
              <p>Create an account and access your saved settings on any device.</p>
            </div>
            <div class="col-md-12 aclas">
              <a href="#" class="btn btn-secondary" >Register now</a>
            </div>
          </div>
          <div class="col-md-4 lupayaz1 lupabashbela">
            <div class="col-md-12">
              <img src="image/SMART.png">
            </div>
            <div class="col-md-12">
              <h5>Öyrən</h5>
            </div>
            <div class="col-md-12">
              <p>Don't just find. Be found. Put your CV in front of great employers.</p>
            </div>
            <div class="col-md-12 aclas">
              <a href="#" class="btn btn-secondary" >upload resume</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sponsor">
      <div class="container">
        <div class="row">
          <div class="col-md-12 spb">
            <span>you can be the next</span>
          </div>
          <div class="col-md-12 spb1">
            <span>But extremity sex now education concluded earnestly her continual.</span>
          </div>
          <div class="col-md-12 but">
            <a href="#" class="btn btn-primary btn-lg">Post a job</a>
            <a href="#" class="btn btn-primary btn-lg">Uploade resume</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection