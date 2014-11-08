<?php

class GamesController extends BaseController{
    public function index(){
        //Show a listing of games
        $games = Game::all();
        return View::make('index', compact('games'));
    }

    public function create(){
        //Show the create game form.
        if(Auth::check()){
        return View::make('create');
        }
        return View::make('failure');
    }

    public function handleCreate(){
        //Handle create form submission
        $game = new Game;
        $game->title = Input::get('title');
        $game->publisher = Input::get('publisher');
        $game->complete = Input::has('complete');
        $game->creatorId = Auth::user()->id;
        $game->save();

        return Redirect::action('GamesController@index');
    }

    public function edit(Game $game){
        //Show the edit game form
        if(Auth::check()){
            return View::make('edit', compact('game'));
        }
        return View::make('failure');
    }

    public function handleEdit(){
        //Handle edit form submission
        $game = Game::findOrFail(Input::get('id'));
        $game->title = Input::get('title');
        $game->publisher = Input::get('publisher');
        $game->complete = Input::has('complete');
        $game->save();

        return Redirect::action('GamesController@index');
    }

    public function delete(Game $game){
        //Show delete confirmation page.
        if(Auth::check()){
            return View::make('delete', compact('game'));
        }
        return View::make('failure');
    }

    public function handleDelete(){
        //Handle delete confirmation
        $id = Input::get('game');
        $game = Game::findOrFail($id);
        $game->delete();

        return Redirect::action('GamesController@index');
    }

}