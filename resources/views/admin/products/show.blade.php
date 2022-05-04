@include('commons.input.select', ['extend' => 'id=rock','title' => 'Rock', 'field' => 'category_id', 'entry' => '', 'selects' => @$rocks, 'require' => false, 'half' => false, 'default' => ''])
@include('commons.input.select', ['extend' => 'id=size','title' => 'Size', 'field' => 'category_id', 'entry' => '', 'selects' => @$sizes, 'require' => false, 'half' => false, 'default' => ''])
@include('commons.input.input', ['extend' => 'id=quantity','title' => 'Quantity', 'field' => 'quantity', 'type' => 'number', 'entry' => 1, 'require' => true, 'half' => false, 'class' => 'js-quantity-order'])
