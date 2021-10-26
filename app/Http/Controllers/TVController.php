<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTVRequest;
use App\Http\Requests\UpdateTVRequest;
use App\Repositories\TVRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use DB;
use app\models\TV;
use Flash;
use Response;


class TVController extends AppBaseController
{
    /** @var  TVRepository */
    private $tVRepository;

    public function __construct(TVRepository $tVRepo)
    {
        $this->tVRepository = $tVRepo;
    }

    /**
     * Display a listing of the TV.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //$tVS = $this->tVRepository->all();

        $tVS = DB::table('tbtv')
        ->join('tbmarcas', 'tbmarcas.idmarcas', '=', 'tbtv.idmarcas')
        ->join('tbubicacion', 'tbubicacion.idubicacion', '=', 'tbtv.idubicacion')
        ->select('tbtv.idtv','tbmarcas.nommarca','tbtv.tvdescripcion','tbtv.tvcantidad','tbubicacion.nomubicacion')
        ->where('tbtv.deleted_at', null)
        ->get();

        return view('t_v_s.index')
            ->with('tVS', $tVS);
    }

    /**
     * Show the form for creating a new TV.
     *
     * @return Response
     */
    public function create()
    {
        return view('t_v_s.create');
    }

    /**
     * Store a newly created TV in storage.
     *
     * @param CreateTVRequest $request
     *
     * @return Response
     */
    public function store(CreateTVRequest $request)
    {
        $input = $request->all();

        $tV = $this->tVRepository->create($input);

        Flash::success('T V saved successfully.');

        return redirect(route('tVS.index'));
    }

    /**
     * Display the specified TV.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        //$tV = $this->tVRepository->find($id);
        $tV = TV::where('tbtv.idtv', $id)
        ->join('tbmarcas', 'tbmarcas.idmarcas', '=', 'tbtv.idmarcas')
        ->join('tbubicacion', 'tbubicacion.idubicacion', '=', 'tbtv.idubicacion')
        ->select('tbtv.idtv','tbmarcas.nommarca','tbtv.tvdescripcion','tbtv.tvcantidad','tbubicacion.nomubicacion','tbtv.created_at','tbtv.updated_at')->first();
       
        if (empty($tV)) {
            Flash::error('No hay TVS Registrados');

            return redirect(route('tVS.index'));
        }

        return view('t_v_s.show')->with('tV', $tV);
    }

    /**
     * Show the form for editing the specified TV.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tV = $this->tVRepository->find($id);

        if (empty($tV)) {
            Flash::error('T V not found');

            return redirect(route('tVS.index'));
        }

        return view('t_v_s.edit')->with('tV', $tV);
    }

    /**
     * Update the specified TV in storage.
     *
     * @param int $id
     * @param UpdateTVRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTVRequest $request)
    {
        $tV = $this->tVRepository->find($id);

        if (empty($tV)) {
            Flash::error('T V not found');

            return redirect(route('tVS.index'));
        }

        $tV = $this->tVRepository->update($request->all(), $id);

        Flash::success('T V updated successfully.');

        return redirect(route('tVS.index'));
    }

    /**
     * Remove the specified TV from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tV = $this->tVRepository->find($id);

        if (empty($tV)) {
            Flash::error('T V not found');

            return redirect(route('tVS.index'));
        }

        $this->tVRepository->delete($id);

        Flash::success('T V deleted successfully.');

        return redirect(route('tVS.index'));
    }
}
