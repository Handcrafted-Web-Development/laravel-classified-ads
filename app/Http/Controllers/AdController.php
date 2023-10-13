<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Models\Ad;

class AdController extends Controller
{
    public function create(): View
    {
        $users = User::all();
        return view('ad.create', ['users' => $users]);
    }

    public function show(Ad $ad): View
    {
        return view('ad.show', ['ad' => $ad]);
    }

    public function store(AdRequest $request): RedirectResponse
    {
        $datas = $request->all();
        $datas['author_id'] = Auth::id();
        $path = Storage::putFile('/public/files', $request->file('file'));
        $content = Storage::url($path);
        $datas['file'] = $content;
        $ad = Ad::create($datas);
        return redirect('/dashboard/tasks');
    }

    public function index(): View
    {
        $ads = Ad::all();
        return view('ad.index', ['ads' => $ads]);
    }

    public function edit(Ad $ad): View
    {
        return view('task.edit', ['ad' => $ad]);
    }

    public function destroy(Ad $ad): RedirectResponse
    {
        $ad->delete();
        return redirect('/dashboard/tasks');
    }
}
