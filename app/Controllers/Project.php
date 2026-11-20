<?php

namespace App\Controllers;

class Project extends BaseController
{
    public function formText()
    {
        return $this->response->setBody(
            view('praktikum1/formText')
        );
    }
    public function kalkulator()
    {
        return $this->response->setBody(
            view('praktikum2/kalkulator')
        );
    }
    public function formCheckbox()
    {
        return $this->response->setBody(
            view('praktikum3/formCheckbox')
        );
    }
    public function formCombobox()
    {
        return $this->response->setBody(
            view('praktikum4/formCombobox')
        );
    }
    public function formTextArea()
    {
        return $this->response->setBody(
            view('praktikum5/formTextArea')
        );
    }
    public function formLengkap()
    {
        return $this->response->setBody(
            view('praktikum6/formLengkap')
        );
    }
    public function signin()
    {
        return $this->response->setBody(
            view('praktikum7/index')
        );
    }
    public function signup()
    {
        return $this->response->setBody(
            view('praktikum8/signup')
        );
    }
    public function utsksi()
    {
        return view('UtsKsi/index', [
            'enc' => '',
            'dec' => '',
            'teks' => ''
        ]);
    }

    public function proses()
    {
        $teks = $this->request->getPost('teks');

        // Validasi input
        if ($teks === null || trim($teks) === '') {
            return redirect()->to(site_url('utsksi'));
        }

        $shift = 3;

        // Proses enkripsi dan dekripsi
        $enc = $this->encrypt($teks, $shift);
        $dec = $this->decrypt($enc, $shift);

        // Kirim hasil ke View
        return view('UtsKsi/index', [
            'teks' => $teks,
            'enc' => $enc,
            'dec' => $dec
        ]);
    }
}