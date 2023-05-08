<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
    <title>Module 12 Assignment</title>
   <style>
    label{
        color: aliceblue;
    }
   </style>
</head>
<body>
    <div class="container my-5 col-4">
        <div id="heading">
            <h1 class="text-center fs-2">BMI Calculator</h1>
            <hr>
        </div>
        <form onsubmit="bmiCalculator(event)">
            <div class="mb-3">
                <label for="weightInput" class="form-label">Weight</label>
                <input type="text" name="weightInput" id="weightInput" autocomplete="weightInput" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="heightInput" class="form-label">Height</label>
                <input type="text" name="heightInput" id="heightInput" autocomplete="heightInput" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="result" class="form-label">BMI Result</label>
                <input type="text" name="result" id="result" autocomplete="result" class="form-control">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button type="submit" class="btn btn-primary mb-3">BMI Calculate</button>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
