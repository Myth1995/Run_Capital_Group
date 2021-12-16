<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index()
    {
        return view('admin.dashboard.default');
    }

    public function getTableData(Request $req, $id) {
        $totalAry = [
            [
                "name" => "Tiger Nixon",
                "position" => "System Architect",
                "invoiceID" => "#123412451",
                "startDate" => "2011/04/25",
                "salary" => "$320,800",
            ],
            [
                "name" => "Garrett Winters",
                "position" => "Accountant",
                "invoiceID" => "#123412451",
                "startDate" => "2011/07/25",
                "salary" => "$170,750",
            ],
            [
                "name" => "Ashton Cox",
                "position" => "Junior Technical Author",
                "invoiceID" => "#123412451",
                "startDate" => "2009/01/12",
                "salary" => "$86,000",
            ],
            [
                "name" => "Cedric Kelly",
                "position" => "Senior Javascript Developer",
                "invoiceID" => "#123412451",
                "startDate" => "2012/03/29",
                "salary" => "$433,060",
            ],
            [
                "name" => "Airi Satou",
                "position" => "Accountant",
                "invoiceID" => "#123412451",
                "startDate" => "2008/11/28",
                "salary" => "$162,700",
            ],
            [
                "name" => "Brielle Williamson",
                "position" => "Integration Specialist",
                "invoiceID" => "#123412451",
                "startDate" => "2012/12/02",
                "salary" => "$372,000",
            ],
            [
                "name" => "Haley Kennedy",
                "position" => "Senior Marketing Designer",
                "invoiceID" => "#123412451",
                "startDate" => "2012/12/18",
                "salary" => "$313,500",
            ],
            [
                "name" => "Tatyana Fitzpatrick",
                "position" => "Regional Director",
                "invoiceID" => "#123412451",
                "startDate" => "2010/03/17",
                "salary" => "$385,750",
            ],
            [
                "name" => "Michael Silva",
                "position" => "Marketing Designer",
                "invoiceID" => "#123412451",
                "startDate" => "2012/11/27",
                "salary" => "$198,500",
            ]
        ];
        $yourAry = [
            [
                "name" => "Cedric Kelly",
                "position" => "Senior Javascript Developer",
                "invoiceID" => "#123412451",
                "startDate" => "2012/03/29",
                "salary" => "$433,060",
            ],
            [
                "name" => "Airi Satou",
                "position" => "Accountant",
                "invoiceID" => "#123412451",
                "startDate" => "2008/11/28",
                "salary" => "$162,700",
            ],
            [
                "name" => "Brielle Williamson",
                "position" => "Integration Specialist",
                "invoiceID" => "#123412451",
                "startDate" => "2012/12/02",
                "salary" => "$372,000",
            ],
        ];
        // return view('admin.dashboard.default', ["ary" => $id == 2 ? $yourAry : $totalAry]);
        return response()->json($id == 1 ? $totalAry : $yourAry);
    }
}
