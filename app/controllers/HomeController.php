<?php

/**
* \HomeController
*/
class HomeController extends BaseController
{
  
  public function home()
  {

  	$this->view = View::make('home')->with('article',Article::all())

                                    ->withTitle('pfc :-D')

                                    ->withFuckMe('OK!');
    // $article = Article::all();

    // require dirname(__FILE__).'/../views/home.php';
  }

  public function redis()
  {
  	
  	echo Redis::get('key');

  	Redis::set('key', 'hello world', 5, 's');

	die;

  }
}