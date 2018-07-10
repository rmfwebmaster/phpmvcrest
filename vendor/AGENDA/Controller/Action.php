<?php

namespace AGENDA\Controller;


abstract class Action
{
    protected $view;
    private $action;

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    /**
     * Método que determina a renderização da view herdando o layou ou apenas o content
     */
    protected function render($action,$layout = true)
    {
        $this->action = $action;
        if($layout == true && file_exists("../App/Views/layout.phtml")){
            include_once "../App/Views/layout.phtml";
        }else{
            $this->content();
        }
    }

    /**
     * Carrega o content no layout
     */
    protected function content()
    {
        $current = get_class($this);
        $singleClassName = strtolower((str_replace("Controller","",str_replace("App\\Controllers\\","",$current))));

        if($this->action == "405" || $this->action == "404"){
            include_once "../App/Views/".$this->action.".phtml";
        }else{
            include_once "../App/Views/".$singleClassName."/".$this->action.".phtml";
        }
    }
}