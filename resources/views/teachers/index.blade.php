@extends('layout')
@section('content')
 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" >
                    <h2>Teachers Dashboard</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/teachers/create') }}" class="btn btn-success btn-sm" title="Add New Teacher">
                            <i class="fa fa-plus" ></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>phone</th>
                                        <th>Department</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($teachers as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->subject }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->Department }}</td>
 
                                        <td>
                                            <a href="{{ url('/teachers/' . $item->id) }}" title="View Teacher"><button class="btn btn-info btn-sm"> View</button></a>
                                            <a href="{{ url('/teachers/' . $item->id . '/edit') }}" title="Edit Teacher"><button class="btn btn-primary btn-sm"><i class="far fa-edit"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/teachers/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" style="background-color:red;" class="btn btn-danger btn-sm" title="Delete Teacher" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
@endsection

<style>
.btn:hover{
    box-shadow: 0 7px 12px rgba(0, 0, 0, 0.2);
}


</style>