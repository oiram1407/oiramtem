<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'w_contacts';

    protected $primaryKey = 'id_contact';

    protected $fillable = ['name_contact', 'email_contact', 'id_reason', 'message_contact', 'ip_contact'];
}
