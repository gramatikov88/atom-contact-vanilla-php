<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Add Record Form</title>
</head>

<body>
    <div class="container">
        <form action="insert.php" method="post">
            <p class="md-3">
                <label for="name" class="form-label">Name:</label>
                <input class="form-control" type="text" name="name" id="firstName" required>
            </p>
            <p class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input class="form-control" type="text" name="email" id="lastName" required>
            </p>
            <p class="mb-3">
                <label for="phone" class="form-label">Phone:</label>
                <input class="form-control" type="text" name="phone" id="myAdress" required>
            </p>
            <div class="mb-3">
                <label for="message" class="form-label">Message:</label>
                <!-- <input class="form-control" type="text" name="message" id="message" required> -->
                <textarea name="message form-control" id="" cols="90" rows="10" id="message"></textarea>
            </div>
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>