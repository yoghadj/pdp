<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCenderungDampakRequest;
use App\Http\Requests\StoreCenderungDampakRequest;
use App\Http\Requests\UpdateCenderungDampakRequest;
use App\Models\Cenderung;
use App\Models\CenderungDampak;
use App\Models\Dampak;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CenderungDampakController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cenderung_dampak_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cenderungDampaks = CenderungDampak::with(['cenderung', 'dampak'])->get();

        return view('admin.cenderungDampaks.index', compact('cenderungDampaks'));
    }

    public function create()
    {
        abort_if(Gate::denies('cenderung_dampak_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cenderungs = Cenderung::pluck('nilai', 'id')->prepend(trans('global.pleaseSelect'), '');

        $dampaks = Dampak::pluck('nilai', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.cenderungDampaks.create', compact('cenderungs', 'dampaks'));
    }

    public function store(StoreCenderungDampakRequest $request)
    {
        $cenderungDampak = CenderungDampak::create($request->all());

        return redirect()->route('admin.cenderung-dampaks.index');
    }

    public function edit(CenderungDampak $cenderungDampak)
    {
        abort_if(Gate::denies('cenderung_dampak_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cenderungs = Cenderung::pluck('nilai', 'id')->prepend(trans('global.pleaseSelect'), '');

        $dampaks = Dampak::pluck('nilai', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cenderungDampak->load('cenderung', 'dampak');

        return view('admin.cenderungDampaks.edit', compact('cenderungDampak', 'cenderungs', 'dampaks'));
    }

    public function update(UpdateCenderungDampakRequest $request, CenderungDampak $cenderungDampak)
    {
        $cenderungDampak->update($request->all());

        return redirect()->route('admin.cenderung-dampaks.index');
    }

    public function show(CenderungDampak $cenderungDampak)
    {
        abort_if(Gate::denies('cenderung_dampak_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cenderungDampak->load('cenderung', 'dampak');

        return view('admin.cenderungDampaks.show', compact('cenderungDampak'));
    }

    public function destroy(CenderungDampak $cenderungDampak)
    {
        abort_if(Gate::denies('cenderung_dampak_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cenderungDampak->delete();

        return back();
    }

    public function massDestroy(MassDestroyCenderungDampakRequest $request)
    {
        $cenderungDampaks = CenderungDampak::find(request('ids'));

        foreach ($cenderungDampaks as $cenderungDampak) {
            $cenderungDampak->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
