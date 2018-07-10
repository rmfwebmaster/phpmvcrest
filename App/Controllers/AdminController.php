<?php
namespace App\Controllers;

use AGENDA\Controller\Action;
use AGENDA\DI\Container;
use App\Models\Contato;

class AdminController extends Action
{
    /**
     * Carrega dados para alimentar o dashboard e carrega a view
     */
    public function index()
    {
        $contato = Container::getModel('Contato');
        $totalGeral = $contato->countAll();
        $totalHomens = $contato->countTipo('TOTAL_MEN','sexo','Masculino');
        $totalMulheres = $contato->countTipo('TOTAL_WOMEN','sexo','Feminino');
        $totalCasados = $contato->countTipo('TOTAL_MARRIED','estadocivil','Casado(a)');
        $totalSolteiros = $contato->countTipo('TOTAL_SINGLES','estadocivil','Solteiro(a)');

        $today_ini = "'".date('Y-m-d')." 00:00:00'";
        $today_fim = "'".date('Y-m-d')." 23:59:59'";
        $totalAddToday = $contato->countToday($today_ini,$today_fim);

        $dados = array_merge($totalGeral,$totalHomens,$totalMulheres,$totalCasados,$totalSolteiros,$totalAddToday);

        $this->view->contatos = $dados;

        $this->render('index');
    }
}