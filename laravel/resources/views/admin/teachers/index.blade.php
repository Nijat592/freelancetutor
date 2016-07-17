@extends('layouts.admin')
@section('content')
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Ad</th>
                <th>Soyad</th>
                <th>Email</th>
                <th>Şifrə</th>
                <th>Doğum Tarixi</th>
                <th>Tip</th>
              </tr>
            </thead>
            <tbody>
              
              @foreach ($muellimler as $muellim)

                  <tr>
                    <td>{!! $muellim->name !!}</td>
                    <td>{!! $muellim->surname !!}</td>
                    <td>{!! $muellim->email !!}</td>
                    <td>{!! $muellim->password !!}</td>
                    <td>{!! $muellim->birth_date !!}</td>
                    <td>{!! $muellim->type !!}</td>
                  </tr>

              @endforeach

              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
  @stop