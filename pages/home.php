<div class="row">
    <div class="col">
        <!-- ====================== TEXTAREA ====================================== -->
        <textarea name="htmlInput" id="htmlInput" class="htmlInput">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
      body{
          background: #000000;
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
        Col 2
    </div>
</div>
<script>
    var editor = CodeMirror.fromTextArea(htmlInput, {
        lineNumbers: true,
        mode: "text/html",
        theme: "lucario"
    });
    editor.setSize(700, 500);
</script>