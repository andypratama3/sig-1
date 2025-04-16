<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePetaniRequest;
use App\Http\Requests\UpdatePetaniRequest;
use App\Repositories\PetaniRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PetaniController extends AppBaseController
{
    /** @var PetaniRepository $petaniRepository*/
    private $petaniRepository;

    public function __construct(PetaniRepository $petaniRepo)
    {
        $this->petaniRepository = $petaniRepo;
    }

    /**
     * Display a listing of the Petani.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $petanis = $this->petaniRepository->all();

        return view('petanis.index')
            ->with('petanis', $petanis);
    }

    /**
     * Show the form for creating a new Petani.
     *
     * @return Response
     */
    public function create()
    {
        return view('petanis.create');
    }

    /**
     * Store a newly created Petani in storage.
     *
     * @param CreatePetaniRequest $request
     *
     * @return Response
     */
    public function store(CreatePetaniRequest $request)
    {
        $input = $request->all();

        $petani = $this->petaniRepository->create($input);

        Flash::success('Petani saved successfully.');

        return redirect(route('petanis.index'));
    }

    /**
     * Display the specified Petani.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $petani = $this->petaniRepository->find($id);

        if (empty($petani)) {
            Flash::error('Petani not found');

            return redirect(route('petanis.index'));
        }

        return view('petanis.show')->with('petani', $petani);
    }

    /**
     * Show the form for editing the specified Petani.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $petani = $this->petaniRepository->find($id);

        if (empty($petani)) {
            Flash::error('Petani not found');

            return redirect(route('petanis.index'));
        }

        return view('petanis.edit')->with('petani', $petani);
    }

    /**
     * Update the specified Petani in storage.
     *
     * @param int $id
     * @param UpdatePetaniRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePetaniRequest $request)
    {
        $petani = $this->petaniRepository->find($id);

        if (empty($petani)) {
            Flash::error('Petani not found');

            return redirect(route('petanis.index'));
        }

        $petani = $this->petaniRepository->update($request->all(), $id);

        Flash::success('Petani updated successfully.');

        return redirect(route('petanis.index'));
    }

    /**
     * Remove the specified Petani from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $petani = $this->petaniRepository->find($id);

        if (empty($petani)) {
            Flash::error('Petani not found');

            return redirect(route('petanis.index'));
        }

        $this->petaniRepository->delete($id);

        Flash::success('Petani deleted successfully.');

        return redirect(route('petanis.index'));
    }
}
