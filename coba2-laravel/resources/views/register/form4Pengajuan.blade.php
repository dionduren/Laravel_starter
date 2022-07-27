<div class="form-step" id="step-4" style="display: none">
    <div class="row text-white align-items-center">
        <div class="row py-1 align-items-center">
            <div style="flex: 0 0 auto;width: 12.75%;">
                <label for="tanggalpengajuan">Tanggal Pengajuan</label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div style="flex: 0 0 auto;width: 25%">
                <input class="form-control @error('tanggalpengajuan') is-invalid @enderror" type="date"
                    name="tanggalpengajuan" id="tanggalpengajuan" placeholder="Klik untuk memilih tanggal" required
                    value="{{ old('tanggalpengajuan') }}">
                @error('tanggalpengajuan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="row py-1 align-items-center">
            <div style="flex: 0 0 auto;width: 12.75%;">
                <label for="peminatan">Bidang Peminatan</label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div class="col-auto">
                <input type="text" class="form-control @error('peminatan') is-invalid @enderror" name="peminatan"
                    id="peminatan" required value="{{ old('peminatan') }}">

                @error('peminatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="row py-2 align-items-center">
            <div style="flex: 0 0 auto;width: 12.75%;">
                <label>Departemen</label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div style="flex: 0 0 auto;width: 25%;">
                <select class="form-select" name="departemen" id="departemen">
                    <option value="">Pilihan Departemen</option>
                    {{-- foreach --}}
                    @for ($departemen = 1; $departemen <= 10; $departemen++)
                        <option value="{{ $departemen }}">
                            Departemen {{ $departemen }}
                        </option>
                    @endfor
                </select>
            </div>
        </div>
    </div>
</div>
