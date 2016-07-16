@extends('layouts.layout')

<!-- section1 burda baslayir -->
@section('content')
    
    <div class="container marginTop72">
  <div class="head"></div>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-7">
         <form>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="Faculty">Faculty</label>
                      <input name="faculty" type="text" class="form-control" id="Faculty">
                    </div>
                    <div class="form-group">
                      <label for="University">University</label>
                      <input name="university" type="text" class="form-control" id="University" >
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <label for="Entered">Entered</label>
                          <input name="entered" type="date" class="form-control" id="Entered" >
                        </div>
                        <div class="col-md-6">
                           <label for="Graduated">Graduated</label>
                          <input name="graduated" type="date" class="form-control" id="Graduated" >
                        </div>  
                    </div>
                    </div>
                    <div class="form-group">
                      <label for="Notes">Additional Notes</label>
                      <textarea name="notes" class="form-control" id="Notes" rows="6"></textarea>
                    </div>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">SAVE</button>
                  </div>
              </form>
      </div>
    </div>
    <div class=" row s-bosluq" style="height:50px"></div>
  </div>

@endsection

	
