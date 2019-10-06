@section('script')
    <script type="text/javascript">
        $('#datetimepicker1').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            showClear: true
        });

        $('#datetimepicker1').on("dp.change",function (e) {
            console.log(e);
        });
        $('#title').on('blur', function() {
            var theTitle = this.value.toLowerCase().trim(),
                slugInput = $('#slug'),
                theSlug = theTitle.replace(/&/g, '-and-')
                                  .replace(/[^a-z0-9-]+/g, '-')
                                  .replace(/\-\-+/g, '-')
                                  .replace(/^-+|-+$/g, '');

            slugInput.val(theSlug);
        });        
    </script>
@endsection
