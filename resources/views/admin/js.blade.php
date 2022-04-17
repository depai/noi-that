<script>
    function convertToSlug(Text)
        {
            return Text
                .toLowerCase()
                .replace(/ /g,'-')
                .replace(/[^\w-]+/g,'')
                ;
        }

    $(document).ready(function () {
        $('.name').keyup(function () {
            let title = $(this).val();
            $('.slug').val(convertToSlug(title));
        })
        // CKEDITOR.config.height = 600
        // CKEDITOR.config.toolbar = [
        //     { name: 'document', items: [ 'Source', '-', 'Save', 'NewPage', 'ExportPdf', 'Preview', 'Print', '-', 'Templates' ] },
        //     { name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
        //     { name: 'editing', items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
        //     { name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
        //     '/',
        //     { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat' ] },
        //     { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
        //     { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
        //     { name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
        //     '/',
        //     { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
        //     { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
        //     { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
        //     { name: 'about', items: [ 'About' ] }
        // ];
        // CKEDITOR.replace('content', {
        //     filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        //     filebrowserUploadMethod: 'form'
        // })
        // CKEDITOR.replaceAll('js-editor');
    })
    $(document).on('change', '.custom-file-input', function () {
        $(this).parent().siblings('.js-preview-image').removeClass('d-none').addClass('d-flex')
        $(this).parent().siblings('.invalid-feedback').removeClass('d-block').addClass('d-none')
        readURL(this, $(this));
    })
    $(document).on('click', '.js-remote-image', function () {
        let $previewImg = $(this).parents('.js-preview-image');
        $previewImg.empty()
        let $inputImg = $previewImg.siblings('.custom-file');
        let text = `<input name="image" type="file" accept="image/*" class="custom-file-input">`
        $inputImg.children('.custom-file-input').remove();
        $inputImg.prepend(text)
        $('[name=delete_image]').val(1);
    })
    function readURL(input, $this) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                let html = `<div class="position-relative">
                        <img src="${e.target.result}" style="height: 200px; width: auto">
                        <a href="javascript:void(0)" class="position-absolute bg-light d-flex justify-content-center text-decoration-none js-remote-image" style="top: 0; right: 0; width: 16px; height: 16px">
                            <span class="align-self-center text-danger" style="line-height: 1">x</span>
                        </a>
                    </div>`
                $this.parent().siblings('.js-preview-image').html(html);
                $('[name=delete_image]').val('');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(document).on('change', '.js-input-image', function () {
        readURLImage(this, $(this));
    })

    function readURLImage(input, $this) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                let html = `<img src="${e.target.result}" style="height: 35px; width: auto">`
                $this.parent().siblings('.js-preview-image').html(html);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>