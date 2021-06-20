<?php


namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->input('limit', 10);
        $params = $request->only(['category', 'range', 'color', 'search', 'order', 'sort']);

        $products = Product::when(isset($params['category']) && strlen($params['category']) > 0, function ($query) use ($params){
                $query->whereIn('category_id', explode(',', $params['category']));
            })
            ->when(isset($params['range']) && strlen($params['range']) > 0, function ($query) use ($params){
                $query->whereBetween('sale_price', explode(',', $params['range']));
            })
            ->when(isset($params['color']), function ($query) use ($params){
                $query->where('color', $params['color']);
            })
            ->when(isset($params['search']) && strlen($params['search']) > 0, function ($query) use ($params){
                $query->where(function ($query) use ($params) {
                    $query->where('title', 'like', sprintf('%%%s%%', $params['search']))
                        ->orWhere('color', 'like', sprintf('%%%s%%', $params['search']))
                        ->orWhereHas('category', function ($query) use ($params){
                            $query->where('title', 'like', sprintf('%%%s%%', $params['search']));
                        });
                });
            })
            ->when(isset($params['order']), function ($query) use ($params){
                $query->orderBy($params['order'], in_array($params['sort'], ['ASC', 'DESC']) ? $params['sort'] : 'ASC');
            })
            ->paginate($limit);

        return response()->json($products);
    }

    public function colors()
    {
        return response()->json(Product::selectRaw('color, count(*) as amount')->groupBy('color')->get());
    }
}
