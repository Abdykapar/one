

    <!-- Include external CSS. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>

<!-- Create a tag that we will use as the editable area. -->
<!-- You can use a div tag as well. -->
    @if (isset($article))
        <textarea class="form-control" name="content">{{ $article }}</textarea>
    @else
        <textarea class="form-control" rows="20" name="text_option2"></textarea>
        <script> CKEDITOR.replace('text_option2');</script>
    @endif

<!-- Include external JS libs. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<!-- Initialize the editor. -->
