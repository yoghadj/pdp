<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDampakRequest;
use App\Http\Requests\StoreDampakRequest;
use App\Http\Requests\UpdateDampakRequest;
use App\Models\Dampak;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DampakController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('dampak_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $dampaks = Dampak::all();

        return view('frontend.dampaks.index', compact('dampaks'));
    }

    public function create()
    {
        abort_if(Gate::denies('dampak_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.dampaks.create');
    }

    public function store(StoreDampakRequest $request)
    {
        $dampak = Dampak::create($request->all());

        return redirect()->route('frontend.dampaks.index');
    }

    public function edit(Dampak $dampak)
    {
        abort_if(Gate::denies('dampak_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.dampaks.edit', compact('dampak'));
    }

    public function update(UpdateDampakRequest $request, Dampak $dampak)
    {
        $dampak->update($request->all());

        return redirect()->route('frontend.dampaks.index');
    }

    public function show(Dampak $dampak)
    {
        abort_if(Gate::denies('dampak_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.dampaks.show', compact('dampak'));
    }

    public function destroy(Dampak $dampak)
    {
        abort_if(Gate::denies('dampak_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $dampak->delete();

        return back();
    }

    public function massDestroy(MassDestroyDampakRequest $request)
    {
        $dampaks = Dampak::find(request('ids'));

        foreach ($dampaks as $dampak) {
            $dampak->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
