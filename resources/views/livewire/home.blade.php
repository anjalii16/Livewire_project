@extends('layout/theme')
@section('content')

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="mt-3">Laravel Livewire Crud</h2>
                        </div>
                        <div>
                            @livewire('users')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @livewireScripts
    </body>

    </html>
@endsection
