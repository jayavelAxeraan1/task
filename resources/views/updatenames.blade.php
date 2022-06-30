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

    <form action = "/add-names/edit/<?php echo $select[0]->id; ?>" class="card-b" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

				<h3 class="text-center font-weight-bold text-dark">EDIT NAMES</h3>


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
	<input type="text" name="names"   placeholder="Names" class="input_form" value='<?php echo $select[0]->names; ?>' autocomplete="off" >
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



