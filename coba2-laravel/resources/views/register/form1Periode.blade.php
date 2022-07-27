<div class="form-step" id="step-1">
    <div class="row" style="width: 110%;">
        <div class="row py-2 align-items-center">
            <div style="flex: 0 0 auto;width: 12.66%; min-height: 100%">
                <label for="tahun" class="form-label">Tahun Magang</label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div style="flex: 0 0 auto;width: 22.5%;">
                <select class="form-select" name="tahun" id="tahun" value="{{ old('tahun') }}">
                    @for ($year = date('Y'); $year <= date('Y') + 2; $year++)
                        <option value="{{ $year }}">
                            {{ $year }}
                        </option>
                    @endfor
                </select>
            </div>
        </div>
        <div class="row py-2 align-items-center">
            <div style="flex: 0 0 auto;width: 12.66%;">
                <label>Periode Magang</label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div style="flex: 0 0 auto;width: 22.5%;">
                <select class="form-select" name="periode" id="periode" value="{{ old('periode') }}">
                    <option value="">Pilih Periode Magang</option>
                    <option value="3">3 Bulan</option>
                    <option value="6">6 Bulan</option>
                </select>
            </div>
        </div>

        <div class="row py-2 align-items-center">
            <div style="flex: 0 0 auto;width: 12.66%;">
                <label>Pilihan Bulan</label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div style="flex: 0 0 auto;width: 22.5%;">
                <select class="form-select" name="bulan" id="bulan">
                    <option value="">Pilih Bulan Magang</option>
                </select>
            </div>
        </div>
    </div>
</div>
