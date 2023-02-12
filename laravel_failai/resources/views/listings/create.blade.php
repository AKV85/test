<x-layout>

<x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Kurti užklausą
        </h2>
        <p class="mb-4">Užpildykite visus laukelius ,kad įkelti užklausą </p>
    </header>

    <form method="POST" action="/listings" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label
                for="company"
                class="inline-block text-lg mb-2">
                Įmonės pavadinimas
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="company"
                value="{{old('company')}}"
            />

            @error('company')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">
                Darbo pavadinimas
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="title"
                placeholder="Pvz: Tango dėstytojas, Hip-Hop dėstytojas ir t.t."
                value="{{old('title')}}"
            />

            @error('title')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="location"
                class="inline-block text-lg mb-2"
            >Darbo lokacija</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="location"
                placeholder="Pvz: Vilnius, Kaunas, Klaipėda ir t.t"
                value="{{old('location')}}"
            />

            @error('location')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2"
            >Kontaktinis el.paštas</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="email"
                value="{{old('email')}}"
            />

            @error('email')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="website"
                class="inline-block text-lg mb-2"
            >
                Tinklalapis/Aplikacija URL
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="website"
                value="{{old('website')}}"
            />

            @error('website')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">
                Tagai (atskirti kableliais)
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="tags"
                placeholder="Pvz: Solo, Poroms, Individualiai it t.t"
                value="{{old('tags')}}"
            />

            @error('tags')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">
                Company Logo
            </label>
            <input
                type="file"
                class="border border-gray-200 rounded p-2 w-full"
                name="logo"
            />

        @error('logo')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
        </div>

        <div class="mb-6">
            <label
                for="description"
                class="inline-block text-lg mb-2">
                Aprašymas
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="description"
                rows="10"
                placeholder="Patirtis, alga, zinios ir t.t.">
                {{old('description')}}
            </textarea>

            @error('description')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Kurti pasiūlymą
            </button>

            <a href="/" class="text-black ml-4"> Atgal </a>
        </div>
    </form>
</x-card>
</x-layout>
