<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PDF;
use App\Models\Items;
use App\Models\Order;
use App\Models\SignUp;
use Illuminate\Support\Facades\DB;

class pdfController extends Controller
{
    //
    public function export_user_pdf()
    {
        $users = SignUp::get();
        $pdf = PDF::loadView('pdf.users', [
            'users' => $users
        ]);
        return $pdf->download('users.pdf');
    }
    public function export_order_pdf()
    {
        $orders = Order::get();
        $pdf = PDF::loadView('pdf.orders', [
            'orders' => $orders
        ]);
        return $pdf->download('orders.pdf');
    }
    public function export_item_pdf()
    {
        $items = DB::table('items')
            ->join('category', 'items.cid', '=', 'category.id')
            ->select('items.id', 'items.item_name', 'items.price', 'category.category')
            ->get();

        $pdf = PDF::loadView('pdf.items', [
            'items' => $items
        ]);
        return $pdf->download('items.pdf');
    }
}
