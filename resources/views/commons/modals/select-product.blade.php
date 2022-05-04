<div class="modal" id="selectProduct">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Item</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    @include('commons.input.select', ['extend' => 'id=product','class' => 'select2 js-change-product', 'title' => 'Product', 'field' => 'product_id', 'entry' => '', 'selects' => @$products, 'require' => true, 'half' => false, 'default' => ''])
                </div>
                <div class="row" id="selectAttribute">

                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary js-add-item d-none">Add</button>
            </div>

        </div>
    </div>
</div>
