<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PocketUrl;
use Ramsey\Uuid\Uuid;

class UrlController extends Controller
{
  public function redirect($slug)
  {
    $prefix = 'https://';
    $url = $prefix . PocketUrl::where('slug', $slug)->value('url');
    return redirect()->away($url);
  }

  public function store(Request $req)
  {
    $uuid = explode('-', Uuid::uuid7()->toString())[4];
    $url = $req->url;
    $pocketUrl = url()->current() . '/' . $uuid;

    $url = PocketUrl::create([
      'slug' => $uuid,
      'url' => $url,
      'pocketurl' => $pocketUrl
    ]);

    return response()->json(PocketUrl::where('slug', $uuid)->value('pocketurl'));
  }
}
