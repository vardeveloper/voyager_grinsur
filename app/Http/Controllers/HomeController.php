<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Page;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::all();

        $products = Property::where('status', 1)
            ->where('highlight', 1)
            ->orderBy('id', 'desc')
            ->limit(4)
            ->get();
        $products = $products->toArray();

        $productos = [];
        foreach ($products as $product) {
            $images = json_decode($product['images']);
            foreach ($images as $image) {
                $product['image'] = $image;
                $product['small'] = $this->imageSmall($image);
                break;
            }
            $productos[] = $product;
        }

        return view('pages.home', compact('banners', 'productos'));
    }

    public function imageSmall($image)
    {
        $filename = basename($image);

        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        $pathimage = explode('.', $image);

        return $pathimage[0] . '-cropped.' . $ext;
    }

    public function about_us(Request $request)
    {
        $segment = $request->segment(1);
        $page = Page::where('slug', $segment)->where('status', 1)->firstOrFail();
        return view('pages.about_us', compact('page'));
    }

    public function micky_express(Request $request)
    {
        $segment = $request->segment(1);
        $page = Page::where('slug', $segment)->where('status', 1)->firstOrFail();
        return view('pages.micky_express', compact('page'));
    }

    public function contact_us(Request $request)
    {
        $segment = $request->segment(1);
        $page = Page::where('slug', $segment)->where('status', 1)->firstOrFail();
        return view('pages.contact_us', compact('page'));
    }

    public function sendmail(Request $request)
    {
        if ($request->isMethod('post')) {

            $data = $request->all();
            $data['app_url'] = env('APP_URL', 'http://grinsur.com');

            $name	 = filter_var($data["name"], FILTER_SANITIZE_STRING);
            $email	 = filter_var($data["email"], FILTER_SANITIZE_EMAIL);
            $phone	 = filter_var($data["phone"], FILTER_SANITIZE_STRING);
            $msg = filter_var($data["msg"], FILTER_SANITIZE_STRING);


            if (strlen($name) < 2) {
                $resp = [
                    'type' => 'error',
                    'text' => 'name'
                ];
                return response()->json($resp, 201);
            }

            if (strlen($phone) < 6) {
                $resp = [
                    'type' => 'error',
                    'text' => 'phone'
                ];
                return response()->json($resp, 201);
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $resp = [
                    'type' => 'error',
                    'text' => 'email'
                ];
                return response()->json($resp, 201);
            }

            if (strlen($msg) < 3) {
                $resp = [
                    'type' => 'error',
                    'text' => 'message'
                ];
                return response()->json($resp, 201);
            }

            Mail::send('emails.contact_us', $data, function ($mail) use ($name) {
                $mail->from('contacto@grinsur.com', 'grinsur.com');
                $mail->to('grupoinmobiliariodelsur@hotmail.com');
                $mail->subject('Contacto - ' . $name);
            });

            if (Mail::failures()) {
                $resp = [
                    'type' => 'error',
                    'text' => 'Fail.'
                ];
                return response()->json($resp, 201);
            }

            $resp = [
                'type' => 'ok',
                'text' => 'Success.'
            ];
            return response()->json($resp, 201);
        }

        $resp = [
            'type' => 'error',
            'text' => 'Unauthorized.'
        ];
        return response()->json($resp, 401);
    }

    public function property_show (Request $request)
    {
        $property = Property::where('slug', $request->slug)->where('status', 1)->firstOrFail();
        $property->imagenes = json_decode($property->images);
        return view('pages.property_show', compact('property'));
    }

    public function property_list()
    {
        $properties = Property::where('status', 1)
            ->orderBy('id', 'desc')
            ->paginate(12);

        foreach ($properties as $property) {
            $images = json_decode($property->images);
            foreach ($images as $image) {
                $property->image = $this->imageSmall($image);
                break;
            }
        }

        return view('pages.property_list', compact('properties'));
    }

}
