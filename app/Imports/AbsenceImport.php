<?php

namespace App\Imports;

use App\Absence;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AbsenceImport implements ToModel, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function model(array $row)
    {
        $adsence = new Absence();
        $adsence->nord = $row['nord'];
        $adsence->prenom_nom = $row['prenom_nom'];
        $adsence->sf = $row['sf'];
        $adsence->grade = $row['grade'];
        $adsence->drpp = $row['drpp'];
        $adsence->depart_period_1 = $row['depart_period_1'];
        $adsence->retour_period_1 = $row['retour_period_1'];
        $adsence->depart_period_2 = $row['depart_period_2'];
        $adsence->retour_period_2 = $row['retour_period_2'];
        $adsence->depart_period_3 = $row['depart_period_3'];
        $adsence->retour_period_3 = $row['retour_period_3'];
        $adsence->nbj = $row['nbj'];
        $adsence->reference = $row['reference'];
        $adsence->save();
    }
}