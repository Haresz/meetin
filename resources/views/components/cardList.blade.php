<div class="card flex flex-row justify-between my-8">
    <div class="p-4">
        <h1 class="font-semibold text-xl pb-2" >Employee ID: {{ $id }}</h1>
        <table class="text-base">
            <tr>
                <td class="py-[2px]">Date of filing</td>
                <td class="px-8" >:</td>
                <td>{{ $dateF }}</td>
            </tr>
            <tr>
                <td class="py-[2px]">Name</td>
                <td class="px-8" >:</td>
                <td>{{ $name }}</td>
            </tr>
            <tr>
                <td class="py-[2px]">Devision</td>
                <td class="px-8" >:</td>
                <td>{{ $devision }}</td>
            </tr>
            <tr>
                <td class="py-[2px]">Position</td>
                <td class="px-8" >:</td>
                <td> {{ $position }} </td>
            </tr>
            <tr>
                <td class="py-[2px]">Loan date</td>
                <td class="px-8" >:</td>
                <td>{{ $dateL }}</td>
            </tr>
        </table>
    </div>
    <div class="flex flex-col m-8 justify-between">
        <a class="btn text-white w-2/3 ml-14" style="--bs-btn-bg: #2E31FB; --bs-btn-hover-bg: #2E31FB;" href="/detail" role="button">See Detail</a>
        <div class="flex items-center">
            <p class="mb-0 mr-6 font-meetGray" >Status :</p>
            {{ $slot }}
        </div>
    </div>
</div>