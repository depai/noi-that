<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('.select2').select2()
    $(document).on('change', '.js-change-product', function () {
        let id = $(this).val();
        if (id) {
            let route = '{{ route('products.index') }}' + '/' + id;
            TABU.api(route)
                .then(result => {
                    $('#selectAttribute').html(result.view)
                    $('.js-add-item').removeClass('d-none')
                })
        } else {
            $('#selectAttribute').empty()
            $('.js-add-item').addClass('d-none')
        }
    })

    $(document).on('change', '.js-quantity-order', function () {
        if ($(this).val() < 1) {
            $('.js-add-item').addClass('d-none')
        } else {
            $('.js-add-item').removeClass('d-none')
        }
    })

    $(document).on('click', '.js-add-item', function () {
        let productId = $('#product').val();
        let sizeId = $('#size').val();
        let rockId = $('#rock').val();
        let quantity = $('#quantity').val();
        let data = {
            product_id: productId,
            size_id: sizeId,
            rock_id: rockId,
            quantity: parseInt(quantity)
        }
        if (productId && quantity > 0) {
            let route = '{{ route('orders.add_item') }}';
            TABU.api(route, 'POST', data)
                .then(result => {
                    $('#order-item').html(result.view);
                    $('#selectProduct').modal('hide')
                })
        } else {
            $('#selectProduct').modal('hide')
        }
    })

    $(document).on('click', '.js-remove-product', function () {
        let data = {
            id: $(this).data('id')
        }
        let route = '{{ route('orders.remove_item') }}';
        TABU.api(route, 'POST', data)
            .then(result => {
                $('#order-item').html(result.view);
            })
    })

    $('#status').change(function () {
        if ($(this).val() == 3) {
            $('#reason').removeClass('d-none')
        } else {
            $('#reason').addClass('d-none')
        }
    })
</script>


