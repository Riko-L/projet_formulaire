<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersMail extends Model
{

    public function insert(array $data_record) {

        $this->setAttribute('email',$data_record['email']);
        $this->setAttribute('hashpass',$data_record['password']);
        $this->save();

        return true;

   }

}
