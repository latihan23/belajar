@extends('tampilanadmin.index')
@section('konten')
<div class="col-12 col-md-6 col-lg-12">
	<div class="card">
	  <div class="card-header">
		@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
	  </div> 
	  @endif
	  <a href="{{route('category.create')}}"class="btn btn-info btn-sm">tambah</a>

		
	<br><br>
	  </div>
	  <div class="card-body p-0">
		<div class="table-responsive">
		  <table class="table table-striped table-md">
			<tr>
			  <th>No</th>
			  <th>Judul Katagori</th>
			  <th>Slug</th>
			  <th>Perintah</th>
			</tr>
			<tr>
				@foreach ($category as $rozak)
					
			  <td>{{$rozak->id}}</td>
			  <td>{{$rozak->name}}</td>
			  <td>{{$rozak->slug}}</td>
				<td>
					<form action="" method="POST">
						@csrf
						@method('delete')
						<a href="{{route('category.edit',$rozak->id)}}"class="btn btn-primary btn-sm">ubah</a>
						<button type="submit" class="btn btn-danger btn-sm">hapus</button>
					</form>
				</td>
			  
			</tr>
			@endforeach
		  </table>
		  {{ $category->links() }}
@endsection
