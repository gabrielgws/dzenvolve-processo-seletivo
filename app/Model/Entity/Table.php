<?php
  namespace App\Model\Entity;
  use \WilliamCosta\DatabaseManager\Database;

  class Table{

    /**
     * ID da pessoa
     * @var integer
     */
    public $id;

    /**
     * Nome da pessoa
     * @var string
     */
    public $nome;

    /**
     * Data de nascimento da pessoa
     */
    public $nascimento;

    /**
     * Sexo da pessoa
     * @var string
     */
    public $sexo;

    /**
     * CPF da pessoa
     * @var string
     */
    public $cpf;

    /**
     * RG da pessoa
     * @var string
     */
    public $rg;

    /**
     * Email da pessoa
     * @var string
     */
    public $email;

    /**
     * Telefone da pessoa
     * @var integer
     */
    public $telefone;

    /**
     * Celular da pessoa
     * @var integer
     */
    public $celular;

    /**
     * Método responsável por cadastrar a pessoa no banco de dados
     * @return boolean
     */
    public function cadastrar(){

      //INSERE PESSOA NO BANCO DE DADOS
      $this->id= (new Database('pessoas'))->insert([
        'nome' => $this->nome,
        'nascimento' => $this->nascimento,
        'sexo' => $this->sexo,
        'cpf' => $this->cpf,
        'rg' => $this->rg,
        'email' => $this->email,
        'telefone' => $this->telefone,
        'celular' => $this->celular
      ]);
      //SUCESSO
      return true;
    }

    /**
     * Método responsável por retornar as pessoas
     * @param string $where
     * @param string $order
     * @param string $limit
     * @param string $fields
     * @return PDOStatement
     */
    public static function getPessoasTableSingle($where = null, $order = null, $limit = null, $fields = '*'){
      return (new Database('pessoas'))->select($where,$order,$limit,$fields);
    }
  }
?>