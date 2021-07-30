<?php

namespace App\Jean;

use Exception;

class Usuario
{
    private $nome;
    private $telefone;
    private $email;
    private $celular;

    public function __construct(string $nome, string $celular, string $telefone, string $email )
    {

        $this->nome = $nome; 
        $this->email = $email; 

        if ($this->validaEmail($email) !== false) {  // validação de email
            $this->setEmail($email);
        } else {
            $this->setEmail("Email inválido.");
        }
        // condição de validação de telefone 
        if ($this->validaTelefone($telefone)) {
            $this->setTelefone($telefone);
        } else {
            $this->setTelefone("Numero invalido");
        }
       // condição de validação de telefone 
        if (!$this->validaCelular($celular)) {
            $this->setCelular($celular);
        } else {
            $this->setCelular("Numero invalido");
        }

        if ($nome[0] === "") {
            $this->nome = "Nome inválido"; // nome vazio 
        } else {
            $this->nome = $nome; // se viver aceita e atribui
        }
    }


    public function getNome(): string // get para a atribuição e chamadas da função
    {
        return $this->nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
    // VALIDAÇÃO DE TELEFONE 
    public function getTelefone(): string
    {
        return $this->telefone;
    }
    public function getCelular(): string
    {
        return $this->celular;
    }




    private function setEmail(string $email): void
    {
        $this->email = $email;
    }
    private function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }
    private function setCelular(string $celular): void
    {
        $this->celular = $celular;
    }



    //    CRIANDO NOME DO USUARIO DO SISTEMA APARTIR DO SEU EMAIL
    public function getUsuario(): string  // função de atribuir nome de usuario atraves do email, até o @.
    {
        $posicaoArroba = strpos($this->email, "@");  // strpos vai contar os caracteres até o arroba

        return substr($this->email, 0, $posicaoArroba);  // substr vai retornar as caracteres da posicao 0 até o arroba
    }


    // FUNÇÃO DE VALIDAÇÃO DE TELEFONE
    private function validaCelular(string $celular)
    {

        if (strlen($celular) == 15) {
            // (99) 99999-9999
            $regex_celular = "/\([0-9]{2}\)[0-9]{5}\-[0-9]{4}/";
            return preg_match($regex_celular, str_replace(" ", "", $celular));
        } else {
            return false;
        }
        /* return preg_match('/^\[0-9]{2}\ [0-9]{5} \- [0-9]{4}$/', $telefone, $encontrados); // validação com a formato de telefone com a funçao preg_match */
    }

    // FUNÇÃO DE VALIDAÇÃO DE TELEFONE
    private function validaTelefone(string $telefone)
    {
        if (strlen($telefone) == 9) {
            $regex_telefone = "/[0-9]{4}\-[0-9]{4}/";
            return preg_match($regex_telefone, str_replace(" ", "", $telefone));
        } else {
            return false;
        }
        /* return preg_match('/^\[0-9]{2}\ [0-9]{5} \- [0-9]{4}$/', $telefone, $encontrados); // validação com a formato de telefone com a funçao preg_match */
    }

    //  VALIDAÇÃO DE EMAIL 
    public function validaEmail(string $email)  // recebe o parametro email
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL); // retorna o email com o seu filtro de validação 
    }
}
