<div class="form-step" id="step-2" style="display: none">
    <div class="row" style="width: 110%">
        {{-- Form ke-2 Bagian Kiri --}}
        <div class="col" name="form2-kiri">
            <div class="row py-2 align-items-center">
                <div class="col-3">
                    <label for="nama">Nama</label>
                </div>
                <div class="col-auto">
                    :
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                        id="nama" required value="{{ old('nama') }}">

                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row py-2 align-items-center">
                <div class="col-3">
                    <label for="alias">Nama Panggilan</label>
                </div>
                <div class="col-auto">
                    :
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control @error('alias') is-invalid @enderror" name="alias"
                        id="alias" required value="{{ old('alias') }}">

                    @error('alias')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row py-2 align-items-center">
                <div class="col-3">
                    <label for="email1">Email</label>
                </div>
                <div class="col-auto">
                    :
                </div>
                <div class="col-auto">
                    <input type="email" class="form-control @error('email1') is-invalid @enderror" name="email1"
                        id="email1" required value="{{ old('email1') }}">

                    @error('email1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row py-2 align-items-center">
                <div class="col-3">
                    <label for="email2">Email Alternatif</label>
                </div>
                <div class="col-auto">
                    :
                </div>
                <div class="col-auto">
                    <input type="email" class="form-control @error('email2') is-invalid @enderror" name="email2"
                        id="email2" value="{{ old('email2') }}">

                    @error('email2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row py-2 align-items-center">
                <div class="col-3">
                    <label for="kotalahir">Kota Kelahiran</label>
                </div>
                <div class="col-auto">
                    :
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control @error('kotalahir') is-invalid @enderror" name="kotalahir"
                        id="kotalahir" required value="{{ old('kotalahir') }}">
                </div>
            </div>

            <div class="row py-2 align-items-center">
                <div class="col-3">
                    <label for="tanggallahir">Tanggal Lahir</label>
                </div>
                <div class="col-auto">
                    :
                </div>
                <div style="width: 49%">
                    <input class="form-control @error('tanggallahir') is-invalid @enderror" type="date"
                        name="tanggallahir" id="tanggallahir" placeholder="Klik untuk memilih tanggal" required
                        value="{{ old('tanggallahir') }}">
                    @error('tanggallahir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        {{-- Form ke-2 Bagian Kiri --}}

        {{-- Form ke-2 Bagian Kanan --}}
        <div class="col" name="form2-kanan">
            <div class="row py-2 align-items-center">
                <div class="col-3">
                    <label for="alamat1">Alamat Domisili</label>
                </div>
                <div class="col-auto">
                    :
                </div>
                <div class="col-8">
                    <textarea type="text" class="form-control @error('alamat1') is-invalid @enderror" rows="3"
                        placeholder="Alamat Saat Ini" name="alamat1" id="alamat1" required>{{ old('alamat1') }}</textarea>

                    @error('alamat1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row py-2 align-items-center">
                <div class="col-3">
                    <label for="alamat2">Alamat Asal</label>
                </div>
                <div class="col-auto">
                    :
                </div>
                <div class="col-8">
                    <textarea type="text" class="form-control @error('alamat2') is-invalid @enderror" rows="3"
                        placeholder="Alamat Sesuai KTP" name="alamat2" id="alamat2" required>{{ old('alamat2') }}</textarea>

                    @error('alamat2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row py-2 align-items-center">
                <div class="col-3">
                    <label for="nohp">No. Telpon</label>
                </div>
                <div class="col-auto">
                    :
                </div>
                <div class="col-auto">
                    <input type="number" class="form-control @error('nohp') is-invalid @enderror"
                        placeholder="08xxx" name="nohp" id="nohp" required value="{{ old('nohp') }}">

                    @error('nohp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row py-2 align-items-center">
                <div class="col-3">
                    <label for="sepatu">Ukuran Sepatu</label>
                </div>
                <div class="col-auto">
                    :
                </div>
                <div style="flex: 0 0 auto; width: 49%;">
                    <select class="form-select @error('sepatu') is-invalid @enderror" name="sepatu" id="sepatu"
                        value="{{ old('sepatu') }}">
                        <option value=''>--Sepatu--</option>
                        @for ($ukuran = 35; $ukuran <= 47; $ukuran++)
                            <option value="{{ $ukuran }}">
                                {{ $ukuran }}
                            </option>
                        @endfor
                    </select>
                </div>
            </div>

            <div class="row py-2 align-items-center">
                <div class="col-3">
                    <label for="agama">Agama</label>
                </div>
                <div class="col-auto">
                    :
                </div>
                <div style="flex: 0 0 auto; width: 49%;">
                    <select class="form-select @error('agama') is-invalid @enderror" name="agama" id="agama"
                        value="{{ old('agama') }}">
                        <option value=''>--Agama--</option>
                        <option value='islam'>Islam</option>
                        <option value='kristen'>Kristen</option>
                        <option value='katholik'>Katholik</option>
                        <option value='hindu'>Hindu</option>
                        <option value='kristen'>Budha</option>
                        <option value='other'>Lainnya</option>
                    </select>
                </div>
            </div>

            <div class="row py-2 align-items-center">
                <div class="col-3">
                    <label for="warganegara">Kewarganegaraan</label>
                </div>
                <div class="col-auto">
                    :
                </div>
                <div style="flex: 0 0 auto; width: 49%;">
                    <select class="form-select @error('warganegara') is-invalid @enderror" name="warganegara"
                        id="warganegara" value="{{ old('warganegara') }}">
                        <option value=''>Kewarganegaraan</option>
                        <option value='wni'>WNI</option>
                        <option value='wna'>WNA</option>
                    </select>
                </div>
            </div>
        </div>
        {{-- Form ke-2 Bagian Kanan --}}
    </div>
</div>
