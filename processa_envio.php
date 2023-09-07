<?php

//print_r($_POST);

class Mensagem
{
    private $para = null;
    private $assunto = null;
    private $mensagem = null;

    public function __get($attr)
    {
        return $this->$attr;
    }

    public function __set($attr, $valor)
    {
        $this->$attr = $valor;
    }

    public function mensagemValida()
    {
        if (empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
            return false;
        }
        return true;
    }
}

$mensagem = new Mensagem();

$mensagem->__set('para', $_POST['para']);
$mensagem->__set('assunto', $_POST['assunto']);
$mensagem->__set('mensagem', $_POST['mensagem']);

//echo '<pre>';
//print_r($mensagem);
//echo '</pre>';

if ($mensagem->mensagemValida()) {
    echo 'Mensagem é valida';
} else {
    echo 'Mensagem invalida';
}

?>