@extends('layout')
@section('content')
 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" >
                    <h2>Students Dashboard</h2>
                    </div>
                    <div class="card-body">
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>email</th>
                                        <th>Department</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->department }}</td>
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

}    
</style>