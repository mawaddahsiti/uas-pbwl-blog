@extends('layouts.app')
@section('content')

<div class="container">
	<h4 class="p-3 mb-2 bg-secondary text-white">Edit Data Kategori</h4>
	<form action="{{ url('/category/' . $row->cat_id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table>
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="cat_name" value="{{ $row->cat_name}}"></td>
		</tr>

		<tr>
			<td>KETERANGAN</td>
			<td><input type="text" name="cat_text" value="{{ $row->cat_text}}"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" class="btn btn-success" value="UPDATE"></td> 
		</tr>
	</table>
	</form>
</div>
@endsection