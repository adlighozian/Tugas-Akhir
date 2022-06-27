@extends('main')

@section('main')
    <div class="w-full h-[100vh] flex">
        {{-- IMAGE START --}}
        <div class="sm:block bg-warnatiga w-full h-full hidden duration-150"></div>
        {{-- IMAGE END --}}
        <div class="sm:w-[700px] w-full h-full flex justify-center px-[30px] bg-warnasatu flex-col">
            <p class="font-bold text-2xl">Masuk</p>
            {{-- FORM START --}}
            <form class="w-full my-[24px]">
                <div class="mb-3">
                    <label for="inputEmail" class="mb-1">Email</label>
                    <input type="text" id="email" class="form-control rounded-2xl h-[48px]" placeholder="Masukan email"
                        name="email">
                </div>
                <div class="mb-[32px]">
                    <label for="inputPassword" class="mb-1">Password</label>
                    <div class="flex justify-end items-center h-[48px] w-full">
                        <input type="password" id="password" class="form-control h-full w-full rounded-2xl"
                            placeholder="Masukan Password" name="password">
                        {{-- HIDE_SHOW START --}}
                        <span onclick="hide()"
                            class="absolute h-[40px] w-[30px] mr-3 cursor-pointer flex items-center justify-center bg-white">
                            <i id="hide2" class='bx bx-show hidden text-slate-600 text-[20px]'></i>
                            <i id="hide1" class='bx bx-hide text-slate-600 text-[20px]'></i>
                        </span>
                        {{-- HIDE_SHOW END --}}
                    </div>
                </div>
                <button type="submit"
                    class="font-medium h-[48px] w-full rounded-2xl bg-warnadua text-white hover:bg-opacity-80 shadow-lg duration-150">Masuk</button>
            </form>
            {{-- FORM END --}}
            <p class="w-full text-center">Belum punya akun? <a href="/register"
                    class="text-warnadua font-medium hover:text-white duration-150">Daftar di
                    sini</a>
            </p>
        </div>
    </div>
    <script>
        function hide() {
            var x = document.getElementById("password");
            var y = document.getElementById("hide1");
            var z = document.getElementById("hide2");

            if (x.type === 'password') {
                x.type = "text";
                y.classList.add("hidden");
                z.classList.remove("hidden");
            } else {
                x.type = "password";
                y.classList.remove("hidden");
                z.classList.add("hidden");
            }
        }
    </script>
@endsection
