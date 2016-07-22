@extends('layouts.main_with_sidebar')

<!-- section1 burda baslayir -->
@section('content')
         <form>
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
<<<<<<< HEAD
<<<<<<< HEAD
                          <label for="Entered">Entered</label>
                          <input name="entered" type="date" class="form-control" id="Entered" >
                        </div>
                        <div class="col-md-6">
                           <label for="Graduated">Graduated</label>
                          <input name="graduated" type="date" class="form-control" id="Graduated" >
=======
                          <label for="Entered">Daxil olub</label>
                          <input name="begin" type="number" class="form-control" id="Entered" >
                        </div>
                        <div class="col-md-6">
                           <label for="Graduated">Bitirib</label>
                          <input name="end" type="number" class="form-control" id="Graduated" >
>>>>>>> 310fd2413b0d1ac4d804cc7c818193065f683eb7
=======
                          <label for="Entered">Daxil olub</label>
                          <input name="begin" type="number" class="form-control" id="Entered" >
                        </div>
                        <div class="col-md-6">
                           <label for="Graduated">Bitirib</label>
                          <input name="end" type="number" class="form-control" id="Graduated" >
>>>>>>> 310fd2413b0d1ac4d804cc7c818193065f683eb7
                        </div>  
                    </div>
                    </div>
                    <div class="form-group">
<<<<<<< HEAD
<<<<<<< HEAD
                      <label for="Notes">Additional Notes</label>
                      <textarea name="notes" class="form-control" id="Notes" rows="6"></textarea>
=======
=======
>>>>>>> 310fd2413b0d1ac4d804cc7c818193065f683eb7
                      <label for="Notes">Əlavə qeydlər</label>
                      <textarea name="description" class="form-control" id="Notes" rows="6"></textarea>
>>>>>>> 310fd2413b0d1ac4d804cc7c818193065f683eb7
                    </div>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">YADDA SAXLA</button>
                  </div>
              </form>
@endsection

	
