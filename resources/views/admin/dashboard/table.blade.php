    <table class="display" id="row-select-multiple">
        <thead>
            <tr style="border-left-color: rgba(36, 105, 92, 0);">
                <th>Fecha</th>
                <th>Typo</th>
                <th>Para/de</th>
                <th>Importe</th>
                <th>Moneda</th>
                <!--<th>Monto</th>-->
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($totalAry as $el)
            <tr>
                <td><b>{{$el['startDate']}}</b></td>
                <td><b>{{$el['type']}}</b></td>
                <td style="border-left-color: rgba(36, 105, 92, 0);">{{$el['name']}}</td>
                <td><b>{{$el['salary']}}</b></td>
                <td>{{$el['unit']}}</td>
                <!--<td>{{$el['salary']}}</td>-->
                <!--<td><div><img src="{{asset('assets/images/dashboard/datatable_check.png')}}" alt="" height="25px"/></div></td>-->
                <td style="display: flex;"><div id="circle"></div><b>{{$el['finish']}}</b></td>
            </tr>
            @endforeach
        </tbody>
    </table>
