<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateubicacionRequest;
use App\Http\Requests\UpdateubicacionRequest;
use App\Repositories\ubicacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use DB;
use app\Models\ubicacion;
use Flash;
use Response;

class ubicacionController extends AppBaseController
{
    /** @var  ubicacionRepository */
    private $ubicacionRepository;

    public function __construct(ubicacionRepository $ubicacionRepo)
    {
        $this->ubicacionRepository = $ubicacionRepo;
    }

    /**
     * Display a listing of the ubicacion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //$ubicacions = $this->ubicacionRepository->all();

        $ubicacions = DB::table('tbubicacion')
        ->join('tbbodega', 'tbubicacion.idbodega', '=', 'tbbodega.idbodega')
        ->select('tbubicacion.idubicacion','tbubicacion.nomubicacion', 'tbbodega.nombodega')
        ->where('tbubicacion.deleted_at', null)
        ->get();


        return view('ubicacions.index')
            ->with('ubicacions', $ubicacions);
    }

    /**
     * Show the form for creating a new ubicacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('ubicacions.create');
    }

    /**
     * Store a newly created ubicacion in storage.
     *
     * @param CreateubicacionRequest $request
     *
     * @return Response
     */
    public function store(CreateubicacionRequest $request)
    {
        $input = $request->all();

        $ubicacion = $this->ubicacionRepository->create($input);

        Flash::success('Ubicacion saved successfully.');

        return redirect(route('ubicacions.index'));
    }

    /**
     * Display the specified ubicacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        //$ubicacion = $this->ubicacionRepository->find($id);
        $ubicacion = ubicacion::where('tbubicacion.idubicacion', $id)
        ->join('tbbodega', 'tbubicacion.idbodega', '=', 'tbbodega.idbodega')
        ->select('tbubicacion.idubicacion','tbubicacion.nomubicacion','tbbodega.nombodega','tbubicacion.created_at','tbubicacion.updated_at')->first();

        if (empty($ubicacion)) {
            Flash::error('Ubicacion not found');

            return redirect(route('ubicacions.index'));
        }

        return view('ubicacions.show')->with('ubicacion', $ubicacion);
    }

    /**
     * Show the form for editing the specified ubicacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ubicacion = $this->ubicacionRepository->find($id);

        if (empty($ubicacion)) {
            Flash::error('Ubicacion not found');

            return redirect(route('ubicacions.index'));
        }

        return view('ubicacions.edit')->with('ubicacion', $ubicacion);
    }

    /**
     * Update the specified ubicacion in storage.
     *
     * @param int $id
     * @param UpdateubicacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateubicacionRequest $request)
    {
        $ubicacion = $this->ubicacionRepository->find($id);

        if (empty($ubicacion)) {
            Flash::error('Ubicacion not found');

            return redirect(route('ubicacions.index'));
        }

        $ubicacion = $this->ubicacionRepository->update($request->all(), $id);

        Flash::success('Ubicacion updated successfully.');

        return redirect(route('ubicacions.index'));
    }

    /**
     * Remove the specified ubicacion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ubicacion = $this->ubicacionRepository->find($id);

        if (empty($ubicacion)) {
            Flash::error('Ubicacion not found');

            return redirect(route('ubicacions.index'));
        }

        $this->ubicacionRepository->delete($id);

        Flash::success('Ubicacion deleted successfully.');

        return redirect(route('ubicacions.index'));
    }
}
