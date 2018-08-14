<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

   <title>@yield('title')OVA</title>
      
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/mdb.min.css') }}" rel="stylesheet">
    <!--<link href="{{ asset('/css/fontawesome.min.css') }}" rel="stylesheet">-->
    <link href="{{ asset('/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/infocard.css') }}" rel="stylesheet">
    <!--<link href="{{ asset('/plugins/froala/css/fontawesome4.min.css') }}" rel="stylesheet">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/froala/css/codemirror.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/froala/css/froala_editor.pkgd.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/froala/css/froala_style.min.css') }}" rel="stylesheet">
    <!--<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>-->
   
    
    
   <!-- <link rel="stylesheet" href="/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/css/stylenivo.css" type="text/css" media="screen" />-->

    
    @stack('css')
      
    
    @include('layouts.nav')

    @include('cookieConsent::index')
      
  </head>

  <body>

    <div class="container">

    
    @if(count($errors) > 0 )
    <ul class="list-groun" style="padding-top:10px;">

        @foreach($errors->all() as $error)
            <li class="list-group-item text-danger">
                {{ $error }}
            </li>
        @endforeach

    </ul>
    @endif


    </div>
      @include('flash::message')
      
      @yield('content')

      
      @include('layouts.footer')
    
     
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/js/slider.js') }}"></script>
    <script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/mdb.js') }}"></script>
    <!--<script src="/js/fontawesome.js"></script>
    <script src="/js/summernote-lite.js"></script>-->
    <script src="/js/all.js"></script>
    <script src="{{ asset('/js/toastr.min.js') }}"></script>
    <script src="{{ asset('/js/popper.js') }}"></script>
    <script src="{{ asset('/js/bootstrap4.7.js') }}"></script>
    <script src="{{ asset('/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('/tinymce/tinymce.min.js') }}"></script>

    <script src="{{ asset('/plugins/froala/js/codemirror.min.js') }}"></script>
    <script src="{{ asset('/plugins/froala/js/codemirrorxml.min.js') }}"></script>
    <script src="{{ asset('/plugins/froala/js/froala_editor.pkgd.min.js') }}"></script>
    
    <!--<script src="{{ asset('/js/profile.js') }}"></script>-->


 <!-- Initialize the editor. -->
 <script>
    $(function() {
      $('#edit').froalaEditor({
        // Set the file upload URL.
        imageUploadURL: '/upload_image.php',
 
        imageUploadParams: {
          id: 'my_editor'
        }
      })
    });
  </script>

<script>
$(function(){
  $('a').each(function() {
    if ($(this).prop('href') == window.location.href) {
      $(this).addClass('current');
    }
  });
});
</script>


<!--<script>
  var simplemde = new SimpleMDE({
	autofocus: true,
  autoDownloadFontAwesome: false,
	autosave: {
		enabled: true,
		uniqueId: "MyUniqueID",
		delay: 1000,
	},
	placeholder: "Type here...",
	previewRender: function(plainText) {
		return customMarkdownParser(plainText); // Returns HTML from a custom parser
	},

});
</script>-->

@if (Session::has('sweet_alert.alert'))
    <script>
        swal({
            text: "{!! Session::get('sweet_alert.text') !!}",
            title: "{!! Session::get('sweet_alert.title') !!}",
            timer: "{!! Session::get('sweet_alert.timer') !!}",
            type: "{!! Session::get('sweet_alert.type') !!}",
            showConfirmButton: "{!! Session::get('sweet_alert.showConfirmButton') !!}",
            confirmButtonText: "{!! Session::get('sweet_alert.confirmButtonText') !!}",
            confirmButtonColor: "#AEDEF4"

            // more options
        });
    </script>
@endif

<script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
              height: '150px',
              placeholder: 'Content here...'

            });
        });
    </script>


<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    extended_valid_elements : 'span',
    verify_html: true,
    extended_valid_elements: 'a[href|target=_blank]',
    height : 200,
    //toolbar1: 'styleselect | bold italic | numlist bullist',
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
  
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
    
      
     <script>
        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>
  
      <!-- <script src="/js/jquery-1.9.0.min.js"></script>
      <script src="/js/jquery.nivo.slider.js"></script>-->
      <script src="/js/wow.js"></script>

      <script type="text/javascript">
          $(window).load(function() {
              $('#slider').nivoSlider();
          });
          </script> 
      
  <script type="text/javascript">
        $(document).ready(function(){
              $('body').append('<div id="toTopImg" style="display:none">Top</div>');
                $(window).scroll(function () {
                    if ($(this).scrollTop() != 0) {
                        $('#toTopImg').fadeIn();
                    } else {
                        $('#toTopImg').fadeOut();
                    }
                }); 
      $('#toTopImg').click(function(){
          $("html, body").animate({ scrollTop: 0 }, 600);
          return false;
      });
  });
</script>

<script>
var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null // optional scroll container selector, otherwise use window
  }
);
wow.init();

</script>

@if(Session::has('success'))
<script>

     $(document).ready(function() {
      toastr.success("{{ Session::get('success') }}");
      
      toastr.options.timeOut = 1500; // 1.5s
    
  });

</script>
@endif

@if(Session::has('error'))
<script>

     $(document).ready(function() {
      toastr.error("{{ Session::get('error') }}");
      
      toastr.options.timeOut = 1500; // 1.5s
    
  });

</script>
@endif

@if(Session::has('info'))
<script>

     $(document).ready(function() {
      toastr.info("{{ Session::get('info') }}");
      
      toastr.options.timeOut = 1500; // 1.5s
    
  });

</script>
@endif

  </body>
</html>