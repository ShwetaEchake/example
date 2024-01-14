<?php

namespace App\Repositories;

use App\Models\PartyRegistration;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PartyRegistrationRepository
{

    public function store($input)
    {
        DB::beginTransaction();
        $input['upload_document'] = isset($input['file']) ? $input['file']->store('document') : '';

        $PartyRegistration = PartyRegistration::create( Arr::only( $input, PartyRegistration::getFillables() ) );
        DB::commit();

        return $PartyRegistration;
    }



}
