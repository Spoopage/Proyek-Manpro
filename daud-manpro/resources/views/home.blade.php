@extends('layout')

@section('head')
    <style>
        .landing-section {
            background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("{{ asset('assets/landing-bg.jpg') }}");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }

        .card-title {
            font-family: 'Volkhov', sans-serif;
        }
    </style>
@endsection

@section('content')
    <section class="w-screen landing-section h-[500px] py-24 flex items-center justify-center">
        <div class="flex flex-col items-center gap-y-12">
            <p class="text-white tracking-[5px] text-center">POWERFUL. MULTIPURPOSE.</p>
            <p
                class="text-white lg:text-5xl md:text-4xl max-md:text-3xl lg:tracking-[24px] md:tracking-[12px] max-md:tracking-[8px]">
                100+ LAYOUTS</p>
            <button class="text-white text-xs border border-white px-12 tracking-widest py-2">SEE DEMOS</button>
        </div>
    </section>
    <section class="w-screen">
        @include('promote')
    </section>
    <section class="w-screeen py-16 xl:px-44 lg:px-24 md:px-12 px-4  flex justify-center">
        <div class="flex w-full gap-x-16">
            <img src="{{ asset('assets/card-img.jpg') }}" class="w-1/4 shadow-xl">
            <div class="w-3/4">
                <h1 class="text-3xl font-bold">Selamat Datang di Rumah Usiawan Panti Surya</h1>
                <p class="mt-4 tracking-wide leading-relaxed text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Doloribus, eveniet? Aliquid, asperiores, inventore doloremque animi sit, accusamus tempora perspiciatis
                    nobis dolorum sequi veniam deserunt eveniet! Quisquam, modi perspiciatis? Rerum obcaecati nostrum
                    officia molestias laborum voluptatibus incidunt inventore possimus dicta nesciunt, voluptas harum
                    aspernatur temporibus maiores labore magnam, repellat id? Ratione, provident similique, quod temporibus
                    mollitia cupiditate at accusamus, minus culpa voluptas obcaecati? Error ratione soluta quae voluptatibus
                    iste dolorum pariatur enim eligendi aliquid. A officiis quaerat qui repudiandae. Aut et neque, assumenda
                    quisquam asperiores error molestias ea, obcaecati soluta eaque tempora. Non consectetur quod fugit
                    officiis laboriosam dolorum omnis quaerat veniam cumque. Totam aspernatur molestias laudantium enim
                    dicta deleniti voluptas tempora deserunt odit! Cumque harum at in quod repellat iusto ad impedit magnam
                    unde provident nobis aspernatur maiores fugiat, dolorum corporis. Dignissimos totam repellat alias porro
                    veniam molestias ipsum! Atque rerum qui obcaecati iste, veritatis voluptatum, aliquam enim ipsam a
                    accusamus ducimus labore recusandae error! Repellat, magni tenetur? Modi quia saepe enim culpa vero,
                    incidunt earum sunt cum esse vel temporibus hic reiciendis, perferendis fuga quisquam voluptates
                    aspernatur optio nemo.
                </p>
            </div>
        </div>
    </section>
    <section class="w-screeen py-16 flex justify-center">
        <div
            class="xl:w-9/12 lg:w-11/12 w-9/12 grid grid-cols-3 max-lg:grid-cols-2 max-md:max-w-[430px]
             max-md:grid-cols-1 place-content-center place-items-center gap-x-16 lg:gap-x-8 xl:gap-x-16 gap-y-16">
            @foreach ($cards as $card)
                <div
                    class="block rounded-lg bg-white shadow-secondary-1 hover:translate-y-[-11px]
                     transition-all duration-500 hover:shadow-2xl hover:shadow-[rgba(0,0,0,0.6)] shadow-[rgba(0,0,0,0.2)]">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init
                        data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/nature/186.jpg"
                            alt="" />
                        <a href="#!">
                            <div
                                class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                            </div>
                        </a>
                    </div>
                    <div class="p-6 text-surface">
                        <h5 class="mb-2 text-xl font-medium leading-tight">{{ $card['title'] }}</h5>
                        <p class="mb-4 text-base">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                        <button
                            class="rounded-2xl text-sm border-2 border-black text-black px-12 py-2 h-fit tracking-widest"
                            data-twe-ripple-init data-twe-ripple-color="light">READ MORE</button>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
