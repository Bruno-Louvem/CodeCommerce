<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;

class AdminCategoriesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $categories = Category::all();
        return view('categories_list',compact('categories'));
	}

    /**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function show($id)
	{
        $category = Category::find($id);
        return view('categories_show',compact('category'));
	}

}
