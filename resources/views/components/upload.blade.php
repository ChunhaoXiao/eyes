
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

<!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->
<!-- link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/css/fileinput-rtl.min.css" media="all" rel="stylesheet" type="text/css" /-->
<!-- the font awesome icon library if using with `fas` theme (or Bootstrap 4.x). Note that default icons used in the plugin are glyphicons that are bundled only with Bootstrap 3.x. -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">

<!-- <script src="https://cdn.bootcss.com/jquery/3.5.0/jquery.js"></script> -->
<!-- piexif.min.js is needed for auto orienting image files OR when restoring exif data in resized images and when you
    wish to resize images before upload. This must be loaded before fileinput.min.js -->
<script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/plugins/piexif.min.js" type="text/javascript"></script>
<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview. 
    This must be loaded before fileinput.min.js -->
<script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/plugins/sortable.min.js" type="text/javascript"></script>
<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for 
    HTML files. This must be loaded before fileinput.min.js -->
<script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/plugins/purify.min.js" type="text/javascript"></script>
<!-- popper.min.js below is needed if you use bootstrap 4.x (for popover and tooltips). You can also use the bootstrap js 
   3.3.x versions without popper.min.js. -->
<script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- bootstrap.min.js below is needed if you wish to zoom and preview file content in a detail modal
    dialog. bootstrap 4.x is supported. You can also use the bootstrap js 3.3.x versions. -->
<script type="module" src="{{asset('js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
<!-- the main fileinput plugin file -->
<script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/fileinput.min.js"></script>
<!-- following theme script is needed to use the Font Awesome 5.x theme (`fas`) -->
<script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/themes/fas/theme.min.js"></script>
<!-- optionally if you need translation for your language then include the locale file as mentioned below (replace LANG.js with your language locale) -->
<script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/locales/LANG.js"></script>
</head>

<label class="control-label">选择文件</label>
<input id="{{$id??'uploadimg'}}" name="{{$name?? 'picture' }}" type="file" multiple>

<!-- <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script> -->

<script type="module">
$(document).ready(function() {
    const id = "{{$id}}"
    const fname = "{{$fname}}"
    $("#"+id).fileinput({
    	showCaption: false, 
    	dropZoneEnabled: false, 
    	maxFileCount: 10,
    	uploadUrl: "{{ $uploadUrl??'' }}",
        //enableResumableUpload: true,
        autoReplace:true,
        uploadExtraData:{fname:fname},
       // initialPreview: ["<img   src={{asset('images/cat.jpg')}} class='file-preview-image'/>"],
        initialPreviewConfig: [
        {
            caption: 'desert.jpg',
            //width: '50px',
            url: '/localhost/avatar/delete',
            key: 1000,
            extra: {id: 100},
            
        }
        ],
        previewSettings:{
            image: {width: "auto", height: "auto", 'max-width': "100%", 'max-height': "100%"},
        }
        
        
    });
});
</script>
</body>