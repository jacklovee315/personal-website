<nav class="my-10 flex justify-between items-center">
    <x-ui.brand name="Jack Love"/>

    <ul class="space-x-10 justify-end hidden sm:flex">
        <x-ui.nav-item name="about"/>
        <x-ui.nav-item name="posts"/>
    </ul>

    <!-- off canvas -->
    <div x-data="{ offCanvasOpen: false }" class="sm:hidden">
        <div
            x-cloak
            x-show="offCanvasOpen"
            @click.away="offCanvasOpen = false"
            class="fixed top-0 left-0 h-full w-64 bg-white p-4 z-20"

            x-transition:enter="transition-transform ease-out duration-300 transform"
            x-transition:enter-start="-translate-x-full"

            x-transition:leave="transition-transform ease-in duration-300 transform"
            x-transition:leave-end="-translate-x-full"
        >
            <!-- Menu Content -->
            <div class="flex justify-end">
                <x-heroicon-o-x-mark @click="offCanvasOpen = false" class="w-6 cursor-pointer"/>
            </div>

            <ul class="my-12 space-y-5">
                <x-ui.nav-item name="about"/>
                <x-ui.nav-item name="posts"/>
            </ul>

            <div class="flex justify-center space-x-6">
                <a href="https://uk.linkedin.com/in/jack-love-340b30194?trk=people-guest_people_search-card" target="_blank">
                    <x-bi-linkedin class="h-5 w-5"/>
                </a>

                <a href="https://github.com/jacklovee315" target="_blank">
                    <x-bi-github class="h-5 w-5"/>
                </a>
            </div>
        </div>

        <x-heroicon-o-bars-3 @click="offCanvasOpen = !offCanvasOpen" class="w-6 cursor-pointer"/>

        <!-- off canvas overlay -->
        <div x-show="offCanvasOpen"
             @click="offCanvasOpen = !offCanvasOpen"
             class="fixed bg-gray-500 opacity-50 z-10 inset-0">
        </div>
    </div>
</nav>
