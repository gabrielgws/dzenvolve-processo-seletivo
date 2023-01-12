<?php
  namespace App\Utils;

  class View{

    /**
     * Variáveis padrões da View
     * @var array
     */
    private static $vars = [];

    /**
     * Método responsável por definir os dados iniciar da classe
     * @param array $vars
     */
    public static function init($vars = []){
      self::$vars = $vars;
    }

    /**
     * Método responsável por retornar o conteúdo de uma View
     * @param string $view
     * @param string
     */
    private static function getContentView($view){
      $file = __DIR__.'/../../resources/view/'.$view.'.html';
      return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     * Método responsável por retornar o conteúdo renderizado de uma View
     * @param string $view
     * @param array $vars (string/numeric)
     * @param string
     */
    public static function render($view, $vars = []){
      //Conteúdo da View
      $contentView = self::getContentView($view);

      //Merce de variáveis da view
      $vars = array_merge(self::$vars,$vars);

      //Chave dos array de variáveis
      $keys = array_keys($vars);
      $keys = array_map(function($item){
        return '{{'.$item.'}}';
      }, $keys);

      //Retorna o conteúdo renderizado
      return str_replace($keys, array_values($vars), $contentView);
    }
  }

?>