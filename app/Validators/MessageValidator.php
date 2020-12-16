<?php


namespace App\Validators;


use Framework\Validators\Validator;
use Symfony\Component\HttpFoundation\Request;

class MessageValidator extends Validator
{

    public static function handle(Request $request): array
    {
        $data = self::only($request, ['name', 'email', 'subject', 'message']);

        // All fields required
        $valid = true;
        $errors = [];
        foreach($data as $key=>$value) {
            if(!$value) {
                $valid = false;
                $errors[$key] = 'Campo obrigatório';
            }
        }
        return $errors ? ['errors' => $errors, 'success' => false] : $data;
    }
}