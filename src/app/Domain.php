<?php

namespace App;

use App\Http\Controllers\AccountController;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function accounts()
    {
        $this->hasMany(Account::class);
    }

    public function keys()
    {
        $this->hasMany(Key::class);
    }

    public function getBaseDirectory()
    {
        $base_dir = config('ftp.data_base_dir') . '/';

        return $base_dir . $this->id . '/' ;
    }
}
