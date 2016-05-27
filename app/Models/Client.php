<?php namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use Uuids;

    protected $table = 'clients';

    protected $fillable = [
        'id_number',
        'name',
        'website',
        'street',
        'app_suite',
        'state_province',
        'country',
    ];

}