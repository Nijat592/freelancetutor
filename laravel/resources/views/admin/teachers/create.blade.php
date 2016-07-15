@extends('layouts.admin')


@section('content')
<!-- Main content -->
    <section class="content">
      <div class="row">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/admin.teachers">  {{-- ozunden qabaqkini temizleyir --}}
              <div class="box-body">

                <div class="form-group">
                  <label for="FirstName">Ad</label>
                  <input type="name" class="form-control" id="FirstName" name="name" placeholder="Enter name" value="">
                </div>

                <div class="form-group">
                  <label for="LastName">Soyad</label>
                  <input type="surname" class="form-control" id="LastName" name="surname" placeholder="Enter surname" value="">
                </div>

                <div class="form-group">
                  <label for="Email Address">Poçt ünvanı</label>
                  <input type="email" class="form-control" id="EmailAddress" name="email" placeholder="Enter email" value="">
                </div>

                <div class="form-group">
                  <label for="Password">Şifrə</label>
                  <input type="password" class="form-control" id="Password" name="password" placeholder="Enter password" value="">
                </div>

                <div class="form-group">
                  <label for="BirthDate">Doğum Tarixi</label>
                  <input type="date" class="form-control" id="BirthDate" name="birth_date" placeholder="Enter date" value="">
                </div>

                <div class="form-group">
                  <label for="Type">Tip</label>
                      <select class="form-control" name="Type" id="Type">
                        <option value="">Sagird</option>
                        <option value="">Telebe</option>
                      </select>
                </div>

          


                {{-- <div class="form-group">
                  <label for="Type">Tip</label>
                  <input type="type" class="form-control" id="Type" name="Type" placeholder="Enter type" value="{!! $insan->FirstName !!}">
                </div> --}}

                {{-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div> --}}

                {{-- <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div> --}}

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


@stop