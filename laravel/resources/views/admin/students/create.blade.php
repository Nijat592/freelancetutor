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
            <form method="POST" action="/admin/students/store">
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputName">Name</label>
                  <input name="name" type="text" class="form-control" id="exampleInputName" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputSurName">Surname</label>
                  <input name="surname" type="text" class="form-control" id="exampleInputSurName" placeholder="Surname">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                 <div class="form-group">
                  <label for="exampleInputBirthdate">Birth Date</label>
                  <input name="birth_date" type="date" class="form-control" id="exampleInputBirthdate" placeholder="Birth Date">
                </div>
                
              </div><!-- /.box-body -->
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