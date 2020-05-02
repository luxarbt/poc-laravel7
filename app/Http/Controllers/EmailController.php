<?php


namespace App\Http\Controllers;


use App\Http\Requests\EmailRequest;
use App\Repositories\EmailRepositoryInterface;

/**
 * Class EmailController
 * @package App\Http\Controllers
 */
class EmailController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getForm()
    {
        return view('email');
    }

    /**
     * @param EmailRequest $request
     * @param EmailRepositoryInterface $emailRepository
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function postForm(EmailRequest $request, EmailRepositoryInterface $emailRepository)
    {
        $emailRepository->save($request->input('email'));

        return view('email_ok');
    }
}
