<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Interfaces\ContactPageSettingInterface;

use Illuminate\Http\Request;

class ContactMeController extends Controller
{

    private $contact;

    public function __construct(ContactPageSettingInterface $contact)
    {
        $this->contact = $contact;
    
    }

    public function index()
    {
        return view('user.contact_me.index', [
            'contact' => $this->contact->get(),
        ]);
    }
}
