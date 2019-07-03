<script>
    var route_prefix = "{{ url(config('lfm.prefix')) }}";
</script>

<script src="{!! asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js') !!}"></script>
<script src="{!! asset('/vendor/unisharp/laravel-ckeditor/adapters/jquery.js') !!}"></script>
<script>
    $('.textarea-rte').ckeditor({
        height: 200,
        filebrowserImageBrowseUrl: route_prefix + '?type=Images',
        filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
        filebrowserBrowseUrl: route_prefix + '?type=Files',
        filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
    });
</script>

<script>
    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
</script>
<script>
    $('#lfm').filemanager('image', {prefix: route_prefix});
</script>
