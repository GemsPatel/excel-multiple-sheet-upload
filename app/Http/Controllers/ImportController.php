<?php

namespace App\Http\Controllers;

use App\Absence;
use App\Exception;
use App\General;
use App\Http\Controllers\Controller;
use App\Imports\ExcelSheetDataImport;
use App\Imports\NormalImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //
    }

    public function importExcelSheet(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'file' => 'required|mimes:xlsx'
        ]);

        if ($validator->fails()) {
            return redirect('/')->with('error', $validator->errors()->messages()['file'][0]);
        }
        
        //temp Use
        General::truncate();
        Absence::truncate();
        Exception::truncate();
        
        $import = new ExcelSheetDataImport();
        $import->onlySheets( 'Normal', 'Absence', 'Exception' );
        Excel::import( $import, $request->file('file') );
        return redirect('/')->with('success', 'Imported Successfully.');
    }
}
