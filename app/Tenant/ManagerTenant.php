<?php

namespace App\Tenannt;

class ManagerTenant
{

    public function getTenantIdentify()
    {
        return auth()->user()->Tenant->id;
    }



}