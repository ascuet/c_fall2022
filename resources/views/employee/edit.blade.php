<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
       <div class="container">
            <h2>Edit Employee</h2>
            <form action="{{ url('/update-employee/'.$employee->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{ $employee->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" value="{{ $employee->email }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Birth Date</label>
                    <input type="date" name="birth_date" value="{{ $employee->birth_date }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Salary</label>
                    <input type="number" name="salary" value="{{ $employee->salary }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Department</label>
                    <select name="department" class="form-control">
                        <option value="">Select Department</option>
                        <option value="Accounting" {{ $employee->department=='Accounting' ? 'selected' : '' }}>Accounting Dept</option>
                        <option value="Finance" {{ $employee->department=='Finance' ? 'selected' : '' }}>Finance Dept</option>
                        <option value="HRM" {{ $employee->department=='HRM' ? 'selected' : '' }}>Human Resource Management</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Gender</label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" {{ $employee->gender=='Male'?'checked':'' }} value="Male">Male
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" {{ $employee->gender=='Female'?'checked':'' }} value="Female">Female
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" {{ $employee->gender=='Other'?'checked':'' }} value="Other">Other
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="address" class="form-control" cols="30" rows="3">
                        {{ $employee->address }}
                    </textarea>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="status" {{ $employee->status==1?'checked': '' }} value="1">Status
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Update">
                </div>
            </form>
        </div>
 </body>

</html>