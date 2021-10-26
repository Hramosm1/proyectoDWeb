<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterefrigeradorasRequest;
use App\Http\Requests\UpdaterefrigeradorasRequest;
use App\Repositories\refrigeradorasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use app\Models\refrigeradoras;

class refrigeradorasController extends AppBaseController
{
    /** @var  refrigeradorasRepository */
    private $refrigeradorasRepository;

    public function __construct(refrigeradorasRepository $refrigeradorasRepo)
    {
        $this->refrigeradorasRepository = $refrigeradorasRepo;
    }

    /**
     * Display a listing of the refrigeradoras.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //$refrigeradoras = $this->refrigeradorasRepository->all();
        $refrigeradoras = DB::table('tbrefrigeradora')
        ->join('tbmarcas', 'tbmarcas.idmarcas', '=', 'tbrefrigeradora.idmarcas')
        ->join('tbubicacion', 'tbubicacion.idubicacion', '=', 'tbrefrigeradora.idubicacion')
        ->select('tbrefrigeradora.idrefrigeradora','tbmarcas.nommarca','tbrefrigeradora.refridesc','tbrefrigeradora.refricantidad','tbubicacion.nomubicacion')
        ->where('tbrefrigeradora.deleted_at', null)
        ->get();

        return view('refrigeradoras.index')
            ->with('refrigeradoras', $refrigeradoras);
    }

    /**
     * Show the form for creating a new refrigeradoras.
     *
     * @return Response
     */
    public function create()
    {
        return view('refrigeradoras.create');
    }

    /**
     * Store a newly created refrigeradoras in storage.
     *
     * @param CreaterefrigeradorasRequest $request
     *
     * @return Response
     */
    public function store(CreaterefrigeradorasRequest $request)
    {
        $input = $request->all();

        $refrigeradoras = $this->refrigeradorasRepository->create($input);

        Flash::success('Refrigeradoras saved successfully.');

        return redirect(route('refrigeradoras.index'));
    }

    /**
     * Display the specified refrigeradoras.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        //$refrigeradoras = $this->refrigeradorasRepository->find($id);
        $refrigeradoras = refrigeradoras::where('tbrefrigeradora.idrefrigeradora', $id)
        ->join('tbmarcas', 'tbmarcas.idmarcas', '=', 'tbrefrigeradora.idmarcas')
        ->join('tbubicacion', 'tbubicacion.idubicacion', '=', 'tbrefrigeradora.idubicacion')
        ->select('tbrefrigeradora.idrefrigeradora','tbmarcas.nommarca','tbrefrigeradora.refridesc','tbrefrigeradora.refricantidad','tbubicacion.nomubicacion','tbrefrigeradora.created_at','tbrefrigeradora.updated_at')->first();

        if (empty($refrigeradoras)) {
            Flash::error('Refrigeradoras not found');

            return redirect(route('refrigeradoras.index'));
        }

        return view('refrigeradoras.show')->with('refrigeradoras', $refrigeradoras);
    }

    /**
     * Show the form for editing the specified refrigeradoras.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $refrigeradoras = $this->refrigeradorasRepository->find($id);

        if (empty($refrigeradoras)) {
            Flash::error('Refrigeradoras not found');

            return redirect(route('refrigeradoras.index'));
        }

        return view('refrigeradoras.edit')->with('refrigeradoras', $refrigeradoras);
    }

    /**
     * Update the specified refrigeradoras in storage.
     *
     * @param int $id
     * @param UpdaterefrigeradorasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterefrigeradorasRequest $request)
    {
        $refrigeradoras = $this->refrigeradorasRepository->find($id);

        if (empty($refrigeradoras)) {
            Flash::error('Refrigeradoras not found');

            return redirect(route('refrigeradoras.index'));
        }

        $refrigeradoras = $this->refrigeradorasRepository->update($request->all(), $id);

        Flash::success('Refrigeradoras updated successfully.');

        return redirect(route('refrigeradoras.index'));
    }

    /**
     * Remove the specified refrigeradoras from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $refrigeradoras = $this->refrigeradorasRepository->find($id);

        if (empty($refrigeradoras)) {
            Flash::error('Refrigeradoras not found');

            return redirect(route('refrigeradoras.index'));
        }

        $this->refrigeradorasRepository->delete($id);

        Flash::success('Refrigeradoras deleted successfully.');

        return redirect(route('refrigeradoras.index'));
    }
}
