<?php namespace Webschool\Http\Controllers;

use Webschool\Http\Requests;
use Webschool\Http\Controllers\Controller;
use Webschool\Http\Requests\SearchRequest;
use Illuminate\Http\Request;

use Webschool\User;

class SearchController extends Controller {

	public function postSearch(SearchRequest $request){
		$search = $request->input('search');
		$result = User::where('apellido','LIKE',"%$search%")->orWhere('identificacion','LIKE',"%$search%")->get();
		if (!$result->isEmpty()) {
			return view('Admin.getSearched',['search' => $result]);
		}else{
			return view('Admin.index',['error' => 'User Not Found']);
		}
		
	}

}
