var $summernote = $('#summernote');
var isCodeView;

$(() => {
  $summernote.summernote({
    height: 300,
    focus: true
  });
});

/* Our form won't send data properly while we are in code view mode (HTML editor as opposed to the WYSIWYG editor). It does, however, work in editable (WYSIWYG) mode. Therefore, in case we are in code view, we will toggle it back before submitting our form. In order to do that, we set a boolean true or false depending on the editor state. */

$summernote.on('summernote.codeview.toggled', () => {
  isCodeView = $('.note-editor').hasClass('codeview');
});

$("#edit").submit( (event) => {

  if (isCodeView == true) {
    $summernote.summernote('codeview.toggle');
  }
  
  var body = $summernote.summernote('code');
  document.getElementById('body').setAttribute('value', body);
  
});