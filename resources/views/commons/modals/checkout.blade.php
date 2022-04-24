<div id="block-webform-2"
    class="request-info-prod block block-webform block-webform-block no-title">
    <div class="close-webform-modal-2" style="position: absolute; top: 7px; right: 15px; cursor: pointer">
      <i class="fas fa-times"></i>
    </div>
    <div class="content block-content">
        <form
            class="webform-submission-form webform-submission-add-form webform-submission-request-information-form webform-submission-request-information-add-form webform-submission-request-information-node-2680-form webform-submission-request-information-node-2680-add-form js-webform-details-toggle webform-details-toggle"
            data-drupal-selector="webform-submission-request-information-node-2680-add-form"
            action="{{ route('checkout') }}" method="post"
            accept-charset="UTF-8">
            @csrf
            <h1 class="post-title"><span>Checkout</span>
            </h1>
            <div
                class="js-form-item form-item js-form-type-textfield form-item-name js-form-item-name">
                <label for="edit-name"
                    class="js-form-required form-required">Full Name *</label>
                <input type="text" value="" name="full_name" required>
            </div>
            <div
                class="js-form-item form-item js-form-type-textfield form-item-name js-form-item-name">
                <label for="edit-name"
                    class="js-form-required form-required">Phone *</label>
                <input type="text" value="" name="phone" required>
            </div>
            <div
                class="js-form-item form-item js-form-type-textfield form-item-name js-form-item-name">
                <label for="edit-name"
                    class="js-form-required form-required">Email</label>
                <input type="text" value="" name="email">
            </div>
            <div
                class="js-form-item form-item js-form-type-textfield form-item-name js-form-item-name">
                <label for="edit-name"
                    class="js-form-required form-required">Address</label>
                <input type="text" value="" name="address">
            </div>
            <div
                class="js-form-item form-item js-form-type-textfield form-item-name js-form-item-name">
                <label for="edit-name"
                    class="js-form-required form-required">Note</label>
                <textarea name="note" id="" cols="3" rows="3"></textarea>
            </div>
            <div data-drupal-selector="edit-actions"
                class="form-actions webform-actions js-form-wrapper form-wrapper"
                id="edit-actions"><input
                    class="webform-button--submit button button--primary js-form-submit form-submit"
                    data-drupal-selector="edit-actions-submit" type="submit"
                    id="edit-actions-submit" name="op" value="Submit" />

            </div>
        </form>
    </div>
</div>