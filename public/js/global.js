$( document ).ready(function() {
    TABU.globalEvent('click', '.delete-btn', function (element) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f62d51',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                let route = element.data('url');
                let table = element.data('table');
                TABU.api(route, 'DELETE', 'HTML')
                .then(result => {
                        if (result) {
                            toastr.success('Delete Record Success!');
                            TABU.dataTable(table, column, $('.dataTable'));
                        } else {
                            toastr.error('Delete Record Fail!');
                        }
                    })
            }

        })
    });
});
