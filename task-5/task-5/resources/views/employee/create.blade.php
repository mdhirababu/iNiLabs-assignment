<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark py-4">
        <h2 class="text-white text-center">Employee Table</h2>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{route('employee.index')}}" class="btn btn-dark">Back</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Create Employee</h3>
                    </div>
                    <form action="{{route('employees.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <label for="name" class="form-label">Name<span>*</span></label>
                            <input type="text" class="@error('name') is-invalid  @enderror form-control form-control-lg" placeholder="Name" name="name">
                            @error('name')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="card-body">
                            <label for="address" class="form-label">Address<span>*</span></label>
                            <input type="text" class="@error('address') is-invalid  @enderror form-control form-control-lg" placeholder="Name" name="address">
                            @error('address')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="card-body">
                            <label for="email" class="form-label">Email<span>*</span></label>
                            <input type="text" class="@error('email') is-invalid  @enderror form-control form-control-lg" placeholder="Email" name="email">
                            @error('email')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-lg btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
