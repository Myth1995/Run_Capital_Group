    <table class="display" id="row-select-multiple">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Invoicd ID</th>
                <th>Start date</th>
                <th>Salary</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($ary as $el)
            <tr>
                <td>{{$el['name']}}</td>
                <td>{{$el['position']}}</td>
                <td>{{$el['invoiceID']}}</td>
                <td>{{$el['startDate']}}</td>
                <td>{{$el['salary']}}</td>
                <td><img src="{{asset('assets/images/dashboard/datatable_check.png')}}" alt="" height="20px"/></td>
                <td><img src="{{asset('assets/images/dashboard/datatable_check.png')}}" alt="" height="20px"/></td>
            </tr>
            @endforeach
        </tbody>
    </table>
