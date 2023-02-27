<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <h3>All Employees</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Birth Date</th>
                    <th>Salary</th>
                    <th>Department</th>
                    <th>Gender</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $e)
                <tr>
                    <td>{{ $e->name }}</td>
                    <td>{{ $e->email }}</td>
                    <td>{{ $e->birth_date }}</td>
                    <td>{{ $e->salary }}</td>
                    <td>{{ $e->department }}</td>
                    <td>{{ $e->gender }}</td>
                    <td>
                        <img src="{{ asset('thumbnail/'.$e->profile_pic) }}" alt="">
                    </td>
                    <td>
                        @if($e->status==1)
                        <span class="badge badge-success">Active</span>
                        @else
                        <span class="badge badge-danger">Inactive</span>
                        @endif 
                    </td>
                    <td>{{ $e->address }}</td>
                    <td>
                        <a href="{{ url('edit-employee/'.$e->id) }}" class="btn-sm btn-secondary">Edit</a>
                        <a data-toggle="modal" data-target="#myModal{{ $e->id }}" class="btn-sm btn-danger">Delete</a>
                        <div class="modal" id="myModal{{ $e->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete Confirmation</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    Are you sure you want to delete <b>{{ $e->name }}</b> ?
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <a href="{{ url('delete-employee/'.$e->id) }}" class="btn btn-success">Yes</a>
                                </div>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</body>
</html>