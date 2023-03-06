<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Teacher</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Create Teacher</h2>
        <form action="">
            <div class="form-group">
                <label for="">Division</label>
                <select name="division" class="form-control" id="division">
                    <option value="">SELECT DIVISION</option>
                    @foreach($divisions as $d)
                    <option value="{{ $d->id }}">{{ $d->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">District</label>
                <select name="district" class="form-control" id="district">
                    <option value="">SELECT DISTRICT</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</body>
</html>