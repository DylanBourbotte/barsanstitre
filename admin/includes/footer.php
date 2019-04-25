<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="./bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- CKEDITOR 5 -->
<script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>


<script>

function MyUploadAdapterPlugin( editor ) {
    editor.plugins.get( 'FileRepository' ).createUploadAdapter = function( loader ) {
       
    };
}

var allEditors = document.querySelectorAll('.editor');
for (var i = 0; i < allEditors.length; ++i) {
  ClassicEditor.create(allEditors[i], {
      toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
      //plugins: [ Bold, Italic, Underline, Strikethrough, Code, Subscript, Superscript ],
      extraPlugins: [ MyUploadAdapterPlugin ],
  }).then( editor => {
      console.log(editor.ui.view.toolbar.element );
    } )
    .catch( error => {
        console.error( error );
    } );;

}

$('.btn-ckeditor').on('click', function(e) {

var ckcontent = $(e.target).closest('ck-content').find('.ck-content');
var textarea = $(e.target).closest('ck-form').find('ck-content');
console.log(textarea);
console.log(ckcontent);
  // console.log(this.closest('.ck-content').html);
  // content = $('.ck-editor__editable_inline').html;
  // console.log(content);

})

</script>