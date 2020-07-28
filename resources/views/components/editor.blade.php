<div id="editor">
    {!! $data !!}

    </div>
<textarea id="text1" style="width:100%; height:200px; display:none" name="{{$name??'content'}}"></textarea>
<script src="{{ asset('js/wangEditor.min.js') }}"></script>

<script  type="module">
    var E = window.wangEditor
    var editor = new E('#editor')
    var area = $("#text1");
    editor.customConfig.onchange = function (html) {
        area.val(html)
    }
    editor.customConfig.uploadImgServer = "{{route('admin.upload')}}"
    editor.customConfig.uploadFileName = 'picture'

    editor.customConfig.uploadImgHeaders = {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }

    editor.customConfig.uploadImgHooks = {
        customInsert: function (insertImg, result, editor) {
        // 图片上传并返回结果，自定义插入图片的事件（而不是编辑器自动插入图片！！！）
        // insertImg 是插入图片的函数，editor 是编辑器对象，result 是服务器端返回的结果

        // 举例：假如上传图片成功后，服务器端返回的是 {url:'....'} 这种格式，即可这样插入图片：
        var url = result.data.src
        insertImg(url)

        // result 必须是一个 JSON 格式字符串！！！否则报错
        }
    }



    editor.create()
   
    let default_data = "{{$data??''}}";
    area.val(editor.txt.html());
    if(!default_data) {
       area.val('')
    }
</script>        