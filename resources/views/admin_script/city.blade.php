<script type="text/javascript">
    $(function() {
        $('#searchtable').hide()
        var table = $('.data-table1').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('city_index_data') }}",
            pageLength: 50,
            buttons: ['copy', 'excel', 'pdf', 'print'],
            dom: 'Bfrtip',
            select: true,
            searching: false,
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'state.name',
                    name: 'state.name',

                },
                {
                    data: 'state.country.name',
                    name: 'state.country.name',

                },
                {
                    data: 'latitude',
                    name: 'latitude'
                },
                {
                    data: 'longitude',
                    name: 'longitude'
                },

            ]
        });

        $('body').on('keyup', '#specialsearch', function() {
            var q = $(this).val()
            if (q == '') {
                $('#searchtable').hide()
                $('#alltable').show()
                return table;
            }
            setTimeout(function() {
                $('#alltable').hide()
                $('#searchtable').show()
                if ($.fn.DataTable.isDataTable('.table-specialsearch')) {
                    $('.table-specialsearch').DataTable().destroy();
                }

                var table2 = $('.table-specialsearch').DataTable({
                    pageLength: 50,
                    "ajax": {
                        "url": `{{ route('specialsearch') }}?q=${q}`,
                        "dataSrc": ""
                    },
                    searching: false,

                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'state.name',
                            name: 'state.name',

                        },
                        {
                            data: 'state.country.name',
                            name: 'state.country.name',

                        },
                        {
                            data: 'latitude',
                            name: 'latitude'
                        },
                        {
                            data: 'longitude',
                            name: 'longitude'
                        },
                    ]
                });
            }, 5000);
        });
    });
</script>
