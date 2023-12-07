<x-app-layout>
    @section('title', 'Experience')
    <div class="relative overflow-x-auto rounded-lg custom-box-shadow  overflow-y-auto">
        <div class="md:flex items-center space-y-3 md:space-y-0 justify-between p-4 bg-white ">
            <div>
                <button data-modal-target="default-modal" data-modal-toggle="default-modal" onclick="btnAdd()"
                    class="block text-white bg-dark hover:bg-dark focus:ring-4 focus:outline-none focus:ring-dark font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                    type="button">
                    Add experience
                </button>
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="table-search-users"
                    class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
            </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Company
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Position
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Start
                    </th>
                    <th scope="col" class="px-6 py-3">
                        End
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Job Type
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($experiences as $data)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $data->company }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $data->position }}
                        </td>
                        <td class="px-6 py-4">
                            {{ \Carbon\Carbon::parse($data->start_date)->locale('id')->isoFormat('MMMM YYYY') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->end_date != null? \Carbon\Carbon::parse($data->end_date)->locale('id')->isoFormat('MMMM YYYY'): 'Present' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->description }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->job_type }}
                        </td>
                        <td class="px-6 py-4 space-x-3">
                            <ion-icon name="create" class="w-6 h-6 text-orange-600 cursor-pointer"
                                data-modal-target="default-modal" data-modal-toggle="default-modal"
                                onclick="btnEdit('{{ $data->id }}')"></ion-icon>
                            <ion-icon name="trash-bin" class="w-6 h-6 text-red-600 cursor-pointer"
                                data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                onclick="$('#popup-modal form').attr('action', '{{ route('admin.experience.destroy', $data->id) }}')"></ion-icon>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Main modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-md font-semibold text-gray-900">
                        Add experience
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                        data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form action="{{ route('admin.experience.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <x-input id="company" type="text" label="Company" required name="company" value=""
                            placeholder="" class="" />
                        <x-input id="position" type="text" label="Position" required name="position" value=""
                            placeholder="" class="" />
                        <x-input id="start_date" type="month" label="Start" required name="start_date" value=""
                            placeholder="" class="" />
                        <div class="flex items-center mb-4">
                            <input checked id="is_ongoing" type="checkbox"
                                class="rounded border-gray-300 bg-light-pink text-primary-red focus:border-primary-red focus:ring-primary-red " />
                            <label for="is_ongoing" class="ml-2 block text-sm text-gray-900">On going</label>
                        </div>
                        <div id="end_date_container">
                            <x-input id="end_date" type="month" label="End" name="end_date" value=""
                                placeholder="(Leave empty if still ongoing)" class="" />
                        </div>
                        <x-textarea id="description" type="textarea" label="description" required name="description"
                            value="" placeholder="" class="" />
                        <x-input id="job_type" type='text' label="Job Type" required name="job_type"
                            value="" placeholder="" class="" />
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                        <button type="submit"
                            class="text-white bg-dark hover:bg-dark focus:ring-4 focus:outline-none focus:ring-dark font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                        <button data-modal-hide="default-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Decline</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete modal -->

    <div id="popup-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                    data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-md font-normal text-gray-500 ">Are you sure you want to
                        delete this data?</h3>
                    <form action="" method="POST">
                        @csrf
                        <button type="submit"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300  font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            Yes, I'm sure
                        </button>
                        <button data-modal-hide="popup-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">No,
                            cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('js-internal')
        <script>
            function btnAdd() {
                $('#default-modal form').trigger('reset');
                let url = "{{ route('admin.experience.store') }}";
                $('#default-modal form').attr('action', url);
                $('#end_date_container').hide();
            }

            $('#default-modal form #is_ongoing').change(function() {
                if (this.checked) {
                    $('#end_date_container').hide();
                    $('#end_date').val(null);
                } else {
                    $('#end_date_container').show();
                }
            });

            // convert month-year format to date format so it can be stored in database
            $('#default-modal form').submit(function() {

                let start_date = $('#default-modal form #start_date').val();
                let end_date = $('#default-modal form #end_date').val();

                if (start_date != '') {
                    $('#default-modal form #start_date').attr('type', 'date');
                    $('#default-modal form #start_date').val(start_date + '-01');
                }
                if (end_date != '') {
                    $('#default-modal form #end_date').attr('type', 'date');
                    $('#default-modal form #end_date').val(end_date + '-01');
                }
            });

            function btnEdit(id) {
                let url = "{{ route('admin.experience.update', ':id') }}";
                url = url.replace(':id', id);
                $.ajax({
                    url: "{{ route('admin.experience.show', ':id') }}".replace(':id', id),
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        let start_date = data.start_date;
                        let end_date = data.end_date;

                        // convert date to month-year format
                        let start_date_arr = start_date.split('-');
                        let start_date_month = start_date_arr[1];
                        let start_date_year = start_date_arr[0];

                        let end_date_arr = end_date.split('-');
                        let end_date_month = end_date_arr[1];
                        let end_date_year = end_date_arr[0];

                        $('#default-modal form').attr('action', url);
                        $('#default-modal form').trigger('reset');

                        if (data.end_date == null) {
                            $('#default-modal form #is_ongoing').prop('checked', true);
                            $('#end_date_container').hide();
                        } else {
                            $('#default-modal form #is_ongoing').prop('checked', false);
                            $('#end_date_container').show();
                        }
                        $('#default-modal form #company').val(data.company);
                        $('#default-modal form #position').val(data.position);
                        $('#default-modal form #start_date').val(start_date_year + '-' + start_date_month);
                        $('#default-modal form #end_date').val(end_date_year + '-' + end_date_month);
                        $('#default-modal form #description').val(data.description);
                        $('#default-modal form #job_type').val(data.job_type);
                    },
                    error: function() {
                        Swal.fire(
                            'Error!',
                            'Something went wrong!.',
                            'error'
                        )
                    }
                });
            }

            @if (Session::has('success'))
                Swal.fire(
                    'Success!',
                    '{{ Session::get('success') }}',
                    'success'
                )
            @endif

            @if (Session::has('error'))
                Swal.fire(
                    'Error!',
                    '{{ Session::get('error') }}',
                    'error'
                )
            @endif
        </script>
    @endpush
</x-app-layout>
