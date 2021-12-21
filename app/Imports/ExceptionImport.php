<?php

namespace App\Imports;

use App\Exception;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExceptionImport implements ToModel, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function model(array $row)
    {
        $exception = new Exception();
        $exception->no = $row['no'];
        $exception->prenoms_et_nom = $row['prenoms_et_nom'];
        $exception->gde = $row['gde'];
        $exception->mle = $row['mle'];
        $exception->sf = $row['sf'];
        $exception->depart = $row['depart'];
        $exception->depart_h = $row['depart_h'];
        $exception->arrivee = $row['arrivee'];
        $exception->arrivee_h = $row['arrivee_h'];
        $exception->object_de_la_mission = $row['object_de_la_mission'];
        $exception->copie_ci_joint = $row['copie_ci_joint'];
        $exception->save();
    }
}