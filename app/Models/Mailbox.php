<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Mailbox extends Model
{
    protected $table = "mailbox";

    protected $fillable = ["subject", "body", "sender_id", "time_sent", "parent_id"];


    public function sender()
    {
        return $this->belongsTo(User::class, "sender_id");
    }

    public function receivers()
    {
        return $this->hasMany(MailboxReceiver::class);
    }

    public function tmpReceivers()
    {
        return $this->hasMany(MailboxTmpReceiver::class);
    }

    public function attachments()
    {
        return $this->hasMany(MailboxAttachment::class, "mailbox_id");
    }

    public function replies()
    {
        return $this->hasMany(self::class, "parent_id")->where("parent_id", "<>", 0);
    }

    public function userFolders()
    {
        return $this->hasMany(MailboxUserFolder::class);
    }

    public function userFolder()
    {
        return $this->hasMany(MailboxUserFolder::class)->where('user_id', Auth::user()->id)->first();
    }

    public function flags()
    {
        return $this->hasMany(MailboxFlags::class);
    }

    public function flag()
    {
        return $this->hasMany(MailboxFlags::class)->where('user_id', Auth::user()->id)->first();
    }
}
