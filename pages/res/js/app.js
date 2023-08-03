//Setup CodeMirror
var textEditor = CodeMirror.fromTextArea(htmlInput, {
  lineNumbers: true,
  lineWrapping: true,
  mode: "text/html",
  matchBrackets: true,
  theme: "lucario",
});
textEditor.setSize(700, "auto");

//Load Html from textAre
function compile() {
  var code = document.getElementById("htmlOutput").contentWindow.document;
  code.open();
  code.writeln(textEditor.getValue());
  code.close();
}
