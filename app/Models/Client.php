<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate()
 */
class Client extends Model
{
    use HasFactory;


    public function Company(){

        return $this->belongsToMany(Company::class, 'company_clients', 'client_id', 'company_id');

    }

}
