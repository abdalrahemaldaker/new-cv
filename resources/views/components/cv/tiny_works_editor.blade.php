<script>
    tinymce.init({
        selector: 'textarea#{{$selector}}',
        plugins: 'codesample lists  wordcount advlist fullscreen',
        menubar: '',
        toolbar: 'undo redo | fontfamily | fontsize | forecolor backcolor  ltr rtl|  bold italic underline  | align lineheight | numlist bullist indent outdent',
    });
</script>
<style>
    .tox .tox-edit-area__iframe {
        background-color: #fff !important;
    }

    .tox-statusbar {
        display: none !important;
    }

    .tox-toolbar__primary {
        justify-content: space-around;
    }
</style>
<textarea id="{{$selector}}" class="wpforms-field-large"
          name="work_{{$i}}[experience_description_{{$lang}}]">
  {!! $slot ?? '' !!}
</textarea>
