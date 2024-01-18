<script type="text/javascript">
    $(function() {
        $('#searchtable').hide()
        var table = $('.data-table1').DataTable({
            processing: true,
            serverSide: true,
            pageLength: 50,
            buttons: ['copy', 'excel', 'pdf', 'print'],
            dom: 'Bfrtip',
            select: true,
            searching: false,
            ajax: "{{ route('city_index_data') }}",
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


        var delayTimer;

        $('#specialsearch').on('keyup', function() {
            clearTimeout(delayTimer);

            // Set a delay of 500 milliseconds before firing the action
            delayTimer = setTimeout(function() {
                // Your action to be executed after the user stops typing                
                var q = $('#specialsearch').val();
                if (q == '') {
                    $('#searchtable').hide()
                    $('#alltable').show()
                    return table;
                }
                console.log('Search term:', q);
                $('#alltable').hide()
                $('#searchtable').show()
                if ($.fn.DataTable.isDataTable('.table-specialsearch')) {
                    $('.table-specialsearch tbody').empty();
                    $('.table-specialsearch').DataTable().destroy();
                    $('.table-specialsearch').clear().draw();
                }

                var table2 = $('.table-specialsearch').DataTable({
                    pageLength: 100,
                    // "ajax": {
                    //     "url": {{ route('specialsearch') }}?q=${q},
                    //     "dataSrc": ""
                    // },
                    ajax: {{ route('specialsearch') }} ? q = $ {
                        q
                    },
                    searching: false,
                    processing: true,
                    serverSide: true,
                    buttons: ['copy', 'excel', 'pdf', 'print'],
                    dom: 'Bfrtip',
                    select: true,


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
            }, 500);
        });
        // $('body').on('keyup', '#specialsearch', function() {

        //     setTimeout(function() {

        //     }, 5000);
        // });
    });
</script>
