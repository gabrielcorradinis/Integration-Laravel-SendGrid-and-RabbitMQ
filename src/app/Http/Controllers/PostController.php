<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Jobs\SendMailJob;
use App\Models\Email;

class PostController extends Controller
{
    public function form()
    {
        return view('index');
    }

    public function formPost(PostRequest $request)
    {
        $email = Email::create($request->all());

        $destinatarios = explode(',', $email->emailDestinatario);

        foreach ($destinatarios as $destinatario) {
            SendMailJob::dispatch($email, $destinatario)->onQueue('default');
        }

        return redirect('/')->with('success', 'true');
    }

}
