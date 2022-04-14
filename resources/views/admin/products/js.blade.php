<script>
    $('#js-add-rock').click(function () {
        let text = `<div class="row mb-3 child">
        <div class="col-6">
            <select name="rocks[]name" class="form-control">
                <option value=""></option>
                @foreach ($rocks as $rock)
                    <option value="{{ $rock->id }}">{{ $rock->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-2 align-self-center">
            <label class="m-0" style="padding-left: 0">Price(VND): </label>
        </div>
        <div class="col-3">
            <input type="number" class="form-control" name="rocks[]price" value="0">
        </div>
        <div class="col-1">
            <button class="btn btn-primary js-remove w-100" type="button" id="">-</button>
        </div>
    </div>`;

        $('#rock').append(text);
    })

    $(document).on('click', '.js-remove', function () {
        $(this).parents('.child').remove()
    })

    $('#js-add-size').click(function () {
        let text = `<div class="row mb-3 child">
            <div class="col-3">
                <input type="text" class="form-control" name="size[]name" value="">
            </div>
            <div class="col-2">
                <input type="number" class="form-control" name="size[]width" value="">
            </div>
            <div class="col-2 align-self-center">
                <input type="number" class="form-control" name="size[]depth" value="">  
            </div>
            <div class="col-2">
                <input type="number" class="form-control" name="size[]height" value="">
            </div>
            <div class="col-2">
                <input type="number" class="form-control" name="size[]price" value="0">
            </div>
            <div class="col-1">
                <button class="btn btn-primary w-100 js-remove" type="button">-</button>
            </div>
        </div>`;

        $('#size').append(text);
    })
</script>