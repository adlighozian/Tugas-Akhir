@extends('main')

@section('main')
    <div class="flex">
        {{-- SIDEBAR START --}}
        @include('components.sidebar')
        {{-- SIDEBAR END --}}
        <div class="w-full h-[100vh] bg-warnasatu">
            @include('components.navbar')
            {{-- MAIN SATRT --}}
            <div class="w-full px-3">
                <div class="w-full flex justify-between items-center h-[80px]">
                    

                </div>
                <p class="mb-2 font-medium text-xl">Detail Pembayaran</p>
                <table class="table table-hover">
                    <thead class="text-white bg-tabelsatu">
                        <tr>
                            <th scope="col">Nama Pesanan</th>
                            <th scope="col">Jumlah pesanan</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody class="text-black bg-white">
                        
                            <tr>
                                <td>Nasi Goreng</td>
                                <td> 2 </td>
                                <td> Rp. 40.000 </td>

                            </tr>

                            <tr>
                            <td> TOTAL </td>
                            <td> 2 </td>
                            <td> Rp. 40.000 </td>
                            </tr>   
                        
                    </tbody>
                </table>
                <button type="submit"
                        class="hover:bg-opacity-80 shadow-lg duration-150 w-full h-[48px] bg-warnatiga rounded-2xl text-white font-medium">Bayar 
                </button>
            </div>
            {{-- MAIN END --}}
        </div>
    </div>
@endsection
