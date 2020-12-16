<?php


namespace App\Http\Controllers;


use App\Models\News;
use App\Models\Message;
use App\Validators\MessageValidator;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class MessageController
{
    public function store(Request $request) {
        $data = MessageValidator::handle($request);
        $response = new JsonResponse();

        if(array_key_exists('errors', $data)) {
            $response->setData($data);
            return $response->send();
        }

        Message::create($data);

        $response->setData(['success' =>true]);


        return $response->send();
    }

}