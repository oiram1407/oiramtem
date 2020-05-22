<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessagesContact extends Model
{
    protected $table = 'w_messages_contact';

    protected $primaryKey = 'id_reason';

    protected $fillable = ['reason_text'];
}
