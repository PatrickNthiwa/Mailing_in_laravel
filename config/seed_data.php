<?php

// Database seeder data

return [
    'settings' => ['infotech_email' => 'noreply@infotech.com', 'enable_email_notification' => 1],
    'permissions' => [
        'edit_profile', 'compose_email', 'list_emails', 'view_email', 'toggle_important_email', 'trash_email', 'send_email',
        'reply_email', 'forward_email', 'show_email_notifications', 'show_calendar'
    ],
    'mailbox_folders' => array(
        array("title"=>"Inbox", "icon" => "fa fa-inbox"),
        array("title"=>"Sent", "icon" => "fa fa-envelope-o"),
        array("title"=>"Drafts", "icon" => "fa fa-file-text-o"),
        array("title"=>"Trash", "icon" => "fa fa-trash-o")
    )
];
