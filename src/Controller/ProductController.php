<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
	
	/**
	* @Route ("/product")
	*/

	public function index()
	{
		$products = $this
          ->getDoctrine()
          ->getRepository(Product::class)
          ->findAll();

        return $this->render('product/index.html.twig' ,['products' => $products
      ]);
	}


	/**
    * @Route("/product/create", name="product_create")
    */
    
    public function create()
    {
    	return new Response("Ajouter formulaire");
    }

     /**
     * @Route("/product/{id}", name="product_read")
     */

    public function read($id)
    {

    	return new Response("Fiche détail produit " . $id);
    }

     /**
     * @Route("/product/{id}/update", name="product_update")
     */

    public function update($id)
     {
     	return new response("Le formulaire a été bien mis a jour " .$id);
     }
      /**
     * @Route("/product/{id}/delete", name="product_delete")
     */
     public function delete($id)
    
    {
    	return new response("Le formulaire a été bien supprimé " .$id);
    }

     
}   

    

