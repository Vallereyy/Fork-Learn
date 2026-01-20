<!-- Header -->
<div class="text-center mb-1">
    <div class="inline-flex items-center justify-center w-16 h-16 bg-indigo-100 rounded-full mb-1">
        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
        </svg>
    </div>
    <h1 class="text-4xl font-bold text-gray-900">Form Data Buku</h1>
    <p class="text-gray-600">Lengkapi informasi buku dengan detail yang akurat</p>
</div>

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <div>
                        <h6 class="mb-0">Tambah Data Buku Baru</h6>
                        <p class="text-sm mb-0">Isi form berikut untuk menambahkan buku baru ke dalam sistem</p>
                    </div>
                    <div class="ms-auto">
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-outline-secondary">
                            <i class="fas fa-arrow-left me-1"></i> Kembali
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('books.create') }}" id="formBuku">
                    @csrf
                    
                    <div class="row">
                        <!-- Kode Buku -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kdbuku" class="form-control-label">Kode Buku</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-hashtag"></i></span>
                                    <input 
                                        class="form-control" 
                                        type="text" 
                                        id="kdbuku" 
                                        name="kdbuku" 
                                        maxlength="10"
                                        placeholder="Contoh: BK001"
                                        value="{{ old('kdbuku') }}"
                                        required
                                    >
                                </div>
                                @error('kdbuku')
                                    <div class="text-danger text-sm mt-1">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">Maksimal 10 karakter</small>
                            </div>
                        </div>

                        <!-- Tahun Terbit -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tahun_terbit" class="form-control-label">Tahun Terbit</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                    <input 
                                        class="form-control" 
                                        type="number" 
                                        id="tahun_terbit" 
                                        name="tahun_terbit" 
                                        maxlength="4"
                                        placeholder="YYYY"
                                        value="{{ old('tahun_terbit') }}"
                                        required
                                    >
                                </div>
                                @error('tahun_terbit')
                                    <div class="text-danger text-sm mt-1">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">Format: 4 digit angka (YYYY)</small>
                            </div>
                        </div>
                    </div>

                    <!-- Judul Buku -->
                    <div class="form-group mt-3">
                        <label for="judul" class="form-control-label">Judul Buku</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-book"></i></span>
                            <input 
                                class="form-control" 
                                type="text" 
                                id="judul" 
                                name="judul" 
                                maxlength="150"
                                placeholder="Masukkan judul lengkap buku"
                                value="{{ old('judul') }}"
                                required
                            >
                        </div>
                        @error('judul')
                            <div class="text-danger text-sm mt-1">{{ $message }}</div>
                        @enderror
                        <small class="form-text text-muted">Maksimal 150 karakter</small>
                    </div>

                    <div class="row mt-3">
                        <!-- Jenis Buku -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenis" class="form-control-label">Jenis Buku</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-tags"></i></span>
                                    <select 
                                        class="form-control" 
                                        id="jenis" 
                                        name="jenis"
                                        required
                                    >
                                        <option value="" disabled {{ old('jenis') ? '' : 'selected' }}>Pilih Jenis Buku</option>
                                        <option value="Fiksi" {{ old('jenis') == 'Fiksi' ? 'selected' : '' }}>Fiksi</option>
                                        <option value="Non-Fiksi" {{ old('jenis') == 'Non-Fiksi' ? 'selected' : '' }}>Non-Fiksi</option>
                                        <option value="Pelajaran" {{ old('jenis') == 'Pelajaran' ? 'selected' : '' }}>Pelajaran</option>
                                        <option value="Referensi" {{ old('jenis') == 'Referensi' ? 'selected' : '' }}>Referensi</option>
                                        <option value="Novel" {{ old('jenis') == 'Novel' ? 'selected' : '' }}>Novel</option>
                                        <option value="Komik" {{ old('jenis') == 'Komik' ? 'selected' : '' }}>Komik</option>
                                        <option value="Ensiklopedia" {{ old('jenis') == 'Ensiklopedia' ? 'selected' : '' }}>Ensiklopedia</option>
                                        <option value="Biografi" {{ old('jenis') == 'Biografi' ? 'selected' : '' }}>Biografi</option>
                                    </select>
                                </div>
                                @error('jenis')
                                    <div class="text-danger text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Stok -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="stok" class="form-control-label">Stok</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-boxes-stacked"></i></span>
                                    <input 
                                        class="form-control" 
                                        type="number" 
                                        id="stok" 
                                        name="stok" 
                                        min="0"
                                        max="0"
                                        placeholder="Jumlah stok"
                                        value="{{ old('stok', 0) }}"
                                        required
                                    >
                                </div>
                                @error('stok')
                                    <div class="text-danger text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <!-- Penulis -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="penulis" class="form-control-label">Penulis</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user-pen"></i></span>
                                    <input 
                                        class="form-control" 
                                        type="text" 
                                        id="penulis" 
                                        name="penulis" 
                                        maxlength="30"
                                        placeholder="Nama penulis"
                                        value="{{ old('penulis') }}"
                                        required
                                    >
                                </div>
                                @error('penulis')
                                    <div class="text-danger text-sm mt-1">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">Maksimal 30 karakter</small>
                            </div>
                        </div>

                        <!-- Penerbit -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="penerbit" class="form-control-label">Penerbit</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-building"></i></span>
                                    <input 
                                        class="form-control" 
                                        type="text" 
                                        id="penerbit" 
                                        name="penerbit" 
                                        maxlength="50"
                                        placeholder="Nama penerbit"
                                        value="{{ old('penerbit') }}"
                                        required
                                    >
                                </div>
                                @error('penerbit')
                                    <div class="text-danger text-sm mt-1">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">Maksimal 50 karakter</small>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-end gap-2">
                                <button type="reset" class="btn btn-light" id="resetBtn">
                                    <i class="fas fa-redo me-1"></i> Reset
                                </button>
                                <button type="submit" class="btn btn-primary" id="submitBtn">
                                    <i class="fas fa-save me-1"></i> Simpan Data
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Validasi stok tidak boleh minus
    document.getElementById('stok').addEventListener('input', function(e) {
        if (this.value < 0 && this.value > 0) {
            this.value = 0;
        }
    }); 

        // Get form data for preview
        const formData = new FormData(form);
        const judul = document.getElementById('judul').value;
        const kodeBuku = document.getElementById('kdbuku').value;
        const penulis = document.getElementById('penulis').value;
        const jenis = document.getElementById('jenis').value;

    // Reset form handler
    .addEventListener('click', function {
        Swal.fire({
            title: "Reset Form?",
            text: "Semua data yang telah diisi akan hilang.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Reset!",
            cancelButtonText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('formBuku').reset();
                // Reset select to default
                document.getElementById('jenis').selectedIndex = 0;
                
                Swal.fire({
                    title: "Form Direset!",
                    text: "Semua data telah dihapus.",
                    icon: "success",
                    timer: 1500,
                    showConfirmButton: false
                });
            }
        });
    });
</script>
@endpush
