<?php
namespace Specialty\Controller;

use Specialty\Controller\AppController;

/**
 * Api Controller
 *
 *
 * @method \Specialty\Model\Entity\Api[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ApiController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->loadmodel('Specialty');
        $Specialty =  $this->Specialty->find()->first();

        $this->set(compact('Specialty'));
        $this->set('_serialize',['Specialty']);
    }

}
