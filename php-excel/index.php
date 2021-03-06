<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial - Aprende a leer un archivo excel y obtener sus datos con PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Tutorial - Aprende a leer un archivo excel y obtener sus datos con PHP</h1>
        <div class="row pt-4">
            <div class="col-md-5 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="process.php" enctype="multipart/form-data">
                            <div class="mb-2">
                                <label for="formFile" class="form-label">Adjuntar Excel</label>
                                <input required class="form-control" type="file" id="formFile" name="file" accept=".xlsx,.csv">
                            </div>
                            <div class="d-grid gap-2 mt-5"><button type="submit" class="btn btn-primary btn-block" name="submit">Procesar</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>