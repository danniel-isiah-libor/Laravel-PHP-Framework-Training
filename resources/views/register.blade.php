<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
  </head>
  <body>
    <div class="container mb-5 mt-5" style="width: 40rem;">
        <div class="container card">
            <h1 class="mb-5 mt-5 position-relative">This is registration page!</h1>
            <x-form>
                <x-forms.field label="Name" type="text" name="name" />
                <br></br>
                <x-forms.field label="Email" type="email" name="email"/>
                <br></br>
                <x-forms.field label="Password" type="Password" name="password"/>
                <br></br>   
                <x-forms.field label="Confirm Password" type="Password" name="password_confirmation"/>
                <br></br>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Upload File:</label>
                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                </div>
                <br></br>   
                <x-button label="save"/>
            </x-form>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>