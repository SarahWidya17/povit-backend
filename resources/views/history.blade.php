@include('components.sidebar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .photo-placeholder {
            position: relative;
            width: 100%;
            padding-bottom: 100%; /* This maintains a 1:1 aspect ratio */
            background-color: #e0e0e0;
        }
        .photo-placeholder img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container mt-0">
        <h1 class="mb-4">Your Photos</h1>

        <div class="row">
            <div class="col-4 col-md-2 mb-4">
                <div class="photo-placeholder"></div>
            </div>
            <div class="col-4 col-md-2 mb-4">
                <div class="photo-placeholder"></div>
            </div>
            <div class="col-4 col-md-2 mb-4">
                <div class="photo-placeholder"></div>
            </div>
            <div class="col-4 col-md-2 mb-4">
                <div class="photo-placeholder"></div>
            </div>
        </div>
    </div>
    @extends('main.closefriend')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
