@extends('layouts.main_with_sidebar')

<!-- section1 burda baslayir -->
@section('content')
         <form action="{{route("education.store")}}" method="post">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="Faculty">Fakültə</label>
                      <input name="faculty" type="text" class="form-control" id="Faculty">
                    </div>
                    <div class="form-group">
                      <label for="University">Universitet</label>
                      <input name="university" type="text" class="form-control" id="University" >
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <label for="Entered">Daxil olub</label>
                          <input name="begin" type="number" class="form-control" id="Entered" >
                        </div>
                        <div class="col-md-6">
                           <label for="Graduated">Bitirib</label>
                          <input name="end" type="number" class="form-control" id="Graduated" >
                        </div>  
                    </div>
                    </div>
                    <div class="form-group">
                      <label for="Notes">Əlavə qeydlər</label>
                      <textarea name="description" class="form-control" id="Notes" rows="6"></textarea>
                    </div>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">YADDA SAXLA</button>
                  </div>
              </form>
@endsection

	
