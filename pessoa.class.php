<?php
class Pessoa{
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;

    public function getNome(){
        return $this->nome;
    }
    public function SetNome($nome){
        $this->nome = $nome;  
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function SetEndereco($endereco){
        $this->endereco = $endereco;  
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function SetBairro($bairro){
        $this->bairro = $bairro;  
    }
    public function getCep(){
        return $this->cep;
    }
    public function SetCep($cep){
        $this->cep = $cep;  
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function SetCidade($cidade){
        $this->cidade = $cidade;  
    }
    public function getEstado(){
        return $this->estado;
    }
    public function SetEstado($estado){
        $this->estado = $estado;  
    }

}
?>