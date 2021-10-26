<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateComputadorasRequest;
use App\Http\Requests\UpdateComputadorasRequest;
use App\Repositories\ComputadorasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use app\models\Computadoras;

class ComputadorasController extends AppBaseController
{
    /** @var  ComputadorasRepository */
    private $computadorasRepository;

    public function __construct(ComputadorasRepository $computadorasRepo)
    {
        $this->computadorasRepository = $computadorasRepo;
    }

    /**
     * Display a listing of the Computadoras.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //$computadoras = $this->computadorasRepository->all();
        $computadoras = DB::table('tbcomputadoras')
        ->join('tbmarcas', 'tbmarcas.idmarcas', '=', 'tbcomputadoras.idmarcas')
        ->join('tbubicacion', 'tbubicacion.idubicacion', '=', 'tbcomputadoras.idubicacion')
        ->select('tbcomputadoras.idcomputadoras','tbmarcas.nommarca','tbcomputadoras.compdescripcion','tbcomputadoras.compcantidad','tbubicacion.nomubicacion')
        ->where('tbcomputadoras.deleted_at', null)
        ->get();
        
        return view('computadoras.index')
            ->with('computadoras', $computadoras);
    }

    /**
     * Show the form for creating a new Computadoras.
     *
     * @return Response
     */
    public function create()
    {
        return view('computadoras.create');
    }

    /**
     * Store a newly created Computadoras in storage.
     *
     * @param CreateComputadorasRequest $request
     *
     * @return Response
     */
    public function store(CreateComputadorasRequest $request)
    {
        $input = $request->all();

        $computadoras = $this->computadorasRepository->create($input);

        Flash::success('Computadoras saved successfully.');

        return redirect(route('computadoras.index'));
    }

    /**
     * Display the specified Computadoras.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        //$computadoras = $this->computadorasRepository->find($id);
        $computadoras = computadoras::where('tbcomputadoras.idcomputadoras', $id)
        ->join('tbmarcas', 'tbmarcas.idmarcas', '=', 'tbcomputadoras.idmarcas')
        ->join('tbubicacion', 'tbubicacion.idubicacion', '=', 'tbcomputadoras.idubicacion')
        ->select('tbcomputadoras.idcomputadoras','tbmarcas.nommarca','tbcomputadoras.compdescripcion','tbcomputadoras.compcantidad','tbubicacion.nomubicacion','tbcomputadoras.created_at','tbcomputadoras.updated_at')->first();


        if (empty($computadoras)) {
            Flash::error('Computadoras not found');

            return redirect(route('computadoras.index'));
        }

        return view('computadoras.show')->with('computadoras', $computadoras);
    }

    /**
     * Show the form for editing the specified Computadoras.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $computadoras = $this->computadorasRepository->find($id);

        if (empty($computadoras)) {
            Flash::error('Computadoras not found');

            return redirect(route('computadoras.index'));
        }

        return view('computadoras.edit')->with('computadoras', $computadoras);
    }

    /**
     * Update the specified Computadoras in storage.
     *
     * @param int $id
     * @param UpdateComputadorasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateComputadorasRequest $request)
    {
        $computadoras = $this->computadorasRepository->find($id);

        if (empty($computadoras)) {
            Flash::error('Computadoras not found');

            return redirect(route('computadoras.index'));
        }

        $computadoras = $this->computadorasRepository->update($request->all(), $id);

        Flash::success('Computadoras updated successfully.');

        return redirect(route('computadoras.index'));
    }

    /**
     * Remove the specified Computadoras from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $computadoras = $this->computadorasRepository->find($id);

        if (empty($computadoras)) {
            Flash::error('Computadoras not found');

            return redirect(route('computadoras.index'));
        }

        $this->computadorasRepository->delete($id);

        Flash::success('Computadoras deleted successfully.');

        return redirect(route('computadoras.index'));
    }
}
