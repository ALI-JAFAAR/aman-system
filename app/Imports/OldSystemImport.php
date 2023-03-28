<?php

namespace App\Imports;

use App\Models\OldSystem;
use Maatwebsite\Excel\Concerns\ToModel;
class OldSystemImport implements ToModel{

    public function model($row){
        // dd($row);
        return new OldSystem([
            'DisplayName'                 => $row[0],
            'NameofMother'                => $row[1],
            'BirthDate'                   => $row[2],
            'Mobile'                      => $row[3],
            'Gender'                      => $row[4],
            'Email'                       => $row[5],
            'CompleteAddress'             => $row[6],
            'MembershipPackage'           => $row[7],
            'Unions'                      => $row[8],
            'Carrier'                     => $row[9],
            'profession'                  => $row[10],
            'BusinessStartDate'           => $row[11],
            'PlaceofWork'                 => $row[12],
            'RegistrationTypeDisplayName' => $row[13],
            'PolicyID'                    => $row[14],
            'SocialSecurityNumber'        => $row[15],
            'SubscriptionDate'            => $row[16],
            'MembershipEndDate'           => $row[17],
            'MemberID'                    => $row[18],
            'ResidentID'                  => $row[19],
        ]);
    }


}
