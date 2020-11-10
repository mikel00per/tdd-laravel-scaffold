<?php


namespace Modules\Admin\Posts\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class UpdatePostRequest extends FormRequest
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
            'title' => ['required'],
            'content' => ['required'],
            'author_id' => ['required']
        ];
    }
}
