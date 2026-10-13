@extends('base')

@section('title', $meta['title'])

@section('content')
    <div id="{{ $meta['id'] }}" class="bg-mat-gradient-light py-30 w-full">
        <div class="flex flex-col gap-16 mx-auto px-4 w-full container">

            <div class="flex md:flex-row flex-col gap-4 w-full">
                <div class="md:w-1/4"></div>
                <div class="flex flex-col gap-5 md:w-3/4">
                    <h1 class="max-w-3xl text-mat-dark-blue text-4xl md:text-5xl">
                        {{ $meta['h1'][0] }} <span class="text-mat-mid-blue">{{ $meta['h1'][1] }}</span>
                    </h1>
                    @if (filled($intro))
                        <p class="max-w-md text-mat-dark-blue text-sm">{{ $intro }}</p>
                    @endif
                </div>
            </div>

            @foreach ($sections as $section)
                <hr class="border-mat-mid-blue/10">

                <div class="flex md:flex-row flex-col gap-4 w-full">
                    <div class="md:w-1/4">
                        <p class="font-semibold text-mat-mid-blue text-sm uppercase">
                            ● {{ $section['label'] }}
                        </p>
                    </div>

                    <div class="flex flex-col gap-3 md:w-3/4 text-mat-dark-blue text-sm">
                        @php
                            $title = $section['title'] ?? '';
                            $glue = \Illuminate\Support\Str::endsWith($title, ["'", '’', ' ']) ? '' : ' ';
                        @endphp
                        <h2 class="mb-2 font-bold text-mat-dark-blue text-2xl">
                            {{ $title }}@if (filled($section['title_accent'] ?? null))
                                {{ $glue }}<span class="text-mat-mid-blue">{{ $section['title_accent'] }}</span>
                            @endif
                        </h2>

                        @foreach ($section['blocks'] ?? [] as $block)
                            @php $d = $block['data'] ?? []; @endphp

                            @switch($block['type'])
                                @case('champ')
                                    <p>
                                        <strong class="font-medium text-mat-mid-blue">{{ $d['label'] }} :</strong>
                                        @if (filled($d['url'] ?? null))
                                            <a target="_blank" rel="noopener" class="underline underline-offset-4"
                                                href="{{ $d['url'] }}">{{ $d['value'] }}</a>
                                        @else
                                            {{ $d['value'] }}
                                        @endif
                                    </p>
                                @break

                                @case('paragraphe')
                                    <div
                                        class="flex flex-col gap-3 [&_ul]:pl-2 max-w-2xl text-mat-dark-blue/90 [&_a]:underline [&_a]:underline-offset-4 leading-relaxed [&_ul]:list-disc [&_ul]:list-inside">
                                        {!! \Filament\Forms\Components\RichEditor\RichContentRenderer::make($d['content'] ?? '')->toHtml() !!}
                                    </div>
                                @break

                                @case('liste')
                                    <ul class="flex flex-col gap-1 mt-2 pl-2 text-mat-dark-blue/90 list-disc list-inside">
                                        @foreach ($d['items'] ?? [] as $item)
                                            <li>
                                                <strong class="font-medium text-mat-mid-blue">{{ $item['label'] }} :</strong>
                                                {{ $item['value'] }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @break

                                @case('credits')
                                    <div class="flex flex-col gap-2 mt-2 py-1 pl-4 border-mat-mid-blue/30 border-l-2">
                                        @foreach ($d['items'] ?? [] as $item)
                                            <p>
                                                <strong class="font-medium text-mat-mid-blue">{{ $item['label'] }} :</strong>
                                                @if (filled($item['url'] ?? null))
                                                    <a target="_blank" rel="noopener" class="underline underline-offset-4"
                                                        href="{{ $item['url'] }}">{{ $item['value'] }}</a>
                                                @else
                                                    {{ $item['value'] }}
                                                @endif
                                            </p>
                                        @endforeach
                                    </div>
                                @break

                                @case('separateur')
                                    <hr class="my-2 border-mat-mid-blue/20">
                                @break
                            @endswitch
                        @endforeach
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
