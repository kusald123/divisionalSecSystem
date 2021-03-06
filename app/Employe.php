<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    //
    protected $fillable=['surname','fullname','id_num','address','dob','sex','race','marital_state','District',
        'date_of_appoint','appointment_no','widow_no','job_position','job_grade','penssion_date'];

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function salary()
    {
        return $this->hasOne('App\Salary');
    }
    public function leave()
    {
        return $this->hasMany('App\Leave');
    }



}
