<?php

class GalleryController extends BaseController {

    /**
     * Gallery Repository
     *
     * @var Gallery
     */
    protected $gallery;
    
    public $restful = true;
    
    public function __construct(Gallery $gallery)
    {
        $this->gallery = $gallery;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
//         return 'Galery index';
        return View::make('gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('filters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $validation = Validator::make($input, Filter::$rules);

        if ($validation->passes())
        {
            $input['hidden'] = (isset($input['hidden'])) ? $input['hidden'] : '0';
            $input['deleted'] = (isset($input['deleted'])) ? $input['deleted'] : '0';

            $this->filter->create($input);

            return Redirect::route('filters.index');
        }

        return Redirect::route('filters.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //$filter = $this->filter->findOrFail($id);

        return View::make('gallery.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $filter = $this->filter->find($id);

        if (is_null($filter))
        {
            return Redirect::route('filters.index');
        }

        return View::make('filters.edit', compact('filter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $input = array_except(Input::all(), '_method');
        $validation = Validator::make($input, Filter::$rules);

        if ($validation->passes())
        {
            $filter = $this->filter->find($id);
            $input['hidden'] = (isset($input['hidden'])) ? $input['hidden'] : '0';
            $input['deleted'] = (isset($input['deleted'])) ? $input['deleted'] : '0';
            $filter->update($input);

            return Redirect::route('filters.show', $id);
        }

        return Redirect::route('filters.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->filter->find($id)->delete();

        return Redirect::route('filters.index');
    }

}