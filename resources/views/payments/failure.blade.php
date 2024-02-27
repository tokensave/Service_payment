@extends('layouts.main')

@section('main.content')
    <section>

{{--        <div class="container">--}}
{{--            <div class="text-center">--}}
{{--                <div class="mb-4 text-danger">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-emoji-tear-fill" viewBox="0 0 16 16">--}}
{{--                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M9.5 3.5a.5.5 0 0 0 .5.5c.838 0 1.65.416 2.053 1.224a.5.5 0 1 0 .894-.448C12.351 3.584 11.162 3 10 3a.5.5 0 0 0-.5.5M7 6.5C7 5.672 6.552 5 6 5s-1 .672-1 1.5S5.448 8 6 8s1-.672 1-1.5M4.5 13c.828 0 1.5-.746 1.5-1.667 0-.706-.882-2.29-1.294-2.99a.238.238 0 0 0-.412 0C3.882 9.044 3 10.628 3 11.334 3 12.253 3.672 13 4.5 13M8 11.197c.916 0 1.607.408 2.25.826.212.138.424-.069.282-.277-.564-.83-1.558-2.049-2.532-2.049-.53 0-1.066.361-1.536.824.083.179.162.36.232.535.045.115.092.241.135.373A3.1 3.1 0 0 1 8 11.197M10 8c.552 0 1-.672 1-1.5S10.552 5 10 5s-1 .672-1 1.5S9.448 8 10 8M6.5 3c-1.162 0-2.35.584-2.947 1.776a.5.5 0 1 0 .894.448C4.851 4.416 5.662 4 6.5 4a.5.5 0 0 0 0-1"/>--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <section>
            <div class="container">
                <div class="text-center">
                    <div class="mb-4 text-danger">
                        <h5>
                            Оплата не прошла
                        </h5>

                        <a href="{{ $payment->payable->getPayableUrl() }}" class="btn btn-primary">
                            Вернутся назад
                        </a>
                    </div>

                </div>
            </div>


        </section>


    </section>
@endsection
