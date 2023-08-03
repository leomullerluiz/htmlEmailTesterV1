<form action="" method="POST" class="htmlInputForm">
    <div class="row">
        <div class="col">
            <a class="btn btn-dark" onclick="compile()">Run</a>
        </div>
        <div class="col">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">E-mail:</span>
                </div>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
            </div>
        </div>
        <div class="col">
            <input type="submit" value="Enviar" class="btn btn-primary">
        </div>

        
    </div>

    <div class="row">
        <div class="col">
            <!-- ====================== TEXTAREA ====================================== -->
            <textarea name="htmlInput" id="htmlInput" class="htmlInput">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo</title>
    <style>
      body{
          background: #ff00ff;
      }
    </style>
  </head>
  <body>
    <h1>Hello, world!</h1>
  </body>
</html>
        </textarea>
            <!-- ====================== TEXTAREA ====================================== -->
        </div>
        <div class="col">
            <iframe class="htmlOutput" id="htmlOutput"></iframe>
        </div>
    </div>
</form>