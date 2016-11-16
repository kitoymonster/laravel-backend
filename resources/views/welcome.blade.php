@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">

		    <table class="table table-striped">
			<thead class="thead">
	                    <tr>
				<th> ID </th>
        	                <th> Maintenance Name </th>
                	        <th> Inerval </th>
                            </tr>	
			</thead>
			<tbody>
			@foreach ($entry as $entries)
			    <tr>
			        <th scope="row">{{ $entries->id }}</th>
			        <td>{{ $entries->maintenance_name }}</td>
			        <td>{{ $entries->interval }}</td>
			    </tr>
		    	@endforeach
                        </tbody>
		    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
