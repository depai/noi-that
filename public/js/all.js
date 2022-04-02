var TABU = (function (jQuery) {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    /** custom route */
    let route = {};

    let initRoute = function (name, routeUri) {
        route[name] = routeUri;
    };

    /** open window */
    let openWindow = (url, params = {}, type = '_blank') => {
        url += '?' + $.param(params);
        window.open(url, type);
    };

    let fetchRouteWithParam = function (name, params) {
        let routeTemp = route[name];
        Object.keys(params).forEach(key => {
            return routeTemp = routeTemp.replace(`:${key}:`, params[key]);
        });

        return routeTemp;
    };

    /** api **/
    let subApi = function (url, method = 'GET', data = {}, dataType = 'JSON', processData = true) {
        if (processData) {
            return new Promise(function (res, rej) {
                $.ajax({
                    url,
                    method,
                    dataType,
                    data,
                    success: response => {
                        return res(response)
                    },
                    error: (error) => {
                        return rej(error)
                    }
                })
            });
        }
        return new Promise(function (res, rej) {
            $.ajax({
                url,
                method,
                dataType,
                data,
                processData: false,
                contentType: false,
                success: response => {
                    return res(response)
                },
                error: (error) => {
                    return rej(error)
                }
            })
        });
    };

    /** global event */
    let globalEvent = function (event, element, callback, preventDefault = true) {
        jQuery(document).on(event, element, function (event) {
            event.preventDefault();
            callback(jQuery(this), event);
        });
    };

    let confirm = (function () {
        let init = function (options) {
            let {modalName, title, message, callback} = options;
            let buttonAccept = Date.now() + `${modalName}-btn-modal`;
            $("body").append(`
                <!-- Modal -->
                <div id="${modalName}" class="modal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">${title}</h4>
                            </div>
                            <div class="modal-body">
                                <p>${message}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-${options.type || 'success'}" id="${buttonAccept}">Xác nhận</button>
                                <button type="button" class="btn btn-default btn-cancel-modal">Hủy</button>
                            </div>
                        </div>
                    </div>
                </div>
            `);

            let modal = $(`#${modalName}`);
            modal.modal('show');

            $(document).on('click', `#${buttonAccept}`, function () {
                modal.modal('hide');
                modal.remove();
                callback();
            });

            $(document).on('click', '.btn-cancel-modal', function () {
                modal.modal('hide');
                modal.remove();
            });
        };

        return {
            init
        }
    })();

    let dateTimePicker = (function () {
        let init = function (element, format = 'DD/MM/YYYY', options = {}) {
            jQuery(element).datetimepicker({
                format: format,
            });
        };

        return {
            init
        }
    })();

    let getFormData = function (formElement) {
        let obj = {};
        jQuery(formElement).serializeArray().map(item => {
            obj[item.name] = item.value;
        });

        return obj;
    };

    let validate = function (error) {
        $('.validate').empty();
        let errors = error.responseJSON.errors;
        $.each(errors, function (key, value) {
            let className = key.replace('.', '_');
            $(`.${className}`).html(value);
        })
    }


    let dataTable = (function (route, columns, table = '#datatable',search = true, def = [], responsive = true, scrollX = false) {
        $(table).DataTable().destroy();
        let t = $(table).DataTable({
            bLengthChange: false,
            processing: true,
            serverSide: true,
            stateSave: false,
            searching: search,
            responsive: responsive,
            scrollX: scrollX,
            ajax: route,
            columns: columns,
            aoColumnDefs: def,
            autoWidth: false,
            columnDefs: [ {
                "searchable": false,
                "orderable": true,
                "targets": 0
            }],
            dom: 'lftrip',
            order: [[ 0, 'desc' ]],
            bJQueryUI: true,
            fnDrawCallback: function (o) {
                var body = $("html, body");
                body.stop().animate({scrollTop: 0}, 500, 'swing');
            }
        });

        t.on( 'draw.dt', function () {
            var PageInfo = table.DataTable().page.info();
            t.column(0, { page: 'current' }).nodes().each( function (cell, i) {
                cell.innerHTML = i + 1 + PageInfo.start;
            } );
        });
    });

    let notify = function (title, text, type = 'success', delay = 2000) {
        new PNotify({
            title,
            text,
            type,
            delay
        })
    };

    let configDataTable = function (table, bLengthChange = false, scrollX = false) {
        let t = table.DataTable({
            bLengthChange: bLengthChange,
            scrollX: scrollX,
            ordering: false,
            stateSave: true,
            responsive: true,
            aoColumnDefs: [],
            dom: 'lftrip',
            columnDefs: [ {
                "searchable": false,
                "orderable": true,
                "targets": 0
            }],
            order: [[ 1, 'asc' ]]
        });
        t.on( 'draw.dt', function () {
            var PageInfo = table.DataTable().page.info();
            t.column(0, { page: 'current' }).nodes().each( function (cell, i) {
                cell.innerHTML = i + 1 + PageInfo.start;
            } );
        });

    };

    let clearError = function () {
        $('.validate').html('');
    };

    let readURL = function(input) {
        let src = window.URL.createObjectURL(input.files[0]);
        $(input).parent().siblings('.blah').prop('src', src);
        $(input).parent().siblings('.blah').removeClass('d-none');
        let fileName = $(input).val().split("\\").pop();
        $(input).siblings(".custom-file-label").addClass("selected").html(fileName);
    }

    return {
        api: subApi,
        globalEvent,
        confirm,
        dateTimePicker,
        formData: getFormData,
        route,
        initRoute,
        fetchRoute: fetchRouteWithParam,
        dataTable,
        openWindow,
        validate,
        notify,
        configDataTable,
        readURL,
        clearError
    }
})($);
