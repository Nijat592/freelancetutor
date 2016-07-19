
	<div class="pro col-md-12">
		<div class="col-md-3"></div>
		<div class="proshekil col-md-6">
			<div>
				<img src="/image/mans.jpg">
			</div>
		</div>
		<div class="col-md-3">
		</div>
		<div class="sp col-md-12">
			<span class="spa">{{ Auth::user()->name." ".Auth::user()->surname }}</span>
		</div>
		<div class="sp col-md-12">
			<span class="spb">{{ Auth::user()->type == 0 ? "Müəllim" : "Tələbə"}}</span>
		</div>
	</div>
	<div class="hr col-md-12"></div>
	<div class="probtn col-md-12">
		<a href="#" class="btn btn-sm btn-primary">POST JOB</a>
		<a href="#" class="btn btn-sm btn-primary btn-inverse">CREATE RESUME</a>
	</div>
	<div class="promenu list-group col-md-12">
		<a href="#" class="list-group-item"><i class="fa fa-user" aria-hidden="true"></i><span>Profil</span></a>
		<a href="#" class="list-group-item"><i class="fa fa-university" aria-hidden="true"></i><span>Təhsil</span></a>
		<a href="#" class="list-group-item"><i class="fa fa-book" aria-hidden="true"></i><span>Dərslər</span></a>
		@if(Auth::user()->type == 0)
		<a href="#" class="list-group-item"><i class="fa fa-book" aria-hidden="true"></i><span>Fənnlər</span></a>
		<a href="#" class="list-group-item"><i class="fa fa-calendar" aria-hidden="true"></i><span>İş Təcrübəsi</span></a>
		@endif
		<a href="#" class="list-group-item"><i class="fa fa-cog" aria-hidden="true"></i><span>Tənzimləmə</span></a>
		<a href="/" class="list-group-item"><i class="fa fa-sign-out" aria-hidden="true"></i><span>Çıxış</span></a>
	</div>