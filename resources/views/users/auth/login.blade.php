@extends('users.layouts.app')

{{-- @section('title_for_layout', $detailCategory->title )
@section('site_name', $detailCategory->title)

@section('image_seo', asset('storage/categories/' . $detailCategory->image))
@section('meta_keywords', $detailCategory->meta_keywords)
@section('meta_description', $detailCategory->description) --}}

@section('css')
<style>
    .text-danger{
        color: red;
    }
</style>
@endsection

@section('content')
<div role="main" class="main main-page">
    <div class="clearfix"></div>
    <div class="help gav-help-region">
        <div class="container">
            <div class="content-inner">
                <div>
                    <div data-drupal-messages-fallback class="hidden"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="clearfix"></div>
    <div id="content" class="content content-full">
        <div class="container-full container-bg">
            <div class="content-main-inner">
                <div id="page-main-content" class="main-content">
                    <div class="main-content-inner">
                        <div class="content-main">
                            <div>
                                <div id="block-gavias-facdori-content" class="block block-system block-system-main-block no-title">
                                    <div class="content block-content">
                                        <div class="category-page gva-view view-page js-view-dom-id-8c396b1aebdf4e305408023d4a7ffa73a4aab2b7f3ce1e955e5e92551fa5675b">

                                            <header>
                                                <div class="gva-view js-view-dom-id-277b1825716a8e1d1e1c3e004d57b6defc4f7704af7817ba77944d052b20d189">
                                                    <div class="view-content-wrap">
                                                        <div class="item">
                                                            <div class="views-field views-field-nothing">
                                                                <span class="field-content">
                                                                    <div class="category-image">
                                                                        <div class="item-image">
                                                                            <img src="{{ asset('images/62c6839c53cbe.jpeg') }}" alt="Login" typeof="Image" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="cat-breadcrumbs"></div>

                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </header>
                                            <div id="content" class="content content-full">
                                                <div class="container-full container-bg">
                                                    <div class="content-main-inner">
                                                        <div id="page-main-content" class="main-content">
                                                            <div class="main-content-inner">
                                                                <div class="content-main">
                                                                    <div>
                                                                        <div id="block-gavias-facdori-content" class="block block-system block-system-main-block no-title">
                                                                            <div class="content block-content">
                                                                                <!-- Start Display article for detail page -->
                                                                                <div data-history-node-id="3422" role="article" typeof="schema:WebPage" class="node node--type-page node--view-mode-full">
                                                                                    <div class="node__content clearfix">
                                                                                        <div class="field field--name-field-content-builder field--type-gavias-content-builder field--label-hidden field__item">
                                                                                            <div class="gavias-blockbuilder-content">
                                                                                                <div class="gavias-builder--content">
                                                                                                    <div class="gbb-row-wrapper section row-first-level azienda-info login-row row-privatearea gbb-row  bg-size-cover"
                                                                                                        style="" data-onepage-title="Azienda Info">
                                                                                                        <div class="bb-inner remove_padding">
                                                                                                            <div class="bb-container container">
                                                                                                                <div class="row row-wrapper">
                                                                                                                    <div class="gsc-column col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
                                                                                                                        <div class="column-inner  bg-size-cover  ">
                                                                                                                            <div class="column-content-inner">
                                                                                                                                <div class="column-content heading ">
                                                                                                                                    <p> Đăng nhập thành viên </p>
                                                                                                                                </div>
                                                                                                                                <div
                                                                                                                                    class="column-content description ">
                                                                                                                                    <p style="text-align: center;">Đăng ký làm thành viên của Inox Pro để có thể nhận những thông tin khuyến mãi của chúng tôi một cách dễ dàng</p>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="gbb-row-wrapper section row-first-level login-row row-privatearea gbb-row  bg-size-cover" style="">
                                                                                                        <div class="bb-inner default">
                                                                                                            <div class="bb-container container">
                                                                                                                <div class="row row-wrapper">
                                                                                                                    <div class="gsc-column col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 thank-you-content " id="login_system">
                                                                                                                        <div class="column-inner  bg-size-cover  ">
                                                                                                                            <div class="column-content-inner">
                                                                                                                                <div class="column-content login-title ">
                                                                                                                                    <p>Đăng nhập</p>
                                                                                                                                    @if(Session::has('message'))
                                                                                                                                        <div class="column-content reg-desc " style="background-color: pink;">
                                                                                                                                            <p style="color: red">{{ Session::get('message') }}</p>
                                                                                                                                        </div>
                                                                                                                                    @endif

                                                                                                                                </div>
                                                                                                                                <div class=" clearfix widget gsc-block-drupal title-align-left  hidden-title-on remove-margin-on text-dark">
                                                                                                                                    <div id="block-userlogin" role="form" class="block block-user block-user-login-block no-title">
                                                                                                                                        <div class="content block-content">
                                                                                                                                            <form class="user-login-form" data-drupal-selector="user-login-form" action="{{ route('user.login') }}" method="post" id="user-login-form" accept-charset="UTF-8">
                                                                                                                                                @csrf
                                                                                                                                                <div class="js-form-item form-item js-form-type-textfield form-item-name js-form-item-name">
                                                                                                                                                    <label for="edit-name" class="js-form-required form-required">Email</label>
                                                                                                                                                    <input autocorrect="none" autocapitalize="none" spellcheck="false" data-drupal-selector="edit-name"
                                                                                                                                                        type="text" id="edit-name" name="email" value="{{ old('email') }}" size="15" maxlength="60" class="form-text required" required="required" aria-required="true" />
                                                                                                                                                        @error('email')
                                                                                                                                                            <p class="text-danger mt-1">{{ $message }}</p>
                                                                                                                                                        @enderror
                                                                                                                                                </div>

                                                                                                                                                <div class="js-form-item form-item js-form-type-password form-item-pass js-form-item-pass">
                                                                                                                                                    <label for="edit-pass" class="js-form-required form-required">Mật khẩu</label>
                                                                                                                                                    <input data-drupal-selector="edit-pass" type="password" id="edit-pass"
                                                                                                                                                        name="password" size="15" maxlength="128" class="form-text required"
                                                                                                                                                        required="required" aria-required="true" />
                                                                                                                                                        @error('password')
                                                                                                                                                            <p class="text-danger mt-1">{{ $message }}</p>
                                                                                                                                                        @enderror
                                                                                                                                                </div>


                                                                                                                                                <div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-wrapper" id="edit-actions">
                                                                                                                                                    <input data-drupal-selector="edit-submit" type="submit" id="edit-submit" value="Đăng nhập" class="button js-form-submit form-submit" />
                                                                                                                                                </div>
                                                                                                                                            </form>

                                                                                                                                            <ul>
                                                                                                                                                {{-- <li>
                                                                                                                                                    <a href="/user/register" title="Đăng ký tài khoản mới." class="create-account-link">
                                                                                                                                                        Đăng ký mới
                                                                                                                                                    </a>
                                                                                                                                                </li> --}}
                                                                                                                                                <li>
                                                                                                                                                    <a href="javascript:void(0);"class="request-password-link">
                                                                                                                                                        Quên mật khẩu
                                                                                                                                                    </a>
                                                                                                                                                </li>
                                                                                                                                            </ul>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="gsc-column col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 thank-you-content d-none" id="forgot_password">
                                                                                                                        <div class="column-inner  bg-size-cover  ">
                                                                                                                            <div class="column-content-inner">
                                                                                                                                <div class="column-content login-title ">
                                                                                                                                    <p>Quên mật khẩu</p>
                                                                                                                                    @if(Session::has('message_forgot'))
                                                                                                                                        <div class="column-content reg-desc " style="background-color: pink;">
                                                                                                                                            <p style="color: red">{{ Session::get('message_forgot') }}</p>
                                                                                                                                        </div>
                                                                                                                                    @endif

                                                                                                                                </div>
                                                                                                                                <div class=" clearfix widget gsc-block-drupal title-align-left  hidden-title-on remove-margin-on text-dark">
                                                                                                                                    <div id="block-userlogin" role="form" class="block block-user block-user-login-block no-title">
                                                                                                                                        <div class="content block-content">
                                                                                                                                            <form class="user-login-form" data-drupal-selector="user-login-form" action="{{ route('user.forgot.pass') }}" method="post" accept-charset="UTF-8">
                                                                                                                                                @csrf
                                                                                                                                                <div class="field--type-string field--name-field-phone field--widget-string-textfield js-form-wrapper form-wrapper" data-drupal-selector="edit-field-phone-wrapper" id="edit-field-phone-wrapper">
                                                                                                                                                    <div class="js-form-item form-item js-form-type-textfield form-item-field-phone-0-value js-form-item-field-phone-0-value">
                                                                                                                                                        <label for="edit-field-phone-0-value" class="js-form-required form-required">Địa chỉ email</label>
                                                                                                                                                        <input class="js-text-full text-full form-text" data-drupal-selector="edit-field-phone-0-value"
                                                                                                                                                            type="text" id="edit-field-phone-0-value" name="email"
                                                                                                                                                            value="{{ old('email') }}" size="60" maxlength="255" placeholder="" />
                                                                                                                                                            @error('email')
                                                                                                                                                                <p class="text-danger mt-1">{{ $message }}</p>
                                                                                                                                                            @enderror
                                                                                                                                                    </div>
                                                                                                                                                </div>


                                                                                                                                                <div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-wrapper" id="edit-actions">
                                                                                                                                                    <input data-drupal-selector="edit-submit" type="submit" id="edit-submit" value="Lấy lại mật khẩu" class="button js-form-submit form-submit" />
                                                                                                                                                </div>
                                                                                                                                            </form>

                                                                                                                                            <ul>
                                                                                                                                                <li>
                                                                                                                                                    <a href="javascript:void(0);" title="quay lại đăng nhập." class="request-login-link">
                                                                                                                                                        Quay lại đăng nhập
                                                                                                                                                    </a>
                                                                                                                                                </li>
                                                                                                                                            </ul>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="gsc-column col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 thank-you-content ">
                                                                                                                    <div class="column-inner  bg-size-cover  ">
                                                                                                                        <div class="column-content-inner">
                                                                                                                            <div class="column-content reg-title ">
                                                                                                                                <p>Đăng ký tài khoản mới</p>
                                                                                                                            </div>
                                                                                                                            {{-- <div class="column-content reg-desc ">
                                                                                                                                <p>Sau khi đăng ký bạn sẽ nhận được một email xác nhận</p>
                                                                                                                            </div> --}}
                                                                                                                            <div class=" clearfix widget gsc-block-drupal title-align-left  hidden-title-on remove-margin-on text-dark">
                                                                                                                                <div id="block-userregistrationform" class="block block-user block-formblock-user-register no-title">
                                                                                                                                    <div  class="content block-content">
                                                                                                                                        <form class="user-register-form user-form" data-user-info-from-browser data-drupal-selector="user-register-form"
                                                                                                                                            action="{{ route('register.user') }}" method="post" id="user-register-form" accept-charset="UTF-8">
                                                                                                                                            @csrf
                                                                                                                                            <div class="field--type-string field--name-field-name-and-lastname field--widget-string-textfield js-form-wrapper form-wrapper"
                                                                                                                                                data-drupal-selector="edit-field-name-and-lastname-wrapper" id="edit-field-name-and-lastname-wrapper">
                                                                                                                                                <div class="js-form-item form-item js-form-type-textfield form-item-field-name-and-lastname-0-value js-form-item-field-name-and-lastname-0-value">
                                                                                                                                                    <label for="edit-field-name-and-lastname-0-value" class="js-form-required form-required">Họ và tên đệm của bạn</label>
                                                                                                                                                    <input class="js-text-full text-full form-text required" data-drupal-selector="edit-field-name-and-lastname-0-value"
                                                                                                                                                        type="text" id="edit-field-name-and-lastname-0-value" name="first_name"
                                                                                                                                                        value="{{ old('first_name') }}" size="60" maxlength="255" placeholder="" required="required" aria-required="true" />
                                                                                                                                                        @error('first_name')
                                                                                                                                                            <p class="text-danger mt-1">{{ $message }}</p>
                                                                                                                                                        @enderror
                                                                                                                                                </div>
                                                                                                                                            </div>

                                                                                                                                            <div class="field--type-string field--name-field-phone field--widget-string-textfield js-form-wrapper form-wrapper" data-drupal-selector="edit-field-phone-wrapper" id="edit-field-phone-wrapper">
                                                                                                                                                <div class="js-form-item form-item js-form-type-textfield form-item-field-phone-0-value js-form-item-field-phone-0-value">
                                                                                                                                                    <label for="edit-field-phone-0-value" class="js-form-required form-required">Tên của bạn</label>
                                                                                                                                                    <input class="js-text-full text-full form-text" data-drupal-selector="edit-field-phone-0-value"
                                                                                                                                                        type="text" id="edit-field-phone-0-value" name="last_name"
                                                                                                                                                        value="{{ old('last_name') }}" size="60" maxlength="255" placeholder="" />
                                                                                                                                                        @error('last_name')
                                                                                                                                                            <p class="text-danger mt-1">{{ $message }}</p>
                                                                                                                                                        @enderror
                                                                                                                                                </div>
                                                                                                                                            </div>

                                                                                                                                            <div class="field--type-string field--name-field-phone field--widget-string-textfield js-form-wrapper form-wrapper" data-drupal-selector="edit-field-phone-wrapper" id="edit-field-phone-wrapper">
                                                                                                                                                <div class="js-form-item form-item js-form-type-textfield form-item-field-phone-0-value js-form-item-field-phone-0-value">
                                                                                                                                                    <label for="edit-field-phone-0-value" class="js-form-required form-required">Địa chỉ email</label>
                                                                                                                                                    <input class="js-text-full text-full form-text" data-drupal-selector="edit-field-phone-0-value"
                                                                                                                                                        type="text" id="edit-field-phone-0-value" name="email"
                                                                                                                                                        value="{{ old('email') }}" size="60" maxlength="255" placeholder="" />
                                                                                                                                                        @error('email')
                                                                                                                                                            <p class="text-danger mt-1">{{ $message }}</p>
                                                                                                                                                        @enderror
                                                                                                                                                </div>
                                                                                                                                            </div>

                                                                                                                                            <div class="field--type-string field--name-field-phone field--widget-string-textfield js-form-wrapper form-wrapper" data-drupal-selector="edit-field-phone-wrapper" id="edit-field-phone-wrapper">
                                                                                                                                                <div class="js-form-item form-item js-form-type-textfield form-item-field-phone-0-value js-form-item-field-phone-0-value">
                                                                                                                                                    <label for="edit-field-phone-0-value">Số điện thoại</label>
                                                                                                                                                    <input class="js-text-full text-full form-text" data-drupal-selector="edit-field-phone-0-value"
                                                                                                                                                        type="text" id="edit-field-phone-0-value" name="phone"
                                                                                                                                                        value="{{ old('phone') }}" size="60" maxlength="255" placeholder="" />
                                                                                                                                                        @error('phone')
                                                                                                                                                            <p class="text-danger mt-1">{{ $message }}</p>
                                                                                                                                                        @enderror
                                                                                                                                                </div>
                                                                                                                                            </div>

                                                                                                                                            <div class="field--type-string field--name-field-phone field--widget-string-textfield js-form-wrapper form-wrapper" data-drupal-selector="edit-field-phone-wrapper" id="edit-field-phone-wrapper">
                                                                                                                                                <div class="js-form-item form-item js-form-type-textfield form-item-field-phone-0-value js-form-item-field-phone-0-value">
                                                                                                                                                    <label for="edit-field-phone-0-value">Địa chỉ</label>
                                                                                                                                                    <input class="js-text-full text-full form-text" data-drupal-selector="edit-field-phone-0-value"
                                                                                                                                                        type="text" id="edit-field-phone-0-value" name="address"
                                                                                                                                                        value="{{ old('address') }}" size="60" maxlength="255" placeholder="" />
                                                                                                                                                        @error('address')
                                                                                                                                                            <p class="text-danger mt-1">{{ $message }}</p>
                                                                                                                                                        @enderror
                                                                                                                                                </div>
                                                                                                                                            </div>

                                                                                                                                            <div class="field--type-string field--name-field-phone field--widget-string-textfield js-form-wrapper form-wrapper" data-drupal-selector="edit-field-phone-wrapper" id="edit-field-phone-wrapper">
                                                                                                                                                <div class="js-form-item form-item js-form-type-textfield form-item-field-phone-0-value js-form-item-field-phone-0-value">
                                                                                                                                                    <label for="edit-field-phone-0-value" class="js-form-required form-required">Mật khẩu</label>
                                                                                                                                                    <input class="js-text-full text-full form-text" data-drupal-selector="edit-field-phone-0-value"
                                                                                                                                                        type="password" id="edit-field-phone-0-value" name="password"
                                                                                                                                                        value="{{ old('password') }}" size="60" minlength="6" maxlength="35" placeholder="" />
                                                                                                                                                        @error('password')
                                                                                                                                                            <p class="text-danger mt-1">{{ $message }}</p>
                                                                                                                                                        @enderror
                                                                                                                                                </div>
                                                                                                                                            </div>

                                                                                                                                            <div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-wrapper"  id="edit-actions">
                                                                                                                                                <input data-drupal-selector="edit-submit" type="submit"
                                                                                                                                                    id="edit-submit" name="op" value="Đăng ký" class="button button--primary js-form-submit form-submit" />
                                                                                                                                            </div>

                                                                                                                                        </form>

                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection
@push('scripts')
<script>
    const $jq = jQuery.noConflict();
    $jq('.request-password-link').on('click', function(e){
        $jq('#forgot_password').removeClass('d-none');
        $jq('#login_system').addClass('d-none');
    });

    $jq('.request-login-link').on('click', function(e){
        $jq('#login_system').removeClass('d-none');
        $jq('#forgot_password').addClass('d-none');
    });
</script>
@endpush
