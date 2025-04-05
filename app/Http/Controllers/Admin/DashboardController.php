<?php



namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;

use App\Models\Order;

use App\Support\Constant;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller

{

    public function dashboard()
    { 
        $totalPaidOrders_AND_totalCustomer = DB::table('orders')
        ->selectRaw('COALESCE(SUM(CASE WHEN products.etat_sale = TRUE THEN orders.qty * products.sale ELSE orders.qty * products.price END), 0) as total_paid_orders')
        ->selectRaw('(SELECT COUNT(*) FROM customers WHERE JSON_EXTRACT(properties, "$.customer") = "Paid") AS total_customer')
        ->selectRaw('(SELECT COUNT(*) FROM products WHERE pack = FALSE) AS total_product')
        ->selectRaw('(SELECT COUNT(*) FROM products WHERE pack = TRUE) AS total_pack')
        ->selectRaw('(SELECT COUNT(*) FROM orders o,customers c WHERE o.customer_id = c.id AND  JSON_EXTRACT(c.properties, "$.customer") = "Paid")  AS total_orders')
        ->join('products', 'products.id', '=', 'orders.product_id')
        ->join('customers', 'customers.id', '=', 'orders.customer_id')
        ->where('customers.properties->customer', "Paid")
        ->first();

        $statistic = Order::select('created_at')

            ->whereYear('created_at', request()->year ?? now()->year)

            ->get()

            ->groupBy(function($val) {

                return date("M", mktime(null, null, null, Carbon::parse($val->created_at)

                    ->format('m'), 1));

            });

        return view('back-end.admin.dashboard', [

            'statistic'         => $statistic,

            'total_products'    => $totalPaidOrders_AND_totalCustomer->total_product,

            'total_packs'       => $totalPaidOrders_AND_totalCustomer->total_pack,

            'TOTAL_REVENUE'     => int_to_decimal($totalPaidOrders_AND_totalCustomer->total_paid_orders),

            'TOTAL_ORDERS'      => $totalPaidOrders_AND_totalCustomer->total_orders,

            'CUSTOMERS'         => $totalPaidOrders_AND_totalCustomer->total_customer,
            
            'years'             => range(Constant::Date_Created_Site, strftime("%Y", time()))

        ]);



    }

}

