@extends('layouts.admin')
@section('breadcrumb')

<li class="active">Departments</li>
@endsection
@section('content')


  <div class="container-fluid">

   <hr>
	<h1 class="text-center">notice</h1>
	<hr>
	<a href="{{route('notice.create') }}" class="btn btn-primary">Create</a>
	<table class= "table table-hover">
		<thead>
			<th>notice</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>
		<tbody>
			@if($notices->count() > 0)
				@foreach($notices as $notice)
					<tr>
						<td>
							<a href="{{route('notice.create')}}">{{$notice->title }}</a>
						</td>
						<td>
							<a href="{{ route('notice.edit', ['id' => $notice->id ]) }}" class="btn btn-xs btn-info">Edit</a>
						</td>
						<td>
							<form action="{{ route('notice.destroy', ['id' => $notice->id ]) }}" method="POST">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}

								<button class="btn btn-xs btn-danger">Delete</button>
							</form>
						</td>
					</tr>
				@endforeach
			@else
				<tr>
					<th colspan="5" class="text-center">No Departments yet</th>
				</tr>
			@endif
		</tbody>
	</table>
</div>
</div>
@endsection
