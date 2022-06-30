@extends('main')

@section('main')
    <div class="flex">
        {{-- SIDEBAR START --}}
        @include('components.sidebar')
        {{-- SIDEBAR END --}}
        <div class="w-full h-[100vh] overflow-auto bg-warnasatu">
            @include('components.navbar')
            {{-- MAIN SATRT --}}
            <div class="w-full h-[70px] bg-white flex items-center px-4 justify-between">
                <p class="text-xl font-bold">Tambah barang</p>
            </div>
            <div class="w-full flex items-center flex-col py-8">
                {{-- ALERT START --}}
                <div
                    class="lg:w-[800px] sm:w-[570px] bg-boxempat w-[350px] h-10 rounded-xl mb-4 font-medium flex items-center justify-center">
                    <i class='bx bxs-x-square text-[30px] mr-2'></i>
                    Anda belum memiliki jenis barang.
                </div>
                {{-- ALERT END --}}
                {{-- FORM_TAMBAH_BARANG START --}}
                <form action="/adminregister" method="post"
                    class="lg:w-[800px] sm:w-[570px] w-[350px] flex flex-col bg-black bg-opacity-10 rounded-xl p-3">
                    @csrf
                    <div class="md:flex-row flex flex-col">
                        <div class="w-full md:pr-2">
                            <div class="mb-3">
                                <label for="inputKode" class="mb-1 font-medium">Kode</label>
                                <input type="text" id="kode" class="form-control rounded-2xl h-[48px] border-0"
                                    name="kode">
                            </div>
                            <div class="mb-3">
                                <label for="inputNama_barang" class="mb-1 font-medium">Nama Barang<span
                                        class="text-red-600">*</span></label>
                                <input type="text" id="nama_barang" class="form-control rounded-2xl h-[48px] border-0"
                                    name="nama_barang" required>
                            </div>
                            <div class="mb-3">
                                <label for="inputjumlah" class="mb-1 font-medium">Jumlah barang<span
                                        class="text-red-600">*</span></label>
                                <input type="number" id="jumlah_barang" class="form-control rounded-2xl h-[48px] border-0"
                                    name="jumlah_barang" required>
                            </div>
                            <div class="mb-3 flex flex-col">
                                <label for="inputJenis" class="mb-1 font-medium">Jenis Barang</label>
                                <select id="jenis" class="border-gray-300 rounded-2xl h-[48px] px-2" name="jenis">
                                    <option value="null" hidden>
                                        Anda belum memiliki jenis barang
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full md:pl-2">
                            <div class="mb-3">
                                <label for="inputExpired" class="mb-1 font-medium">Tanggal kadaluarsa (expired)<span
                                        class="text-red-600">*</span></label>
                                <input type="date" id="expired" class="form-control rounded-2xl h-[48px] border-0"
                                    name="expired" required>
                            </div>
                            <div class="mb-3">
                                <label for="inputImage" class="mb-1 font-medium">Tambah foto</label>
                                <div class="w-full h-[48px] flex items-center">
                                    <input type="file" id="image" class="form-control border-0 bg-white rounded-md"
                                        name="image">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputCatatan" class="mb-1 font-medium">Catatan</label>
                                <textarea name="message" class="w-full rounded-2xl border-none h-[140px]" placeholder="Tulis catatan..."></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit"
                        class="hover:bg-opacity-80 shadow-lg duration-150 w-full h-[48px] bg-warnatiga rounded-2xl text-white font-medium">Tambah
                        barang</button>
                </form>
                {{-- FORM_TAMBAH_BARANG END --}}
            </div>
            {{-- MAIN END --}}
        </div>
    </div>
@endsection
