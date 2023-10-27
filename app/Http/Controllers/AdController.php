<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Picture;
use App\Models\State;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AdRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Models\Category;
use App\Models\Delivery;
use App\Models\User;
use App\Models\Ad;

class AdController extends Controller
{
    public function create(): View
    {
        $users = User::all();
        $categories = Category::all();
        $deliveries = Delivery::all();
        $localisations = Location::all();
        $states = State::all();
        return view('ad.create', [
            'users' => $users,
            'categories' => $categories,
            'deliveries' => $deliveries,
            'states' => $states,
            'localisations' => $localisations
        ]);
    }

    public function show(Ad $ad): View
    {
        $user = Auth::getUser();
        $pictureId = $ad->picture_id;
        $picture = Picture::find($pictureId);
        $file = $picture->file;

        return view('ad.show', ['ad' => $ad, 'user' => $user, 'file' => $file]);
    }

    public function store(AdRequest $request): RedirectResponse
    {
        $datas = $request->all();
        $datas['author_id'] = Auth::id();

        $categoryId = $request->input('category');
        if (!empty($categoryId)) {
            $category = Category::find($categoryId);

            if ($category) {
                $datas['category_name'] = $category->name;
            }
        }

        $deliveryId = $request->input('delivery');
        if (!empty($deliveryId)) {
            $delivery = Delivery::find($deliveryId);
            if ($delivery) {
                $datas['delivery_name'] = $delivery->name;
            }
        }

        $stateId = $request->input('state');
        if (!empty($stateId)) {
            $state = Delivery::find($stateId);
            if ($state) {
                $datas['state_name'] = $state->name;
            }
        }

        $localisationId = $request->input('state');
        if (!empty($localisationId)) {
            $localisation = Delivery::find($localisationId);
            if ($localisation) {
                $datas['localisation_name'] = $localisation->town;
            }
        }

//        $path = Storage::putFile('/public/files', $request->file('file'));
//        $content = Storage::url($path);

        // Stockez le fichier dans le répertoire /public/files et obtenez son chemin d'accès
        $path = Storage::putFile('/public/files', $request->file('file'));
        $content = Storage::url($path);

        $picture = new Picture;
        $picture->file = $content;
        $picture->save();

        $datas['picture_id'] = $picture->id;
        $ad = Ad::create($datas);

        return redirect('/dashboard/ads');
    }

    public function index(): View
    {
        $ads = Ad::all();
        $files = [];

        foreach ($ads as $ad) {
            $pictureId = $ad->picture_id;

            if ($pictureId) {
                $picture = Picture::find($pictureId);
                if ($picture) {
                    $files[$ad->id] = $picture->file;
                }
            }
        }

        return view('ad.index', ['ads' => $ads, 'files' => $files]);
    }

    public function edit(Ad $ad): View
    {
        $categories = Category::all();
        $deliveries = Delivery::all();
        $states = State::all();

        $pictureId = $ad->picture_id;
        $picture = Picture::find($pictureId);
        $file = $picture->file;

        return view('ad.edit', ['ad' => $ad, 'categories' => $categories, 'deliveries' => $deliveries, 'states' => $states, 'file' => $file]);
    }

    public function update(AdRequest $request, string $id): RedirectResponse
    {
        $datas = $request->all();

        $categoryId = $request->input('category');
        if (!empty($categoryId)) {
            $category = Category::find($categoryId);

            if ($category) {
                $datas['category_name'] = $category->name;
            }
        }

        $deliveryId = $request->input('delivery');
        if (!empty($deliveryId)) {
            $delivery = Delivery::find($deliveryId);
            if ($delivery) {
                $datas['delivery_name'] = $delivery->name;
            }
        }

        $stateId = $request->input('state');
        if (!empty($stateId)) {
            $state = Delivery::find($stateId);
            if ($state) {
                $datas['state_name'] = $state->name;
            }
        }

        $ad = Ad::find($id);
        $pictureId = $ad->picture_id;
        if (!empty($pictureId)) {
            $picture = Picture::find($pictureId);
            if ($picture) {
                $path = Storage::putFile('/public/files', $request->file('file'));
                $content = Storage::url($path);
                $picture->file = $content;
                $picture->save();
                $datas['picture_id'] = $picture->id;
            }
        }


        $ad = Ad::find($id);
        $ad->update($datas);
        return redirect('/dashboard/ads/' . $ad->id);
    }

    public function destroy(Ad $ad): RedirectResponse
    {
        $ad->delete();
        return redirect('/dashboard/ads');
    }
}
