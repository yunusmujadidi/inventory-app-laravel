<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Supplier
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('supply.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Supplier</a>
            </div>
           
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                <th scope="col" class="px-6 py-3">
                ID
                </th>
                <th scope="col" class="px-6 py-3">
                Nama Supplier
                </th>
                <th scope="col" class="px-6 py-3">
                Telp
                </th>
                <th scope="col" class="px-6 py-3">
                Alamat
                </th>
                <th scope="col" class="px-6 py-3">
                Kategori
                </th>
                <th scope="col" class="px-6 py-3">
                <span class="sr-only">Edit</span>
                </th>
                </tr>
                </thead>
                <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                1
                </th>
                <td class="px-6 py-4">
                Ahmad Yunus Mujadidi
                </td>
                <td class="px-6 py-4">
                085156368173
                </td>
                <td class="px-6 py-4">
                Semarang
                </td>
                <td class="px-6 py-4">
                VGA
                </td>
                <td class="px-6 py-4 text-right">
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                1
                </th>
                <td class="px-6 py-4">
                Endi Adika
                </td>
                <td class="px-6 py-4">
                081718123312
                </td>
                <td class="px-6 py-4">
                Solo 
                </td>
                <td class="px-6 py-4">
                Laptop
                </td>
                <td class="px-6 py-4 text-right">
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                1
                </th>
                <td class="px-6 py-4">
                Yoru
                </td>
                <td class="px-6 py-4">
                0819237129123
                </td>
                <td class="px-6 py-4">
                Jakarta
                </td>
                <td class="px-6 py-4">
                PC
                <td class="px-6 py-4 text-right">
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                </tr>
                </tbody>
                </table>
                </div>
                

        </div>
    </div>
</x-app-layout>
