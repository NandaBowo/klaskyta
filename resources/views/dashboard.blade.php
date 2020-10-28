@extends('layouts.main')

@section('title', 'KlasKyta')

@section('content')
<h1 class="text-center">Dashboard</h1>
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Name</th>
			<th scope="col">Contact</th>
			<th scope="col">Address</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">1</th>
			<td>George</td>
			<td>37283439</td>
			<td>Golden Street 4</td>
		</tr>
	</tbody>
</table>
@endsection