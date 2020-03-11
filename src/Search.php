<?php

namespace Jlelis\DigitalCep;

class Search
{
    private $url = "http://cep.la/";

    public function getCEP(string $cep): array
    {
        $opt = [
            "http" => [
                "method" => "GET",
                "header" => "Accept: application/json\r\n"
            ]
        ];
        $context = stream_context_create($opt);
        //$cep = preg_replace('/[^0-9]/im', '', $cep); //somente numeros

        $get = file_get_contents($this->url . $cep, false, $context);
        //requisitando url

        return (array) json_decode($get);
        //retonar o array com json
    }
}
