<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $query = Customer::query();

        if ($request->filled('name')) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
        }

        if ($request->filled('email')) {
            $query->where('email', 'LIKE', '%' . $request->email . '%');
        }

        if ($request->filled('phone')) {
            $query->where('phone', 'LIKE', '%' . $request->phone . '%');
        }

        $query->orderBy('id', 'desc');
        $customers = $query->paginate(10);

        return view('admin.customers.index', compact('customers'));
    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('admin.customers.show', compact('customer'));
    }

    public function create()
    {
        return view('admin.customers.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name'    => 'required|string|max:255',
                'email'   => 'required|email|unique:customers,email',
                'phone'   => 'nullable|string|max:20',
                'address' => 'nullable|string',
            ],
            [
                'required'      => ':attribute không được để trống.',
                'string'        => ':attribute phải là chuỗi.',
                'max.string'    => ':attribute không được vượt quá :max ký tự.',
                'max.numeric'   => ':attribute không được lớn hơn :max.',
                'min.numeric'   => ':attribute phải lớn hơn hoặc bằng :min.',
                'integer'       => ':attribute phải là số nguyên.',
                'unique'        => ':attribute đã tồn tại.',
                'numeric'       => ':attribute phải là số.',
                'date'          => ':attribute phải là ngày hợp lệ.',
                'image'         => ':attribute phải là hình ảnh.',
                'in'            => ':attribute phải có giá trị hợp lệ: :values.',
                'boolean'       => ':attribute phải là đúng hoặc sai.',
                'same'          => ':attribute phải giống với :other.',
                'email'        => ':attribute phải là địa chỉ email hợp lệ.'
            ],
            [
                'name'    => 'Tên khách hàng',
                'email'   => 'Email',
                'phone'   => 'Số điện thoại',
                'address' => 'Địa chỉ',
            ]
        );

        Customer::create($data);
        return redirect()->route('admin.customers.index');
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('admin.customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|unique:customers,email,' . $id,
            'phone'   => 'nullable|string|max:20',
            'address' => 'nullable|string',
        ]);

        $customer->update($data);
        return redirect()->route('admin.customers.index');
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);

        // Xóa tất cả các đánh giá liên quan trước khi xóa khách hàng
        $customer->reviews()->delete();

        // Xóa khách hàng
        $customer->delete();

        return redirect()->route('admin.customers.index')->with('success', 'Khách hàng đã được xóa.');
    }

    public function bin()
    {
        $customers = Customer::onlyTrashed()->get();
        return view('admin.customers.bin', compact('customers'));
    }
    public function restore($id)
    {
        $customer = Customer::withTrashed()->findOrFail($id);
        $customer->restore();
        return redirect()->route('admin.customers.index')->with('success', 'Khôi phục người dùng thành công.');
    }
    public function forceDelete($id)
    {
        $customer = Customer::withTrashed()->findOrFail($id);

        // Xóa tất cả reviews của khách hàng
        DB::table('reviews')->where('customer_id', $customer->id)->delete();

        // Xóa vĩnh viễn khách hàng
        $customer->forceDelete();

        return redirect()->route('admin.customers.index')->with('success', 'Xóa vĩnh viễn khách hàng thành công.');
    }
}
