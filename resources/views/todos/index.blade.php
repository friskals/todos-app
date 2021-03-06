@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center my-2">Data Testing </h1>
				 
					<div class="card card-default">
						<div class="card-header">
							Todos
						</div>
						<div class="card-body">
							<ul class="list-group">
								@foreach($todos as $todo)
								<li class="list-group-item">
									{{$todo->name}}
									<a class="btn btn-primary btn-sm float-right" href="/todos/{{$todo->id}}">View</a>
									@if($todo->completed == false)
									<a class="btn btn-info btn-sm float-right mr-3" href="/todos/{{$todo->id}}/completed">Complete Todo</a>
									@endif
								</li>			
								@endforeach
							</ul>
						</div>
					</div> 
			</div>			
		</div>
@endsection