<div class="loader-wrapper">
    <div class="lds-ellipsis loader"><div></div><div></div><div></div><div></div></div>
    <div id="{{$class or "records"}}mapSelector">
        <select style="display:none"  name="map" multiple>
            <option value="all">Wszystkie</option>
            @foreach($records as $mapKey => $map)
                <option>{{$mapKey}}</option>
            @endforeach
        </select>
    </div>

    <div class="table-responsive">
        <table id="{{$class or "records"}}" class="table display" style="width:100%">
            <thead class="thead-dark">
            <tr>
                <th class="text-center">#</th>
                <th>Map</th>
                <th>Nick</th>
                <th>Czas</th>
                <th>Skoki</th>
                <th>Styl</th>
            </tr>
            </thead>
            <tbody>
            @foreach($records as $mapKey => $map)
                @foreach($map as $place => $record)
                    <tr><td class="text-center">{{$place+1}}</td><td>{{$record->map}}</td><td><a href="{{getRoute("profile", $record->auth)}}">{{$name or $record->name}}</a></td><td>{{$record->time}}</td><td>{{$record->jumps}}</td><td>@if(isset($styleFunction)){{((string)$styleFunction)($record->style)}}@endif</td></tr>
                @endforeach
                @for($place += 1; ($place%10) != 0; $place++)
                    <tr><td class="text-center">{{$place+1}}</td><td>{{$mapKey}}</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                @endfor
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    (function() {
        document.addEventListener('DOMContentLoaded', function(){
            var groupColumn = 1;
            var nameColumn = 2;
            var styleColumn = 5;
//            var boostrapColors = [ 'primary', 'info', 'success', 'danger', 'warning' ];

            $.fn.dataTable.ext.search.push(
                function( settings, data, dataIndex ) {
                    var map = data[groupColumn];
                    var input = $('#{{$class or "records"}}mapSelector select[name=map]')[0];
                    var pristine = true;
                    for (var i = 0; i < input.options.length; i++) {
                        if(input.options[i].selected === true){
                            pristine = false;
                            if(input.options[i].value === map || input.options[i].value === "all")
                                return true;
                        }
                    }
                    return pristine;
                }
            );

            var table = $('#{{$class or "records"}}').DataTable({
                "columnDefs": [
                    { "visible": false, "targets": groupColumn }
                    @if(isset($hiddenName))
                    ,{'visible': false, "targets": nameColumn }
                    @endif
                    @if(!isset($styleFunction))
                    ,{'visible': false, "targets": styleColumn }
                    @endif

                ],
                "order": [[ groupColumn, 'asc' ]],
                "displayLength": 10,
                "info": false,
                "bLengthChange": false,
                "orderFixed": {
                    "post": [ 0, 'asc' ]
                },
                "drawCallback": function ( settings ) {
                    var api = this.api();
                    var rows = api.rows( {page:'current'} ).nodes();
                    var last=null;

                    api.column(groupColumn, {page:'current'} ).data().each( function ( group, i ) {
                        if ( last !== group ) {
                            $(rows).eq( i ).before(
                                '<tr class="bg-dark group"><td colspan="6" class="text-white text-center font-weight-bold">'+group+'</td></tr>'
                            );

                            last = group;
                        }
                    } );
                }
            } );


            $('#{{$class or "records"}}mapSelector').dropdown({
                multipleMode: 'label',
                readOnly: false,
                limitCount: Infinity,
                input: '<input type="text" maxLength="20" placeholder="Wybierz mape">',
                searchable: true,
                searchNoData: '<li style="color:#ddd">Brak rezultatu</li>',
                choice: function () {
                    table.draw();
                }
            });


            // Order by the grouping
            $('#{{$class or "records"}} tbody').on( 'click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if ( currentOrder[0] === groupColumn && currentOrder[1] === 'asc' ) {
                    table.order( [ groupColumn, 'desc' ] ).draw();
                }
                else {
                    table.order( [ groupColumn, 'asc' ] ).draw();
                }
            });

            $('#{{$class or "records"}}').on('click', 'th', function () {
                table.column(3).search("^(?!-$).*$",true).draw();
            });

            $(".loader").addClass("d-none");
        });
    })();

</script>