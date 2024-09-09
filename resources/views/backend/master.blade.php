<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('backend.admin.includes.header')
@section('header_title')
    @yield('title')
@stop
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    @include('backend.admin.includes.navbar')
    @include('backend.admin.includes.sidebar')
    <div class="content-wrapper">
        @yield('breadcum')
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>
    @include('backend.admin.includes.footer')
</div>
@include('backend.admin.includes.scripts')
<script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 300,
                minHeight: null,
                maxHeight: null,
                // focus: true,
                placeholder: 'Start typing blog...',

                // Full Toolbar with all features
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', [ 'ajaximageupload', 'link', 'video', 'table']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                    ['undo', ['undo']],
                    ['redo', ['redo']],
                    ['hr', ['hr']],
                    ['codeview', ['codeview']],
                    ['undo', ['undo']],
                    ['redo', ['redo']],
                    ['clear', ['removeFormat']]
                ],
                fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica', 'Impact', 'Times New Roman', 'Verdana', 'Tahoma', 'Georgia', 'Lucida Grande'],

                popover: {
                    image: [
                        ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                        ['float', ['floatLeft', 'floatRight', 'floatNone']],
                        ['remove', ['removeMedia']]
                    ],
                    link: [
                        ['link', ['linkDialogShow', 'unlink']]
                    ],
                    air: [
                        ['color', ['color']],
                        ['font', ['bold', 'underline', 'clear']]
                    ]
                },
                callbacks: {
                    onImageUpload: function(files) {
                        uploadImage(files[0]);
                    },
                    onMediaDelete: function(target) {
                        console.log('Media deleted:', target[0].src);
                    }
                }
            });
        });
        function uploadImage(file) {
            var data = new FormData();
            data.append('file', file);
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.summernote').summernote('insertImage', e.target.result, function ($image) {
                    $image.attr('src', e.target.result); // Display the image in the editor
                });
            };
            reader.readAsDataURL(file);
        }
</script>
@stack('scripts')
</body>
</html>
