<?php

namespace    App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\CrudOperationLimitable;

/**
 * @method static paginate()
 * @method static orderBy(string $string, string $string1)
 */
class Company extends Model
{

    use HasFactory;

    public function Company(){

        return $this->belongsToMany(Client::class);

    }
}
