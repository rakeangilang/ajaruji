<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Item;
use App\Models\Image;
use App\Models\Navbar;
use App\Models\Footer;

class ShowHome extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        //
        $navbar = $this->getNavbar();
        $section2 = $this->getSection2();
        return view('home', [
            'navbar' => $navbar,
            'section2' => $section2
        ]);
    }

    private function getNavbar() 
    {
        // get nav image by chaining section->items->images
        $nav_item_id = Section::where('id', 1)->with('items')->first()->items[0]->id;
        $images = Item::where('id', $nav_item_id)->with('images')->first()->images;
        $navbar = Navbar::first();
        foreach ($images as $key=>$value) {
            $navbar->setAttribute('logo' . ($key+1) . 'x', $value->path);
        }

        return $navbar;
    }

    private function getSection2()
    {
        $section2 = Section::where('id', 2)->first();
        return $section2;
    }
}
