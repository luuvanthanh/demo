
@extends('layouts.master')


@section('title','List Category')

<!-- import file css (private) -->
@push('css')
<link rel="stylesheet" href="/css/categories/category-list.css">
@endpush

		@section('content')
		{{-- show message --}}
		@if(Session::has('success'))
        <p class="text-success">{{ Session::get('success') }}</p>
    	@endif

  		  {{-- show error message --}}
  	  	@if(Session::has('error'))
        	<p class="text-danger">{{ Session::get('error') }}</p>
    	@endif
		<!-- form search -->
		<form class="row g-3">
			<div class="col-auto">
				<label class="form-control-plaintext">User Name</label>
			</div>
			<div class="col-auto">
				<input type="text" class="form-control"  placeholder="">
			</div>
			<div class="col-auto">
				<button type="submit" class="btn btn-danger mb-3">Search </button>
			</div>
		</form>
		<br>
		<br>
		<br>	
		<!-- create category link -->
		<a href="{{ route('user.create') }}"><button type="button" class="btn btn-danger">Create</button></a>
		<!-- <a href="/category/create"><button type="button" class="btn btn-danger">Create</button></a> -->
		<br>
		<br>
		<br>		
		<!-- display list category table -->
		<table id="category-list"  class="table table-bordered table-hover">
			<thead>
				<tr class="text-center">
					<th>#</th>
					<th>User Name</th>
					<th>Email</th>
					<th colspan="3">Action</th>
				</tr>
			</thead>
			<tbody>
				@if(!empty($users))
				    @foreach($users as $key => $user)
				    <tr class="text-center">
				    	<td>{{$key+1}}</td>
				    	<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
				    	<td><a href="{{ route('user.show', $user->id) }}">Detail</a></td>
				    	<td><a href="{{ route('user.edit', $user->id) }}">Edit</a></td>
				    	<td>
				    		<form action="{{ route('user.destroy', $user->id) }}" method="post">
								@method('DELETE')
				    			@csrf
				    			<input type="submit" onclick="myfunction()" value="Delete" name="submit" class="btn btn-danger">
				    		</form>
				    	</td>
				    </tr>
					@endforeach
				@endif
			</tbody>
		</table>
		
        @endsection
		<script>
			function myfunction(){
				var result = confirm("B???n c?? mu???n x??a b???n ghi n??y?");
				if (result == true) {
					alert("B???n ?????ng ?? x??a");
				} else {
					alert("B???n kh??ng x??a");
				}
			}
		</script>