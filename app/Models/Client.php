<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ClientsBrokers;

class Client extends Model
{
    use HasFactory;
    public function clientsHome()
    {
        return $this->hasMany(ClientsHome::class, 'client_id');
    }

    public function clientsBrokers()
    {
        return $this->hasMany(ClientsBrokers::class, 'client_id');
    }
}
