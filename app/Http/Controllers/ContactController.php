<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $query = Contact::query();

        // Tìm kiếm theo ID
        if ($request->filled('id')) {
            $query->where('id', $request->id);
        }

        // Tìm kiếm theo tên
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        // Tìm kiếm theo email
        if ($request->filled('email')) {
            $query->where('email', 'like', '%' . $request->email . '%');
        }

        // Tìm kiếm theo số điện thoại
        if ($request->filled('phone')) {
            $query->where('phone', 'like', '%' . $request->phone . '%');
        }

        // Tìm kiếm theo trạng thái
        if ($request->filled('trang_thai')) {
            $query->where('trang_thai', $request->trang_thai);
        }

        $contacts = $query->orderBy('id', 'desc')->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contacts.show', compact('contact'));
    }

    public function create()
    {
        return view('admin.contacts.create');
    }

    public function store(Request $request)
    {
        $dataNew = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
            'trang_thai' => 'required|boolean'
        ]);

        Contact::create($dataNew);
        return redirect()->route('admin.contacts.index')->with('success', 'Liên hệ đã được thêm thành công!');
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);

        $dataNew = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email,' . $id,
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
            'trang_thai' => 'required|boolean'
        ]);

        $contact->update($dataNew);
        return redirect()->route('admin.contacts.index')->with('success', 'Liên hệ đã được cập nhật!');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('success', 'Liên hệ đã bị xóa.');
    }
    public function bin()
    {
        $contacts = Contact::onlyTrashed()->get();
        return view('admin.contacts.bin', compact('contacts'));
    }

    public function restore($id)
    {
        $contacts = Contact::onlyTrashed()->findOrFail($id);
        $contacts->restore();
        return redirect()->route('admin.contacts.index')->with('success', 'Contact đã được khôi phục.');
    }
    public function forceDelete($id)
    {
        $contacts = Contact::withTrashed()->findOrFail($id);

        $contacts->forceDelete();

        return redirect()->route('admin.contacts.bin')->with('success', 'Xóa vĩnh viễn thành công!');
    }
}
