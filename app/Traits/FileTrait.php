<?php

namespace App\Traits;
use App\Http\Requests\FileRequest;
use Validator;

trait FileTrait
{
    public function validateFileContent(string $filepath): array
    {
        $handle = fopen($filepath, "r");
        $data = file($filepath, FILE_IGNORE_NEW_LINES);
        unset($data[0]);

        $keys = ["buyer", "description", "price", "quantity", "address", "supplier"];
        $overlay = array_fill(0, count($keys), NULL);
        $sales = [];

        foreach ($data as $line) {
            $fields = explode("\t", $line);

            $tmp = [];
            
            $tmp = array_combine($keys, $fields + $overlay);

            $sales[] = $tmp;
        }
        fclose($handle);

        $attributes = [
            '*.buyer'       => 'Comprador',
            '*.description' => 'Descrição',
            '*.price'       => 'Preço',
            '*.quantity'    => 'Quantidade',
            '*.address'     => 'Endereço',
            '*.supplier'    => 'Fornecedor'
        ];

        $rules = [
            '*.buyer'       => 'string',
            '*.description' => 'string',
            '*.price'       => 'numeric|between:0,999.99',
            '*.quantity'    => 'integer',
            '*.address'     => 'string',
            '*.supplier'    => 'required|string'
        ];

        $messages = [
            '*.*.required'  => 'Alguns dados estão incorretos ou ausentes. Por favor, verifique o seu arquivo e tente novamente.',
            '*.*.string'    => 'O valor informado para o campo :attribute não é válido.',
            '*.*.numeric'   => 'O valor informado para o campo :attribute não é válido.',
            '*.*.integer'   => 'O valor informado para o campo :attribute não é válido.'
        ];

        Validator::make($sales, $rules, $messages, $attributes)->validate();

        return $sales;
    }
}
