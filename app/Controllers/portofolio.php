<?php

namespace App\Controllers;

class portofolio extends BaseController
{
    public function index()
    {
        return view('portofolio/index');
    }

    public function contact()
    {
        $rules = [
            'username' => 'required|min_length[3]',
            'email'    => 'required|valid_email',
            'phoneNumber' => 'required',
            'message'  => 'required|min_length[5]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        return redirect()->to('/')
            ->with('success', 'Pesan berhasil dikirim!');
    }

    public function utsksi()
    {
        return view('Portofolio.project');
    }
}

