@extends('layouts.admin')
@section('breadcrumb')

<li class="active">Create Department</li>
@endsection
@section('content')


  <div class="container-fluid">

	<div class="col-lg-12">
		<h1 class="page-header">New Department</h1>
	</div>


	<form action ="{{ route('departments.store') }}" method="POST">
		{{ csrf_field() }}

		<div class="form-group col-lg-6">
			<label for="name">title</label>
			<input type="text" name="title" class="form-control">
		</div>
		<div class="form-group col-lg-6">
			<label for="name">Body</label>
			<input type="text" name="body" class="form-control">
		</div>

		<div class="form-group col-lg-12">
			<button class ="btn.btn.success" type="submit">Save Department</button>
		</div>

	</form>
</div>
	@endsection
