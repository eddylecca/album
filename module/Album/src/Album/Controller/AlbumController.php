<?php
namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AlbumController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel(array(
            'albums' => $this->getAlbumTable()->fetchAll(),
        ));
 
    }

    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
    
    // Agregamos este método
    public function getAlbumTable()
    {
        if (!$this->albums) {
            $sm = $this->getServiceLocator();
            $this->albums = $sm->get('Album\Model\AlbumTable');
        }
        return $this->albums;
    }    
}