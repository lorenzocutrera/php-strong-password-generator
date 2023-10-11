<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #001632;
        }
        h1{
            color: #818b9a;
        }
        h3{
            color: white;
        }
        form {
            background-color: white;
        }
    </style>
</head>

<body>

    <h1 class="text-center mt-5">Strong Password Generator</h1>
    <h3 class="text-center">Genera una password sicura</h3>

    <div class="container">

        <form class="p-4">
            <div class="mb-3">
                <label for="psw_lenght" class="form-label">Lunghezza password:</label>
                <input type="password" class="form-control" id="psw_lenght" aria-describedby="emailHelp">
            </div>
            <div class="my-3">
                <label for="exampleInputPassword1" class="form-label">Consenti ripetizioni di uno o più caratteri:</label>
                <div class="radio_form">
                    <input type="radio" name="repeat" id=""><span>SI</span>
                    <input type="radio" name="repeat" id=""><span>NO</span>
                </div>
                
                <div class="mb-3">
                
                       <input type="checkbox" class="form-check-input" id="lettere">
                    <label class="form-check-label" for="lettere">Lettere</label> 
                    
                
                        <input type="checkbox" class="form-check-input" id="numeri">
                    <label class="form-check-label" for="numeri">Numeri</label>
                    
                    
                    <input type="checkbox" class="form-check-input" id="singoli">
                    <label class="form-check-label" for="singoli">Singoli</label>

                </div>
              
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="submit" class="btn btn-secondary">Annulla</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>