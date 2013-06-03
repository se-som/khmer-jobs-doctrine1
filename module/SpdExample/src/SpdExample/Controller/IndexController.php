<?php

namespace SpdExample\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

	public function indexAction() {
		return new ViewModel();
	}

	public function listAction() {
		$entity = ucfirst($this->params('entity'));
		$entityClass = 'SpdExample\\Entity\\' . $entity ;
		$objects = NULL;
		try {
			$objects = $this->getEntityManager()->getRepository($entityClass)->findAll();
		} catch (Exception $exc) {
			
		}

		return new ViewModel(array(
					'objects' => $objects,
				));
	}

	/**
	 * Entity manager instance
	 *           
	 * @var Doctrine\ORM\EntityManager
	 */
	protected $em;

	/**
	 * Returns an instance of the Doctrine entity manager loaded from the service 
	 * locator
	 * 
	 * @return Doctrine\ORM\EntityManager
	 */
	public function getEntityManager() {
		if (null === $this->em) {
			$this->em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
		}
		return $this->em;
	}

}

