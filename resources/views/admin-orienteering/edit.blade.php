@extends('layouts.master')

@section('title', 'HMTGGEOI')

@section('pageContent')
    <style>
        /* Increase the height and width of CKEditor */
        .ck-editor__editable {
            min-height: 400px;
            /* Adjust the height */
            width: 100%;
            /* Adjust the width */
        }
    </style>
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.css" />
    @include('layouts.breadcrumb', ['title' => 'Create', 'subtitle' => 'orienteering-nasional Nasional'])

    <div class="card w-100 position-relative overflow-hidden">
        <div class="card-body">
            <section class="content">
                <div class="container-fluid">
                    @include('layouts.message')
                    <!-- Small boxes (Stat box) -->
                    <form action="{{ route('orienteering-nasional.update', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body container bg-white mt-5">
                            <div class="mempelai text-center fw-bold fs-5 mb-4">Orienteering Nasional</div>
                            <div class="form-group fs-3">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="image">Gambar <span class="mandatory">*</span></label>
                                        <input type="file" accept="image/*" class="form-control" id="image"
                                            name="image" placeholder="" value="{{ old('image') }}">
                                        <div class="d-flex flex-column">
                                            <span>Gambar saat ini:</span>
                                            <img class="img-fluid" src="{{ Storage::url('orienteering/' . $data->image) }}"
                                                class="img-thumbnail mt-2" width="150">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label for="title">Judul <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="Masukkan title" value="{{ old('title', $data->title) }}">
                                    </div>
                                    <div class="col-sm-12 mb-3">
                                        <label for="description">Deskripsi <span class="mandatory">*</span></label>
                                        <textarea class="form-control" rows="10" id="description" name="description"
                                            placeholder="Masukkan isi description">{{ old('description', $data->description) }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-row-reverse mt-5">
                                <button type="submit" class="btn btn-primary ml-3 ms-3">Simpan</button>
                                <a href="{{ route('orienteering-nasional.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
@endsection

<script type="importmap">
    {
        "imports": {
            "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.js",
            "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.1.0/"
        }
    }
</script>

<script type="module">
    import {
        ClassicEditor,
        Essentials,
        Paragraph, // Added Paragraph plugin
        Heading, // Added Heading plugin
        Bold,
        Italic,
        Font,
        Alignment,
        Link,
        List,
        Image,
        ImageToolbar,
        ImageUpload,
        ImageResize,
        Table,
        TableToolbar,
        MediaEmbed,
        Clipboard,
        SimpleUploadAdapter // Import SimpleUploadAdapter
    } from 'ckeditor5';

    ClassicEditor
        .create(document.querySelector('#description'), {
            plugins: [
                Essentials, Paragraph, Heading, // Include Paragraph and Heading plugins
                Bold, Italic, Font, Alignment, Link, List,
                Image, ImageToolbar, ImageUpload, ImageResize,
                SimpleUploadAdapter, // Use SimpleUploadAdapter for uploading images
                Table, TableToolbar, MediaEmbed, Clipboard
            ],
            toolbar: [
                'undo', 'redo', '|', 'bold', 'italic', '|',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
                'alignment:left', 'alignment:center', 'alignment:right', '|',
                'bulletedList', 'numberedList', '|',
                'link', 'imageUpload', 'insertTable', 'mediaEmbed', '|',
                'blockQuote', 'paragraph', 'heading' // Include paragraph and heading in the toolbar
            ],
            image: {
                toolbar: [
                    'imageTextAlternative', 'imageStyle:full', 'imageStyle:side',
                    'resizeImage'
                ],
                resizeOptions: [{
                        name: 'resizeImage:original',
                        label: 'Original',
                        value: null
                    },
                    {
                        name: 'resizeImage:25',
                        label: '25%',
                        value: '25'
                    },
                    {
                        name: 'resizeImage:50',
                        label: '50%',
                        value: '50'
                    },
                    {
                        name: 'resizeImage:75',
                        label: '75%',
                        value: '75'
                    },
                    {
                        name: 'resizeImage:custom',
                        label: 'Custom',
                        value: 'custom'
                    },
                ],
                resizeUnit: '%'
            },
            simpleUpload: {
                // The URL that the images are uploaded to.
                uploadUrl: '{{ route('ckeditor.upload.orienteering') }}',

                // Headers sent along with the XMLHttpRequest during the upload
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for security
                }
            }
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(error => {
            console.error(error);
        });
</script>


<!-- A friendly reminder to run on a server, remove this during the integration. -->
<script>
    window.onload = function() {
        if (window.location.protocol === 'file:') {
            alert('This sample requires an HTTP server. Please serve this file with a web server.');
        }
    };
</script>

@section('scripts')
@endsection
