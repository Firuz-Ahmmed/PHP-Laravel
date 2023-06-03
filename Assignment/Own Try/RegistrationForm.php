<!DOCTYPE html>
<html>

<head>
    <title> Registration Form For Management site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <h1 style="text-align: center;">Registration form</h1>
                <h6 style="text-align: center;color:blue;">Please fill this form to create an account.</h6>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <form class="col-6">
                <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="confirmpassword" class="form-label">Confirm Password</label>
                    <input type="confirmpassword" class="form-control" id="confirmpassword">
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
                <div class="mb-3">
                    <p>Already have an account?</p>
                    <a href="#" style="color: blue;">Login Here</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>