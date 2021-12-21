<?php

namespace App\Imports;

use App\General;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NormalImport implements ToModel, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function model(array $row)
    {
        $normal = new General();
        $normal->no = $row['no'];
        $normal->noms_et_prenoms = $row['noms_et_prenoms'];
        $normal->mle = $row['mle'];
        $normal->gde = $row['gde'];
        $normal->sf = $row['sf'];
        $normal->depart = $row['depart'];
        $normal->depart_h = $row['depart_h'];
        $normal->arrivee = $row['arrivee'];
        $normal->arrivee_h = $row['arrivee_h'];
        $normal->object_de_la_mission = $row['object_de_la_mission'];
        $normal->save();
    }
}