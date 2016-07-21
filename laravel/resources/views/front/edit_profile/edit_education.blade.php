@extends('layouts.main_with_sidebar')

<!-- section1 burda baslayir -->
@section('content')
         <form action="{{route("education.update", $education->id)}}" method="post">
         {{ method_field('PATCH') }}
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="Faculty">Faculty</label>
                      <input name="faculty" type="text" class="form-control" id="Faculty" value="{!!$education->faculty!!}">
                    </div>
                    <div class="form-group">
                      <label for="University">University</label>
                      <input name="university" type="text" class="form-control" id="University" value="{!!$education->university!!}">
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <label for="Entered">Entered</label>
                          <input name="begin" type="date" class="form-control" id="Entered" value="{!!$education->begin!!}">
                        </div>
                        <div class="col-md-6">
                           <label for="Graduated">Graduated</label>
                          <input name="end" type="date" class="form-control" id="Graduated" value="{!!$education->end!!}" >
                        </div>  
                    </div>
                    </div>
                    <div class="form-group">
                      <label for="Notes">Additional Notes</label>
                      <textarea name="description" class="form-control" id="Notes" rows="6" >{!!$education->description!!}</textarea>
                    </div>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                  </div>
              </form>
@endsection

	
