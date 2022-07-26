<div class="row bg-danger text-white" id="Form2">
    {{-- Form ke-3 Bagian Kiri --}}
    <div class="col bg-primary" name="form2-kiri">
        <div class="row py-2 align-items-center">
            <div class="col-3">
                <label for="tipependidikan">Kategori</label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div style="flex: 0 0 auto; width: 44%;">
                <select class="form-select @error('tipependidikan') is-invalid @enderror" name="tipependidikan"
                    id="tipependidikan" required wire:model.lazy="tipependidikan">
                    <option value=''>Pilih Jenis Pendidikan</option>
                    <option value='mahasiswa'>Mahasiswa</option>
                    <option value='pelajar'>Pelajar</option>
                </select>
            </div>
        </div>

        <div class="row py-1 align-items-center">
            <div class="col-3">
                <label for="tingkatpendidikan">Tingkat Pendidikan</label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div style="flex: 0 0 auto; width: 44%;">
                <select class="form-select @error('tingkatpendidikan') is-invalid @enderror" name="tingkatpendidikan"
                    id="tingkatpendidikan" required wire:model.lazy="tingkatpendidikan">
                    <option value=''>Pilih Tingkat Pendidikan</option>
                </select>
            </div>
        </div>

        <div class="row py-1 align-items-center">
            <div class="col-3">
                <label for="institusi">Universitas / Sekolah</label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div style="flex: 0 0 auto; width: 44%;">
                <select class="form-select @error('institusi') is-invalid @enderror" name="institusi" id="institusi"
                    required wire:model.lazy="institusi">
                    <option value=''>Pilih Institusi</option>
                </select>
            </div>
        </div>

        <div class="row py-2 align-items-center" id="divFakultas">
            <div class="col-3">
                <label for="fakultas">Fakultas</label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div class="col-auto">
                <input type="text" class="form-control @error('fakultas') is-invalid @enderror"
                    wire:model.lazy="fakultas" name="fakultas" id="fakultas" value="{{ old('fakultas') }}">
            </div>
        </div>

        <div class="row py-1 align-items-center">
            <div class="col-3">
                <label for="jurusan">Jurusan</label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div style="flex: 0 0 auto; width: 44%;">
                <select class="form-select @error('jurusan') is-invalid @enderror" name="jurusan" id="jurusan"
                    value="{{ old('jurusan') }}" required wire:model.lazy="jurusan">
                    <option value=''>Pilih Jurusan</option>
                </select>
            </div>
        </div>
    </div>
    {{-- Form ke-3 Bagian Kiri --}}

    {{-- Form ke-3 Bagian Kanan --}}
    <div class="col bg-secondary" name="form2-kanan">
        <div class="row py-2 align-items-center">
            <div class="col-3">
                <label for="programstudi">Program Studi</label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div class="col-auto">
                <input type="text" class="form-control @error('programstudi') is-invalid @enderror"
                    wire:model.lazy="programstudi" name="programstudi" id="programstudi" required
                    value="{{ old('programstudi') }}">
            </div>
        </div>

        <div class="row py-2 align-items-center">
            <div class="col-3">
                <label for="nomorinduk">Nomor Induk Mahasiswa / Siswa</label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div class="col-auto">
                <input type="text" class="form-control @error('nomorinduk') is-invalid @enderror"
                    wire:model.lazy="nomorinduk" name="nomorinduk" id="nomorinduk" required
                    value="{{ old('nomorinduk') }}">
            </div>
        </div>
    </div>
    {{-- Form ke-3 Bagian Kanan --}}
</div>
