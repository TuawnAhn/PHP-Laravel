<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactAdminNotification;
use App\Mail\ContactThankYou;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function index()
    {
        return view('client.contact');
    }

    public function store(Request $request)
    {
        // Validate dữ liệu từ form
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'mess' => 'required|string',
        ]);

        // Lưu dữ liệu vào database
        $contact = Contact::create([
            'name' => $validated['username'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'message' => $validated['mess'],
            'trang_thai' => 0, // Mặc định là chưa xử lý
        ]);

        // Dữ liệu liên hệ để gửi email
        $contactData = [
            'name' => $contact->name,
            'email' => $contact->email,
            'phone' => $contact->phone,
            'message' => $contact->message,
        ];

        // Gửi email tới admin
        // Mail::to('anhntph51526@gmail.com')->send(new ContactAdminNotification($contactData));

        // Gửi email cảm ơn tới người dùng
        Mail::to($contactData['email'])->send(new ContactThankYou($contactData));

        // Trả về thông báo thành công
        return redirect()->back()->with('success', 'Tin nhắn của bạn đã được gửi thành công! Vui lòng kiểm tra email để nhận được phản hồi sớm nhất từ đội ngũ của chúng tôi.');
    }
}
