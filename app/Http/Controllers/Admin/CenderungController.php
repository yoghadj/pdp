<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCenderungRequest;
use App\Http\Requests\StoreCenderungRequest;
use App\Http\Requests\UpdateCenderungRequest;
use App\Models\Cenderung;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CenderungController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cenderung_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cenderungs = Cenderung::all();

        return view('admin.cenderungs.index', compact('cenderungs'));
    }

    public function create()
    {
        abort_if(Gate::denies('cenderung_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cenderungs.create');
    }

    public function store(StoreCenderungRequest $request)
    {
        $cenderung = Cenderung::create($request->all());

        return redirect()->route('admin.cenderungs.index');
    }

    public function edit(Cenderung $cenderung)
    {
        abort_if(Gate::denies('cenderung_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cenderungs.edit', compact('cenderung'));
    }

    public function update(UpdateCenderungRequest $request, Cenderung $cenderung)
    {
        $cenderung->update($request->all());

        return redirect()->route('admin.cenderungs.index');
    }

    public function show(Cenderung $cenderung)
    {
        abort_if(Gate::denies('cenderung_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cenderungs.show', compact('cenderung'));
    }

    public function destroy(Cenderung $cenderung)
    {
        abort_if(Gate::denies('cenderung_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cenderung->delete();

        return back();
    }

    public function massDestroy(MassDestroyCenderungRequest $request)
    {
        $cenderungs = Cenderung::find(request('ids'));

        foreach ($cenderungs as $cenderung) {
            $cenderung->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
