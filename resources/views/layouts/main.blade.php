

    <!-- Include external CSS. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

    <!-- Include Editor style. -->
    <link href="/froala/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="/froala/css/froala_style.min.css" rel="stylesheet" type="text/css" />

<!-- Create a tag that we will use as the editable area. -->
<!-- You can use a div tag as well. -->
    @if (isset($article))
        <textarea class="form-control" name="content">{{ $article }}</textarea>
    @else
        <textarea class="form-control" name="content"></textarea>
    @endif

<!-- Include external JS libs. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

<!-- Include Editor JS files. -->
<script type="text/javascript" src="/froala/js/froala_editor.pkgd.min.js"></script>

<!-- Initialize the editor. -->
<script> $(function() { $('textarea.form-control').froalaEditor() }); </script>
