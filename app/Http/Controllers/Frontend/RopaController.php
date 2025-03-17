<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRopaRequest;
use App\Http\Requests\StoreRopaRequest;
use App\Http\Requests\UpdateRopaRequest;
use App\Models\Ropa;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RopaController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('ropa_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ropas = Ropa::all();

        return view('frontend.ropas.index', compact('ropas'));
    }

    public function create()
    {
        abort_if(Gate::denies('ropa_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.ropas.create');
    }

    public function store(StoreRopaRequest $request)
    {
        $ropa = Ropa::create($request->all());

        return redirect()->route('frontend.ropas.index');
    }

    public function edit(Ropa $ropa)
    {
        abort_if(Gate::denies('ropa_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.ropas.edit', compact('ropa'));
    }

    public function update(UpdateRopaRequest $request, Ropa $ropa)
    {
        $ropa->update($request->all());

        return redirect()->route('frontend.ropas.index');
    }

    public function show(Ropa $ropa)
    {
        abort_if(Gate::denies('ropa_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.ropas.show', compact('ropa'));
    }

    public function destroy(Ropa $ropa)
    {
        abort_if(Gate::denies('ropa_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ropa->delete();

        return back();
    }

    public function massDestroy(MassDestroyRopaRequest $request)
    {
        $ropas = Ropa::find(request('ids'));

        foreach ($ropas as $ropa) {
            $ropa->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
