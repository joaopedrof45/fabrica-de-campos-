<?php

class Campo{

    private  $name;
    private  $id;
    private  $onclick;
    private  $onchange;
    private  $tamanho;
    private  $type;
    private  $value;
    private  $visivel;
    private  $tela;
    private  $required;
    private  $readOnly;
    private  $html; // nessa variavel retorna o html





//construtor de campo
public function __construct(String $name,String $type,Int $tamanho,String $value,String $id){

$this->setname($name);
$this->settype($type);
$this->settamanho($tamanho);
$this->setvalue($value);
$this->setid($id);
}




///get e seters 

public function gethtml(){
	return $this->html;
}


public function sethtml(String $html){

 $this->html=$html;
}


public function settamanho(String $tamanho){
	$this->tamanho=$tamanho;
}


public function gettamanho(){
return $this->tamanho;
}



public function setname(String $nome){
	$this->name=$nome;
}


public function getname(){
return $this->name;
}



public function setid(String $id){
	$this->id=$id;
}


public function getid(){
return $this->id;
}



public function setonclick(String $onclick){
	$this->onclick=$onclick;
}


public function getonclick(){
return $this->onclick;
}



public function setonchange(String $onchange){
	$this->onchange=$onchange;
}


public function getonchange(){
return $this->onchange;
}



public function settype(String $type){
	$this->type=$type;
}


public function gettype(){
return $this->type;
}



public function setvalue(String $value){
	$this->value=$value;
}


public function getvalue(){
return $this->value;
}



public function setvisivel(Boolean $visivel){
	$this->visivel=$visivel;
}


public function getvisivel(){
return $this->visivel;
}



public function setrequired(Boolean $required){
	$this->required=$required;
}


public function getrequired(){
return $this->required;
}



    public function  getReadOnly() {
        return $this->readOnly;
    }

    public function setReadOnly(Boolean $readOnly) {
        $this->readOnly = $readOnly;
    }



public function settela(String $tela){
	$this->tela=$tela;
}


public function gettela(){
return $this->tela;
}


///get e seters 






//aqui monta o campo dependendo do seu type
public function montacampo(){

//fazer com switch case pode ser uma boa
    
if($this->gettype()=="input")
{
	
$this->html="<input size='".$this->gettamanho()."'name='".$this->getname()."'value='".$this->getvalue()."'"."'id='".$this->getid()."'></input>";
}


// aqui cria campo do tipo select
if($this->gettype()=="select")
{

$this->html="<select name='".$this->getname()."' >
<option  size='".$this->gettamanho()."'name='"."opt".$this->getname()."'>".$this->getvalue()."</option>
</select>";
}







//escopo de botao tipo botao
if($this->gettype()=="button")
{
	

echo"é button";


}



}// fim do metodo gera campo







}





?>