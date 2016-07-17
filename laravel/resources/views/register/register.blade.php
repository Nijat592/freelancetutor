@extends('layouts.layout')

<!-- section1 burda baslayir -->
@section('content')
    
    
<div class="container register">
  <div class="row">
    <div class="col-md-6 col-md-offset-3 xmainbox">
    <div class="row xheaderx">
    <div class="col-md-12">  <div style="text-align:center; font-size: 18px;color:black; margin-top:20px;"><b>Create your account</b><div></div>
        </div>
        </div>
        </div>
        <div class="body">
    <div class="row secondline" style="text-align:center";>
    <div class="col-md-6 xsecondlinex"><label>
          <input type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          Teacher
        </label></div>
    <div class="col-md-6 xsecondlinex"><label>
          <input type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          Student
        </label></div>
        </div>
    <form>
         <div class="form-group">
         <label for="name">Name</label>
         <input type="text" class="form-control" id="name" placeholder="Enter name">
         </div>
         <div class="form-group">
         <label for="name">Surname</label>
         <input type="text" class="form-control" id="name" placeholder="Enter surname">
         </div>
         <div class="form-group">
         <label for="name">Email</label>
         <input type="email" class="form-control" id="name" placeholder="Enter email">
         </div>
         <div class="form-group">
         <label for="name">Password</label>
         <input type="password" class="form-control" id="name" placeholder="Enter password">
         </div>
         <div class="form-group">
         <label for="name">Password Confirmation</label>
         <input type="password" class="form-control" id="name" placeholder="Re-type password again">
         </div>
         </div>
         <div class="row">
         <div class="xcheckbox">
         <label>
          <input type="checkbox" name="gridRadios" id="gridRadios1" value="option1">
          By register, I read & accept <a href="#">the terms</a></label></br>
        </label>
          Already have acoount? <a href="#">Log in</a>
         </div>
         </div>
         <div class="row xform-footerx" style="text-align:center">
          <button type="button" class="btn btn-info btn-md xfooter-buttonx">Register</button>
         </div>   
     </form>
     </div>
</div>
</div>
</div>

@endsection

	
