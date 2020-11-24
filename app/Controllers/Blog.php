<?php namespace App\Controllers;

use App\Models\Billet;

class Blog extends BaseController
{
	public function index()
	{
    $data['titre']= "Un Titre";
    $data['description']= "Une description est ici";
    $data['url']=base_url();
  $data['chemin']=base_url('application/views');

		return view('Vue_accueil',$data);
	}
  public function apropos()
  {
    return view('apropos');

  }
  public function page2()
  {
    return view('page2');
  }
	public function lesBillets()
	{
		$data['titre']='Les billets du blog';
		//Création du modèle
		$modelBillet=new Billet();
		//accès  à la liste des billets
		$data['lesBillets']=$modelBillet->getLesBillets();
		//Chargement de la vue lesbillets.php
		return view('lesbillets',$data);
	}
	public function leBillet($idBillet)
	{
		$data['titre']='Détail du Billet';
		//Création du modèle
		$modelBillet=new Billet();
		//accès au détail d'un billet
		$data['leBillet']=$modelBillet->getLeBillet($idBillet);
		//Chargement de la vue lesbillets.php
		return view('lebillet',$data);
	}

	//--------------------------------------------------------------------

}
