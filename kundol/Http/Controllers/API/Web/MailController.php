<?php

namespace App\Http\Controllers\API\Web;

use App\Http\Controllers\Controller as Controller;
use App\Http\Requests\ContactUsRequest;
use App\Mail\ContactUs;
use App\Models\Admin\Setting;
use Illuminate\Support\Facades\Mail;
use App\Traits\ApiResponser;

class MailController extends Controller
{
    use ApiResponser;
    public function contact_us(ContactUsRequest $request)
    {
        $data = [
            'first_name' => (isset($request->first_name) && !empty($request->first_name))?$request->first_name:'empty', 
            'last_name' => (isset($request->last_name) && !empty($request->last_name))?$request->last_name:'empty', 
            'email' => (isset($request->email) && !empty($request->email))?strtolower($request->email):'empty', 
            'message' => (isset($request->message) && !empty($request->message))?$request->message:'empty', 
            'phone' => (isset($request->phone) && !empty($request->phone))?$request->phone:'empty',
            'address' => (isset($request->address) && !empty($request->address))?$request->address:'empty', 
            'postal_code' => (isset($request->postal_code) && !empty($request->postal_code))?$request->postal_code:'empty', 
            'province' => (isset($request->province) && !empty($request->province))?$request->province:'empty', 
            'town' => (isset($request->town) && !empty($request->town))?$request->town:'empty', 
        ];
        
        $setting = Setting::where('type', 'email_notify_setting')->pluck('value', 'key');
        $senderEmail = explode(',',$setting['notify_email']);
        foreach($senderEmail as $email){
            Mail::to('joshibipin2052@gmail.com')->send(new ContactUs($data));
        }
        return $this->successResponse('', 'Email sent successfully!');
    }
}
