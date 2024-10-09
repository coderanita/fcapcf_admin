<?php

namespace App\Services;

use App\Models\Country;
use App\Models\Language;
use App\Models\Nationality;
use App\Models\Relationship;

class DataSourceService
{
    public function languages()
    {
        return Language::get();
    }

    public function nationalities()
    {
        return Nationality::get();
    }

    public function beneficiaries()
    {
        return Relationship::get();
    }

    public function countries()
    {
        return Country::get();
    }
}
