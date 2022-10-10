<x-app-layout>
   <div class="filters flex space-x-6">

       <div class="w-1/3">

            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">

                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>

            </select>

       </div>

    <div class="w-1/3">

        <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">

            <option value="Category One">Category One</option>
            <option value="Category Two">Category Two</option>
            <option value="Category Three">Category Three</option>
            <option value="Category Four">Category Four</option>

        </select>

   </div>

   <div class="w-2/3 relative">
         <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white px-4 py-2 pl-8">
   </div>

   </div> 
   {{-- end filters --}}
</x-app-layout>
