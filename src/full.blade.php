@props(['size' => 'full'])

<x-trmnl::view size="{{$size}}">
    <x-trmnl::layout>
        <x-trmnl::grid cols="2" class="gap--large" data-list-limit="true" data-list-max-height="420" data-list-hidden-count="false">
            @foreach ($data['rss']['item'] as $item)               
                <x-trmnl::item>
                    <x-trmnl::meta />
                    <x-trmnl::content style="justify-content:center;">
                        <x-trmnl::title size="small">
                            {{ $item['title'] }}
                        </x-trmnl::title>
                    </x-trmnl::content>
                </x-trmnl::item>
            @endforeach
        </x-trmnl::grid>
    </x-trmnl::layout>
    <x-trmnl::title-bar title="news.ORF.at" image="inline">
        <svg height="30"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
            <path fill="#000000" d="M6.84 14.5a8.5 8.5 0 1 0 16.98.01 8.5 8.5 0 0 0-16.98-.01Zm-5.4 0C1.44 6.8 7.64.6 15.34.6s13.9 6.2 13.9 13.9-6.2 13.9-13.9 13.9-13.9-6.2-13.9-13.9Z"/>
            <path fill="#000000" d="M10.74 14.5c0-2.5 2-4.5 4.5-4.5s4.5 2 4.5 4.5-2 4.5-4.5 4.5c-2.4.1-4.5-2-4.5-4.5Z"/>
        </svg>
    </x-trmnl::title-bar>
</x-trmnl::view>