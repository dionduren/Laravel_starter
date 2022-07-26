    <div class="row py-2 bg-dark text-white align-items-center">
        <div class="row py-2 align-items-center">
            <div style="flex: 0 0 auto;width: 12.5%;">
                <label for="tahun" class="form-label">Tahun Magang</label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div style="flex: 0 0 auto;width: 22.8%;">
                <select class="form-select" name="tahun" id="tahun" wire:model.lazy="tahun"
                    value="{{ old('tahun') }}">
                    @for ($year = date('Y'); $year <= date('Y') + 2; $year++)
                        <option value="{{ $year }}">
                            {{ $year }}
                        </option>
                    @endfor
                </select>
            </div>
        </div>
        <div class="row py-2 align-items-center">
            <div style="flex: 0 0 auto;width: 12.5%;">
                <label>Periode Magang</label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div style="flex: 0 0 auto;width: 22.8%;">
                <select class="form-select" name="periode" id="periode" wire:model.lazy="periode"
                    value="{{ old('periode') }}">
                    <option value="">Pilih Periode Magang</option>
                    <option value="3">3 Bulan</option>
                    <option value="6">6 Bulan</option>
                </select>
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
