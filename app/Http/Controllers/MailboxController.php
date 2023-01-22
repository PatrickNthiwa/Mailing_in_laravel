<?php

namespace App\Http\Controllers;

use App\Helpers\MailerFactory;
use App\Models\MailboxFolder;
use App\Models\Mailbox;
use App\Models\MailboxAttachment;
use App\Models\MailboxFlags;
use App\Models\MailboxReceiver;
use App\Models\MailboxTmpReceiver;
use App\Models\MailboxUserFolder;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MailboxController extends Controller
{
    protected $mailer;

    protected $folders = array();

    public function __construct(MailerFactory $mailer)
    {
        $this->mailer = $mailer;

        $this->getFolders();
    }

    /**
     * index
     *
     * list all messages
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request, $folder = "")
    {

    }


    /**
     * create
     *
     * show compose form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

    }


    /**
     * store
     *
     * store and send the message
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

    }


    /**
     * show email
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {

    }


    /**
     * toggle important
     *
     *
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function toggleImportant(Request $request)
    {

    }


    /**
     * trash email
     *
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function trash(Request $request)
    {

    }


    /**
     * getReply
     *
     * show reply form
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getReply($id)
    {

    }


    /**
     * postReply
     *
     *
     * send the reply
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postReply(Request $request, $id)
    {

    }

    /**
     * getForward
     *
     * show forward form
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getForward($id)
    {

    }


    /**
     * postForward
     *
     * forward the message
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postForward(Request $request, $id)
    {

    }


    /**
     * send
     *
     * used to send a Draft message
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function send($id)
    {

    }

    /**
     * get Folders
     */
    private function getFolders(): void
    {
        $this->folders = MailboxFolder::all();
    }

}
