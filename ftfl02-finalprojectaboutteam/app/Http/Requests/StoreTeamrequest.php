<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreTeamrequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return True;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'name' => ['required', 'min:3'],
            'designation' => ['required', 'min:5'],
            'description' => ['required', 'min:15'],
    ];
	}

}
