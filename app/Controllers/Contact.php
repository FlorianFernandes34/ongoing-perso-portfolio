<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function getIndex()
    {
        return view('pages/contact', [
            'title' => 'Contact - Florian Fernandes'
        ]);
    }

    public function postSend()
    {
        $session = session();

        $nom     = $this->request->getPost('name');
        $mail    = $this->request->getPost('email');
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('message');

        $data = [
            'sender' => [
                'email' => 'fernandesflorian380@gmail.com',
                'name'  => 'Portfolio'
            ],
            'to' => [
                ['email' => 'fernandesflorian38200@gmail.com']
            ],
            'replyTo' => [
                'email' => $mail,
                'name'  => $nom
            ],
            'subject' => $subject,
            'htmlContent' => "
                <p><strong>Nom :</strong> {$nom}</p>
                <p><strong>Email :</strong> {$mail}</p>
                <p><strong>Message :</strong><br>{$message}</p>
            "
        ];

        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_URL => 'https://api.brevo.com/v3/smtp/email',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => [
                'accept: application/json',
                'api-key: ' . $apiKey,
                'content-type: application/json'
            ],
            CURLOPT_POSTFIELDS => json_encode($data),
        ]);

        $response = curl_exec($ch);
        $error    = curl_error($ch);
        curl_close($ch);

        if ($error) {
            dd($error);
        } else {
            $session->setFlashdata('successSend', 'Votre message a bien été envoyé.');
        }

        return redirect()->back();
    }
}