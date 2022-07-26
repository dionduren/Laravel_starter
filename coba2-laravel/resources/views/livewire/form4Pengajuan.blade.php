    <div class="row py-2 bg-dark text-white align-items-center">
        <div class="row py-2 align-items-center">
            <div class="col-3">
                <label for="tanggallahir">Tanggal Pengajuan</label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div class="col-auto">
                <input class="date form-control @error('tanggallahir') is-invalid @enderror" type="text"
                    name="tanggallahir" id="tanggallahir" wire:model.lazy="tanggallahir"
                    placeholder="Klik untuk memilih tanggal" required value="{{ old('tanggallahir') }}">
                @error('tanggallahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-auto">
                <i class="bi bi-calendar-date fs-2"></i>
            </div>
        </div>

        <div class="row py-2 align-items-center">
            <div class="col-3">
                <label for="name">Judul </label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div class="col-auto">
                <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model.lazy="name"
                    name="name" id="name" required value="{{ old('name') }}">

                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="row py-2 align-items-center">
            <div class="col-3">
                <label for="name">Nama</label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div class="col-auto">
                <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model.lazy="name"
                    name="name" id="name" required value="{{ old('name') }}">

                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="row py-2 align-items-center">
            <div style="flex: 0 0 auto;width: 12.5%;">
                <label>Pilihan Bulan : </label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div style="flex: 0 0 auto;width: 22.8%;">
                <select class="form-select" name="bulan" id="bulan">
                    <option value="">Pilih Bulan Magang</option>
                </select>
            </div>
        </div>
    </div>
