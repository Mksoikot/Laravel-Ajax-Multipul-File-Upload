@extends('Layout.app')


@section('title', 'Laravel Axios Multipul File Uploader')


@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Laravel Axios Multipul File Uploader</h4>
                    </div>
                    <div class="card-body">
                        <button id="addBtn" class="btn btn-primary btn-sm">Add File</button>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>File</th>
                                    <th>File Size</th>
                                    <th>Cancel</th>
                                    <th>Upload</th>
                                    <th>Uploaded(MB)</th>
                                    <th>Uploaded(%)</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody class="filelist">
                        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

{{-- @section('script')
    <script type="text/javascript">
        $('#addBtn').on('click', function() {
            alert('ohho');
        })
    </script>

@endsection --}}
