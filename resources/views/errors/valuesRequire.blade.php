<div class="row">
	@if (count($errors) > 0)
		<div class="alert alert-info">
			<strong>Error!</strong> Se han presentado problemas con tus datos:<br><br>
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
</div>