<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailboxAttachment extends Model
{
    protected $table = "mailbox_attachment";

    protected $fillable = ["mailbox_id", "attachment"];
}
