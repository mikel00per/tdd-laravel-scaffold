<?php


namespace Modules\Admin\Posts\Requests;


use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class CreatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        return true;
    }

    /**
     * Transform the error messages into JSON
     *
     * @param array $errors
     * @return JsonResponse
     */
    public function response(array $errors): JsonResponse
    {
        return response()->json($errors, 422);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {

        return [
            'title' => 'required|string',
            'content' => 'required|string',
            'categories' => 'required',
            'author_id' => 'required|int'
        ];
    }

}
