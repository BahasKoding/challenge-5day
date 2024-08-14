<!DOCTYPE html>
<html lang="en">

{{-- ! Header --}}

<x-auth.LoginHeaderComponent title="SB Admin 2 - Login" />

<body class="bg-gradient-primary">

    <div class="container">

        {{-- Outer Row  --}}
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        {{-- Nested Row within Card Body  --}}
                        <div class="row">
                            {{-- ! Component image --}}
                            {{-- Menggunakan Komponen Gambar --}}
                            <x-auth.LoginImageComponent />

                            {{-- ! Component Form Login --}}
                            {{-- Menggunakan Komponen Form Login --}}
                            <x-auth.LoginFormComponent />
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    {{-- ! Footer --}}
    <x-auth.LoginFooterComponent />

    {{-- ! Include SweetAlert Component --}}
    <x-sweet-alert />

    {{-- ! Include SweetAlert CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
