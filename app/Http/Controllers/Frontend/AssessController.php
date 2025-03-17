<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAssessRequest;
use App\Http\Requests\StoreAssessRequest;
use App\Http\Requests\UpdateAssessRequest;
use App\Models\Assess;
use App\Models\Cenderung;
use App\Models\Dampak;
use App\Models\Kategori;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AssessController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('assess_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $assesses = Assess::with(['proses', 'nilai_kemungkinan', 'nilai_dampak', 'nilai_kontrol_kemungkinan', 'nilai_kontrol_dampak', 'nilai_residu_kemungkinan', 'nilai_residu_dampak'])->get();

        return view('frontend.assesses.index', compact('assesses'));
    }

    public function create()
    {
        abort_if(Gate::denies('assess_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $proses = Kategori::pluck('proses', 'id')->prepend(trans('global.pleaseSelect'), '');

        $nilai_kemungkinans = Cenderung::pluck('nilai', 'id')->prepend(trans('global.pleaseSelect'), '');

        $nilai_dampaks = Dampak::pluck('nilai', 'id')->prepend(trans('global.pleaseSelect'), '');

        $nilai_kontrol_kemungkinans = Cenderung::pluck('nilai', 'id')->prepend(trans('global.pleaseSelect'), '');

        $nilai_kontrol_dampaks = Dampak::pluck('nilai', 'id')->prepend(trans('global.pleaseSelect'), '');

        $nilai_residu_kemungkinans = Cenderung::pluck('nilai', 'id')->prepend(trans('global.pleaseSelect'), '');

        $nilai_residu_dampaks = Dampak::pluck('nilai', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.assesses.create', compact('nilai_dampaks', 'nilai_kemungkinans', 'nilai_kontrol_dampaks', 'nilai_kontrol_kemungkinans', 'nilai_residu_dampaks', 'nilai_residu_kemungkinans', 'proses'));
    }

    public function store(StoreAssessRequest $request)
    {
        $assess = Assess::create($request->all());

        return redirect()->route('frontend.assesses.index');
    }

    public function edit(Assess $assess)
    {
        abort_if(Gate::denies('assess_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $proses = Kategori::pluck('proses', 'id')->prepend(trans('global.pleaseSelect'), '');

        $nilai_kemungkinans = Cenderung::pluck('nilai', 'id')->prepend(trans('global.pleaseSelect'), '');

        $nilai_dampaks = Dampak::pluck('nilai', 'id')->prepend(trans('global.pleaseSelect'), '');

        $nilai_kontrol_kemungkinans = Cenderung::pluck('nilai', 'id')->prepend(trans('global.pleaseSelect'), '');

        $nilai_kontrol_dampaks = Dampak::pluck('nilai', 'id')->prepend(trans('global.pleaseSelect'), '');

        $nilai_residu_kemungkinans = Cenderung::pluck('nilai', 'id')->prepend(trans('global.pleaseSelect'), '');

        $nilai_residu_dampaks = Dampak::pluck('nilai', 'id')->prepend(trans('global.pleaseSelect'), '');

        $assess->load('proses', 'nilai_kemungkinan', 'nilai_dampak', 'nilai_kontrol_kemungkinan', 'nilai_kontrol_dampak', 'nilai_residu_kemungkinan', 'nilai_residu_dampak');

        return view('frontend.assesses.edit', compact('assess', 'nilai_dampaks', 'nilai_kemungkinans', 'nilai_kontrol_dampaks', 'nilai_kontrol_kemungkinans', 'nilai_residu_dampaks', 'nilai_residu_kemungkinans', 'proses'));
    }

    public function update(UpdateAssessRequest $request, Assess $assess)
    {
        $assess->update($request->all());

        return redirect()->route('frontend.assesses.index');
    }

    public function show(Assess $assess)
    {
        abort_if(Gate::denies('assess_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $assess->load('proses', 'nilai_kemungkinan', 'nilai_dampak', 'nilai_kontrol_kemungkinan', 'nilai_kontrol_dampak', 'nilai_residu_kemungkinan', 'nilai_residu_dampak');

        return view('frontend.assesses.show', compact('assess'));
    }

    public function destroy(Assess $assess)
    {
        abort_if(Gate::denies('assess_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $assess->delete();

        return back();
    }

    public function massDestroy(MassDestroyAssessRequest $request)
    {
        $assesses = Assess::find(request('ids'));

        foreach ($assesses as $assess) {
            $assess->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
