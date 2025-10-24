<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return response()->json(['action' => 'index - list users']);
    }

    public function create() {
        return response()->json(['action' => 'create - show form']);
    }

    public function store(Request $request) {
        return response()->json(['action' => 'store - save user']);
    }

    public function show($id) {
        return response()->json(['action' => "show - user {$id}"]);
    }

    public function edit($id) {
        return response()->json(['action' => "edit - show edit form for user {$id}"]);
    }

    public function update(Request $request, $id) {
        return response()->json(['action' => "update - update user {$id}"]);
    }

    public function destroy($id) {
        return response()->json(['action' => "destroy - delete user {$id}"]);
    }
}
