<?php
    namespace App\Http\Requests;
    use Illuminate\Foundation\Http\FormRequest;
    class TaskRequest extends FormRequest
    {
        public function authorize()
        {
            return true; //mặc định ai cũng có thể tạo được
        }
        public function rules()
        {
            return [
                'title' => 'required|max:255',
                'description' => 'required|min:3|max:255',
                'long_description' => 'required|min:3|max:255',
            ];
        }
    }
?>
