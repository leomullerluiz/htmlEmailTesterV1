//Setup CodeMirror
var textEditor = CodeMirror.fromTextArea(htmlInput, {
    lineNumbers: true,
    mode: "text/html",
    theme: "lucario"
});
textEditor.setSize(700, 500);


//Load Html from textAre
function compile() {
    var html = document.getElementById("htmlInput");
    var code = document.getElementById("htmlOutput").contentWindow.document;
  
    document.body.onkeyup = function() {
      code.open();
      code.writeln(html.value);
      code.close();
    };
  }
  
  compile();