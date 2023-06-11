@extends('layouts/base') {{-- extends keyword is used to call the base.blade.php by declaring it's path --}}

 @section('name','arhab') {{--passing name form hello user --}}


@section('content')
    {{-- section to endsection is used to call the section part from base section --}}

    <h1 class="text-4xl font-bold">Home</h1>
    <p class="mt-4 text-lg">

        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque in saepe ea eius ex recusandae
        impedit earum! Aperiam quibusdam quos voluptate quisquam cum saepe
        incidunt odio delectus! Eius, obcaecati asperiores.</p>
@endsection
