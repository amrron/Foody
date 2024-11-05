@extends('layouts.admin')

@section('content')
            <div class="w-full mb-1">
                <div class="mb-4">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl ">All Release</h1>
                </div>
                <div class="sm:flex">
                    <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                        <button
                            class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 sm:w-auto" data-modal-target="updateModal" data-modal-toggle="updateModal">
                            <svg class="w-5 h-5 text-gray-800 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v9m-5 0H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2M8 9l4-5 4 5m1 8h.01"/>
                            </svg>
                            New release
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="overflow-x-auto">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden shadow">
                            <table class="min-w-full divide-y divide-gray-200 table-fixed ">
                                <thead class="bg-gray-100 ">
                                    <tr>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                            Versi
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                            Tanggal Rilis
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                            Change Log
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                            Link
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase ">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 ">
                                    @foreach ($releases as $release)                              
                                    <tr class="hover:bg-gray-100 ">
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal  truncate xl:max-w-xs">
                                            {{ $release->version }}
                                        </td>
                                        <td
                                            class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs ">
                                            {{ $release->created_at->format('Y-m-d') }}
                                        </td>
                                        <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap ">
                                            <ul class="max-w-md space-y-1 list-disc list-inside ">
                                                @foreach(explode("\n", $release->changelog) as $line)
                                                @if(trim($line)) <!-- Memastikan hanya baris yang tidak kosong yang ditampilkan -->
                                                    <li>{{ $line }}</li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap ">
                                            <a href="{{ $release->url }}" class="font-medium text-blue-600 ">Download</a>
                                        </td>
                                        <td class="p-4 space-x-2 whitespace-nowrap">
                                            <button type="button" data-modal-target="edit-user-modal"
                                                data-modal-toggle="edit-user-modal"
                                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 ">
                                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Edit release
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr class="hover:bg-gray-100 ">
                                        <td class="max-w-sm p-4 overflow-hidden text-base font-normal  truncate xl:max-w-xs">
                                            2.0.1
                                        </td>
                                        <td
                                            class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs ">
                                            2021-09-01
                                        </td>
                                        <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap ">
                                            <ul class="max-w-md space-y-1 list-disc list-inside ">
                                                <li>Update home page</li>
                                                <li>Fix bug in profile</li>
                                                <li>Remove loading dialog</li>
                                            </ul>
                                        </td>
                                        <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap ">
                                            <a href="#" class="font-medium text-blue-600 ">Download</a>
                                        </td>
                                        <td class="p-4 space-x-2 whitespace-nowrap">
                                            <button type="button" data-modal-target="edit-user-modal"
                                                data-modal-toggle="edit-user-modal"
                                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 ">
                                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Edit release
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@push('modal')
<!-- Modal Dialog -->
<div id="updateModal" tabindex="-1" aria-hidden="true"
    class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full">
    <div class="relative w-full max-w-md bg-white rounded-lg shadow ">
        <div class="flex justify-between items-center p-4 border-b rounded-t ">
            <h3 class="text-lg font-semibold text-gray-900 ">
                Tambah Versi Aplikasi Terbaru
            </h3>
            <button type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center "
                data-modal-hide="updateModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <form class="p-6 space-y-6" id="new-release-form" action="" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="version" class="block mb-2 text-sm font-medium text-gray-900 ">Versi</label>
                <input type="text" id="version" name="version"
                    class="w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 "
                    placeholder="1.2.3" required>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 ">Metode Unduhan</label>
                <select id="downloadOption" onchange="toggleDownloadInput()"
                    class="w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 ">
                    <option value="link">Masukkan URL</option>
                    <option value="file">Upload File APK</option>
                </select>
            </div>

            <!-- Input URL -->
            <div id="urlInput" class="mt-4">
                <label for="update_url" class="block mb-2 text-sm font-medium text-gray-900 ">URL Unduhan</label>
                <input type="url" id="url" name="url"
                    class="w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 "
                    placeholder="https://example.com/path-to-your-apk">
            </div>

            <!-- Input File APK -->
            <div id="fileInput" class="mt-4 hidden">
                <label for="apk_file" class="block mb-2 text-sm font-medium text-gray-900 ">Upload File APK</label>
                <input type="file" id="apk_file" name="apk_file" accept=".apk"
                    class="w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 ">
            </div>
            <div>
                <label for="changelog" class="block mb-2 text-sm font-medium text-gray-900 ">Catatan
                    Pembaruan (Changelog)</label>
                <textarea id="changelog" name="changelog"
                    class="w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 "
                    placeholder="Deskripsi pembaruan..." rows="4"></textarea>
            </div>
            <div class="flex items-center justify-end space-x-2">
                <div class="hidden w-full bg-gray-200 rounded-full" id="progress-container">
                    <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" id="progress-bar" style="width: 45%"> 45%</div>
                </div>
                <button type="button" data-modal-hide="updateModal"
                    class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
                    Batal
                </button>
                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endpush
@push('script')
<script>
    function toggleDownloadInput() {
        const downloadOption = document.getElementById("downloadOption").value;
        const urlInput = document.getElementById("urlInput");
        const fileInput = document.getElementById("fileInput");

        if (downloadOption === "link") {
            urlInput.classList.remove("hidden");
            fileInput.classList.add("hidden");
        } else {
            urlInput.classList.add("hidden");
            fileInput.classList.remove("hidden");
        }
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/resumable.js/1.1.0/resumable.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var form = document.getElementById('new-release-form');
        var fileInput = document.getElementById('apk_file');
        var fileUrlInput = document.getElementById('url');
        var versionInput = document.getElementById('version');
        var progressContainer = document.getElementById('progress-container');
        var progressBar = document.getElementById('progress-bar');

        var r = new Resumable({
            target: '/admin/release/apk', // Ganti dengan endpoint upload file
            query: { 
                _token: '{{ csrf_token() }}',
             }, // CSRF token
            fileType: ['apk'],
            chunkSize: 1 * 1024 * 1024, // 1MB
            simultaneousUploads: 3,
            testChunks: false,
            throttleProgressCallbacks: 1,
        });

        r.assignBrowse(fileInput);

        form.addEventListener('submit', function (e) {
            e.preventDefault(); // Mencegah submit form secara default

            if (r.files.length > 0 && fileUrlInput.value == '') {
                progressContainer.style.display = 'block';
                r.opts.query.version = versionInput.value;
                r.upload();
            } else {
                form.submit(); // Jika tidak ada file, submit form secara langsung
            }
        });

        r.on('fileProgress', function (file) {
            var progress = Math.floor(file.progress() * 100);
            progressBar.style.width = progress + '%';
            progressBar.innerText = progress + '%';
        });

        r.on('fileSuccess', function (file, response) {
            progressContainer.style.display = 'none';
            var responseData = JSON.parse(response);
            fileUrlInput.value = responseData.path;
            if (responseData.status) {
                form.submit(); // Submit form setelah upload file selesai
            }
        });

        r.on('fileError', function (file, message) {
            alert('File upload error: ' + message);
        });
    });
</script>
@endpush