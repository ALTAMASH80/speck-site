<?php

namespace SpeckDocs\Controller;

//use SpeckDocs\Form\ContactForm;
use Zend\View\Helper\ViewModel;
use Zend\Mail\Transport;
use Zend\Mail\Message as Message;
use Zend\Mvc\Controller\AbstractActionController;
//use SpeckDocs\Mapper\Docs as DocsMapper;

class DocsController extends AbstractActionController
{
    protected $form;
    protected $message;
    protected $transport;

    public function setMessage(Message $message)
    {
        $this->message = $message;
    }

    public function setMailTransport(Transport\TransportInterface $transport)
    {
        $this->transport = $transport;
    }

    public function indexAction()
    {
    	//$docTitle = $this->getEvent()->getRouteMatch()->getParam('doctitle', 'default');
    	$docTitle = $this->params()->fromRoute('doctitle', 'intro-to-speckcommerce');
    	$mapper = $this->getServiceLocator()->get('speckdocs_docs_mapper');
    	$document = $mapper->getDocumentByUrlTitle($docTitle);
        return array(
        	'docList' => $mapper->getDocumentsList(),
        	'document' => $document,
        	'nextDoc' => $mapper->getDocumentById($document[0]['next_document_id']) ? : '',
        	'prevDoc' => $mapper->getDocumentById($document[0]['previous_document_id']) ? : '',
        );
    }

    public function viewAction()
    {
        $viewModel = new ViewModel();
        return $viewModel;
    }

        
}
