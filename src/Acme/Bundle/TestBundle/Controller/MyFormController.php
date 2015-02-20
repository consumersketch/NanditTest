<?php

namespace Acme\Bundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\Bundle\TestBundle\Entity\Clients;
use Acme\Bundle\TestBundle\Entity\Invoices;
use Acme\Bundle\TestBundle\Manager;
use Symfony\Component\HttpFoundation\Response;

class MyFormController extends Controller
{

	// Controller action to get invoices data listing
	//filters for client can be apply according to client_id values.
	
	/**
     * @Route("/product_invoice", name="product_invoice")
     */
	public function productInvoiceAction() {
		
		
		$clientInvoicesArray = array();
		
		
			$clients = $this->getDoctrine()->getEntityManager()->getRepository('AcmeTestBundle:Clients')->getAllClients();
			foreach($clients as $client){
				$clientInvoices = $this->getDoctrine()->getEntityManager()->getRepository('AcmeTestBundle:Invoices')->getAllInvoicesByClients($client->getClientId());
				$clientInvoicesArray[$client->getClientId()] = $clientInvoices;
			}
		
		
		return $this->render('default/index.html.twig','');
		
		//return new Response('Welcome to Symfony!');
		
	}
	
	/**
     * @Route("/product_invoiceajax", name="product_invoiceajax")
     */
	public function productInvoiceAjaxAction() {
		
		
		$invoicesArray = array();
		if(isset($_REQUEST['client_id']) && $_REQUEST['client_id'] != ''){
			
			$clients = $this->getDoctrine()->getEntityManager()->getRepository('AcmeTestBundle:Clients')->getAllClients();
			$invoices = $this->getDoctrine()->getEntityManager()->getRepository('AcmeTestBundle:Invoices')->getAllInvoicesByClients($_REQUEST['client_id']);
			$invoicesArray[$_REQUEST['client_id']] = $invoices;
			$res = '<table border="1"><tr><td>Client Id</td><td>Invoice Num</td><td>Invoice Date</td><td>Qty</td><td>Price</td></tr>';
			
			
			foreach($invoicesArray as $invoicedata) {
				foreach($invoicedata as $invrow) {
				
					$res .= "<tr><td>".$invrow['client_id']."</td>";
					$res .= "<td>".$invrow['invoice_num']."</td>";
					$res .= "<td>".$invrow['invoice_date']."</td>";
					$res .= "<td>".$invrow['qty']."</td>";
					$res .= "<td>".$invrow['price']."</td></tr>";
				
					
				
				
				}
			}
			
			$res .= "</table>";
			
			return new Response($res);
		} 
		
		
	}
}
