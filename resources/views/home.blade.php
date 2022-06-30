@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- <div class="col-md-12"> -->
            <!-- <div class="card"> -->
                <!-- <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} -->

                    <section>
	<form action="{{route('Feedback')}}" method="post"  class="card-b">
    {{ csrf_field() }}
				<h3 class="text-center font-weight-bold text-dark">YOUR FEEDBACK</h3>
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
	<select name="drop_names" class="input_form" value="old('drop_names ')">
		<option value="" disabled="disabled" selected="true">Select Hospital</option>
		@foreach($select as $selects)
        <option value="{{$selects->names}}" >{{$selects->names}}</option>
        @endforeach
	</select>
<br><br/>
</div>
</div>
<div class="row">
<div class="col-md-12">
	<textarea type="text" name="message" placeholder="Your Message" class="input_form" autocomplete="off" ></textarea>
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



















 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
<style type="text/css">
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

<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css" />

<head>
    <meta charset="utf-8">
    <title>Dashboard - Users</title>
</head>
<body>
    

</body>
</html>