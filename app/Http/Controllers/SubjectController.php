<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $courses = Course::select('id', 'title')->get();

        $subjects = Subject::with('course')->orderBy('id', 'DESC');

        if (isset($request['course_id']) && $request['course_id'] != null) {
            $course_id = $request['course_id'];
            $subjects->whereHas('course', function ($q) use ($course_id) {
                $q->where('id', '=', $course_id);
            });
        }
        if (isset($request['search']['value'])) {
            $keyword = $request->search['value'];
            $subjects->where('title', 'like', "%$keyword%");
        }


        if ($request->ajax()) {

            return DataTables::of($subjects)
                ->addColumn('id', function ($row) {
                    return $row->id;
                })
                ->addColumn('title', function ($row) {
                    return $row->title;
                })
                ->addColumn('description', function ($row) {
                    return $row->description;
                })
                ->addColumn('duration', function ($row) {
                    return $row->duration;
                })
                ->addColumn('course', function ($row) {
                    return $row->course->title;
                })
                ->addColumn('action', function ($row) {
                    return $row->id;
                })
                ->toJson();
        }

        return view('modules.subject.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::get(['id', 'title']);
        return view('modules.subject.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjectRequest $request)
    {
        $subject = Subject::create($request->validated());
        return redirect()->route('subjects.index')->with('success', 'Subject Added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        $courses = Course::get(['id', 'title']);
        return view('modules.subject.show', compact('subject', 'courses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {

        $courses = Course::get(['id', 'title']);
        return view('modules.subject.edit', compact('subject', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        $subject -> update($request->validated());
        return redirect()->route('subjects.index')->with('success', 'Subject Data has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        $data = [
            'success' => true,
            'message' => 'Subject has been deleted successfully.'
        ];

        return response()->json($data);
    }
}
