<div class="form-step" id="step-5" style="display: none">
    <div class="row align-items-center">
        <div class="row py-2 align-items-center">
            <div class="col-4">
                <label for="docPermohonan">Surat Permohonan dari Universitas / Sekolah</label>
            </div>
            <div class="col-auto text-black">
                <label for="catatanPermohonan">*DOC/PDF | MAX 5 MB</label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div class="col-auto">
                <input type="file" class="form-control @error('docPermohonan') is-invalid @enderror"
                    name="docPermohonan" id="docPermohonan"
                    accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                    required>
                @error('docPermohonan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="row py-2 align-items-center">
            <div class="col-4">
                <label for="docTranskrip">Transkrip Nilai</label>
            </div>
            <div class="col-auto text-black">
                <label for="catatanPermohonan">*DOC/PDF | MAX 5 MB</label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div class="col-auto">
                <input type="file" class="form-control @error('docTranskrip') is-invalid @enderror"
                    name="docTranskrip" id="docTranskrip" required
                    accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                @error('docTranskrip')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="row py-2 align-items-center">
            <div class="col-4">
                <label for="docProposal">Proposal Kerja Praktik</label>
            </div>
            <div class="col-auto text-black">
                <label for="catatanPermohonan">*DOC/PDF | MAX 5 MB</label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div class="col-auto">
                <input type="file" class="form-control @error('docProposal') is-invalid @enderror" name="docProposal"
                    id="docProposal" required
                    accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                @error('docProposal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="row py-2 align-items-center">
            <div style="width: 29.5%">
                <label for="imgFoto">Pas Foto</label>
            </div>
            <div class="col-auto text-black">
                <label for="catatanPermohonan">4x6 | *PNG/JPG | MAX 5 MB</label>
            </div>
            <div class="col-auto">
                :
            </div>
            <div class="col-auto">
                <input type="file" class="form-control @error('imgFoto') is-invalid @enderror" name="imgFoto"
                    id="imgFoto" required accept="image/jpg, image/jpeg, image/png">
                @error('imgFoto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
