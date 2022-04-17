<script>
    let count = 1000;
    $('#js-add-rock').click(function () {
        let text = `<div class="row mb-3 child">
            <div class="col-4">
                <input type="text" class="form-control" name="rocks[${count}][name]" value="">
            </div>
            <div class="col-3">
                <input type="file" accept="image/png, image/jpeg" class="form-control js-input-image" name="rocks[${count}][image]" value="0">
            </div>
            <div class="col-1 js-preview-image">
            </div>
            <div class="col-3">
                <input type="number" class="form-control" name="rocks[${count}][price]" value="0">
            </div>
            <div class="col-1">
                <button class="btn btn-primary js-remove w-100" type="button" id="">-</button>
            </div>
        </div>`;

        $('#rock').append(text);
        count++;
    })

    $(document).on('click', '.js-remove', function () {
        $(this).parents('.child').remove()
    })

    $('#js-add-size').click(function () {
        let text = `<div class="row mb-3 child">
            <div class="col-3">
                <input type="text" class="form-control" name="size[${count}][name]" value="">
            </div>
            <div class="col-2">
                <input type="number" class="form-control" name="size[${count}][width]" value="">
            </div>
            <div class="col-2 align-self-center">
                <input type="number" class="form-control" name="size[${count}][depth]" value="">  
            </div>
            <div class="col-2">
                <input type="number" class="form-control" name="size[${count}][height]" value="">
            </div>
            <div class="col-2">
                <input type="number" class="form-control" name="size[${count}][price]" value="0">
            </div>
            <div class="col-1">
                <button class="btn btn-primary w-100 js-remove" type="button">-</button>
            </div>
        </div>`;

        $('#size').append(text);
        count++;
    })
</script>
<script src="https://cdn.rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    <script>
        Dropzone.autoDiscover = false;
        $(document).ready(function () {
            var myDropzone = new Dropzone("#upload-image", {
                url: "{{ route('upload_image') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                acceptedFiles: "image/*",
                // addRemoveLinks: true,
                init: function () {
                    myDropzone = this;
                    var images = JSON.parse(@json($images));
                    if(images) {
                        $.each(images, function(key,value) {
                            var mockFile = { name: value.name, size: value.size };
                            myDropzone.displayExistingFile(mockFile, value.path);
                            let html = `<input hidden name=images[] value="${value.name}"><a class="custom-dz-remove" href="javascript:undefined;" data-dz-remove=""><i class="mdi mdi-window-close"></i></a>`;
                            $(mockFile.previewElement).append(html);
                        });
                    }
                    this.on("success", function (file, file_name) {
                        let html = `<input hidden name=images[] value="${file_name}"><a class="custom-dz-remove" href="javascript:undefined;" data-dz-remove=""><i class="mdi mdi-window-close"></i></a>`;
                        $(file.previewElement).append(html);
                    });
                }
            });
        })
        $(document).on('click', '.custom-dz-remove', function () {
            $(this).parent().remove();
        })
    </script>