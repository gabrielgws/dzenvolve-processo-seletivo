<?php
  namespace App\Controller\Pages;

  use \App\Utils\View;
  USE \App\Model\Entity\Table as EntityTable;

  class Table extends Page{

    /**
     * Método responsável por obter a renderização da tabela
     * @return string
     */
    private static function getPessoasTable(){
      $pessoas = '';

      //RESULTADOS DA PÁGINA
      $results = EntityTable::getPessoasTableSingle(null, 'id DESC');

      //RENDERIZA O ITEM
      while($obPessoas = $results->fetchObject(EntityTable::class)){
        $pessoas .= View::render('pages/tablePessoas/pessoas', [
        'nome' => $obPessoas->nome,
        'nascimento' => $obPessoas->nascimento,
        'sexo' => $obPessoas->sexo,
        'cpf' => $obPessoas->cpf,
        'rg' => $obPessoas->rg,
        'email' => $obPessoas->email,
        'telefone' => $obPessoas->telefone,
        'celular' => $obPessoas->celular,
      ]);
      }

      return $pessoas;
    }

    /**
     * Método responsável por retornar o conteúdo (view) da nossa tabela
     * @return string
     * */
    public static function getTable(){

      // View das Tabelas
      $content = View::render('pages/table', [
        'pessoas' => self::getPessoasTable()
      ]);

      // Retorna a view da página
      return parent::getPage('Table > Dzenvolve Processo Seletivo', $content);
    }

    /**
     * Método responsável por cadastrar na tabela
     * @param Request $request
     * @return string
     */
    public static function insertTable($request){
      //DADOS DO POST
      $postVars = $request->getPostVars();
      
      //NOVA INSTÂNCIA DE PESSOA
      $obTable = new EntityTable;
      $obTable->nome = $postVars['nome'];
      $obTable->nascimento = $postVars['nascimento'];
      $obTable->sexo = $postVars['sexo'];
      $obTable->cpf = $postVars['cpf'];
      $obTable->rg = $postVars['rg'];
      $obTable->email = $postVars['email'];
      $obTable->telefone = $postVars['telefone'];
      $obTable->celular = $postVars['celular'];
      $obTable->cadastrar();

      return self::getTable();
    }
  }
?>