<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cliente\Model;
use Application\Model\BaseTable;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Sql\Predicate\Expression;

class Cliente Extends BaseTable {

    public function getClientesByParams($params){
        return $this->getTableGateway()->select(function($select) use ($params) {
          if(isset($params['nome']) && !empty($params['nome'])){
              $select->where->like('nome', '%'.$params['nome'].'%');
          }    

          $select->order('nome');
        }); 
    }

}
