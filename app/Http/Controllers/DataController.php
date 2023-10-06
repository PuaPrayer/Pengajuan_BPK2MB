<?php

namespace App\Http\Controllers;

use App\Http\Resources\DataResource;
use App\Models\Data;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Process;

class DataController extends Controller
{
    public function show(User $user) 
    {
        try {
            $this->authorize('allowed', auth()->user());
            return redirect()->route('submission.approver');
        } catch (AuthorizationException) {
            $data = auth()->user()->data;
            $mails = DataResource::collection($data)->toArray(request());
            return view('dashboard.submission', compact('mails'));
        }
    }

    public function create()
    {
        if (auth()->user()->role === 'approver') {
            return redirect()-route('submission.approver');
        }

        return view('edit.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|min:8',
            'NIP' => 'required|string|min:4',
            'bagian' => 'required|string',
            'tujuan' => 'required|string',
            'jenjang_pendidikan' => 'required|string',
            'surat' => 'required|mimes:pdf|max:20480', // PDF, max 10MB
        ]);

        $file = $request->file('surat');
        $filePath = $file->store('uploads', 'public');

        Data::create([
            'user_id' => auth()->user()->id,
            'nama' => $request->nama,
            'NIP' => $request->NIP,
            'bagian' => $request->bagian,
            'tujuan' => $request->tujuan,
            'jenjang_pendidikan' => $request->jenjang_pendidikan,
            'surat' => $filePath
        ]);
        Session::flash('create-success', 'Data Berhasil Ditambahkan');
        return redirect()->route('submission.approver');
    }

    public function approver()
    {
        try {
            $this->authorize('allowed', auth()->user());
            if (auth()->user()->role === 'admin') {
                $mails = DataResource::collection(Data::all())->toArray(request());
                return view('dashboard.submission', compact('mails'));
            } elseif (auth()->user()->role === 'approver') {
                $mails = DataResource::collection(Data::all())->toArray(request());
                return view('dashboard.approve', compact('mails'));
            }
        } catch (AuthorizationException $exception) {
            $data = auth()->user()->data;
            $mails = DataResource::collection($data)->toArray(request());
            return view('dashboard.submission', compact('mails'));
            
        }
    }

    public function approve(Request $request, $id)
    {
        // Find the Data instance by ID
        $data = Data::findOrFail($id);

        // Update the 'approved' column to 'Disetujui'
        $data->update(['approved' => 'Disetujui']);

        // Reload the page using JavaScript
        return redirect()->back()->with('success', 'Data approved successfully!')->with('reload', true);
    }

    public function reject(Request $request, $id)
    {
        // Find the Data instance by ID
        $data = Data::findOrFail($id);

        // Update the 'approved' column to 'Ditolak'
        $data->update(['approved' => 'Ditolak']);

        // Reload the page using JavaScript
        return redirect()->back()->with('success', 'Data rejected successfully!')->with('reload', true);
    }

    public function destroy($id)
    {
        try {
            if (auth()->user()->role === 'admin') {
                $data = Data::findOrFail($id);
                $data->delete();
                Session::flash('delet-success', 'Data berhasil dihapus');
                return redirect()->route('submission.approver')->with('success', 'Data deleted successfully!')->with('reload', true);
            }
            $data = Data::findOrFail($id);
            $this->authorize('data', $data);
            $data->delete();
            Session::flash('delet-success', 'Data berhasil dihapus');
            return redirect()->route('submission.approver')->with('success', 'Data deleted successfully!')->with('reload', true);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('submission.approver');
        }
    }

    public function edit($id)
    {
        try {
            if (auth()->user()->role === 'admin') {
                $data = Data::findOrFail($id);
                return view('edit.edit', compact('data'));
            }
            $data = Data::findOrFail($id);
            $this->authorize('data', $data);
            return view('edit.edit', compact('data'));
        } catch (AuthorizationException) {
            return redirect()->route('submission.approver');
        }
    }

    public function update(Request $request, $id)
    {
        $data = Data::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'NIP' => 'required|string|max:255',
            'bagian' => 'required|string|max:255',
            'tujuan' => 'required|string|max:255',
            'jenjang_pendidikan' => 'required|string|max:255',
            'surat' => 'nullable|file|mimes:pdf|max:10240'
        ]);

        // Update other fields
        $data->update([
            'nama' => $request->input('nama'),
            'NIP' => $request->input('NIP'),
            'bagian' => $request->input('bagian'),
            'tujuan' => $request->input('tujuan'),
            'jenjang_pendidikan' => $request->input('jenjang_pendidikan')
        ]);

        // Handle file update
        if ($request->hasFile('surat')) {
            $request->validate([
                'surat' => 'file|mimes:pdf|max:10240'
            ]);

            // Delete old file if it exists
            if (file_exists(storage_path("app/public/{$data->surat}"))) {
                unlink(storage_path("app/public/{$data->surat}"));
            }

            // Store the new file
            $file = $request->file('surat');
            $filePath = $file->store('uploads', 'public');

            // Update the file path in the database
            $data->update(['surat' => $filePath]);
        }
        Session::flash('edit-success', 'Data berhasil diedit');
        return redirect()->route('submission.approver');
    }
}

