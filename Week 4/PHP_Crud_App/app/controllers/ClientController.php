<?php

class ClientController extends BaseController{
    public function index(){
        //Show a listing of games
        $client = Client::all();
        return View::make('index', compact('client'));
    }

    public function create(){
        //Show the create client form.
        if(Auth::check()){
            return View::make('create');
        }
        return View::make('failure');
    }

    public function handleCreate(){
        //Handle create form submission

        $data = Input::all();
        $rules = array(
            'first_name' => 'alpha|min:2',
            'last_name' => 'alpha|min:2',
            'phone' => array('regex:/\d{3}([ .-])?\d{3}([ .-])?\d{4}|\(\d{3}\)([ ])?\d{3}([.-])?\d{4}|\(\d{3}\)([ ])?\d{3}([ ])?\d{4}|\(\d{3}\)([.-])?\d{3}([.-])?\d{4}|\d{3}([ ])?\d{3}([ .-])?\d{4}/'),
            'email' => 'email',
            'website' => 'active_url'
        );

        $validator = Validator::make($data, $rules);

        if($validator->passes()){
            $client = new Client;
            $client->first_name = Input::get('first_name');
            $client->last_name = Input::get('last_name');
            $client->phone = Input::get('phone');
            $client->email = Input::get('email');
            $client->website = Input::get('website');
            $client->creatorId = Auth::user()->id;
            $client->save();

            return Redirect::to('/')->with('message', 'Client Created Successfully.');
        }

        return Redirect::to('/create')->withErrors($validator);
    }

    public function edit(Client $client){
        //Show the edit client form
        if(Auth::check()){
            return View::make('edit', compact('client'));
        }
        return View::make('failure');
    }

    public function handleEdit(){
        //Handle edit form submission
        $client = Client::findOrFail(Input::get('id'));
        $data = Input::all();
        $rules = array(
            'first_name' => 'alpha_num|min:2',
            'last_name' => 'alpha_num|min:2',
            'phone' => array('regex:/\d{3}([ .-])?\d{3}([ .-])?\d{4}|\(\d{3}\)([ ])?\d{3}([.-])?\d{4}|\(\d{3}\)([ ])?\d{3}([ ])?\d{4}|\(\d{3}\)([.-])?\d{3}([.-])?\d{4}|\d{3}([ ])?\d{3}([ .-])?\d{4}/'),
            'email' => 'email',
            'website' => 'active_url'
        );

        $validator = Validator::make($data, $rules);

        if($validator->passes()){
            $client->first_name = Input::get('first_name');
            $client->last_name = Input::get('last_name');
            $client->phone = Input::get('phone');
            $client->email = Input::get('email');
            $client->website = Input::get('website');
            $client->creatorId = Auth::user()->id;
            $client->save();

            return Redirect::to('/')->with('message', 'Client Edited.');
        }

        return Redirect::to('/edit/' . $client->id)->withErrors($validator);
    }

    public function delete(Client $client){
        //Show delete confirmation page.
        if(Auth::check()){
            return View::make('delete', compact('client'));
        }
        return View::make('failure');
    }

    public function handleDelete(){
        //Handle delete confirmation
        $id = Input::get('client');
        $client = Client::findOrFail($id);
        $client->delete();

        return Redirect::to('/')->with('message', 'Client Deleted.');
    }

}