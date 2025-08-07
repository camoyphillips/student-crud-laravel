<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreProfessorRequest;
use App\Http\Requests\UpdateProfessorRequest;
use Illuminate\View\View;

class ProfessorController extends Controller
{
    /**
     * Display the professors.
     */
    public function index(): View
    {
        $professors = Professor::all();
        return view('professors.index', compact('professors'));
    }

    /**
     * Creating a new professor.
     */
    public function create(): View
    {
        return view('professors.create');
    }

    /**
     * Newly created professor.
     */
    public function store(StoreProfessorRequest $request): RedirectResponse
    {
        Professor::create($request->validated());

        return redirect()->route('professors.index')
            ->with('success', 'Professor created successfully.');
    }

    /**
     * Displaying the professor.
     */
    public function show(Professor $professor): View
    {
        return view('professors.show', compact('professor'));
    }

    /**
     * Editing the specified professor.
     */
    public function edit(Professor $professor): View
    {
        return view('professors.edit', compact('professor'));
    }

    /**
     * Updating the specified professor.
     */
    public function update(UpdateProfessorRequest $request, Professor $professor): RedirectResponse
    {
        $professor->update($request->validated());

        return redirect()->route('professors.index')
            ->with('success', 'Professor updated successfully.');
    }

    public function confirmDelete(Professor $professor)
    {
    return view('professors.delete', compact('professor'));
    }

    /**
     * Removing the specified professor.
     */
    public function destroy(Professor $professor): RedirectResponse
    {
        $professor->delete();

        return redirect()->route('professors.index')
            ->with('success', 'Professor deleted successfully.');
    }
}
