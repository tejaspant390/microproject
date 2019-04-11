<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="alignment: center">
    <div class="col-5">

    <h2>Fueling Records</h2>
    <form action="fuelrecordsbackend.php" method="post">
        <div class="form-group">
            <label for="vehicle">Vehicle Number:</label>
            <input type="number" class="form-control" id="vehicle" placeholder="Enter vehicle number" name="vehicle">
        </div>
        <div class="form-group">
            <label for="pwd">Date:</label>
            <input type="date" class="form-control" id="date" placeholder="Enter date" name="date">
        </div>
        <div class="form-group">
            <label for="km">KM:</label>
            <input type="number" class="form-control" id="km" placeholder="Enter km" name="km">
        </div>
        <div class="form-group">
            <label for="station">Fuel Station:</label>
            <input type="text" class="form-control" id="station" placeholder="Enter fuel station" name="fuel">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" class="form-control" id="quantity" placeholder="Enter fuel quantity" name="quantity">
        </div>
        <div class="form-group">
            <label for="cost">Fuel Cost:</label>
            <input type="number" class="form-control" id="cost" placeholder="Enter fuel cost" name="cost">
        </div>

        <button type="submit" class="btn btn-primary" name="add_fuel">Submit</button>
    </form>
</div>

</div>

</body>
</html>
