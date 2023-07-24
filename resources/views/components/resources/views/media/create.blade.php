<x-layout.app title="Moj title">
    <x-slot:head>
        <style>
            .border {
                border: 3px solid red;
            }
        </style>
        @stack('scripts')
    </x-slot:head>

    <x-slot:title>
        <title>Mediji</title>
    </x-slot:title>

    <div class="container flex justify-center mt-16">
        <form action="{{ route('media.store') }}" method="post">
            @csrf
            <x-form.input type="text" class="border" data-foo="bar"/>
            @error('name')
                <p class="is-invalid"> {{ $message }}</p>
            @enderror
            <br>
            <input type="submit" value="Create" class="button">
        </form>
    </div>
</x-layout.app>