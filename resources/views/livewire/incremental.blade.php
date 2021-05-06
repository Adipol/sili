<div>
    <article class="card">
        <div class="card-body">
            <header>
                <h1> <i class="mr-1 text-blue-500 far fa-play-circle"></i>
                    Información
                </h1 </header>
                <div>
                    <hr class="my-2">
                    </hr>
                    {{ $controls }}
                    <p class="text-sm">FBI: </p>{{ $fbi }}
                    <p class="text-sm">F-PEP: </p>{{ $fpep }}
                    <p class="text-sm">GAFI: </p>{{ $gafi }}
                    <p class="text-sm">INTERPOL: </p>{{ $interpol }}
                    <p class="text-sm">OFAC: </p>{{ $ofac }}
                    <p class="text-sm">ONU: </p>{{ $onu }}

                    <div class="mt-2">
                        <button class="ml-2 btn btn-primary">descargar</button>
                    </div>
                </div>
        </div>
    </article>
</div>
