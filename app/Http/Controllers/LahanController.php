<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLahanRequest;
use App\Http\Requests\UpdateLahanRequest;
use App\Repositories\LahanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LahanController extends AppBaseController
{
    /** @var LahanRepository $lahanRepository*/
    private $lahanRepository;

    public function __construct(LahanRepository $lahanRepo)
    {
        $this->lahanRepository = $lahanRepo;
    }

    /**
     * Display a listing of the Lahan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $lahans = $this->lahanRepository->all();

        return view('lahans.index')
            ->with('lahans', $lahans);
    }

    /**
     * Show the form for creating a new Lahan.
     *
     * @return Response
     */
    public function create()
    {
        return view('lahans.create');
    }

    /**
     * Store a newly created Lahan in storage.
     *
     * @param CreateLahanRequest $request
     *
     * @return Response
     */
    public function store(CreateLahanRequest $request)
    {
        $input = $request->all();

        $lahan = $this->lahanRepository->create($input);

        Flash::success('Lahan saved successfully.');

        return redirect(route('lahans.index'));
    }

    /**
     * Display the specified Lahan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lahan = $this->lahanRepository->find($id);

        if (empty($lahan)) {
            Flash::error('Lahan not found');

            return redirect(route('lahans.index'));
        }

        return view('lahans.show')->with('lahan', $lahan);
    }

    /**
     * Show the form for editing the specified Lahan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lahan = $this->lahanRepository->find($id);

        if (empty($lahan)) {
            Flash::error('Lahan not found');

            return redirect(route('lahans.index'));
        }

        return view('lahans.edit')->with('lahan', $lahan);
    }

    /**
     * Update the specified Lahan in storage.
     *
     * @param int $id
     * @param UpdateLahanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLahanRequest $request)
    {
        $lahan = $this->lahanRepository->find($id);

        if (empty($lahan)) {
            Flash::error('Lahan not found');

            return redirect(route('lahans.index'));
        }

        $lahan = $this->lahanRepository->update($request->all(), $id);

        Flash::success('Lahan updated successfully.');

        return redirect(route('lahans.index'));
    }

    /**
     * Remove the specified Lahan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lahan = $this->lahanRepository->find($id);

        if (empty($lahan)) {
            Flash::error('Lahan not found');

            return redirect(route('lahans.index'));
        }

        $this->lahanRepository->delete($id);

        Flash::success('Lahan deleted successfully.');

        return redirect(route('lahans.index'));
    }
}
