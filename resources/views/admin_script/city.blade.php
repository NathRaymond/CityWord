<script type="text/javascript">
    $(function() {
        var table = $('.data-table1').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('city_page') }}",
            pageLength: 1000,
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
                    render: function(data, type, row, index) {
                        return data || '';
                    },
                },
                // {
                //     data: 'state.country.name', // use the relationship name and country column name
                //     name: 'state.country.name',
                //     render: function(data, type, row, index) {
                //         return data || '';
                //     },
                // },
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
    });
</script>
