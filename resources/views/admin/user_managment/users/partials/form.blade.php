@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif

<label for="">Name</label>
<input type="text" class="form-control" name="name" placeholder="Name" value="@if(old('name')){{old('name')}}@else{{ $user->name or "" }}@endif" required>

<label for="">Email</label>
<input type="text" class="form-control" name="email" placeholder="Email" value="@if(old('email')){{old('email')}}@else{{ $user->email or "" }}@endif" required>

<label for="">Password</label>
<input type="password" class="form-control" name="password" placeholder="Password" required>

<label for="">Confirmation</label>
<input type="password" class="form-control" name="password_confirmation" placeholder="Password confirmation" required>



<hr>
<input type="submit" class="btn btn-primary" value="Save">
