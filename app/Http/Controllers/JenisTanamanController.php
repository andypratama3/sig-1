<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJenisTanamanRequest;
use App\Http\Requests\UpdateJenisTanamanRequest;
use App\Repositories\JenisTanamanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class JenisTanamanController extends AppBaseController
{
    /** @var JenisTanamanRepository $jenisTanamanRepository*/
    private $jenisTanamanRepository;

    public function __construct(JenisTanamanRepository $jenisTanamanRepo)
    {
        $this->jenisTanamanRepository = $jenisTanamanRepo;
    }

    /**
     * Display a listing of the JenisTanaman.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $jenisTanamen = $this->jenisTanamanRepository->all();

        return view('jenis_tanamen.index')
            ->with('jenisTanamen', $jenisTanamen);
    }

    /**
     * Show the form for creating a new JenisTanaman.
     *
     * @return Response
     */
    public function create()
    {
        return view('jenis_tanamen.create');
    }

    /**
     * Store a newly created JenisTanaman in storage.
     *
     * @param CreateJenisTanamanRequest $request
     *
     * @return Response
     */
    public function store(CreateJenisTanamanRequest $request)
    {
        $input = $request->all();

        $jenisTanaman = $this->jenisTanamanRepository->create($input);

        Flash::success('Jenis Tanaman saved successfully.');

        return redirect(route('jenisTanamen.index'));
    }

    /**
     * Display the specified JenisTanaman.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jenisTanaman = $this->jenisTanamanRepository->find($id);

        if (empty($jenisTanaman)) {
            Flash::error('Jenis Tanaman not found');

            return redirect(route('jenisTanamen.index'));
        }

        return view('jenis_tanamen.show')->with('jenisTanaman', $jenisTanaman);
    }

    /**
     * Show the form for editing the specified JenisTanaman.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jenisTanaman = $this->jenisTanamanRepository->find($id);

        if (empty($jenisTanaman)) {
            Flash::error('Jenis Tanaman not found');

            return redirect(route('jenisTanamen.index'));
        }

        return view('jenis_tanamen.edit')->with('jenisTanaman', $jenisTanaman);
    }

    /**
     * Update the specified JenisTanaman in storage.
     *
     * @param int $id
     * @param UpdateJenisTanamanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJenisTanamanRequest $request)
    {
        $jenisTanaman = $this->jenisTanamanRepository->find($id);

        if (empty($jenisTanaman)) {
            Flash::error('Jenis Tanaman not found');

            return redirect(route('jenisTanamen.index'));
        }

        $jenisTanaman = $this->jenisTanamanRepository->update($request->all(), $id);

        Flash::success('Jenis Tanaman updated successfully.');

        return redirect(route('jenisTanamen.index'));
    }

    /**
     * Remove the specified JenisTanaman from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jenisTanaman = $this->jenisTanamanRepository->find($id);

        if (empty($jenisTanaman)) {
            Flash::error('Jenis Tanaman not found');

            return redirect(route('jenisTanamen.index'));
        }

        $this->jenisTanamanRepository->delete($id);

        Flash::success('Jenis Tanaman deleted successfully.');

        return redirect(route('jenisTanamen.index'));
    }
}
