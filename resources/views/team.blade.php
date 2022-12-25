<x-app-layout>
    <div>
        <!-- Start block -->
        <section class="bg-white dark:bg-gray-900" id="team">
            <div class="mx-auto max-w-screen-xl px-4 py-8 lg:py-24 lg:px-6">
                <div class="mx-auto mb-8 mt-20 max-w-screen-md text-center md:mt-0 lg:mb-12">
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Team Creator
                    </h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400 sm:text-xl">Tim kami terdiri dari orang-orang yang handal dan berpengalman di bidangnya. Kami bekerja sama untuk membuat webiste ini lebih baik dan menarik.</p>
                </div>
                <div class="space-y-8 sm:gap-6 lg:grid lg:grid-cols-4 lg:space-y-0 xl:gap-10">
                    <img src="{{ asset('images/chandra.gif') }}" class="rounded-xl" alt="">
                    <img src="{{ asset('images/nadhif.gif') }}" class="rounded-xl">
                    <img src="{{ asset('images/rehza.gif') }}" class="rounded-xl">
                    <img src="{{ asset('images/samy.gif') }}" class="rounded-xl">
                </div>
            </div>
        </section>
        <!-- End block -->
    </div>
</x-app-layout>
