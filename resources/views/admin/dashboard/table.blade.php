    <table class="display" id="row-select-multiple">
        <thead>
            <tr style="border-left-color: rgba(36, 105, 92, 0);">
                <th>Usuario Titular</th>
                <th>Transacciones</th>
                <th>Facturación</th>
                <th>Fecha</th>
                <th>Monto</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ary as $el)
            <tr>
                <td style="border-left-color: rgba(36, 105, 92, 0);">{{$el['name']}}</td>
                <td>{{$el['position']}}</td>
                <td>{{$el['invoiceID']}}</td>
                <td>{{$el['startDate']}}</td>
                <td>{{$el['salary']}}</td>
                <td><div><img src="{{asset('assets/images/dashboard/datatable_check.png')}}" alt="" height="25px"/></div></td>
            </tr>
            @endforeach
        </tbody>
    </table>
