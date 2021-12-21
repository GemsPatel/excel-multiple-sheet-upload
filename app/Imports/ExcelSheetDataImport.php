<?php

namespace App\Imports;

use App\Absence;
use Exception;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithConditionalSheets;

class ExcelSheetDataImport implements WithMultipleSheets
{
    use WithConditionalSheets;
    public function conditionalSheets(): array
    {
        return [
            'Normal' => new NormalImport(),
            'Absence'  => new AbsenceImport(),
            'Exception' => new ExceptionImport()
        ];
    }
}
