@extends('template.default')

@php
  $title = "Data Sekolah";
  $preTitle = "Khamila XII PPLG 1"
  @endphp

@push('page-action')
<a href="{{ route('sekolahs.tambah') }}" class="btn btn-primary">Tambah Data</a>
@endpush

@section('body')
<h1>SMKN 1 SAYUNG</h1>

<div class="col-lg-8">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>nama sekolah</th>
                          <th>alamat sekolah</th>
                          <th>jurusan </th>
                          <th>jumlah guru</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($sekolahs as $sekolah)
                        <tr>
                            

                            <td>{{ $sekolah -> nama_sekolah }}</td>
                            <td>{{ $sekolah -> alamat_sekolah }}</td>
                            <td>{{ $sekolah -> jurusan }}</td>
                            <td>{{ $sekolah -> jumlah_guru }}</td>
                          <td>
                            <a href="{{ route('sekolahs.edit', $sekolah->id) }}">Edit</a>
                            <form action="{{ route('sekolahs.destroy', $sekolah->id) }}" method="post">
                              @csrf 
                              @method('DELETE')
                              <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                            </form>


                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
              </div>
              @endsection