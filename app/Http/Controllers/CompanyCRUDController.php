<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyCRUDController extends Controller
{
    /**
     * Menampilkan daftar resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['companies'] = Company::orderBy('id', 'desc')->paginate(5);
        return view('companies.index', $data);
    }
    /**
     * Perlihatkan formulir untuk membuat resource baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }
    /**
     * Simpan resource yang baru dibuat di penyimpanan.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required'
        ]);
        $company = new Company;
        $company->name = $request->nama;
        $company->email = $request->email;
        $company->address = $request->alamat;
        $company->save();
        return redirect()->route('companies.index')
            ->with('sukses', 'Company has been created successfully.');
    }
    /**
     * Menampilkan resource yang ditentukan.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }
    /**
     * Tampilkan formulir untuk mengedit resource yang ditentukan.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
        ]);
        $company = Company::find($id);
        $company->nama = $request->nama;
        $company->email = $request->email;
        $company->alamat = $request->alamat;
        $company->simpan();
        return redirect()->route('companies.index')
            ->with('sukses', 'Company Has Been updated successfully');
    }
    /**
     * Hapus resource yang ditentukan dari penyimpanan.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')
            ->with('sukses', 'Company has been deleted successfully');
    }
}
