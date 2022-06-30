@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    
</head>
<body>
    <style>

.card-b{
width: 50%;
    margin: 0 auto;
     margin-top: 35px;
    padding: 50px 50px;
     box-shadow: 0 2px 15px -0px rgb(0 0 0 / 18%), 0 0px 20px -0px rgb(0 0 0 / 18%);
}
.input_form{
	width: 100%;
    padding: 10px 10px;
    border-radius: 8px;
    border: 1px solid grey;
}
.card-b hr{
	border: 1px solid green;
    width: 8%;
}
</style>

<div class="container">
    <div class="row justify-content-center">

        
    <section>

    <form action = "/users-feedback/edit/<?php echo $users[0]->id; ?>" class="card-b" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

				<h3 class="text-center font-weight-bold text-dark">EDIT FEEDBACK</h3>


				<br/><br/>
             @if(session()->has('message'))
             <span class="text-success">   {{ session()->get('message') }}</span>
    @endif

@if($errors->any())
<div class='alert alert-danger'>
<ul>
@foreach($errors->all() as $error)
<li  style='text-align:left !important;'>
{{$error}}</li>
@endforeach
</ul>
</div>
@endif


	<div class="row">
<div class="col-md-12">
	<select name="drop_names" class="input_form" value = '<?php echo $users[0]->drop_names ?>'>
		<option  disabled="disabled"  selected="true">Select Hospital</option>
		@foreach($select as $selects )
        <option value="{{$selects->names}}">{{$selects->names}}</option>
        @endforeach
	</select>
<br><br/>
</div>
</div>
<div class="row">
<div class="col-md-12">
	<textarea type="text" name="message"   placeholder="Your Message" class="input_form" autocomplete="off" ><?php echo$users[0]->message; ?>s</textarea>
</div></div><br/>
<div class="row">
<div class="col-md-4 text-center">
<input type="submit" name="submit"  class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">
</div>
</div>



	</div>
</form>
</section>      
        </div>
    </div>
</div>
@endsection
</body>
</html>



