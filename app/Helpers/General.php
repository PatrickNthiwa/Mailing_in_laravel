<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Auth;

/**
 * upload file
 *
 *
 * @param $request
 * @param $name
 * @param string $destination
 * @return string
 */
function uploadFile($request, $name, $destination = '')
{
    $image = $request->file($name);

    $name = time().'.'.$image->getClientOriginalExtension();

    if($destination == '') {
        $destination = public_path('/uploads');
    }

    $image->move($destination, $name);

    return $name;
}


/**
 * add setting key and value
 *
 *
 * @param $key
 * @param $value
 * @return Setting|bool
 */
function addSetting($key, $value)
{
    if(Setting::where('setting_key', $key)->first() != null)
        return false;

    $setting = new Setting();

    $setting->setting_key = $key;

    $setting->setting_value = $value;

    $setting->save();

    return $setting;
}

/**
 * get setting value by key
 *
 * @param $key
 * @return mixed
 */
function getSetting($key)
{
    return ($setting = Setting::where('setting_key', $key)->first()) != null ? $setting->setting_value:null;
}

/**
 * check directory exists and try to create it
 *
 *
 * @param $directory
 */
function checkDirectory($directory)
{
    try {
        if (!file_exists(public_path('uploads/' . $directory))) {
            mkdir(public_path('uploads/' . $directory));

            chmod(public_path('uploads/' . $directory), 0777);
        }
    } catch (\Exception $e) {
        die($e->getMessage());
    }
}

/**
 * check if user has permission
 *
 *
 * @param $permission
 * @return bool
 */
function user_can($permission)
{
    return Auth::user()->is_admin == 1 || Auth::user()->can($permission);
    function getUnreadMessages()
    {
        $folder = \App\Models\MailboxFolder::where('title', "Inbox")->first();
        $messages = \App\Models\Mailbox::join('mailbox_receiver', 'mailbox_receiver.mailbox_id', '=', 'mailbox.id')
            ->join('mailbox_user_folder', 'mailbox_user_folder.user_id', '=', 'mailbox_receiver.receiver_id')
            ->join('mailbox_flags', 'mailbox_flags.user_id', '=', 'mailbox_user_folder.user_id')
            ->where('mailbox_receiver.receiver_id', Auth::user()->id)
//                          ->where('parent_id', 0)
            ->where('mailbox_flags.is_unread', 1)
            ->where('mailbox_user_folder.folder_id', $folder->id)
            ->where('sender_id', '!=',Auth::user()->id)
            ->whereRaw('mailbox.id=mailbox_receiver.mailbox_id')
            ->whereRaw('mailbox.id=mailbox_flags.mailbox_id')
            ->whereRaw('mailbox.id=mailbox_user_folder.mailbox_id')
            ->select(["*", "mailbox.id as id"])
            ->get();
        return $messages;
    }
}
