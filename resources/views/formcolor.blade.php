<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Stop Light</title>

    <style>
        body{
            background-color: rgb(196, 210, 255);
        }
    </style>
</head>
<body>
    <div class="container mt-3 mb-3"></div>
        <center>
            <img src="https://i.ibb.co/8BwQ7ht/Salinan-Stoplight-Dibuat-dengan-Poster-My-Wall.png">
        </center>
        <div class="card w-50 me-auto ms-auto">
            <h3 class="card-header text-center">
            Stop Light
            </h3>
            <div class="card-body">
                <div class="mb-2">
                    <form method="POST" action="process">
                        @csrf
                        <label>Enter a Color Code :</label> <br>
                        <div class="row mt-1">
                        <div class="col-9">
                            <input name="colorCode" type="text" placeholder="Choose between 1, 2, or 3" class="form-control">
                        </div>
                        <div class="col-1">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
