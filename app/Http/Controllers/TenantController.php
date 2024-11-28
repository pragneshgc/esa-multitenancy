<?php

namespace App\Http\Controllers;

use PDO;
use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function index()
    {
        return view('welcome');
        /*
        $tenant = Tenant::create([
            'id' => 'esa-foo',
            'tenancy_db_name' => 'esa_tenant',
            'tenancy_db_username' => 'esadbstagingdbuser',
            'tenancy_db_password' => 'DFG$%^ddGHJK$%',
            'tenancy_db_host' => 'esadb-staging.mysql.database.azure.com',
            'tenancy_db_options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('TENANT_ATTR_SSL_CA'),
            ]) : [],
        ]);
        $tenant->domains()->create(['domain' => 'foo.esapharmacy.test']);
        */

        return 'Domain Created';
    }
}
