//Setup CodeMirror
var textEditor = CodeMirror.fromTextArea(htmlInput, {
    lineNumbers: true,
    mode: "text/html",
    theme: "lucario"
});
textEditor.setSize(700, 1000);

//Load Html from textAre
function compile() {
    var code = document.getElementById("htmlOutput").contentWindow.document;
  
    document.body.onkeyup = function() {
      code.open();
      code.writeln(textEditor.getValue());
      code.close();
    };
  }
  
  compile();