@extends('layout.app')

@section('title', 'Login - Point of Sale')

@section('content')
    <section class="h-dvh overflow-hidden flex flex-col items-center justify-center bg-cultured px-4">
        <div class="bg-white rounded-xl shadow-lg p-6 md:w-[380px] w-full">
            <div class="pb-2 border-b border-b-cultured mb-4">
                <h1 class="text-gray-800 font-bold text-lg">Masuk Akun</h1>
            </div>

            <form id="form-login" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-2">
                    <x-form.label :props="[
                        'for' => 'username',
                        'label' => 'Nama Pengguna',
                        'required' => true,
                    ]" />

                    <x-form.input :props="[
                        'id' => 'username',
                        'name' => 'username',
                        'placeholder' => 'Masukkan nama pengguna',
                        'value' => null,
                    ]" />
                </div>

                <div class="mb-6">
                    <x-form.label :props="[
                        'for' => 'password',
                        'label' => 'Kata Sandi',
                        'required' => true,
                    ]" />

                    <x-form.input :props="[
                        'type' => 'password',
                        'id' => 'password',
                        'name' => 'password',
                        'placeholder' => 'Masukkan kata sandi',
                        'value' => null,
                    ]" />
                </div>

                <x-form.submit :props="[
                    'id' => 'login',
                    'label' => 'Masuk',
                    'class' => 'w-full',
                ]" />
            </form>
        </div>

        <footer class="pt-4">
            <span class="text-sm tracking-wide font-gray-800 font-medium">
                Copyright 2025 Point of Sale
            </span>
        </footer>
    </section>
@endsection

@push('scripts')
    <script type="module">
        $(document).ready(function() {

        });
    </script>
@endpush
