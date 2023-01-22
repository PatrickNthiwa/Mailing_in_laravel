<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailboxFlags extends Model
{
    protected $table = "mailbox_flags";

    protected $fillable = ["is_unread", "is_important", "mailbox_id", "user_id"];
}
