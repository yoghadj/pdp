<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPenangananRequest;
use App\Http\Requests\StorePenangananRequest;
use App\Http\Requests\UpdatePenangananRequest;
use App\Models\Penanganan;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PenangananController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('penanganan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $penanganans = Penanganan::all();

        return view('frontend.penanganans.index', compact('penanganans'));
    }

    public function create()
    {
        abort_if(Gate::denies('penanganan_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.penanganans.create');
    }

    public function store(StorePenangananRequest $request)
    {
        $penanganan = Penanganan::create($request->all());

        return redirect()->route('frontend.penanganans.index');
    }

    public function edit(Penanganan $penanganan)
    {
        abort_if(Gate::denies('penanganan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.penanganans.edit', compact('penanganan'));
    }

    public function update(UpdatePenangananRequest $request, Penanganan $penanganan)
    {
        $penanganan->update($request->all());

        return redirect()->route('frontend.penanganans.index');
    }

    public function show(Penanganan $penanganan)
    {
        abort_if(Gate::denies('penanganan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.penanganans.show', compact('penanganan'));
    }

    public function destroy(Penanganan $penanganan)
    {
        abort_if(Gate::denies('penanganan_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $penanganan->delete();

        return back();
    }

    public function massDestroy(MassDestroyPenangananRequest $request)
    {
        $penanganans = Penanganan::find(request('ids'));

        foreach ($penanganans as $penanganan) {
            $penanganan->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
